<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_CalcEngine_CyclicReferenceStack { private $stack = array(); public function count() { return count($this->stack); } public function push($value) { $this->stack[$value] = $value; } public function pop() { return array_pop($this->stack); } public function onStack($value) { return isset($this->stack[$value]); } public function clear() { $this->stack = array(); } public function showStack() { return $this->stack; } }
