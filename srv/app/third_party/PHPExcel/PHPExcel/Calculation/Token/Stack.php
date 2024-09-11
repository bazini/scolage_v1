<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Calculation_Token_Stack { private $stack = array(); private $count = 0; public function count() { return $this->count; } public function push($type, $value, $reference = null) { $this->stack[$this->count++] = array("\164\x79\x70\x65" => $type, "\x76\141\x6c\x75\145" => $value, "\x72\x65\146\x65\x72\x65\156\143\145" => $reference); if ($type == "\106\x75\156\143\x74\x69\x6f\156") { $localeFunction = PHPExcel_Calculation::localeFunc($value); if ($localeFunction != $value) { $this->stack[$this->count - 1]["\x6c\x6f\143\141\x6c\x65\126\x61\x6c\165\x65"] = $localeFunction; } } } public function pop() { if ($this->count > 0) { return $this->stack[--$this->count]; } return null; } public function last($n = 1) { if ($this->count - $n < 0) { return null; } return $this->stack[$this->count - $n]; } public function clear() { $this->stack = array(); $this->count = 0; } }
