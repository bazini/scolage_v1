<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Worksheet_Drawing extends PHPExcel_Worksheet_BaseDrawing implements PHPExcel_IComparable { private $path; public function __construct() { $this->path = ''; parent::__construct(); } public function getFilename() { return basename($this->path); } public function getIndexedFilename() { goto EQgBW; z9q5u: return str_replace("\x2e" . $this->getExtension(), '', $fileName) . $this->getImageIndex() . "\56" . $this->getExtension(); goto g8BUe; kVq9s: $fileName = str_replace("\40", "\137", $fileName); goto z9q5u; EQgBW: $fileName = $this->getFilename(); goto kVq9s; g8BUe: } public function getExtension() { $exploded = explode("\x2e", basename($this->path)); return $exploded[count($exploded) - 1]; } public function getPath() { return $this->path; } public function setPath($pValue = '', $pVerifyFile = true) { if ($pVerifyFile) { if (file_exists($pValue)) { $this->path = $pValue; if ($this->width == 0 && $this->height == 0) { list($this->width, $this->height) = getimagesize($pValue); } } else { throw new PHPExcel_Exception("\x46\151\x6c\x65\x20{$pValue}\40\156\x6f\x74\x20\x66\x6f\165\x6e\144\x21"); } } else { $this->path = $pValue; } return $this; } public function getHashCode() { return md5($this->path . parent::getHashCode() . __CLASS__); } public function __clone() { $vars = get_object_vars($this); foreach ($vars as $key => $value) { if (is_object($value)) { $this->{$key} = clone $value; } else { $this->{$key} = $value; } } } }
