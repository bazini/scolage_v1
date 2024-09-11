<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Writer_Exception extends PHPExcel_Exception { public static function errorHandlerCallback($code, $string, $file, $line, $context) { goto Ox1U0; Hv0X8: throw $e; goto w7UO1; d0ClV: $e->file = $file; goto Hv0X8; Ox1U0: $e = new self($string, $code); goto scAzJ; scAzJ: $e->line = $line; goto d0ClV; w7UO1: } }
