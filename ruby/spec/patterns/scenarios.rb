# frozen_string_literal: true

require_relative './space.rb'

SCENARIOS = [
  # DIRECT_LINE_CONTINUATION_SCENARIOS
  {
    captures: {
      Enolib::Grammar::DIRECT_LINE_CONTINUATION_OPERATOR_INDEX => '|'
    },
    syntax: '|',
    variants: space('|')
  },
  {
    captures: {
      Enolib::Grammar::DIRECT_LINE_CONTINUATION_OPERATOR_INDEX => '|',
      Enolib::Grammar::DIRECT_LINE_CONTINUATION_VALUE_INDEX => 'Value'
    },
    syntax: '| Value',
    variants: space('|', 'Value')
  },
  {
    captures: {
      Enolib::Grammar::DIRECT_LINE_CONTINUATION_OPERATOR_INDEX => '|',
      Enolib::Grammar::DIRECT_LINE_CONTINUATION_VALUE_INDEX => '|'
    },
    syntax: '| |',
    variants: space('|', '|')
  },

  # SPACED_LINE_CONTINUATIONSCENARIOS
  {
    captures: {
      Enolib::Grammar::SPACED_LINE_CONTINUATION_OPERATOR_INDEX => '\\'
    },
    syntax: '\\',
    variants: space('\\')
  },
  {
    captures: {
      Enolib::Grammar::SPACED_LINE_CONTINUATION_OPERATOR_INDEX => '\\',
      Enolib::Grammar::SPACED_LINE_CONTINUATION_VALUE_INDEX => 'Value'
    },
    syntax: '\\ Value',
    variants: space('\\', 'Value')
  },
  {
    captures: {
      Enolib::Grammar::SPACED_LINE_CONTINUATION_OPERATOR_INDEX => '\\',
      Enolib::Grammar::SPACED_LINE_CONTINUATION_VALUE_INDEX => '\\'
    },
    syntax: '\\ \\',
    variants: space('\\', '\\')
  },

  # MULTILINE_FIELD_SCENARIOS
  {
    captures: {
      Enolib::Grammar::MULTILINE_FIELD_OPERATOR_INDEX => '--',
      Enolib::Grammar::MULTILINE_FIELD_KEY_INDEX => 'Name'
    },
    syntax: '-- Name',
    variants: space('--', 'Name')
  },
  {
    captures: {
      Enolib::Grammar::MULTILINE_FIELD_OPERATOR_INDEX => '--',
      Enolib::Grammar::MULTILINE_FIELD_KEY_INDEX => '--'
    },
    syntax: '-- --',
    variants: space('--', ' ', '--')
  },
  {
    captures: {
      Enolib::Grammar::MULTILINE_FIELD_OPERATOR_INDEX => '---',
      Enolib::Grammar::MULTILINE_FIELD_KEY_INDEX => 'The Name'
    },
    syntax: '--- The Name',
    variants: space('---', 'The Name')
  },
  {
    captures: {
      Enolib::Grammar::MULTILINE_FIELD_OPERATOR_INDEX => '---',
      Enolib::Grammar::MULTILINE_FIELD_KEY_INDEX => '---'
    },
    syntax: '--- ---',
    variants: space('---', ' ', '---')
  },

  # COMMENT_SCENARIOS
  {
    captures: {
      Enolib::Grammar::COMMENT_OPERATOR_INDEX => '>',
      Enolib::Grammar::COMMENT_VALUE_INDEX => 'Comment Value'
    },
    syntax: '>Comment Value',
    variants: ['>Comment Value', ' >Comment Value', '   >Comment Value']
  },
  {
    captures: {
      Enolib::Grammar::COMMENT_OPERATOR_INDEX => '>',
      Enolib::Grammar::COMMENT_VALUE_INDEX => 'Comment Value'
    },
    syntax: '> Comment Value',
    variants: ['> Comment Value', ' > Comment Value', '   > Comment Value']
  },
  {
    captures: {
      Enolib::Grammar::COMMENT_OPERATOR_INDEX => '>',
      Enolib::Grammar::COMMENT_VALUE_INDEX => 'Comment Value'
    },
    syntax: '> Comment Value ',
    variants: ['> Comment Value ', ' > Comment Value ', '   > Comment Value ']
  },
  {
    captures: {
      Enolib::Grammar::COMMENT_OPERATOR_INDEX => '>',
      Enolib::Grammar::COMMENT_VALUE_INDEX => 'Comment Value'
    },
    syntax: '>   Comment Value   ',
    variants: ['>   Comment Value   ', ' >   Comment Value   ', '   >   Comment Value   ']
  },

  # COPY_SCENARIOS
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::COPY_OPERATOR_INDEX => '<',
      Enolib::Grammar::TEMPLATE_INDEX => 'Other Name'
    },
    syntax: 'Name < Other Name',
    variants: space('Name', '<', 'Other Name')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::COPY_OPERATOR_INDEX => '<',
      Enolib::Grammar::TEMPLATE_INDEX => '<'
    },
    syntax: 'Name < <',
    variants: space('Name', '<', ' ', '<')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::COPY_OPERATOR_INDEX => '<<',
      Enolib::Grammar::TEMPLATE_INDEX => '<'
    },
    syntax: 'Name << <',
    variants: space('Name', '<<', '<')
  },

  # FIELDSET_ENTRY_SCENARIOS
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::FIELDSET_ENTRY_OPERATOR_INDEX => '=',
      Enolib::Grammar::FIELDSET_ENTRY_VALUE_INDEX => 'Value'
    },
    syntax: 'Name = Value',
    variants: space('Name', '=', 'Value')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'The Name',
      Enolib::Grammar::FIELDSET_ENTRY_OPERATOR_INDEX => '=',
      Enolib::Grammar::FIELDSET_ENTRY_VALUE_INDEX => 'The Value'
    },
    syntax: 'The Name = The Value',
    variants: space('The Name', '=', 'The Value')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::FIELDSET_ENTRY_OPERATOR_INDEX => '=',
      Enolib::Grammar::FIELDSET_ENTRY_VALUE_INDEX => '='
    },
    syntax: 'Name = =',
    variants: space('Name', '=', ' ', '=')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::FIELDSET_ENTRY_OPERATOR_INDEX => '=',
      Enolib::Grammar::FIELDSET_ENTRY_VALUE_INDEX => ':'
    },
    syntax: 'Name = :',
    variants: space('Name', '=', ' ', ':')
  },
  {
    captures: {
      Enolib::Grammar::KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '`',
      Enolib::Grammar::KEY_ESCAPED_INDEX => '<=:',
      Enolib::Grammar::KEY_ESCAPE_END_OPERATOR_INDEX => '`',
      Enolib::Grammar::FIELDSET_ENTRY_OPERATOR_INDEX => '=',
      Enolib::Grammar::FIELDSET_ENTRY_VALUE_INDEX => '`<=:`'
    },
    syntax: '`<=:` = `<=:`',
    variants: space('`', '<=:', '`', '=', '`<=:`')
  },
  {
    captures: {
      Enolib::Grammar::KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '```',
      Enolib::Grammar::KEY_ESCAPED_INDEX => '<`=``:',
      Enolib::Grammar::KEY_ESCAPE_END_OPERATOR_INDEX => '```',
      Enolib::Grammar::FIELDSET_ENTRY_OPERATOR_INDEX => '=',
      Enolib::Grammar::FIELDSET_ENTRY_VALUE_INDEX => '`<=:`'
    },
    syntax: '```<`=``:``` = `<=:`',
    variants: space('```', '<`=``:', '```', '=', '`<=:`')
  },

  # EMPTY_LINE_SCENARIOS
  {
    captures: {
      Enolib::Grammar::EMPTY_LINE_INDEX => ''
    },
    syntax: '',
    variants: space('')
  },

  # FIELD_SCENARIOS
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':',
      Enolib::Grammar::FIELD_VALUE_INDEX => 'Value'
    },
    syntax: 'Name: Value',
    variants: space('Name', ':', 'Value')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'The Name',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':',
      Enolib::Grammar::FIELD_VALUE_INDEX => 'The Value'
    },
    syntax: 'The Name: The Value',
    variants: space('The Name', ':', 'The Value')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':',
      Enolib::Grammar::FIELD_VALUE_INDEX => ':'
    },
    syntax: 'Name: :',
    variants: space('Name', ':', ' ', ':')
  },
  {
    captures: {
      Enolib::Grammar::KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '`',
      Enolib::Grammar::KEY_ESCAPED_INDEX => '<=:',
      Enolib::Grammar::KEY_ESCAPE_END_OPERATOR_INDEX => '`',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':',
      Enolib::Grammar::FIELD_VALUE_INDEX => '`<=:`'
    },
    syntax: '`<=:` : `<=:`',
    variants: space('`', '<=:', '`', ':', '`<=:`')
  },
  {
    captures: {
      Enolib::Grammar::KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '```',
      Enolib::Grammar::KEY_ESCAPED_INDEX => '<`=``:',
      Enolib::Grammar::KEY_ESCAPE_END_OPERATOR_INDEX => '```',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':',
      Enolib::Grammar::FIELD_VALUE_INDEX => '`<=:`'
    },
    syntax: '```<`=``:``` : `<=:`',
    variants: space('```', '<`=``:', '```', ':', '`<=:`')
  },

  # INVALID_SCENARIOS
  {
    syntax: 'Invalid',
    variants: space('Invalid')
  },
  {
    syntax: 'Invalid <',
    variants: space('Invalid', '<')
  },
  {
    syntax: '< Invalid',
    variants: space('<', 'Invalid')
  },
  {
    syntax: '<',
    variants: space('<')
  },
  {
    syntax: '#',
    variants: space('#')
  },
  {
    syntax: '--',
    variants: space('--')
  },
  {
    syntax: ':',
    variants: space(':')
  },
  {
    syntax: ': Invalid',
    variants: space(':', 'Invalid')
  },
  {
    syntax: '=',
    variants: space('=')
  },
  {
    syntax: '= Invalid',
    variants: space('=', 'Invalid')
  },
  {
    syntax: '### `Invalid',
    variants: space('###', '`Invalid')
  },
  {
    syntax: '---',
    variants: space('---')
  },
  {
    syntax: "Invalid\nValid:",
    variants: space('Invalid', "\n", 'Valid', ':')
  },
  {
    syntax: "Invalid\nValid:Valid",
    variants: space('Invalid', "\n", 'Valid', ':', 'Valid')
  },

  # LIST_ITEM_SCENARIOS
  {
    captures: {
      Enolib::Grammar::LIST_ITEM_OPERATOR_INDEX => '-'
    },
    syntax: '-',
    variants: space('-')
  },
  {
    captures: {
      Enolib::Grammar::LIST_ITEM_OPERATOR_INDEX => '-',
      Enolib::Grammar::LIST_ITEM_VALUE_INDEX => 'Item'
    },
    syntax: '- Item',
    variants: space('-', 'Item')
  },
  {
    captures: {
      Enolib::Grammar::LIST_ITEM_OPERATOR_INDEX => '-',
      Enolib::Grammar::LIST_ITEM_VALUE_INDEX => 'The Item'
    },
    syntax: '- The Item',
    variants: space('-', 'The Item')
  },
  {
    captures: {
      Enolib::Grammar::LIST_ITEM_OPERATOR_INDEX => '-',
      Enolib::Grammar::LIST_ITEM_VALUE_INDEX => '-'
    },
    syntax: '- -',
    variants: space('-', ' ', '-')
  },

  # KEY_SCENARIOS
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':'
    },
    syntax: 'Name:',
    variants: space('Name', ':')
  },
  {
    captures: {
      Enolib::Grammar::KEY_UNESCAPED_INDEX => 'The Name',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':'
    },
    syntax: 'The Name:',
    variants: space('The Name', ':')
  },
  {
    captures: {
      Enolib::Grammar::KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '`',
      Enolib::Grammar::KEY_ESCAPED_INDEX => '<=:',
      Enolib::Grammar::KEY_ESCAPE_END_OPERATOR_INDEX => '`',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':'
    },
    syntax: '`<=:`:',
    variants: space('`', '<=:', '`', ':')
  },
  {
    captures: {
      Enolib::Grammar::KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '```',
      Enolib::Grammar::KEY_ESCAPED_INDEX => '<`=``:',
      Enolib::Grammar::KEY_ESCAPE_END_OPERATOR_INDEX => '```',
      Enolib::Grammar::ELEMENT_OPERATOR_INDEX => ':'
    },
    syntax: '```<`=``:```:',
    variants: space('```', '<`=``:', '```', ':')
  },

  # SECTION_SCENARIOS
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '#',
      Enolib::Grammar::SECTION_KEY_UNESCAPED_INDEX => 'Name'
    },
    syntax: '# Name',
    variants: space('#', 'Name')
  },
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '##',
      Enolib::Grammar::SECTION_KEY_UNESCAPED_INDEX => 'The Name'
    },
    syntax: '## The Name',
    variants: space('##', 'The Name')
  },
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '#',
      Enolib::Grammar::SECTION_KEY_UNESCAPED_INDEX => '#',
      Enolib::Grammar::SECTION_COPY_OPERATOR_INDEX => '<',
      Enolib::Grammar::SECTION_TEMPLATE_INDEX => 'Other Name'
    },
    syntax: '# # < Other Name',
    variants: space('#', ' ', '#', '<', 'Other Name')
  },
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '###',
      Enolib::Grammar::SECTION_KEY_UNESCAPED_INDEX => '##',
      Enolib::Grammar::SECTION_COPY_OPERATOR_INDEX => '<',
      Enolib::Grammar::SECTION_TEMPLATE_INDEX => '###'
    },
    syntax: '### ## < ###',
    variants: space('###', ' ', '##', '<', '###')
  },
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '#',
      Enolib::Grammar::SECTION_KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '`',
      Enolib::Grammar::SECTION_KEY_ESCAPED_INDEX => '<=:',
      Enolib::Grammar::SECTION_KEY_ESCAPE_END_OPERATOR_INDEX => '`',
      Enolib::Grammar::SECTION_COPY_OPERATOR_INDEX => '<',
      Enolib::Grammar::SECTION_TEMPLATE_INDEX => '`<=:`'
    },
    syntax: '# `<=:` < `<=:`',
    variants: space('#', '`<=:`', '<', '`<=:`')
  },
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '#',
      Enolib::Grammar::SECTION_KEY_ESCAPE_BEGIN_OPERATOR_INDEX => '```',
      Enolib::Grammar::SECTION_KEY_ESCAPED_INDEX => '<`=``:',
      Enolib::Grammar::SECTION_KEY_ESCAPE_END_OPERATOR_INDEX => '```',
      Enolib::Grammar::SECTION_COPY_OPERATOR_INDEX => '<',
      Enolib::Grammar::SECTION_TEMPLATE_INDEX => '```<`=``:```'
    },
    syntax: '# ```<`=``:``` < ```<`=``:```',
    variants: space('#', '```<`=``:```', '<', '```<`=``:```')
  },
  {
    captures: {
      Enolib::Grammar::SECTION_OPERATOR_INDEX => '#',
      Enolib::Grammar::SECTION_KEY_UNESCAPED_INDEX => 'Name',
      Enolib::Grammar::SECTION_COPY_OPERATOR_INDEX => '<<',
      Enolib::Grammar::SECTION_TEMPLATE_INDEX => 'Other Name'
    },
    syntax: '# Name << Other Name',
    variants: space('#', ' ', 'Name', '<<', 'Other Name')
  }
].freeze
