<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE { const BLIPTYPE_ERROR = 0x0; const BLIPTYPE_UNKNOWN = 0x1; const BLIPTYPE_EMF = 0x2; const BLIPTYPE_WMF = 0x3; const BLIPTYPE_PICT = 0x4; const BLIPTYPE_JPEG = 0x5; const BLIPTYPE_PNG = 0x6; const BLIPTYPE_DIB = 0x7; const BLIPTYPE_TIFF = 0x11; const BLIPTYPE_CMYKJPEG = 0x12; private $parent; private $blip; private $blipType; public function setParent($parent) { $this->parent = $parent; } public function getBlip() { return $this->blip; } public function setBlip($blip) { $this->blip = $blip; $blip->setParent($this); } public function getBlipType() { return $this->blipType; } public function setBlipType($blipType) { $this->blipType = $blipType; } }
