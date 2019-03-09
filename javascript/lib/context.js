const { analyze } = require('./analyze.js');
const { en } = require('./messages/en.js');
const { resolve } =  require('./resolve.js');
const { Section } = require('./elements/section.js');
const { TextReporter } = require('./reporters/text_reporter.js');

const {
  DOCUMENT,
  EMPTY_ELEMENT,
  FIELD,
  FIELDSET,
  FIELDSET_ENTRY,
  LIST,
  LIST_ITEM,
  MULTILINE_FIELD_BEGIN,
  SECTION
} = require('./constants.js');

const PRETTY_TYPES = {
  [DOCUMENT]: 'document',
  [EMPTY_ELEMENT]: 'emptyElement',
  [FIELD]: 'field',
  [FIELDSET]: 'fieldset',
  [FIELDSET_ENTRY]: 'fieldsetEntry',
  [LIST]: 'list',
  [LIST_ITEM]: 'listItem',
  [MULTILINE_FIELD_BEGIN]: 'field',
  [SECTION]: 'section'
};

class Context {
  constructor(input, options) {
    this._input = input;
    this.messages = options.hasOwnProperty('locale') ? options.locale : en;
    this.reporter = options.hasOwnProperty('reporter') ? options.reporter : TextReporter;
    this.source = options.hasOwnProperty('source') ? options.source : null;

    this._analyze();

    if(this.hasOwnProperty('copy')) {
      this._resolve();
    }
  }

  // TODO: Here and elsewhere - don't manually copy over copied comments field in resolve.js
  //       but instead also derive a copied comment in here, lazily, just as in this.value() ?
  comment(element) {
    if(!element.hasOwnProperty('computedComment')) {
      if(element.hasOwnProperty('comments')) {
        if(element.comments.length === 1) {
          element.computedComment = element.comments[0].comment;
        } else {
          let firstNonEmptyLineIndex = null;
          let sharedIndent = Infinity;
          let lastNonEmptyLineIndex = null;

          for(const [index, comment] of element.comments.entries()) {
            if(comment.comment !== null) {
              if(firstNonEmptyLineIndex == null) {
                firstNonEmptyLineIndex = index;
              }

              const indent = comment.ranges.comment[0] - comment.ranges.line[0];
              if(comment.ranges.comment[0] - comment.ranges.line[0] < sharedIndent) {
                sharedIndent = comment.ranges.comment[0] - comment.ranges.line[0];
              }

              lastNonEmptyLineIndex = index;
            }
          }

          if(firstNonEmptyLineIndex !== null) {
            const nonEmptyLines = element.comments.slice(
              firstNonEmptyLineIndex,
              lastNonEmptyLineIndex + 1
            );

            element.computedComment = nonEmptyLines.map(comment => {
              if(comment.comment === null) {
                return '';
              } else if(comment.ranges.comment[0] - comment.ranges.line[0] === sharedIndent) {
                return comment.comment;
              } else {
                return ' '.repeat(comment.ranges.comment[0] - comment.ranges.line[0] - sharedIndent) + comment.comment;
              }
            }).join('\n');
          } else {
            element.computedComment = null;
          }
        }
      } else {
        element.computedComment = null;
      }
    }

    return element.computedComment;
  }

  document() {
    if(!this._document.hasOwnProperty('instance')) {
      new Section(this, this._document);
    }

    return this._document.instance;
  }

  elements(section, map = false) {
    if(section.hasOwnProperty('mirror')) {
      return this.elements(section.mirror, map);
    } else {
      if(!section.hasOwnProperty('computedElements')) { // TODO: Revisit the role of this in the new low level architecture
        section.computedElementsMap = {};
        section.computedElements = section.elements;

        for(const element of section.computedElements) {
          if(section.computedElementsMap.hasOwnProperty(element.key)) {
            section.computedElementsMap[element.key].push(element);
          } else {
            section.computedElementsMap[element.key] = [element];
          }
        }

        if(section.hasOwnProperty('extend')) {
          const copiedElements = this.elements(section.extend).filter(element =>
            !section.computedElementsMap.hasOwnProperty(element.key)
          );

          section.computedElements = copiedElements.concat(section.computedElements);  // TODO: .push(...xy) somehow possible too? (but careful about order, which is relevant)

          for(const element of copiedElements) {
            if(section.computedElementsMap.hasOwnProperty(element.key)) {
              section.computedElementsMap[element.key].push(element);
            } else {
              section.computedElementsMap[element.key] = [element];
            }
          }
        }
      }

      if(map) {
        return section.computedElementsMap;
      } else {
        return section.computedElements;
      }
    }
  }

