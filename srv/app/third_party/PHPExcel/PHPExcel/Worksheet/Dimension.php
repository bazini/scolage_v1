<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 abstract class PHPExcel_Worksheet_Dimension { private $visible = true; private $outlineLevel = 0; private $collapsed = false; private $xfIndex; public function __construct($initialValue = null) { $this->xfIndex = $initialValue; } public function getVisible() { return $this->visible; } public function setVisible($pValue = true) { $this->visible = $pValue; return $this; } public function getOutlineLevel() { return $this->outlineLevel; } public function setOutlineLevel($pValue) { goto t0DQV; g4qro: $this->outlineLevel = $pValue; goto ZunOc; t0DQV: if ($pValue < 0 || $pValue > 7) { throw new PHPExcel_Exception("\x4f\x75\x74\x6c\151\x6e\145\40\x6c\x65\166\x65\154\x20\x6d\x75\x73\164\40\x72\141\x6e\x67\x65\x20\142\x65\164\167\x65\x65\x6e\x20\60\40\141\x6e\144\x20\67\56"); } goto g4qro; ZunOc: return $this; goto pdg1e; pdg1e: } public function getCollapsed() { return $this->collapsed; } public function setCollapsed($pValue = true) { $this->collapsed = $pValue; return $this; } public function getXfIndex() { return $this->xfIndex; } public function setXfIndex($pValue = 0) { $this->xfIndex = $pValue; return $this; } public function __clone() { $vars = get_object_vars($this); foreach ($vars as $key => $value) { if (is_object($value)) { $this->{$key} = clone $value; } else { $this->{$key} = $value; } } } }
