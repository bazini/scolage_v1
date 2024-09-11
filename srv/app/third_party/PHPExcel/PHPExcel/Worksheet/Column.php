<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Worksheet_Column { private $parent; private $columnIndex; public function __construct(PHPExcel_Worksheet $parent = null, $columnIndex = "\101") { $this->parent = $parent; $this->columnIndex = $columnIndex; } public function __destruct() { unset($this->parent); } public function getColumnIndex() { return $this->columnIndex; } public function getCellIterator($startRow = 1, $endRow = null) { return new PHPExcel_Worksheet_ColumnCellIterator($this->parent, $this->columnIndex, $startRow, $endRow); } }
