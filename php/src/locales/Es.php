<?php declare(strict_types=1);

//  GENERATED ON 2019-06-18T08:50:41 - DO NOT EDIT MANUALLY

namespace Eno\Locales;

class Es {
  const CONTENT_HEADER = 'Contenido';
  const EXPECTED_DOCUMENT = 'Se esperaba el documento.';
  const EXPECTED_EMPTY = 'Se esperaba un elemento vacío.';
  const EXPECTED_FIELD = 'Se esperaba una casilla.';
  const EXPECTED_FIELDS = 'Solo se esperaban casillas.';
  const EXPECTED_FIELDSET = 'Se esperaba una collecíon de casillas.';
  const EXPECTED_FIELDSET_ENTRY = 'Se esperaba una casilla de collecíon.';
  const EXPECTED_FIELDSETS = 'Solo se esperaban colleciones de casillas.';
  const EXPECTED_LIST = 'Se esperaba una lista.';
  const EXPECTED_LIST_ITEM = 'Se esperaba una entrada de lista.';
  const EXPECTED_LISTS = 'Solo se esperaban listas.';
  const EXPECTED_SECTION = 'Se esperaba una sección.';
  const EXPECTED_SECTIONS = 'Solo se esperaban secciones.';
  const EXPECTED_SINGLE_ELEMENT = 'Solo se esperaba un único elemento.';
  const EXPECTED_SINGLE_EMPTY = 'Solo se esperaba un único elemento vacío.';
  const EXPECTED_SINGLE_FIELD = 'Solo se esperaba una sola casilla.';
  const EXPECTED_SINGLE_FIELDSET = 'Solo se esperaba una sola collecíon de casillas.';
  const EXPECTED_SINGLE_FIELDSET_ENTRY = 'Solo se esperaba una sola casilla de collecíon.';
  const EXPECTED_SINGLE_LIST = 'Solo se esperaba una sola lista.';
  const EXPECTED_SINGLE_SECTION = 'Solo se esperaba una sola sección.';
  const GUTTER_HEADER = 'Línea';
  const MISSING_COMMENT = 'Falta un comentario necesario para este elemento.';
  const MISSING_ELEMENT = 'Se requiere un único elemento - puede tener cualquier clave.';
  const MISSING_EMPTY = 'Se requiere un único elemento vacío - puede tener cualquier clave.';
  const MISSING_FIELD = 'Se requiere una sola casilla - puede tener cualquier clave.';
  const MISSING_FIELDSET = 'Se requiere una sola collecíon de casillas - puede tener cualquier clave.';
  const MISSING_FIELDSET_ENTRY = 'Se requiere una sola casilla de collecíon - puede tener cualquier clave.';
  const MISSING_LIST = 'Se requiere una sola lista - puede tener cualquier clave.';
  const MISSING_SECTION = 'Se requiere una sola sección - puede tener cualquier clave.';
  const UNEXPECTED_ELEMENT = 'Este elemento no se esperaba, averigua si es en el sitio correcto y que no contiene un error tipográfico la clave.';
  public static function commentError($message) { return "Hay un problema con el comentario de este elemento: {$message}"; }
  public static function cyclicDependency($line, $key) { return "En la línea {$line} '{$key}' se copia en sí mismo."; }
  public static function expectedEmptyWithKey($key) { return "Se esperaba un elemento vacío con la clave '{$key}'."; }
  public static function expectedFieldWithKey($key) { return "Se esperaba una casilla con la clave '{$key}'."; }
  public static function expectedFieldsWithKey($key) { return "Solo se esperaban casillas con la clave '{$key}'."; }
  public static function expectedFieldsetWithKey($key) { return "Se esperaba una collecíon de casillas con la clave '{$key}'."; }
  public static function expectedFieldsetsWithKey($key) { return "Solo se esperaban colleciones de casillas con la clave '{$key}'."; }
  public static function expectedListWithKey($key) { return "Se esperaba una lista con la clave '{$key}'."; }
  public static function expectedListsWithKey($key) { return "Solo se esperaban listas con la clave '{$key}'."; }
  public static function expectedSectionWithKey($key) { return "Se esperaba una sección con la clave '{$key}'."; }
  public static function expectedSectionsWithKey($key) { return "Solo se esperaban secciones con la clave '{$key}'."; }
  public static function expectedSingleElementWithKey($key) { return "Solo se esperaba un único elemento con la clave '{$key}'."; }
  public static function expectedSingleEmptyWithKey($key) { return "Solo se esperaba un único elemento vacío con la clave '{$key}'."; }
  public static function expectedSingleFieldWithKey($key) { return "Solo se esperaba una sola casilla con la clave '{$key}'."; }
  public static function expectedSingleFieldsetEntryWithKey($key) { return "Solo se esperaba una sola casilla de collecíon con la clave '{$key}'."; }
  public static function expectedSingleFieldsetWithKey($key) { return "Solo se esperaba una sola collecíon de casillas con la clave '{$key}'."; }
  public static function expectedSingleListWithKey($key) { return "Solo se esperaba una sola lista con la clave '{$key}'."; }
  public static function expectedSingleSectionWithKey($key) { return "Solo se esperaba una sola sección con la clave '{$key}'."; }
  public static function invalidLine($line) { return "Línea {$line} no sigue un patrón especificado."; }
  public static function keyError($message) { return "Hay un problema con la clave de este elemento: {$message}"; }
  public static function missingElementForContinuation($line) { return "Línea {$line} contiene una continuacíon de línea sin un elemento que se puede continuar empezado antes."; }
  public static function missingElementWithKey($key) { return "Falta el elemento '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function missingEmptyWithKey($key) { return "Falta el elemento vacío '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function missingFieldValue($key) { return "La casilla '{$key}' debe contener un valor."; }
  public static function missingFieldWithKey($key) { return "Falta la casilla '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function missingFieldsetEntryValue($key) { return "La casilla de collecíon '{$key}' debe contener un valor."; }
  public static function missingFieldsetEntryWithKey($key) { return "Falta la casilla de collecíon '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function missingFieldsetForFieldsetEntry($line) { return "Línea {$line} contiene una casilla de collecíon sin una collecíon de casillas empezada antes."; }
  public static function missingFieldsetWithKey($key) { return "Falta la collecíon de casillas '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function missingListForListItem($line) { return "Línea {$line} contiene una entrada de lista sin una lista empezada antes."; }
  public static function missingListItemValue($key) { return "La lista '{$key}' no debe contener entradas vacías."; }
  public static function missingListWithKey($key) { return "Falta la lista '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function missingSectionWithKey($key) { return "Falta la sección '{$key}' - si se proporcionó, mira por errores ortográficos y también distingue entre mayúsculas y minúsculas."; }
  public static function nonSectionElementNotFound($line, $key) { return "En la línea {$line} debe ser copiado el elemento no sección '{$key}', pero no se encontró."; }
  public static function sectionHierarchyLayerSkip($line) { return "Línea {$line} inicia una sección que es más de un nivel más bajo el actual."; }
  public static function sectionNotFound($line, $key) { return "En la línea {$line} debe ser copiado la sección '{$key}', pero no se encontró."; }
  public static function twoOrMoreTemplatesFound($key) { return "Hay como mínimo dos elementos con la clave '{$key}' que se clasifiquen para estar copiado, no está claro cual debe ser copiado."; }
  public static function unterminatedEscapedKey($line) { return "En la línea {$line}, la clave de un elemento se escapa, pero esta secuencia de escape no termina hasta el final de la línea."; }
  public static function unterminatedMultilineField($key, $line) { return "La casilla de múltiples líneas '{$key}' que comienza en la línea {$line} no termina hasta el final del documento."; }
  public static function valueError($message) { return "Hay un problema con el valor de este elemento: {$message}"; }
}