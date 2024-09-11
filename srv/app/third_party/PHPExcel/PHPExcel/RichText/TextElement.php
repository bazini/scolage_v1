<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_RichText_TextElement implements PHPExcel_RichText_ITextElement { private $text; public function __construct($pText = '') { $this->text = $pText; } public function getText() { return $this->text; } public function setText($pText = '') { $this->text = $pText; return $this; } public function getFont() { return null; } public function getHashCode() { return md5($this->text . __CLASS__); } public function __clone() { $vars = get_object_vars($this); foreach ($vars as $key => $value) { if (is_object($value)) { $this->{$key} = clone $value; } else { $this->{$key} = $value; } } } }
