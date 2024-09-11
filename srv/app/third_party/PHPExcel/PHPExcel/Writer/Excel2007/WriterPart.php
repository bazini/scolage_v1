<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 abstract class PHPExcel_Writer_Excel2007_WriterPart { private $parentWriter; public function setParentWriter(PHPExcel_Writer_IWriter $pWriter = null) { $this->parentWriter = $pWriter; } public function getParentWriter() { if (!is_null($this->parentWriter)) { return $this->parentWriter; } else { throw new PHPExcel_Writer_Exception("\x4e\x6f\40\160\x61\162\145\156\164\40\x50\110\120\105\170\x63\145\154\x5f\127\x72\x69\x74\145\x72\137\x49\x57\162\x69\164\145\162\40\x61\x73\163\151\147\156\145\x64\x2e"); } } public function __construct(PHPExcel_Writer_IWriter $pWriter = null) { if (!is_null($pWriter)) { $this->parentWriter = $pWriter; } } }
