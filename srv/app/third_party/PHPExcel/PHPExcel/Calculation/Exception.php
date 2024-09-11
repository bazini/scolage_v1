<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Calculation_Exception extends PHPExcel_Exception { public static function errorHandlerCallback($code, $string, $file, $line, $context) { goto ccYYh; yl0Kv: $e->line = $line; goto U3GCM; U3GCM: $e->file = $file; goto qHEWZ; ccYYh: $e = new self($string, $code); goto yl0Kv; qHEWZ: throw $e; goto eBUtE; eBUtE: } }
