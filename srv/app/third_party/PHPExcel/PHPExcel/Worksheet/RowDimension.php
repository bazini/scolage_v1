<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Worksheet_RowDimension extends PHPExcel_Worksheet_Dimension { private $rowIndex; private $height = -1; private $zeroHeight = false; public function __construct($pIndex = 0) { $this->rowIndex = $pIndex; parent::__construct(null); } public function getRowIndex() { return $this->rowIndex; } public function setRowIndex($pValue) { $this->rowIndex = $pValue; return $this; } public function getRowHeight() { return $this->height; } public function setRowHeight($pValue = -1) { $this->height = $pValue; return $this; } public function getZeroHeight() { return $this->zeroHeight; } public function setZeroHeight($pValue = false) { $this->zeroHeight = $pValue; return $this; } }
