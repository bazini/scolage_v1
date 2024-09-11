<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 abstract class PHPExcel_Worksheet_CellIterator { protected $subject; protected $position = null; protected $onlyExistingCells = false; public function __destruct() { unset($this->subject); } public function getIterateOnlyExistingCells() { return $this->onlyExistingCells; } protected abstract function adjustForExistingOnlyRange(); public function setIterateOnlyExistingCells($value = true) { $this->onlyExistingCells = (bool) $value; $this->adjustForExistingOnlyRange(); } }
