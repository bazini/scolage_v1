<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Chart_Exception extends PHPExcel_Exception { public static function errorHandlerCallback($code, $string, $file, $line, $context) { goto FnH3l; wHY9x: $e->file = $file; goto M1fOP; oX_OC: $e->line = $line; goto wHY9x; M1fOP: throw $e; goto gNuG7; FnH3l: $e = new self($string, $code); goto oX_OC; gNuG7: } }
