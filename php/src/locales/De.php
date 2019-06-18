<?php declare(strict_types=1);

//  GENERATED ON 2019-06-18T08:50:41 - DO NOT EDIT MANUALLY

namespace Eno\Locales;

class De {
  const CONTENT_HEADER = 'Inhalt';
  const EXPECTED_DOCUMENT = 'Das Dokument wurde erwartet.';
  const EXPECTED_EMPTY = 'Ein Leerfeld wurde erwartet.';
  const EXPECTED_FIELD = 'Ein Feld wurde erwartet.';
  const EXPECTED_FIELDS = 'Nur Felder wurden erwartet.';
  const EXPECTED_FIELDSET = 'Ein Fieldset wurde erwartet.';
  const EXPECTED_FIELDSET_ENTRY = 'Ein Fieldset Eintrag wurde erwartet.';
  const EXPECTED_FIELDSETS = 'Nur Fieldsets wurden erwartet.';
  const EXPECTED_LIST = 'Eine Liste wurde erwartet.';
  const EXPECTED_LIST_ITEM = 'Ein Listen Eintrag wurde erwartet.';
  const EXPECTED_LISTS = 'Nur Listen wurden erwartet.';
  const EXPECTED_SECTION = 'Eine Sektion wurde erwartet.';
  const EXPECTED_SECTIONS = 'Nur Sektionen wurden erwartet.';
  const EXPECTED_SINGLE_ELEMENT = 'Nur ein einzelnes Element wurde erwartet.';
  const EXPECTED_SINGLE_EMPTY = 'Nur ein einzelnes Leerfeld wurde erwartet.';
  const EXPECTED_SINGLE_FIELD = 'Nur ein einzelnes Feld wurde erwartet.';
  const EXPECTED_SINGLE_FIELDSET = 'Nur ein einzelnes Fieldset wurde erwartet.';
  const EXPECTED_SINGLE_FIELDSET_ENTRY = 'Nur ein einzelner Fieldset Eintrag wurde erwartet.';
  const EXPECTED_SINGLE_LIST = 'Nur eine einzelne Liste wurde erwartet.';
  const EXPECTED_SINGLE_SECTION = 'Nur eine einzelne Sektion wurde erwartet.';
  const GUTTER_HEADER = 'Zeile';
  const MISSING_COMMENT = 'Ein erforderlicher Kommentar zu diesem Feld fehlt.';
  const MISSING_ELEMENT = 'Ein einzelnes Element ist erforderlich - es kann einen beliebigen Schlüssel haben.';
  const MISSING_EMPTY = 'Ein einzelnes Leerfeld ist erforderlich - es kann einen beliebigen Schlüssel haben.';
  const MISSING_FIELD = 'Ein einzelnes Feld ist erforderlich - es kann einen beliebigen Schlüssel haben.';
  const MISSING_FIELDSET = 'Ein einzelnes Fieldset ist erforderlich - es kann einen beliebigen Schlüssel haben.';
  const MISSING_FIELDSET_ENTRY = 'Ein einzelner Fieldset Eintrag ist erforderlich - er kann einen beliebigen Schlüssel haben.';
  const MISSING_LIST = 'Eine einzelne Liste ist erforderlich - sie kann einen beliebigen Schlüssel haben.';
  const MISSING_SECTION = 'Eine einzelne Sektion ist erforderlich - sie kann einen beliebigen Schlüssel haben.';
  const UNEXPECTED_ELEMENT = 'Dieses Element wurde nicht erwartet, prüfe ob es am richtigen Platz ist und dass der Schlüssel keine Tippfehler enthält.';
  public static function commentError($message) { return "Es gibt ein Problem mit dem Kommentar dieses Elements: {$message}"; }
  public static function cyclicDependency($line, $key) { return "In Zeile {$line} wird '{$key}' in sich selbst kopiert."; }
  public static function expectedEmptyWithKey($key) { return "Ein Leerfeld mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedFieldWithKey($key) { return "Ein Feld mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedFieldsWithKey($key) { return "Nur Felder mit dem Schlüssel '{$key}' wurden erwartet."; }
  public static function expectedFieldsetWithKey($key) { return "Ein Fieldset mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedFieldsetsWithKey($key) { return "Nur Fieldsets mit dem Schlüssel '{$key}' wurden erwartet."; }
  public static function expectedListWithKey($key) { return "Eine Liste mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedListsWithKey($key) { return "Nur Listen mit dem Schlüssel '{$key}' wurden erwartet."; }
  public static function expectedSectionWithKey($key) { return "Eine Sektion mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSectionsWithKey($key) { return "Nur Sektionen mit dem Schlüssel '{$key}' wurden erwartet."; }
  public static function expectedSingleElementWithKey($key) { return "Nur ein einzelnes Element mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSingleEmptyWithKey($key) { return "Nur ein einzelnes Leerfeld mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSingleFieldWithKey($key) { return "Nur ein einzelnes Feld mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSingleFieldsetEntryWithKey($key) { return "Nur ein einzelner Fieldset Eintrag mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSingleFieldsetWithKey($key) { return "Nur ein einzelnes Fieldset mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSingleListWithKey($key) { return "Nur eine einzelne Liste mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function expectedSingleSectionWithKey($key) { return "Nur eine einzelne Sektion mit dem Schlüssel '{$key}' wurde erwartet."; }
  public static function invalidLine($line) { return "Zeile {$line} folgt keinem spezifierten Muster."; }
  public static function keyError($message) { return "Es gibt ein Problem mit dem Schlüssel dieses Elements: {$message}"; }
  public static function missingElementForContinuation($line) { return "Zeile {$line} enthält eine Zeilenfortsetzung ohne dass davor ein fortsetzbares Element begonnen wurde."; }
  public static function missingElementWithKey($key) { return "Das Element '{$key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function missingEmptyWithKey($key) { return "Das Leerfeld '{$key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function missingFieldValue($key) { return "Das Feld '{$key}' muss einen Wert enthalten."; }
  public static function missingFieldWithKey($key) { return "Das Feld '{$key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function missingFieldsetEntryValue($key) { return "Der Fieldset Eintrag '{$key}' muss einen Wert enthalten."; }
  public static function missingFieldsetEntryWithKey($key) { return "Der Fieldset Eintrag '{$key}' fehlt - falls er angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function missingFieldsetForFieldsetEntry($line) { return "Zeile {$line} enthält einen Fieldset Eintrag ohne dass davor ein Fieldset begonnen wurde."; }
  public static function missingFieldsetWithKey($key) { return "Das Fieldset '{$key}' fehlt - falls es angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function missingListForListItem($line) { return "Zeile {$line} enthält einen Listeneintrag ohne dass davor ein eine Liste begonnen wurde."; }
  public static function missingListItemValue($key) { return "Die Liste '{$key}' darf keine leeren Einträge enthalten."; }
  public static function missingListWithKey($key) { return "Die Liste '{$key}' fehlt - falls sie angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function missingSectionWithKey($key) { return "Die Sektion '{$key}' fehlt - falls sie angegeben wurde eventuell nach Tippfehlern Ausschau halten und auch die Gross/Kleinschreibung beachten."; }
  public static function nonSectionElementNotFound($line, $key) { return "In Zeile {$line} soll das Nicht-Sektions Element '{$key}' kopiert werden, es wurde aber nicht gefunden."; }
  public static function sectionHierarchyLayerSkip($line) { return "Zeile {$line} beginnt eine Sektion die mehr als eine Ebene tiefer liegt als die aktuelle."; }
  public static function sectionNotFound($line, $key) { return "In Zeile {$line} soll die Sektion '{$key}' kopiert werden, sie wurde aber nicht gefunden."; }
  public static function twoOrMoreTemplatesFound($key) { return "Es gibt mindestens zwei Elemente mit dem Schlüssel '{$key}' die hier zum kopieren in Frage kommen, es ist nicht klar welches kopiert werden soll."; }
  public static function unterminatedEscapedKey($line) { return "In Zeile {$line} wird der Schlüssel eines Elements escaped, jedoch wird diese Escape Sequenz bis zum Ende der Zeile nicht mehr beendet."; }
  public static function unterminatedMultilineField($key, $line) { return "Das Mehrzeilenfeld '{$key}' dass in Zeile {$line} beginnt wird bis zum Ende des Dokuments nicht mehr beendet."; }
  public static function valueError($message) { return "Es gibt ein Problem mit dem Wert dieses Elements: {$message}"; }
}