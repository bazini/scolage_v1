<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 if (!defined("\120\110\x50\x45\130\x43\x45\x4c\x5f\x52\x4f\x4f\124")) { define("\x50\x48\120\x45\x58\103\x45\114\x5f\x52\x4f\117\124", dirname(__FILE__) . "\x2f\56\x2e\57\56\56\x2f"); require PHPEXCEL_ROOT . "\x50\x48\x50\105\170\x63\145\154\57\x41\165\164\157\154\157\x61\144\x65\x72\x2e\x70\x68\x70"; } class PHPExcel_Reader_SYLK extends PHPExcel_Reader_Abstract implements PHPExcel_Reader_IReader { private $inputEncoding = "\x41\x4e\123\111"; private $sheetIndex = 0; private $formats = array(); private $format = 0; public function __construct() { $this->readFilter = new PHPExcel_Reader_DefaultReadFilter(); } protected function isValidFormat() { goto Vhz7r; Vhz7r: $data = fread($this->fileHandle, 2048); goto Fzrn4; y4BD9: return true; goto kuNc6; Fzrn4: $delimiterCount = substr_count($data, "\73"); goto sQ5tG; sQ5tG: if ($delimiterCount < 1) { return false; } goto Shm30; F8uk5: if (substr($lines[0], 0, 4) != "\111\104\x3b\120") { return false; } goto y4BD9; Shm30: $lines = explode("\xa", $data); goto F8uk5; kuNc6: } public function setInputEncoding($pValue = "\101\x4e\123\111") { $this->inputEncoding = $pValue; return $this; } public function getInputEncoding() { return $this->inputEncoding; } public function listWorksheetInfo($pFilename) { goto DE5iW; RVZBY: $fileHandle = $this->fileHandle; goto rfLu2; DE5iW: $this->openFile($pFilename); goto CSVIR; Nfrb8: $worksheetInfo[0]["\x6c\141\x73\164\103\157\154\165\155\156\114\145\x74\x74\x65\162"] = "\x41"; goto uLOA8; yryMv: $worksheetInfo = array(); goto FbuVo; ZNrzE: $worksheetInfo[0]["\164\x6f\164\x61\x6c\103\x6f\x6c\165\155\x6e\x73"] = 0; goto UCYi_; UCYi_: $rowData = array(); goto mQkHl; X8FHh: fclose($fileHandle); goto yyGeb; mQkHl: $rowIndex = 0; goto BMHJr; RmuZc: $worksheetInfo[0]["\x6c\141\x73\164\103\157\154\165\155\x6e\114\x65\x74\x74\x65\x72"] = PHPExcel_Cell::stringFromColumnIndex($worksheetInfo[0]["\x6c\x61\x73\164\103\x6f\x6c\165\x6d\156\x49\156\144\x65\x78"]); goto gy0HG; yyGeb: return $worksheetInfo; goto mzOiw; CSVIR: if (!$this->isValidFormat()) { fclose($this->fileHandle); throw new PHPExcel_Reader_Exception($pFilename . "\40\151\163\40\x61\x6e\40\111\x6e\x76\x61\154\151\x64\40\x53\x70\162\145\141\144\x73\x68\x65\145\x74\x20\146\x69\x6c\x65\x2e"); } goto RVZBY; FbuVo: $worksheetInfo[0]["\x77\x6f\x72\153\x73\x68\x65\x65\x74\x4e\141\155\145"] = "\127\157\162\x6b\163\x68\x65\145\164"; goto Nfrb8; uLOA8: $worksheetInfo[0]["\154\x61\163\x74\103\x6f\154\x75\x6d\156\111\x6e\144\145\x78"] = 0; goto EHbxO; BMHJr: while (($rowData = fgets($fileHandle)) !== false) { $columnIndex = 0; $rowData = PHPExcel_Shared_String::SYLKtoUTF8($rowData); $rowData = explode("\11", str_replace("\302\xa4", "\73", str_replace("\x3b", "\x9", str_replace("\x3b\73", "\302\xa4", rtrim($rowData))))); $dataType = array_shift($rowData); if ($dataType == "\103") { foreach ($rowData as $rowDatum) { goto HgG50; HgG50: switch ($rowDatum[0]) { case "\x43": case "\130": $columnIndex = substr($rowDatum, 1) - 1; break; case "\122": case "\x59": $rowIndex = substr($rowDatum, 1); break; } goto nygGQ; nygGQ: $worksheetInfo[0]["\164\157\164\x61\154\x52\x6f\x77\163"] = max($worksheetInfo[0]["\x74\157\164\141\x6c\122\x6f\167\x73"], $rowIndex); goto o9JaC; o9JaC: $worksheetInfo[0]["\154\x61\163\164\103\157\x6c\x75\155\156\x49\x6e\x64\x65\170"] = max($worksheetInfo[0]["\154\141\x73\164\103\x6f\x6c\x75\155\156\111\x6e\x64\x65\170"], $columnIndex); goto BrTM_; BrTM_: } } } goto RmuZc; gy0HG: $worksheetInfo[0]["\164\157\x74\x61\x6c\x43\157\154\x75\155\x6e\x73"] = $worksheetInfo[0]["\x6c\141\163\164\x43\x6f\154\x75\x6d\x6e\111\x6e\x64\145\x78"] + 1; goto X8FHh; rfLu2: rewind($fileHandle); goto yryMv; EHbxO: $worksheetInfo[0]["\x74\x6f\x74\141\x6c\x52\x6f\167\x73"] = 0; goto ZNrzE; mzOiw: } public function load($pFilename) { $objPHPExcel = new PHPExcel(); return $this->loadIntoExisting($pFilename, $objPHPExcel); } public function loadIntoExisting($pFilename, PHPExcel $objPHPExcel) { goto s2hxV; Xkyuh: $objPHPExcel->setActiveSheetIndex($this->sheetIndex); goto UiAGs; lMNgN: rewind($fileHandle); goto UjAp6; uZhDw: $column = $row = ''; goto xmzcV; nrezC: if (!$this->isValidFormat()) { fclose($this->fileHandle); throw new PHPExcel_Reader_Exception($pFilename . "\40\x69\x73\40\x61\x6e\40\111\156\166\x61\x6c\x69\144\x20\x53\160\162\145\141\x64\x73\150\145\x65\x74\40\146\x69\154\145\x2e"); } goto df0Kc; UiAGs: $fromFormats = array("\134\55", "\x5c\40"); goto EbETG; EbETG: $toFormats = array("\x2d", "\40"); goto IofAq; df0Kc: $fileHandle = $this->fileHandle; goto lMNgN; IofAq: $rowData = array(); goto uZhDw; UjAp6: while ($objPHPExcel->getSheetCount() <= $this->sheetIndex) { $objPHPExcel->createSheet(); } goto Xkyuh; PEExW: fclose($fileHandle); goto jfTwQ; s2hxV: $this->openFile($pFilename); goto nrezC; xmzcV: while (($rowData = fgets($fileHandle)) !== false) { $rowData = PHPExcel_Shared_String::SYLKtoUTF8($rowData); $rowData = explode("\11", str_replace("\302\xa4", "\73", str_replace("\x3b", "\11", str_replace("\x3b\x3b", "\302\244", rtrim($rowData))))); $dataType = array_shift($rowData); if ($dataType == "\x50") { goto EWmvI; OCByT: $this->formats["\x50" . $this->format++] = $formatArray; goto Zgx7d; EWmvI: $formatArray = array(); goto zmUwN; zmUwN: foreach ($rowData as $rowDatum) { switch ($rowDatum[0]) { case "\x50": $formatArray["\x6e\165\155\142\x65\x72\x66\157\162\x6d\x61\x74"]["\x63\x6f\x64\145"] = str_replace($fromFormats, $toFormats, substr($rowDatum, 1)); break; case "\105": case "\x46": $formatArray["\146\x6f\x6e\164"]["\156\x61\155\x65"] = substr($rowDatum, 1); break; case "\x4c": $formatArray["\x66\x6f\x6e\164"]["\163\x69\x7a\x65"] = substr($rowDatum, 1); break; case "\x53": goto cs4Vs; cs4Vs: $styleSettings = substr($rowDatum, 1); goto m3mgy; m3mgy: for ($i = 0; $i < strlen($styleSettings); ++$i) { switch ($styleSettings[$i]) { case "\111": $formatArray["\x66\157\156\164"]["\x69\x74\141\154\151\143"] = true; break; case "\x44": $formatArray["\x66\x6f\x6e\x74"]["\x62\x6f\154\144"] = true; break; case "\x54": $formatArray["\x62\x6f\x72\x64\145\x72\x73"]["\x74\157\x70"]["\x73\164\x79\154\145"] = PHPExcel_Style_Border::BORDER_THIN; break; case "\x42": $formatArray["\142\157\162\144\145\162\x73"]["\x62\157\x74\x74\x6f\155"]["\x73\164\171\154\x65"] = PHPExcel_Style_Border::BORDER_THIN; break; case "\x4c": $formatArray["\x62\x6f\x72\x64\145\x72\x73"]["\154\x65\x66\164"]["\x73\x74\171\x6c\x65"] = PHPExcel_Style_Border::BORDER_THIN; break; case "\122": $formatArray["\142\157\162\144\145\162\x73"]["\x72\151\x67\x68\x74"]["\163\164\x79\154\145"] = PHPExcel_Style_Border::BORDER_THIN; break; } } goto qlw2Z; qlw2Z: break; goto nnG1Y; nnG1Y: } } goto OCByT; Zgx7d: } elseif ($dataType == "\x43") { goto fhnB5; sgGRY: foreach ($rowData as $rowDatum) { switch ($rowDatum[0]) { case "\x43": case "\x58": $column = substr($rowDatum, 1); break; case "\x52": case "\131": $row = substr($rowDatum, 1); break; case "\113": $cellData = substr($rowDatum, 1); break; case "\x45": goto QpxJZ; jP9Wq: $hasCalculatedValue = true; goto d71mw; d71mw: break; goto TM1pY; uO7rn: foreach ($temp as &$value) { if ($key = !$key) { goto eyDNy; O7kqk: foreach ($cellReferences as $cellReference) { goto Wgtgw; ZN1dv: $value = substr_replace($value, $A1CellReference, $cellReference[0][1], strlen($cellReference[0][0])); goto haVyh; PmRUN: if ($rowReference[0] == "\x5b") { $rowReference = $row + trim($rowReference, "\x5b\135"); } goto Lc55E; Wgtgw: $rowReference = $cellReference[2][0]; goto We3L3; Xz0fo: if ($columnReference == '') { $columnReference = $column; } goto dyL90; RMCs5: $A1CellReference = PHPExcel_Cell::stringFromColumnIndex($columnReference - 1) . $rowReference; goto ZN1dv; dyL90: if ($columnReference[0] == "\x5b") { $columnReference = $column + trim($columnReference, "\133\135"); } goto RMCs5; Lc55E: $columnReference = $cellReference[4][0]; goto Xz0fo; We3L3: if ($rowReference == '') { $rowReference = $row; } goto PmRUN; haVyh: } goto w7owm; eyDNy: preg_match_all("\x2f\50\x52\50\x5c\133\x3f\55\77\134\144\x2a\x5c\135\77\51\x29\50\103\50\x5c\x5b\77\55\77\134\x64\52\x5c\135\77\51\x29\57", $value, $cellReferences, PREG_SET_ORDER + PREG_OFFSET_CAPTURE); goto oa0AR; oa0AR: $cellReferences = array_reverse($cellReferences); goto O7kqk; w7owm: } } goto Fz6Oz; Y8o2b: $key = false; goto uO7rn; SyHMI: $cellDataFormula = implode("\x22", $temp); goto jP9Wq; qpP7k: $temp = explode("\x22", $cellDataFormula); goto Y8o2b; Fz6Oz: unset($value); goto SyHMI; QpxJZ: $cellDataFormula = "\75" . substr($rowDatum, 1); goto qpP7k; TM1pY: } } goto UGQN2; aVsQL: $cellData = $cellDataFormula = ''; goto sgGRY; Mncer: $cellData = PHPExcel_Calculation::unwrapResult($cellData); goto vtB11; fhnB5: $hasCalculatedValue = false; goto aVsQL; UGQN2: $columnLetter = PHPExcel_Cell::stringFromColumnIndex($column - 1); goto Mncer; vtB11: $objPHPExcel->getActiveSheet()->getCell($columnLetter . $row)->setValue($hasCalculatedValue ? $cellDataFormula : $cellData); goto YmSoF; YmSoF: if ($hasCalculatedValue) { $cellData = PHPExcel_Calculation::unwrapResult($cellData); $objPHPExcel->getActiveSheet()->getCell($columnLetter . $row)->setCalculatedValue($cellData); } goto fW164; fW164: } elseif ($dataType == "\106") { goto Ph0Rl; ASUw0: $styleData = array(); goto PTCnw; Ph0Rl: $formatStyle = $columnWidth = $styleSettings = ''; goto ASUw0; PTCnw: foreach ($rowData as $rowDatum) { switch ($rowDatum[0]) { case "\x43": case "\130": $column = substr($rowDatum, 1); break; case "\122": case "\131": $row = substr($rowDatum, 1); break; case "\120": $formatStyle = $rowDatum; break; case "\x57": list($startCol, $endCol, $columnWidth) = explode("\x20", substr($rowDatum, 1)); break; case "\123": goto X31DZ; X31DZ: $styleSettings = substr($rowDatum, 1); goto hgtcI; v40V6: break; goto sRRLz; hgtcI: for ($i = 0; $i < strlen($styleSettings); ++$i) { switch ($styleSettings[$i]) { case "\111": $styleData["\x66\157\x6e\164"]["\x69\164\141\154\151\143"] = true; break; case "\104": $styleData["\x66\x6f\x6e\x74"]["\x62\157\154\x64"] = true; break; case "\x54": $styleData["\142\157\162\144\x65\x72\x73"]["\164\x6f\160"]["\163\164\171\x6c\x65"] = PHPExcel_Style_Border::BORDER_THIN; break; case "\102": $styleData["\142\157\x72\144\145\x72\x73"]["\x62\157\x74\x74\157\155"]["\x73\x74\171\x6c\x65"] = PHPExcel_Style_Border::BORDER_THIN; break; case "\x4c": $styleData["\142\157\162\144\145\x72\163"]["\x6c\x65\146\164"]["\163\164\171\154\145"] = PHPExcel_Style_Border::BORDER_THIN; break; case "\122": $styleData["\142\157\162\x64\145\162\163"]["\162\151\x67\x68\x74"]["\x73\x74\171\154\x65"] = PHPExcel_Style_Border::BORDER_THIN; break; } } goto v40V6; sRRLz: } } goto fcSsb; iE3BI: if ($columnWidth > '') { if ($startCol == $endCol) { $startCol = PHPExcel_Cell::stringFromColumnIndex($startCol - 1); $objPHPExcel->getActiveSheet()->getColumnDimension($startCol)->setWidth($columnWidth); } else { goto UKXTm; Mk2Y9: $objPHPExcel->getActiveSheet()->getColumnDimension($startCol)->setWidth($columnWidth); goto hEjDg; hEjDg: do { $objPHPExcel->getActiveSheet()->getColumnDimension(++$startCol)->setWidth($columnWidth); } while ($startCol != $endCol); goto eSdER; vz4Xt: $endCol = PHPExcel_Cell::stringFromColumnIndex($endCol - 1); goto Mk2Y9; UKXTm: $startCol = PHPExcel_Cell::stringFromColumnIndex($startCol - 1); goto vz4Xt; eSdER: } } goto KEjrH; fcSsb: if ($formatStyle > '' && $column > '' && $row > '') { $columnLetter = PHPExcel_Cell::stringFromColumnIndex($column - 1); if (isset($this->formats[$formatStyle])) { $objPHPExcel->getActiveSheet()->getStyle($columnLetter . $row)->applyFromArray($this->formats[$formatStyle]); } } goto OyBwu; OyBwu: if (!empty($styleData) && $column > '' && $row > '') { $columnLetter = PHPExcel_Cell::stringFromColumnIndex($column - 1); $objPHPExcel->getActiveSheet()->getStyle($columnLetter . $row)->applyFromArray($styleData); } goto iE3BI; KEjrH: } else { foreach ($rowData as $rowDatum) { switch ($rowDatum[0]) { case "\103": case "\130": $column = substr($rowDatum, 1); break; case "\122": case "\131": $row = substr($rowDatum, 1); break; } } } } goto PEExW; jfTwQ: return $objPHPExcel; goto l43uK; l43uK: } public function getSheetIndex() { return $this->sheetIndex; } public function setSheetIndex($pValue = 0) { $this->sheetIndex = $pValue; return $this; } }
