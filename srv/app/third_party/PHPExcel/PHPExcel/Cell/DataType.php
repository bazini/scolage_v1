<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Cell_DataType { const TYPE_STRING2 = "\x73\164\x72"; const TYPE_STRING = "\163"; const TYPE_FORMULA = "\146"; const TYPE_NUMERIC = "\x6e"; const TYPE_BOOL = "\x62"; const TYPE_NULL = "\x6e\165\x6c\154"; const TYPE_INLINE = "\x69\x6e\x6c\x69\x6e\145\x53\164\x72"; const TYPE_ERROR = "\145"; private static $errorCodes = array("\x23\116\125\114\x4c\41" => 0, "\43\104\x49\126\57\x30\x21" => 1, "\43\x56\x41\114\x55\105\41" => 2, "\x23\x52\105\106\x21" => 3, "\43\x4e\101\115\x45\x3f" => 4, "\x23\116\125\x4d\x21" => 5, "\x23\x4e\x2f\x41" => 6); public static function getErrorCodes() { return self::$errorCodes; } public static function dataTypeForValue($pValue = null) { return PHPExcel_Cell_DefaultValueBinder::dataTypeForValue($pValue); } public static function checkString($pValue = null) { goto zF8lj; n7r3C: $pValue = PHPExcel_Shared_String::Substring($pValue, 0, 32767); goto lzEHq; zF8lj: if ($pValue instanceof PHPExcel_RichText) { return $pValue; } goto n7r3C; KkOuT: return $pValue; goto WbHLK; lzEHq: $pValue = str_replace(array("\15\12", "\15"), "\xa", $pValue); goto KkOuT; WbHLK: } public static function checkErrorCode($pValue = null) { goto El0I_; El0I_: $pValue = (string) $pValue; goto ameXd; ameXd: if (!array_key_exists($pValue, self::$errorCodes)) { $pValue = "\x23\116\x55\x4c\114\41"; } goto GsXJX; GsXJX: return $pValue; goto ZdEzM; ZdEzM: } }
