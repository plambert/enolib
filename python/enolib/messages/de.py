#  GENERATED ON 2019-05-29T07:40:09 - DO NOT EDIT MANUALLY

content_header = 'Inhalt'
expected_document = 'Das Dokument wurde erwartet.'
expected_empty = 'Ein leeres Element wurde erwartet.'
expected_field = 'Ein Feld wurde erwartet.'
expected_fields = 'Nur Felder wurden erwartet.'
expected_fieldset = 'Ein Fieldset wurde erwartet.'
expected_fieldset_entry = 'Ein Fieldset Eintrag wurde erwartet.'
expected_fieldsets = 'Nur Fieldsets wurden erwartet.'
expected_list = 'Eine Liste wurde erwartet.'
expected_list_item = 'Ein Listen Eintrag wurde erwartet.'
expected_lists = 'Nur Listen wurden erwartet.'
expected_section = 'Eine Sektion wurde erwartet.'
expected_sections = 'Nur Sektionen wurden erwartet.'
expected_single_element = 'Nur ein einzelnes Element wurde erwartet.'
expected_single_empty = 'Nur ein einzelnes leeres Element wurde erwartet.'
expected_single_field = 'Nur ein einzelnes Feld wurde erwartet.'
expected_single_fieldset = 'Nur ein einzelnes Fieldset wurde erwartet.'
expected_single_fieldset_entry = 'Nur ein einzelner Fieldset Eintrag wurde erwartet.'
expected_single_list = 'Nur eine einzelne Liste wurde erwartet.'
expected_single_section = 'Nur eine einzelne Sektion wurde erwartet.'
gutter_header = 'Zeile'
missing_comment = 'Ein erforderlicher Kommentar zu diesem Feld fehlt.'
missing_element = 'Ein einzelnes Element ist erforderlich - es kann einen beliebigen Schlüssel haben.'
missing_empty = 'Ein einzelnes leeres Element ist erforderlich - es kann einen beliebigen Schlüssel haben.'
missing_field = 'Ein einzelnes Feld ist erforderlich - es kann einen beliebigen Schlüssel haben.'
missing_fieldset = 'Ein einzelnes Fieldset ist erforderlich - es kann einen beliebigen Schlüssel haben.'
missing_fieldset_entry = 'Ein einzelner Fieldset Eintrag ist erforderlich - er kann einen beliebigen Schlüssel haben.'
missing_list = 'Eine einzelne Liste ist erforderlich - sie kann einen beliebigen Schlüssel haben.'
missing_section = 'Eine einzelne Sektion ist erforderlich - sie kann einen beliebigen Schlüssel haben.'
unexpected_element = 'Dieses Element wurde nicht erwartet, prüfe ob es am richtigen Platz ist und dass der Schlüssel keine Tippfehler enthält.'
comment_error = lambda message: f"Es gibt ein Problem mit dem Kommentar dieses Elements: {message}"
cyclic_dependency = lambda line, key: f"In Zeile {line} wird '{key}' in sich selbst kopiert."
expected_empty_with_key = lambda key: f"Ein leeres Element mit dem Schlüssel '{key}' wurde erwartet."
expected_field_with_key = lambda key: f"Ein Feld mit dem Schlüssel '{key}' wurde erwartet."
expected_fields_with_key = lambda key: f"Nur Felder mit dem Schlüssel '{key}' wurden erwartet."
expected_fieldset_with_key = lambda key: f"Ein Fieldset mit dem Schlüssel '{key}' wurde erwartet."
expected_fieldsets_with_key = lambda key: f"Nur Fieldsets mit dem Schlüssel '{key}' wurden erwartet."
expected_list_with_key = lambda key: f"Eine Liste mit dem Schlüssel '{key}' wurde erwartet."
expected_lists_with_key = lambda key: f"Nur Listen mit dem Schlüssel '{key}' wurden erwartet."
expected_section_with_key = lambda key: f"Eine Sektion mit dem Schlüssel '{key}' wurde erwartet."
expected_sections_with_key = lambda key: f"Nur Sektionen mit dem Schlüssel '{key}' wurden erwartet."
expected_single_element_with_key = lambda key: f"Nur ein einzelnes Element mit dem Schlüssel '{key}' wurde erwartet."
expected_single_empty_with_key = lambda key: f"Nur ein einzelnes leeres Element mit dem Schlüssel '{key}' wurde erwartet."
expected_single_field_with_key = lambda key: f"Nur ein einzelnes Feld mit dem Schlüssel '{key}' wurde erwartet."
expected_single_fieldset_entry_with_key = lambda key: f"Nur ein einzelner Fieldset Eintrag mit dem Schlüssel '{key}' wurde erwartet."
expected_single_fieldset_with_key = lambda key: f"Nur ein einzelnes Fieldset mit dem Schlüssel '{key}' wurde erwartet."
expected_single_list_with_key = lambda key: f"Nur eine einzelne Liste mit dem Schlüssel '{key}' wurde erwartet."
expected_single_section_with_key = lambda key: f"Nur eine einzelne Sektion mit dem Schlüssel '{key}' wurde erwartet."
invalid_line = lambda line: f"Zeile {line} folgt keinem spezifierten Muster."
key_error = lambda message: f"Es gibt ein Problem mit dem Schlüssel dieses Elements: {message}"
missing_element_for_continuation = lambda line: f"Zeile {line} enthält eine Zeilenfortsetzung ohne dass davor ein fortsetzbares Element begonnen wurde."
missing_element_with_key = lambda key: f"Das Element '{key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
missing_empty_with_key = lambda key: f"Das leere Element '{key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
missing_field_value = lambda key: f"Das Feld '{key}' muss einen Wert enthalten."
missing_field_with_key = lambda key: f"Das Feld '{key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
missing_fieldset_entry_value = lambda key: f"Der Fieldset Eintrag '{key}' muss einen Wert enthalten."
missing_fieldset_entry_with_key = lambda key: f"Der Fieldset Eintrag '{key}' fehlt - falls er angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
missing_fieldset_for_fieldset_entry = lambda line: f"Zeile {line} enthält einen Fieldset Eintrag ohne dass davor ein Fieldset begonnen wurde."
missing_fieldset_with_key = lambda key: f"Das Fieldset '{key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
missing_list_for_list_item = lambda line: f"Zeile {line} enthält einen Listeneintrag ohne dass davor ein eine Liste begonnen wurde."
missing_list_item_value = lambda key: f"Die Liste '{key}' darf keine leeren Einträge enthalten."
missing_list_with_key = lambda key: f"Die Liste '{key}' fehlt - falls sie angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
missing_section_with_key = lambda key: f"Die Sektion '{key}' fehlt - falls sie angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."
non_section_element_not_found = lambda line, key: f"In Zeile {line} soll das Nicht-Sektions Element '{key}' kopiert werden, es wurde aber nicht gefunden."
section_hierarchy_layer_skip = lambda line: f"Zeile {line} beginnt eine Sektion die mehr als eine Ebene tiefer liegt als die aktuelle."
section_not_found = lambda line, key: f"In Zeile {line} soll die Sektion '{key}' kopiert werden, sie wurde aber nicht gefunden."
two_or_more_templates_found = lambda key: f"Es gibt mindestens zwei Elemente mit dem Schlüssel '{key}' die hier zum kopieren in Frage kommen, es ist nicht klar welches kopiert werden soll."
unterminated_escaped_key = lambda line: f"In Zeile {line} wird der Schlüssel eines Elements escaped, jedoch wird diese Escape Sequenz bis zum Ende der Zeile nicht mehr beendet."
unterminated_multiline_field = lambda key, line: f"Das Mehrzeilenfeld '{key}' dass in Zeile {line} beginnt wird bis zum Ende des Dokuments nicht mehr beendet."
value_error = lambda message: f"Es gibt ein Problem mit dem Wert dieses Elements: {message}"