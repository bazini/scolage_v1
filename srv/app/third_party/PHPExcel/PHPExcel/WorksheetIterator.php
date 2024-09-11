<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_WorksheetIterator implements Iterator { private $subject; private $position = 0; public function __construct(PHPExcel $subject = null) { $this->subject = $subject; } public function __destruct() { unset($this->subject); } public function rewind() { $this->position = 0; } public function current() { return $this->subject->getSheet($this->position); } public function key() { return $this->position; } public function next() { ++$this->position; } public function valid() { return $this->position < $this->subject->getSheetCount(); } }
