<?php declare(strict_types=1);

//  GENERATED ON 2019-06-18T08:50:41 - DO NOT EDIT MANUALLY

namespace Eno\Locales;

class En {
  const CONTENT_HEADER = 'Content';
  const EXPECTED_DOCUMENT = 'The document was expected.';
  const EXPECTED_EMPTY = 'An empty was expected.';
  const EXPECTED_FIELD = 'A field was expected.';
  const EXPECTED_FIELDS = 'Only fields were expected.';
  const EXPECTED_FIELDSET = 'A fieldset was expected.';
  const EXPECTED_FIELDSET_ENTRY = 'A fieldset entry was expected.';
  const EXPECTED_FIELDSETS = 'Only fieldsets were expected.';
  const EXPECTED_LIST = 'A list was expected.';
  const EXPECTED_LIST_ITEM = 'A list item was expected.';
  const EXPECTED_LISTS = 'Only lists were expected.';
  const EXPECTED_SECTION = 'A section was expected.';
  const EXPECTED_SECTIONS = 'Only sections were expected.';
  const EXPECTED_SINGLE_ELEMENT = 'Only a single element was expected.';
  const EXPECTED_SINGLE_EMPTY = 'Only a single empty was expected.';
  const EXPECTED_SINGLE_FIELD = 'Only a single field was expected.';
  const EXPECTED_SINGLE_FIELDSET = 'Only a single fieldset was expected.';
  const EXPECTED_SINGLE_FIELDSET_ENTRY = 'Only a single fieldset entry was expected.';
  const EXPECTED_SINGLE_LIST = 'Only a single list was expected.';
  const EXPECTED_SINGLE_SECTION = 'Only a single section was expected.';
  const GUTTER_HEADER = 'Line';
  const MISSING_COMMENT = 'A required comment for this element is missing.';
  const MISSING_ELEMENT = 'A single element is required - it can have any key.';
  const MISSING_EMPTY = 'A single empty is required - it can have any key.';
  const MISSING_FIELD = 'A single field is required - it can have any key.';
  const MISSING_FIELDSET = 'A single fieldset is required - it can have any key.';
  const MISSING_FIELDSET_ENTRY = 'A single fieldset entry is required - it can have any key.';
  const MISSING_LIST = 'A single list is required - it can have any key.';
  const MISSING_SECTION = 'A single section is required - it can have any key.';
  const UNEXPECTED_ELEMENT = 'This element was not expected, make sure it is at the right place in the document and that its key is not mis-typed.';
  public static function commentError($message) { return "There is a problem with the comment of this element: {$message}"; }
  public static function cyclicDependency($line, $key) { return "In line {$line} '{$key}' is copied into itself."; }
  public static function expectedEmptyWithKey($key) { return "An empty with the key '{$key}' was expected."; }
  public static function expectedFieldWithKey($key) { return "A field with the key '{$key}' was expected."; }
  public static function expectedFieldsWithKey($key) { return "Only fields with the key '{$key}' were expected."; }
  public static function expectedFieldsetWithKey($key) { return "A fieldset with the key '{$key}' was expected."; }
  public static function expectedFieldsetsWithKey($key) { return "Only fieldsets with the key '{$key}' were expected."; }
  public static function expectedListWithKey($key) { return "A list with the key '{$key}' was expected."; }
  public static function expectedListsWithKey($key) { return "Only lists with the key '{$key}' were expected."; }
  public static function expectedSectionWithKey($key) { return "A section with the key '{$key}' was expected."; }
  public static function expectedSectionsWithKey($key) { return "Only sections with the key '{$key}' were expected."; }
  public static function expectedSingleElementWithKey($key) { return "Only a single element with the key '{$key}' was expected."; }
  public static function expectedSingleEmptyWithKey($key) { return "Only a single empty with the key '{$key}' was expected."; }
  public static function expectedSingleFieldWithKey($key) { return "Only a single field with the key '{$key}' was expected."; }
  public static function expectedSingleFieldsetEntryWithKey($key) { return "Only a single fieldset entry with the key '{$key}' was expected."; }
  public static function expectedSingleFieldsetWithKey($key) { return "Only a single fieldset with the key '{$key}' was expected."; }
  public static function expectedSingleListWithKey($key) { return "Only a single list with the key '{$key}' was expected."; }
  public static function expectedSingleSectionWithKey($key) { return "Only a single section with the key '{$key}' was expected."; }
  public static function invalidLine($line) { return "Line {$line} does not follow any specified pattern."; }
  public static function keyError($message) { return "There is a problem with the key of this element: {$message}"; }
  public static function missingElementForContinuation($line) { return "Line {$line} contains a line continuation without a continuable element being specified before."; }
  public static function missingElementWithKey($key) { return "The element '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function missingEmptyWithKey($key) { return "The empty '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function missingFieldValue($key) { return "The field '{$key}' must contain a value."; }
  public static function missingFieldWithKey($key) { return "The field '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function missingFieldsetEntryValue($key) { return "The fieldset entry '{$key}' must contain a value."; }
  public static function missingFieldsetEntryWithKey($key) { return "The fieldset entry '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function missingFieldsetForFieldsetEntry($line) { return "Line {$line} contains a fieldset entry without a fieldset being specified before."; }
  public static function missingFieldsetWithKey($key) { return "The fieldset '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function missingListForListItem($line) { return "Line {$line} contains a list item without a list being specified before."; }
  public static function missingListItemValue($key) { return "The list '{$key}' may not contain empty items."; }
  public static function missingListWithKey($key) { return "The list '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function missingSectionWithKey($key) { return "The section '{$key}' is missing - in case it has been specified look for typos and also check for correct capitalization."; }
  public static function nonSectionElementNotFound($line, $key) { return "In line {$line} the non-section element '{$key}' should be copied, but it was not found."; }
  public static function sectionHierarchyLayerSkip($line) { return "Line {$line} starts a section that is more than one level deeper than the current one."; }
  public static function sectionNotFound($line, $key) { return "In line {$line} the section '{$key}' should be copied, but it was not found."; }
  public static function twoOrMoreTemplatesFound($key) { return "There are at least two elements with the key '{$key}' that qualify for being copied here, it is not clear which to copy."; }
  public static function unterminatedEscapedKey($line) { return "In line {$line} the key of an element is escaped, but the escape sequence is not terminated until the end of the line."; }
  public static function unterminatedMultilineField($key, $line) { return "The multiline field '{$key}' starting in line {$line} is not terminated until the end of the document."; }
  public static function valueError($message) { return "There is a problem with the value of this element: {$message}"; }
}