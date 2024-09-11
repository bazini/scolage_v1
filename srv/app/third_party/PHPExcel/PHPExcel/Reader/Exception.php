<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Reader_Exception extends PHPExcel_Exception { public static function errorHandlerCallback($code, $string, $file, $line, $context) { goto dppjQ; gTmf9: $e->file = $file; goto MoeZe; dppjQ: $e = new self($string, $code); goto TqsIr; MoeZe: throw $e; goto m9orl; TqsIr: $e->line = $line; goto gTmf9; m9orl: } }
