<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto gDecZ; gDecZ: if (!defined("\104\101\x54\x45\137\127\63\103")) { define("\x44\101\x54\x45\x5f\x57\x33\103", "\x59\55\155\x2d\144\134\x54\110\72\x69\x3a\163\x50"); } goto dTjJw; dTjJw: if (!defined("\104\105\102\125\x47\x4d\117\x44\x45\137\105\116\x41\x42\x4c\x45\x44")) { define("\104\105\x42\125\x47\115\117\104\105\137\105\x4e\x41\x42\x4c\105\x44", false); } goto lHo0g; lHo0g: class PHPExcel_Shared_XMLWriter extends XMLWriter { const STORAGE_MEMORY = 1; const STORAGE_DISK = 2; private $tempFileName = ''; public function __construct($pTemporaryStorage = self::STORAGE_MEMORY, $pTemporaryStorageFolder = null) { if ($pTemporaryStorage == self::STORAGE_MEMORY) { $this->openMemory(); } else { goto ISn2_; Eq6aZ: if ($this->openUri($this->tempFileName) === false) { $this->openMemory(); } goto RBSP3; CotuG: $this->tempFileName = @tempnam($pTemporaryStorageFolder, "\170\155\154"); goto Eq6aZ; ISn2_: if ($pTemporaryStorageFolder === null) { $pTemporaryStorageFolder = PHPExcel_Shared_File::sys_get_temp_dir(); } goto CotuG; RBSP3: } if (DEBUGMODE_ENABLED) { $this->setIndent(true); } } public function __destruct() { if ($this->tempFileName != '') { @unlink($this->tempFileName); } } public function getData() { if ($this->tempFileName == '') { return $this->outputMemory(true); } else { $this->flush(); return file_get_contents($this->tempFileName); } } public function writeRawData($text) { goto xyTjI; HYWQq: if (method_exists($this, "\x77\x72\x69\x74\x65\x52\x61\x77")) { return $this->writeRaw(htmlspecialchars($text)); } goto Yp0NS; xyTjI: if (is_array($text)) { $text = implode("\12", $text); } goto HYWQq; Yp0NS: return $this->text($text); goto TBqP3; TBqP3: } }
