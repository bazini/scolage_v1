<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 abstract class PHPExcel_Style_Supervisor { protected $isSupervisor; protected $parent; public function __construct($isSupervisor = false) { $this->isSupervisor = $isSupervisor; } public function bindParent($parent, $parentPropertyName = null) { $this->parent = $parent; return $this; } public function getIsSupervisor() { return $this->isSupervisor; } public function getActiveSheet() { return $this->parent->getActiveSheet(); } public function getSelectedCells() { return $this->getActiveSheet()->getSelectedCells(); } public function getActiveCell() { return $this->getActiveSheet()->getActiveCell(); } public function __clone() { $vars = get_object_vars($this); foreach ($vars as $key => $value) { if (is_object($value) && $key != "\160\x61\x72\x65\x6e\164") { $this->{$key} = clone $value; } else { $this->{$key} = $value; } } } }