  entries(fieldset, map = false) {
    if(fieldset.hasOwnProperty('mirror')) {
      return this.entries(fieldset.mirror, map);
    } else {
      if(!fieldset.hasOwnProperty('computedEntries')) {
        fieldset.computedEntriesMap = {};
        fieldset.computedEntries = fieldset.entries;

        for(const entry of fieldset.computedEntries) {
          if(fieldset.computedEntriesMap.hasOwnProperty(entry.key)) {
            fieldset.computedEntriesMap[entry.key].push(entry);
          } else {
            fieldset.computedEntriesMap[entry.key] = [entry];
          }
        }

        if(fieldset.hasOwnProperty('extend')) {
          const copiedEntries = this.entries(fieldset.extend).filter(entry =>
            !fieldset.computedEntriesMap.hasOwnProperty(entry.key)
          );

          fieldset.computedEntries = copiedEntries.concat(fieldset.computedEntries); // TODO: .push(...xy) somehow possible too? (but careful about order, which is relevant)

          for(const entry of copiedEntries) {
            if(fieldset.computedEntriesMap.hasOwnProperty(entry.key)) {
              fieldset.computedEntriesMap[entry.key].push(entry);
            } else {
              fieldset.computedEntriesMap[entry.key] = [entry];
            }
          }
        }
      }

      if(map) {
        return fieldset.computedEntriesMap;
      } else {
        return fieldset.computedEntries;
      }
    }
  }

  items(list) {
    if(list.hasOwnProperty('mirror')) {
      return this.items(list.mirror);
    } else if(!list.hasOwnProperty('extend')) {
      return list.items;
    } else {
      if(!this.hasOwnProperty('computedItems')) {
        this.computedItems = [...this.items(list.extend), ...list.items];
      }

      return this.computedItems;
    }
  }

  // TODO: raw() implies this would be the actual underlying structure used - maybe something like toNative or toJson is better (json would be good for interchangeable specs)
  // TODO: Revisit this not being deterministic - if you already queried empty elements as field/fieldset/list it yields different results than before that
  raw(element) {
    const result = {
      type: PRETTY_TYPES[element.type]
    };

    if(element.hasOwnProperty('comments')) {
      result.comment = this.comment(element);
    }

    switch(element.type) {
      case EMPTY_ELEMENT:
        result.key = element.key;
        break;
      case FIELD:
        result.key = element.key;
        result.value = this.value(element);
        break;
      case LIST_ITEM:
        result.value = this.value(element);
        break;
      case FIELDSET_ENTRY:
        result.key = element.key;
        result.value = this.value(element);
        break;
      case MULTILINE_FIELD_BEGIN:
        result.key = element.key;
        result.value = this.value(element);
        break;
      case LIST:
        result.key = element.key;
        result.items = this.items(element).map(item => this.raw(item))
        break;
      case FIELDSET:
        result.key = element.key;
        result.entries = this.entries(element).map(entry => this.raw(entry))
        break;
      case SECTION:
        result.key = element.key;
      case DOCUMENT:
        result.elements = this.elements(element).map(sectionElement => this.raw(sectionElement))
        break;
    }

    return result;
  }

  touch(element) {
    element.touched = true;

    switch(element.type) {
      case LIST:
        for(const item of this.items(element)) { item.touched = true; }
        break;
      case FIELDSET:
        for(const entry of this.entries(element)) { entry.touched = true; }
        break;
      case SECTION:
        for(const sectionElement of this.elements(element)) { this.touch(sectionElement); }
        break;
    }
  }

  value(element) {
    if(!element.hasOwnProperty('computedValue')) {
      if(element.hasOwnProperty('mirror')) {
        return this.value(element.mirror);
      } else {
        element.computedValue = null;

        if(element.type === MULTILINE_FIELD_BEGIN) {
          if(element.lines.length > 0) {
            element.computedValue = this._input.substring(
              element.lines[0].ranges.line[0],
              element.lines[element.lines.length - 1].ranges.line[1]
            );
          }
        } else {
          if(element.hasOwnProperty('value')) {
            element.computedValue = element.value;  // TODO: *Could* consider not actually storing those, but lazily aquiring from substring as well (probably only makes sense in e.g. rust implementation though)
          }

          if(element.hasOwnProperty('continuations')) {
            let unappliedSpacing = false;

            for(let continuation of element.continuations) {
              if(element.computedValue === null) {
                element.computedValue = continuation.value;
                unappliedSpacing = false;
              } else if(continuation.value === null) {
                unappliedSpacing = unappliedSpacing || continuation.spaced;
              } else if(continuation.spaced || unappliedSpacing) {
                element.computedValue += ' ' + continuation.value;
                unappliedSpacing = false;
              } else {
                element.computedValue += continuation.value;
              }
            }
          }
        }
      }
    }

    return element.computedValue;
  }

  untouched(element) {
    if(!element.hasOwnProperty('touched'))
      return element;

    switch(element.type) {
      case LIST: return this.items(element).find(item => !item.hasOwnProperty('touched')) || false;
      case FIELDSET: return this.entries(element).find(entry => !entry.hasOwnProperty('touched')) || false;
      case SECTION: return this.elements(element).find(sectionElement => !sectionElement.hasOwnProperty('touched')) || false;
      default: return false;
    }
  }
}

Context.prototype._analyze = analyze;
Context.prototype._resolve = resolve;

exports.Context = Context;
