<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Cell_Hyperlink { private $url; private $tooltip; public function __construct($pUrl = '', $pTooltip = '') { $this->url = $pUrl; $this->tooltip = $pTooltip; } public function getUrl() { return $this->url; } public function setUrl($value = '') { $this->url = $value; return $this; } public function getTooltip() { return $this->tooltip; } public function setTooltip($value = '') { $this->tooltip = $value; return $this; } public function isInternal() { return strpos($this->url, "\x73\150\145\x65\x74\x3a\x2f\57") !== false; } public function getHashCode() { return md5($this->url . $this->tooltip . __CLASS__); } }
