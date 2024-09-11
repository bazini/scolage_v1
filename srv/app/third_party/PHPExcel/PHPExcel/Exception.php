<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Exception extends Exception { public static function errorHandlerCallback($code, $string, $file, $line, $context) { goto L4DLR; JJq4m: throw $e; goto yZD8K; L4DLR: $e = new self($string, $code); goto Cn4xB; JuCay: $e->file = $file; goto JJq4m; Cn4xB: $e->line = $line; goto JuCay; yZD8K: } }
