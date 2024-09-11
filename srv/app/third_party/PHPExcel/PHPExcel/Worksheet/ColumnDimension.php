<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Worksheet_ColumnDimension extends PHPExcel_Worksheet_Dimension { private $columnIndex; private $width = -1; private $autoSize = false; public function __construct($pIndex = "\101") { $this->columnIndex = $pIndex; parent::__construct(0); } public function getColumnIndex() { return $this->columnIndex; } public function setColumnIndex($pValue) { $this->columnIndex = $pValue; return $this; } public function getWidth() { return $this->width; } public function setWidth($pValue = -1) { $this->width = $pValue; return $this; } public function getAutoSize() { return $this->autoSize; } public function setAutoSize($pValue = false) { $this->autoSize = $pValue; return $this; } }
