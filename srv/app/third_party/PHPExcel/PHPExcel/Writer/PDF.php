<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Writer_PDF implements PHPExcel_Writer_IWriter { private $renderer = null; public function __construct(PHPExcel $phpExcel) { goto DlDO8; Dr8zm: $rendererPath = str_replace("\134", "\57", $pdfLibraryPath); goto QTqeZ; Eo9SY: if (is_null($pdfLibraryName)) { throw new PHPExcel_Writer_Exception("\x50\x44\x46\40\x52\145\x6e\144\145\x72\x69\156\147\40\154\151\142\x72\141\162\171\40\x70\141\164\150\x20\150\x61\163\40\x6e\x6f\164\x20\142\145\145\156\40\144\145\146\x69\156\145\144\x2e"); } goto WiAZz; DlDO8: $pdfLibraryName = PHPExcel_Settings::getPdfRendererName(); goto eB2GN; QTqeZ: if (strpos($rendererPath, $includePath) === false) { set_include_path(get_include_path() . PATH_SEPARATOR . $pdfLibraryPath); } goto fv5gr; eB2GN: if (is_null($pdfLibraryName)) { throw new PHPExcel_Writer_Exception("\x50\104\x46\40\x52\145\x6e\144\x65\x72\x69\x6e\x67\x20\x6c\x69\x62\162\x61\x72\171\40\x68\141\x73\x20\x6e\x6f\x74\40\x62\x65\145\x6e\x20\x64\x65\146\151\x6e\145\x64\x2e"); } goto HQGNh; WiAZz: $includePath = str_replace("\x5c", "\57", get_include_path()); goto Dr8zm; fv5gr: $rendererName = "\120\x48\120\x45\170\143\x65\154\x5f\x57\x72\x69\x74\145\x72\137\x50\x44\x46\x5f" . $pdfLibraryName; goto WC4_r; WC4_r: $this->renderer = new $rendererName($phpExcel); goto nazdc; HQGNh: $pdfLibraryPath = PHPExcel_Settings::getPdfRendererPath(); goto Eo9SY; nazdc: } public function __call($name, $arguments) { if ($this->renderer === null) { throw new PHPExcel_Writer_Exception("\x50\x44\x46\x20\122\x65\156\144\x65\162\151\x6e\147\40\154\151\142\x72\x61\162\x79\40\150\x61\x73\40\156\x6f\164\x20\142\145\x65\x6e\x20\x64\x65\x66\x69\x6e\145\x64\x2e"); } return call_user_func_array(array($this->renderer, $name), $arguments); } public function save($pFilename = null) { $this->renderer->save($pFilename); } }
