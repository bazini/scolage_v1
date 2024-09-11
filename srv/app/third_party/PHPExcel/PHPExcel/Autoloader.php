<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto gzZ2s; gzZ2s: PHPExcel_Autoloader::register(); goto nhp9M; WhKsv: PHPExcel_Shared_String::buildCharacterSets(); goto HqGzD; nhp9M: if (ini_get("\x6d\142\163\164\x72\x69\x6e\147\x2e\x66\165\x6e\143\137\x6f\x76\145\x72\x6c\x6f\x61\144") & 2) { throw new PHPExcel_Exception("\x4d\165\154\164\151\x62\x79\164\x65\x20\146\165\x6e\143\x74\151\157\156\x20\157\x76\x65\x72\x6c\157\141\x64\151\156\x67\x20\x69\156\40\120\110\x50\x20\x6d\x75\x73\x74\x20\142\x65\40\x64\151\163\x61\142\x6c\x65\x64\x20\146\x6f\162\40\163\x74\162\x69\156\147\40\146\x75\156\x63\164\x69\157\156\x73\x20\50\62\51\56"); } goto WhKsv; HqGzD: class PHPExcel_Autoloader { public static function register() { if (function_exists("\x5f\137\141\165\164\157\x6c\x6f\x61\x64")) { spl_autoload_register("\137\137\x61\x75\164\157\154\x6f\x61\144"); } if (version_compare(PHP_VERSION, "\x35\56\63\56\x30") >= 0) { return spl_autoload_register(array("\120\110\120\105\x78\x63\145\154\x5f\x41\x75\x74\x6f\154\x6f\x61\144\x65\x72", "\154\x6f\x61\144"), true, true); } else { return spl_autoload_register(array("\120\110\120\x45\x78\x63\145\x6c\x5f\x41\165\164\157\x6c\157\141\144\x65\162", "\x6c\x6f\141\144")); } } public static function load($pClassName) { goto L7I50; L7I50: if (class_exists($pClassName, false) || strpos($pClassName, "\x50\x48\x50\x45\x78\x63\145\154") !== 0) { return false; } goto Bi5EX; Bi5EX: $pClassFilePath = PHPEXCEL_ROOT . str_replace("\x5f", DIRECTORY_SEPARATOR, $pClassName) . "\56\x70\x68\x70"; goto h2Y0Z; Bx0vV: require $pClassFilePath; goto XmAbq; h2Y0Z: if (file_exists($pClassFilePath) === false || is_readable($pClassFilePath) === false) { return false; } goto Bx0vV; XmAbq: } }
