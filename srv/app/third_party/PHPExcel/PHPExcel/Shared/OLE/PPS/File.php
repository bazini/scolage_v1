<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Shared_OLE_PPS_File extends PHPExcel_Shared_OLE_PPS { public function __construct($name) { parent::__construct(null, $name, PHPExcel_Shared_OLE::OLE_PPS_TYPE_FILE, null, null, null, null, null, '', array()); } public function init() { return true; } public function append($data) { $this->_data .= $data; } public function getStream() { $this->ole->getStream($this); } }
