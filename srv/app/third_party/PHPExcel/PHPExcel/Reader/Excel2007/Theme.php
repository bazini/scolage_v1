<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Reader_Excel2007_Theme { private $themeName; private $colourSchemeName; private $colourMapValues; private $colourMap; public function __construct($themeName, $colourSchemeName, $colourMap) { goto M0yoh; M0yoh: $this->themeName = $themeName; goto qtbl_; qtbl_: $this->colourSchemeName = $colourSchemeName; goto g_Sjr; g_Sjr: $this->colourMap = $colourMap; goto xlgiA; xlgiA: } public function getThemeName() { return $this->themeName; } public function getColourSchemeName() { return $this->colourSchemeName; } public function getColourByIndex($index = 0) { if (isset($this->colourMap[$index])) { return $this->colourMap[$index]; } return null; } public function __clone() { $vars = get_object_vars($this); foreach ($vars as $key => $value) { if (is_object($value) && $key != "\137\160\x61\x72\x65\x6e\164") { $this->{$key} = clone $value; } else { $this->{$key} = $value; } } } }
