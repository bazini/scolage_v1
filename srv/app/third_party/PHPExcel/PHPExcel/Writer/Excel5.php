<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Writer_Excel5 extends PHPExcel_Writer_Abstract implements PHPExcel_Writer_IWriter { private $phpExcel; private $strTotal = 0; private $strUnique = 0; private $strTable = array(); private $colors; private $parser; private $IDCLs; private $summaryInformation; private $documentSummaryInformation; public function __construct(PHPExcel $phpExcel) { $this->phpExcel = $phpExcel; $this->parser = new PHPExcel_Writer_Excel5_Parser(); } public function save($pFilename = null) { goto rL7aT; ElfDI: $this->buildWorkbookEscher(); goto WGaCs; UzYze: $this->summaryInformation = $this->writeSummaryInformation(); goto YaJMQ; rL7aT: $this->phpExcel->garbageCollect(); goto dBtlC; YaJMQ: if (isset($this->summaryInformation) && !empty($this->summaryInformation)) { $OLE_SummaryInformation = new PHPExcel_Shared_OLE_PPS_File(PHPExcel_Shared_OLE::Asc2Ucs(chr(5) . "\x53\165\155\155\141\162\171\x49\156\146\x6f\162\x6d\141\164\151\x6f\156")); $OLE_SummaryInformation->append($this->summaryInformation); } goto TryIK; CleJK: if (isset($OLE_DocumentSummaryInformation)) { $arrRootData[] = $OLE_DocumentSummaryInformation; } goto a0e4_; HSJ2c: PHPExcel_Calculation::getInstance($this->phpExcel)->getDebugLog()->setWriteDebugLog($saveDebugLog); goto gNoHH; a0e4_: $root = new PHPExcel_Shared_OLE_PPS_Root(time(), time(), $arrRootData); goto J_qql; WGaCs: $cellXfCollection = $this->phpExcel->getCellXfCollection(); goto c3c1L; Y8DeV: $OLE = new PHPExcel_Shared_OLE_PPS_File(PHPExcel_Shared_OLE::Asc2Ucs($workbookStreamName)); goto J8Uim; EvEu9: $countSheets = $this->phpExcel->getSheetCount(); goto xm791; c3c1L: for ($i = 0; $i < 15; ++$i) { $this->writerWorkbook->addXfWriter($cellXfCollection[0], true); } goto QCG1P; cK4OA: $this->writerWorkbook = new PHPExcel_Writer_Excel5_Workbook($this->phpExcel, $this->strTotal, $this->strUnique, $this->strTable, $this->colors, $this->parser); goto EvEu9; ZvNN4: if (isset($this->documentSummaryInformation) && !empty($this->documentSummaryInformation)) { $OLE_DocumentSummaryInformation = new PHPExcel_Shared_OLE_PPS_File(PHPExcel_Shared_OLE::Asc2Ucs(chr(5) . "\104\157\x63\x75\x6d\145\x6e\164\x53\165\x6d\x6d\141\x72\171\x49\x6e\x66\x6f\162\x6d\141\164\x69\x6f\156")); $OLE_DocumentSummaryInformation->append($this->documentSummaryInformation); } goto UzYze; PpaRd: for ($i = 0; $i < $countSheets; ++$i) { $OLE->append($this->writerWorksheets[$i]->getData()); } goto cNlgE; l6G2o: $saveDateReturnType = PHPExcel_Calculation_Functions::getReturnDateType(); goto I2wq5; cNlgE: $this->documentSummaryInformation = $this->writeDocumentSummaryInformation(); goto ZvNN4; dBtlC: $saveDebugLog = PHPExcel_Calculation::getInstance($this->phpExcel)->getDebugLog()->getWriteDebugLog(); goto PeaCC; OWYxH: $workbookStreamName = "\x57\x6f\x72\153\x62\157\157\x6b"; goto Y8DeV; PeaCC: PHPExcel_Calculation::getInstance($this->phpExcel)->getDebugLog()->setWriteDebugLog(false); goto l6G2o; TryIK: $arrRootData = array($OLE); goto ZLnZh; xm791: for ($i = 0; $i < $countSheets; ++$i) { $this->writerWorksheets[$i] = new PHPExcel_Writer_Excel5_Worksheet($this->strTotal, $this->strUnique, $this->strTable, $this->colors, $this->parser, $this->preCalculateFormulas, $this->phpExcel->getSheet($i)); } goto elyxd; J8Uim: $worksheetSizes = array(); goto kH5BS; kiEFH: $this->colors = array(); goto cK4OA; kH5BS: for ($i = 0; $i < $countSheets; ++$i) { $this->writerWorksheets[$i]->close(); $worksheetSizes[] = $this->writerWorksheets[$i]->_datasize; } goto SmHlZ; ZLnZh: if (isset($OLE_SummaryInformation)) { $arrRootData[] = $OLE_SummaryInformation; } goto CleJK; I2wq5: PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL); goto kiEFH; z8IWR: for ($i = 0; $i < $countSheets; ++$i) { foreach ($this->writerWorksheets[$i]->phpSheet->getCellCollection() as $cellID) { goto D5QIB; UAGe3: if ($cVal instanceof PHPExcel_RichText) { $elements = $cVal->getRichTextElements(); foreach ($elements as $element) { if ($element instanceof PHPExcel_RichText_Run) { $font = $element->getFont(); $this->writerWorksheets[$i]->fontHashIndex[$font->getHashCode()] = $this->writerWorkbook->addFont($font); } } } goto zYRgq; A5HMo: $cVal = $cell->getValue(); goto UAGe3; D5QIB: $cell = $this->writerWorksheets[$i]->phpSheet->getCell($cellID); goto A5HMo; zYRgq: } } goto OWYxH; QCG1P: foreach ($this->phpExcel->getCellXfCollection() as $style) { $this->writerWorkbook->addXfWriter($style, false); } goto z8IWR; SmHlZ: $OLE->append($this->writerWorkbook->writeWorkbook($worksheetSizes)); goto PpaRd; elyxd: $this->buildWorksheetEschers(); goto ElfDI; l_4J5: PHPExcel_Calculation_Functions::setReturnDateType($saveDateReturnType); goto HSJ2c; J_qql: $res = $root->save($pFilename); goto l_4J5; gNoHH: } public function setTempDir($pValue = '') { return $this; } private function buildWorksheetEschers() { goto sapSx; sapSx: $blipIndex = 0; goto j46Ou; j46Ou: $lastReducedSpId = 0; goto CBH5u; ulIZ1: foreach ($this->phpExcel->getAllsheets() as $sheet) { goto oe1rt; ZLsPR: foreach ($sheet->getDrawingCollection() as $drawing) { goto k0K0r; YxVIM: $lastSpId = $spId; goto hn8SE; honk2: $spId = $reducedSpId | $sheet->getParent()->getIndex($sheet) + 1 << 10; goto NtoIX; k9Nql: $spContainer->setEndOffsetY($twoAnchor["\x65\x6e\x64\117\146\x66\163\145\164\131"]); goto q_MlN; laCxi: $spContainer->setStartOffsetX($twoAnchor["\163\x74\x61\162\x74\117\x66\x66\x73\x65\164\130"]); goto kJUPa; Sb6Zj: $spContainer = new PHPExcel_Shared_Escher_DgContainer_SpgrContainer_SpContainer(); goto Km2kc; wl7gC: $height = $drawing->getHeight(); goto py8HM; C15_4: $lastReducedSpId = $reducedSpId; goto YxVIM; h06yG: ++$countShapes[$sheetIndex]; goto Sb6Zj; DIJI6: $spContainer->setSpFlag(0x2); goto kD92_; oXz56: $offsetX = $drawing->getOffsetX(); goto m1L0N; Km2kc: $spContainer->setSpType(0x4b); goto DIJI6; m1L0N: $offsetY = $drawing->getOffsetY(); goto zlZvW; w9GSf: $coordinates = $drawing->getCoordinates(); goto oXz56; kJUPa: $spContainer->setStartOffsetY($twoAnchor["\x73\x74\141\x72\x74\117\x66\x66\x73\145\164\x59"]); goto dSvep; q_MlN: $spgrContainer->addChild($spContainer); goto UcpLw; dSvep: $spContainer->setEndCoordinates($twoAnchor["\145\156\x64\103\x6f\157\x72\x64\x69\x6e\141\164\145\x73"]); goto a8yNT; hn8SE: $spContainer->setOPT(0x4104, $blipIndex); goto w9GSf; k0K0r: ++$blipIndex; goto h06yG; py8HM: $twoAnchor = PHPExcel_Shared_Excel5::oneAnchor2twoAnchor($sheet, $coordinates, $offsetX, $offsetY, $width, $height); goto sc1FS; kD92_: $reducedSpId = $countShapes[$sheetIndex]; goto honk2; a8yNT: $spContainer->setEndOffsetX($twoAnchor["\145\x6e\144\117\x66\x66\163\x65\x74\x58"]); goto k9Nql; NtoIX: $spContainer->setSpId($spId); goto C15_4; zlZvW: $width = $drawing->getWidth(); goto wl7gC; sc1FS: $spContainer->setStartCoordinates($twoAnchor["\x73\x74\141\162\x74\x43\157\157\x72\x64\x69\x6e\x61\164\145\163"]); goto laCxi; UcpLw: } goto S5Ui4; zr8Yx: if (count($sheet->getDrawingCollection()) == 0 && empty($filterRange)) { continue; } goto VEO1i; XmPIb: $spgrContainer->addChild($spContainer); goto B9jFS; KeXXG: $this->writerWorksheets[$sheetIndex]->setEscher($escher); goto T0pIK; IXRTE: $dgContainer->setLastSpId($lastSpId); goto KeXXG; S5Ui4: if (!empty($filterRange)) { goto oqDGG; J2eBZ: $iInc = $iNumColStart; goto rV0Z3; mQOnh: $iNumColStart = $rangeBounds[0][0]; goto dcBPa; oqDGG: $rangeBounds = PHPExcel_Cell::rangeBoundaries($filterRange); goto mQOnh; dcBPa: $iNumColEnd = $rangeBounds[1][0]; goto J2eBZ; rV0Z3: while ($iInc <= $iNumColEnd) { ++$countShapes[$sheetIndex]; $oDrawing = new PHPExcel_Worksheet_BaseDrawing(); $cDrawing = PHPExcel_Cell::stringFromColumnIndex($iInc - 1) . $rangeBounds[0][1]; $oDrawing->setCoordinates($cDrawing); $oDrawing->setWorksheet($sheet); $spContainer = new PHPExcel_Shared_Escher_DgContainer_SpgrContainer_SpContainer(); $spContainer->setSpType(0xc9); $spContainer->setSpFlag(0x1); $reducedSpId = $countShapes[$sheetIndex]; $spId = $reducedSpId | $sheet->getParent()->getIndex($sheet) + 1 << 10; $spContainer->setSpId($spId); $lastReducedSpId = $reducedSpId; $lastSpId = $spId; $spContainer->setOPT(0x7f, 0x1040104); $spContainer->setOPT(0xbf, 0x80008); $spContainer->setOPT(0x1bf, 0x10000); $spContainer->setOPT(0x1ff, 0x80000); $spContainer->setOPT(0x3bf, 0xa0000); $endCoordinates = PHPExcel_Cell::stringFromColumnIndex(PHPExcel_Cell::stringFromColumnIndex($iInc - 1)); $endCoordinates .= $rangeBounds[0][1] + 1; $spContainer->setStartCoordinates($cDrawing); $spContainer->setStartOffsetX(0); $spContainer->setStartOffsetY(0); $spContainer->setEndCoordinates($endCoordinates); $spContainer->setEndOffsetX(0); $spContainer->setEndOffsetY(0); $spgrContainer->addChild($spContainer); $iInc++; } goto A3TjC; A3TjC: } goto VBS0P; zBe5_: $dgContainer->setDgId($dgId); goto rFw2d; WHtAB: $filterRange = $sheet->getAutoFilter()->getRange(); goto zr8Yx; MZWuf: $escher = null; goto WHtAB; rFw2d: $escher->setDgContainer($dgContainer); goto Eism3; TlykL: $spContainer->setSpId($sheet->getParent()->getIndex($sheet) + 1 << 10); goto XmPIb; AMIyq: $spContainer->setSpType(0); goto TlykL; B9jFS: $countShapes[$sheetIndex] = 0; goto ZLsPR; VEO1i: $escher = new PHPExcel_Shared_Escher(); goto kpYqY; lT4zV: $dgId = $sheet->getParent()->getIndex($sheet) + 1; goto zBe5_; w24Jq: $dgContainer->setSpgrContainer($spgrContainer); goto OGXJr; OGXJr: $spContainer = new PHPExcel_Shared_Escher_DgContainer_SpgrContainer_SpContainer(); goto KnNbx; oe1rt: $sheetIndex = $sheet->getParent()->getIndex($sheet); goto MZWuf; KnNbx: $spContainer->setSpgr(true); goto AMIyq; Eism3: $spgrContainer = new PHPExcel_Shared_Escher_DgContainer_SpgrContainer(); goto w24Jq; kpYqY: $dgContainer = new PHPExcel_Shared_Escher_DgContainer(); goto lT4zV; VBS0P: $this->IDCLs[$dgId] = $lastReducedSpId; goto IXRTE; T0pIK: } goto VrLRd; CBH5u: $lastSpId = 0; goto ulIZ1; VrLRd: } private function buildWorkbookEscher() { goto CG5cz; wFABf: $totalCountShapes = 0; goto wL3ft; QCgal: $escher->setDggContainer($dggContainer); goto fQxAb; vioLh: if (!$found) { return; } goto ZTIx1; SZ09N: $bstoreContainer = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer(); goto RMOWY; wL3ft: $countDrawings = 0; goto VTWhX; ZTIx1: $escher = new PHPExcel_Shared_Escher(); goto MMhbW; MMhbW: $dggContainer = new PHPExcel_Shared_Escher_DggContainer(); goto QCgal; CG5cz: $escher = null; goto V4DgW; P6nlu: foreach ($this->phpExcel->getAllsheets() as $sheet) { foreach ($sheet->getDrawingCollection() as $drawing) { if ($drawing instanceof PHPExcel_Worksheet_Drawing) { goto HCod8; Zzwfs: list($imagesx, $imagesy, $imageFormat) = getimagesize($filename); goto NOJop; gPniE: $BSE->setBlip($blip); goto X3D2O; Mh0pp: $BSE->setBlipType($blipType); goto gPniE; EcnnQ: $blip->setData($blipData); goto qE_ha; HCod8: $filename = $drawing->getPath(); goto Zzwfs; qE_ha: $BSE = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE(); goto Mh0pp; NOJop: switch ($imageFormat) { case 1: goto LcNUm; zu2nX: ob_start(); goto QkV4y; LcNUm: $blipType = PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE::BLIPTYPE_PNG; goto zu2nX; Mxko2: break; goto nGI2k; aEhjR: $blipData = ob_get_contents(); goto HUI9J; HUI9J: ob_end_clean(); goto Mxko2; QkV4y: imagepng(imagecreatefromgif($filename)); goto aEhjR; nGI2k: case 2: goto Pj_4o; ER9DW: $blipData = file_get_contents($filename); goto VTQGB; Pj_4o: $blipType = PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE::BLIPTYPE_JPEG; goto ER9DW; VTQGB: break; goto T9kHx; T9kHx: case 3: goto Ueifz; Xr429: break; goto ekVHY; dsH8b: $blipData = file_get_contents($filename); goto Xr429; Ueifz: $blipType = PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE::BLIPTYPE_PNG; goto dsH8b; ekVHY: case 6: goto kALEV; t2vQU: $blipData = ob_get_contents(); goto X39ab; kALEV: $blipType = PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE::BLIPTYPE_PNG; goto h_jr1; h_jr1: ob_start(); goto J6cVw; X39ab: ob_end_clean(); goto nWEdy; nWEdy: break; goto urRyM; J6cVw: imagepng(PHPExcel_Shared_Drawing::imagecreatefrombmp($filename)); goto t2vQU; urRyM: default: continue 2; } goto iLD04; X3D2O: $bstoreContainer->addBSE($BSE); goto qSljL; iLD04: $blip = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE_Blip(); goto EcnnQ; qSljL: } elseif ($drawing instanceof PHPExcel_Worksheet_MemoryDrawing) { goto V4A0h; IYlL1: $blipData = ob_get_contents(); goto oCptc; oCptc: ob_end_clean(); goto LhQy9; xh1Pa: $blip->setData($blipData); goto u3Epw; MfxFA: $bstoreContainer->addBSE($BSE); goto lz0RO; V4A0h: switch ($drawing->getRenderingFunction()) { case PHPExcel_Worksheet_MemoryDrawing::RENDERING_JPEG: goto l2y4C; R7rQv: break; goto OLM3M; kYe0P: $renderingFunction = "\x69\155\x61\x67\x65\152\x70\145\x67"; goto R7rQv; l2y4C: $blipType = PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE::BLIPTYPE_JPEG; goto kYe0P; OLM3M: case PHPExcel_Worksheet_MemoryDrawing::RENDERING_GIF: case PHPExcel_Worksheet_MemoryDrawing::RENDERING_PNG: case PHPExcel_Worksheet_MemoryDrawing::RENDERING_DEFAULT: goto ILsyK; F6F2F: $renderingFunction = "\151\x6d\141\x67\x65\x70\156\x67"; goto dHOm4; dHOm4: break; goto dWocz; ILsyK: $blipType = PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE::BLIPTYPE_PNG; goto F6F2F; dWocz: } goto uq9OE; LhQy9: $blip = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE_Blip(); goto xh1Pa; u3Epw: $BSE = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE(); goto C0T8U; H_rvw: $BSE->setBlip($blip); goto MfxFA; C0T8U: $BSE->setBlipType($blipType); goto H_rvw; x2tI3: call_user_func($renderingFunction, $drawing->getImageResource()); goto IYlL1; uq9OE: ob_start(); goto x2tI3; lz0RO: } } } goto FMuhC; uZIIV: $dggContainer->setCSpSaved($totalCountShapes + $countDrawings); goto SZ09N; V4DgW: $found = false; goto tVulT; lQHQH: $dggContainer->setSpIdMax($spIdMax + 1); goto jZn5u; RMOWY: $dggContainer->setBstoreContainer($bstoreContainer); goto P6nlu; w8KDx: $spIdMax = 0; goto wFABf; tVulT: foreach ($this->phpExcel->getAllSheets() as $sheet) { if (count($sheet->getDrawingCollection()) > 0) { $found = true; break; } } goto vioLh; fQxAb: $dggContainer->setIDCLs($this->IDCLs); goto w8KDx; VTWhX: foreach ($this->phpExcel->getAllsheets() as $sheet) { $sheetCountShapes = 0; if (count($sheet->getDrawingCollection()) > 0) { ++$countDrawings; foreach ($sheet->getDrawingCollection() as $drawing) { goto kiUjS; IYN_k: $spId = $sheetCountShapes | $this->phpExcel->getIndex($sheet) + 1 << 10; goto l5KDV; kiUjS: ++$sheetCountShapes; goto HCUeM; l5KDV: $spIdMax = max($spId, $spIdMax); goto CmMxB; HCUeM: ++$totalCountShapes; goto IYN_k; CmMxB: } } } goto lQHQH; FMuhC: $this->writerWorkbook->setEscher($escher); goto OELmj; jZn5u: $dggContainer->setCDgSaved($countDrawings); goto uZIIV; OELmj: } private function writeDocumentSummaryInformation() { goto xV4KB; T_BV5: $dataProp .= pack("\166", 0x0); goto boPUF; k6Cyj: $dataSection_NumProps++; goto ippwO; qvkBR: $dataSection_NumProps++; goto YvGfu; vJc6W: $dataProp = pack("\166", 0x1); goto cvjWV; uPM0a: $data .= pack("\x56", 0x30); goto gDESD; HAl2W: $dataSection_NumProps++; goto vJc6W; qpvw4: $data .= pack("\126", $dataSection_Content_Offset); goto D34bq; D34bq: $data .= pack("\126", $dataSection_NumProps); goto ZFPEd; j2b6g: $dataProp .= pack("\166", 0x0); goto Isv6k; JeorN: $dataProp .= pack("\166", 0x13); goto MnNXl; nFt39: foreach ($dataSection as $dataProp) { goto nsKKh; MHSsn: if ($dataProp["\164\171\x70\145"]["\x64\141\x74\141"] == 0x2) { $dataSection_Content .= pack("\x56", $dataProp["\144\141\x74\141"]["\x64\x61\x74\141"]); $dataSection_Content_Offset += 4 + 4; } elseif ($dataProp["\x74\171\x70\145"]["\x64\141\164\x61"] == 0x3) { $dataSection_Content .= pack("\126", $dataProp["\x64\x61\164\141"]["\x64\141\164\141"]); $dataSection_Content_Offset += 4 + 4; } elseif ($dataProp["\x74\171\160\145"]["\x64\141\x74\141"] == 0xb) { if ($dataProp["\144\141\x74\x61"]["\x64\x61\x74\x61"] == false) { $dataSection_Content .= pack("\126", 0x0); } else { $dataSection_Content .= pack("\x56", 0x1); } $dataSection_Content_Offset += 4 + 4; } elseif ($dataProp["\x74\171\x70\x65"]["\x64\x61\164\x61"] == 0x1e) { goto qits9; mZeYM: $dataProp["\144\141\164\141"]["\144\141\164\x61"] = str_pad($dataProp["\144\x61\x74\141"]["\x64\x61\x74\x61"], $dataProp["\x64\141\x74\141"]["\154\x65\x6e\x67\164\x68"], chr(0), STR_PAD_RIGHT); goto WPy7_; HJf0C: $dataProp["\x64\141\164\x61"]["\x6c\x65\156\x67\164\150"] = $dataProp["\144\x61\x74\141"]["\154\145\156\x67\164\150"] + (4 - $dataProp["\144\x61\x74\x61"]["\x6c\145\x6e\147\164\150"] % 4 == 4 ? 0 : 4 - $dataProp["\144\141\x74\x61"]["\154\145\x6e\x67\x74\x68"] % 4); goto mZeYM; R6Uth: $dataProp["\144\x61\x74\141"]["\x6c\145\156\x67\164\x68"] += 1; goto HJf0C; SrVR7: $dataSection_Content .= $dataProp["\144\x61\x74\141"]["\x64\x61\164\141"]; goto Fwkkl; Fwkkl: $dataSection_Content_Offset += 4 + 4 + strlen($dataProp["\144\141\164\141"]["\x64\x61\x74\x61"]); goto lmZ3i; qits9: $dataProp["\x64\141\x74\141"]["\144\x61\x74\x61"] .= chr(0); goto R6Uth; WPy7_: $dataSection_Content .= pack("\126", $dataProp["\144\141\x74\141"]["\x6c\145\x6e\147\164\150"]); goto SrVR7; lmZ3i: } elseif ($dataProp["\164\171\160\145"]["\x64\x61\164\x61"] == 0x40) { $dataSection_Content .= $dataProp["\x64\x61\x74\141"]["\x64\x61\164\141"]; $dataSection_Content_Offset += 4 + 8; } else { $dataSection_Content .= $dataProp["\144\x61\x74\141"]["\144\x61\x74\x61"]; $dataSection_Content_Offset += 4 + $dataProp["\144\141\x74\141"]["\154\145\156\147\x74\x68"]; } goto rvjHd; nsKKh: $dataSection_Summary .= pack($dataProp["\163\165\x6d\x6d\141\x72\x79"]["\160\141\x63\153"], $dataProp["\163\165\x6d\x6d\x61\162\x79"]["\144\x61\x74\x61"]); goto b1WMR; b1WMR: $dataSection_Summary .= pack($dataProp["\x6f\146\x66\x73\145\x74"]["\160\x61\143\153"], $dataSection_Content_Offset); goto LqGQa; LqGQa: $dataSection_Content .= pack($dataProp["\164\x79\160\145"]["\x70\x61\143\x6b"], $dataProp["\x74\x79\160\x65"]["\x64\x61\164\x61"]); goto MHSsn; rvjHd: } goto qpvw4; cqF4y: $dataSection[] = array("\x73\165\155\155\x61\162\x79" => array("\160\x61\x63\153" => "\126", "\144\x61\164\x61" => 0xc), "\x6f\146\146\x73\x65\164" => array("\x70\x61\143\x6b" => "\x56"), "\x74\x79\x70\145" => array("\x70\x61\x63\153" => "\126", "\144\x61\x74\141" => 0x100c), "\144\x61\x74\141" => array("\144\x61\x74\141" => $dataProp, "\x6c\145\x6e\147\x74\x68" => strlen($dataProp))); goto LaIPB; Fuj4A: $data .= pack("\166", 0x0); goto MHC2N; ecy5K: $dataSection[] = array("\x73\x75\155\155\x61\162\171" => array("\x70\x61\143\x6b" => "\126", "\144\x61\x74\141" => 0x10), "\x6f\146\146\x73\x65\164" => array("\x70\x61\143\x6b" => "\126"), "\x74\171\x70\145" => array("\160\x61\143\x6b" => "\126", "\x64\141\x74\x61" => 0xb), "\x64\141\164\x61" => array("\144\141\164\141" => false)); goto qvkBR; me37T: $dataProp .= pack("\x76", 0x300); goto S5eYF; POYLS: $dataSection_NumProps = 0; goto nK9Iu; eG8Yu: $dataSection_Content = ''; goto Jfzy8; VrIy9: $dataProp .= pack("\x76", 0x0); goto cqF4y; phCK2: $dataSection[] = array("\163\x75\155\x6d\141\x72\x79" => array("\160\x61\143\x6b" => "\x56", "\144\x61\x74\x61" => 0xb), "\157\x66\146\x73\145\164" => array("\160\x61\x63\153" => "\126"), "\164\171\160\x65" => array("\160\141\143\153" => "\x56", "\x64\x61\164\141" => 0xb), "\x64\141\x74\x61" => array("\144\141\164\141" => false)); goto FjAl1; Jfzy8: $dataSection[] = array("\163\165\x6d\x6d\141\x72\171" => array("\x70\x61\143\x6b" => "\x56", "\x64\x61\x74\x61" => 0x1), "\157\146\x66\163\x65\164" => array("\160\141\x63\153" => "\x56"), "\x74\171\x70\x65" => array("\x70\141\x63\153" => "\126", "\x64\141\x74\141" => 0x2), "\144\141\x74\141" => array("\x64\x61\x74\141" => 1252)); goto SRXZr; boPUF: $dataProp .= pack("\166", 0x0); goto VrIy9; FjAl1: $dataSection_NumProps++; goto ecy5K; LaIPB: $dataSection_NumProps++; goto YfmR2; xV4KB: $data = pack("\166", 0xfffe); goto Fuj4A; xKle7: $dataSection[] = array("\163\165\155\x6d\141\x72\171" => array("\x70\141\x63\x6b" => "\126", "\144\141\x74\141" => 0xd), "\157\x66\x66\x73\x65\164" => array("\x70\141\x63\153" => "\126"), "\x74\x79\x70\145" => array("\160\x61\143\153" => "\126", "\x64\141\x74\x61" => 0x101e), "\x64\x61\164\141" => array("\x64\141\164\141" => $dataProp, "\x6c\x65\156\x67\x74\x68" => strlen($dataProp))); goto k6Cyj; cvjWV: $dataProp .= pack("\166", 0x0); goto Z0yes; MHC2N: $data .= pack("\x76", 0x106); goto kbHum; SRXZr: $dataSection_NumProps++; goto OKDYj; YfmR2: $dataSection_Content_Offset = 8 + $dataSection_NumProps * 8; goto nFt39; UyR74: return $data; goto DtnQV; KKSDc: $dataSection[] = array("\163\x75\155\x6d\141\x72\171" => array("\x70\x61\x63\153" => "\x56", "\x64\x61\164\x61" => 0x16), "\x6f\146\x66\163\145\164" => array("\160\141\x63\x6b" => "\126"), "\x74\171\160\x65" => array("\x70\x61\x63\x6b" => "\x56", "\144\x61\x74\141" => 0xb), "\x64\141\x74\141" => array("\x64\141\164\141" => false)); goto HAl2W; tMHwj: $dataProp .= "\106\x65\165\x69\x6c\x6c\145\163\x20\x64\x65\40\143\x61\154\x63\165\x6c"; goto me37T; SD5Ox: $dataProp .= "\127\157\162\x6b\163\150\145\x65\164" . chr(0); goto xKle7; Isv6k: $dataProp .= pack("\x76", 0x1e); goto tFDV3; tFDV3: $dataProp .= pack("\166", 0x0); goto JeorN; MnNXl: $dataProp .= pack("\166", 0x0); goto tMHwj; YvGfu: $dataSection[] = array("\163\165\x6d\155\x61\162\171" => array("\x70\x61\x63\x6b" => "\x56", "\144\141\x74\x61" => 0x13), "\157\x66\146\163\x65\x74" => array("\x70\141\143\x6b" => "\126"), "\164\x79\x70\x65" => array("\160\x61\143\153" => "\x56", "\144\x61\164\x61" => 0xb), "\144\141\164\x61" => array("\x64\x61\x74\141" => false)); goto hwK7N; GvN9T: $data .= pack("\166\x76\x76\x76\x76\166\166\x76", 0xd502, 0xd5cd, 0x2e9c, 0x101b, 0x9793, 0x8, 0x2c2b, 0xaef9); goto uPM0a; ippwO: $dataProp = pack("\x76", 0x2); goto j2b6g; z1yTB: $data .= pack("\126", 0x1); goto GvN9T; ZFPEd: $data .= $dataSection_Summary; goto OYX9x; CrS2R: $dataProp .= pack("\166", 0x100); goto T_BV5; OKDYj: if ($this->phpExcel->getProperties()->getCategory()) { goto I8hzR; dSWVQ: $dataSection_NumProps++; goto b21JI; kkVPF: $dataSection[] = array("\x73\165\x6d\x6d\141\x72\171" => array("\160\141\143\x6b" => "\126", "\x64\x61\164\x61" => 0x2), "\x6f\146\x66\x73\145\164" => array("\160\141\x63\x6b" => "\126"), "\x74\x79\160\x65" => array("\x70\x61\x63\153" => "\x56", "\144\141\x74\x61" => 0x1e), "\x64\x61\164\x61" => array("\144\x61\x74\x61" => $dataProp, "\154\x65\156\147\164\x68" => strlen($dataProp))); goto dSWVQ; I8hzR: $dataProp = $this->phpExcel->getProperties()->getCategory(); goto kkVPF; b21JI: } goto Shw1W; nK9Iu: $dataSection_Summary = ''; goto eG8Yu; Z0yes: $dataProp .= pack("\x76", 0xa); goto pDoER; kbHum: $data .= pack("\166", 0x2); goto G1BAh; OYX9x: $data .= $dataSection_Content; goto UyR74; Shw1W: $dataSection[] = array("\x73\x75\155\155\141\162\x79" => array("\x70\x61\x63\x6b" => "\x56", "\144\141\x74\141" => 0x17), "\157\x66\x66\x73\x65\164" => array("\160\141\143\x6b" => "\x56"), "\164\x79\x70\145" => array("\160\x61\x63\x6b" => "\126", "\x64\x61\164\x61" => 0x3), "\x64\141\164\x61" => array("\x70\x61\143\x6b" => "\126", "\x64\x61\164\141" => 0xc0000)); goto q_jSD; hwK7N: $dataSection_NumProps++; goto KKSDc; gDESD: $dataSection = array(); goto POYLS; q_jSD: $dataSection_NumProps++; goto phCK2; G1BAh: $data .= pack("\126\x56\126\126", 0x0, 0x0, 0x0, 0x0); goto z1yTB; S5eYF: $dataProp .= pack("\x76", 0x0); goto CrS2R; pDoER: $dataProp .= pack("\x76", 0x0); goto SD5Ox; DtnQV: } private function writeSummaryInformation() { goto yq08D; ipnL8: $dataSection_NumProps++; goto eH9ka; p3yJ0: $dataSection_Content = ''; goto vdL2g; ZFHT6: if ($this->phpExcel->getProperties()->getDescription()) { goto fnb0Y; usZsQ: $dataSection[] = array("\x73\165\x6d\155\141\x72\171" => array("\160\141\143\153" => "\126", "\x64\x61\164\141" => 0x6), "\x6f\x66\x66\x73\145\x74" => array("\x70\141\x63\x6b" => "\126"), "\x74\x79\x70\x65" => array("\x70\x61\x63\153" => "\126", "\144\x61\x74\x61" => 0x1e), "\x64\141\x74\141" => array("\x64\x61\164\x61" => $dataProp, "\x6c\x65\x6e\147\x74\150" => strlen($dataProp))); goto ptsYo; ptsYo: $dataSection_NumProps++; goto paAGt; fnb0Y: $dataProp = $this->phpExcel->getProperties()->getDescription(); goto usZsQ; paAGt: } goto p9pDG; p9pDG: if ($this->phpExcel->getProperties()->getLastModifiedBy()) { goto WbZG9; evRdF: $dataSection[] = array("\x73\165\155\155\x61\162\171" => array("\160\141\x63\x6b" => "\126", "\144\141\164\141" => 0x8), "\157\x66\146\163\x65\164" => array("\160\141\143\x6b" => "\126"), "\164\x79\160\x65" => array("\160\x61\x63\153" => "\x56", "\x64\x61\x74\x61" => 0x1e), "\144\141\x74\141" => array("\144\141\x74\x61" => $dataProp, "\x6c\x65\156\147\x74\x68" => strlen($dataProp))); goto dyscL; dyscL: $dataSection_NumProps++; goto WnMoZ; WbZG9: $dataProp = $this->phpExcel->getProperties()->getLastModifiedBy(); goto evRdF; WnMoZ: } goto hVRV4; hVRV4: if ($this->phpExcel->getProperties()->getCreated()) { goto wnygF; wnygF: $dataProp = $this->phpExcel->getProperties()->getCreated(); goto CaNqH; v29RG: $dataSection_NumProps++; goto mD90t; CaNqH: $dataSection[] = array("\x73\165\155\x6d\x61\162\171" => array("\160\141\143\x6b" => "\x56", "\x64\x61\164\141" => 0xc), "\x6f\146\146\x73\x65\x74" => array("\x70\x61\x63\153" => "\x56"), "\164\x79\x70\x65" => array("\x70\141\143\x6b" => "\x56", "\144\x61\164\141" => 0x40), "\x64\141\x74\141" => array("\x64\141\164\141" => PHPExcel_Shared_OLE::LocalDate2OLE($dataProp))); goto v29RG; mD90t: } goto xwAnF; iYYmG: if ($this->phpExcel->getProperties()->getKeywords()) { goto ZWJCs; y0uNw: $dataSection_NumProps++; goto Lz2C8; ZWJCs: $dataProp = $this->phpExcel->getProperties()->getKeywords(); goto sNHg0; sNHg0: $dataSection[] = array("\163\x75\x6d\x6d\141\162\171" => array("\160\x61\143\x6b" => "\x56", "\x64\141\164\x61" => 0x5), "\157\x66\146\163\x65\x74" => array("\x70\141\143\x6b" => "\126"), "\164\x79\x70\145" => array("\x70\x61\143\x6b" => "\126", "\x64\141\164\141" => 0x1e), "\x64\141\x74\141" => array("\144\141\164\x61" => $dataProp, "\x6c\145\156\147\x74\150" => strlen($dataProp))); goto y0uNw; Lz2C8: } goto ZFHT6; A6cBn: $dataSection_NumProps++; goto qJIFy; uDB1G: $data .= pack("\x76\x76\x76\166\x76\x76\x76\x76", 0x85e0, 0xf29f, 0x4ff9, 0x1068, 0x91ab, 0x8, 0x272b, 0xd9b3); goto DRtBL; eH9ka: $dataSection_Content_Offset = 8 + $dataSection_NumProps * 8; goto K_qWo; qxNMw: $data .= pack("\x56", $dataSection_NumProps); goto DQYxQ; qFG4_: if ($this->phpExcel->getProperties()->getCreator()) { goto mumsQ; Xbu1I: $dataSection[] = array("\163\x75\155\x6d\141\162\171" => array("\160\141\x63\153" => "\126", "\144\x61\164\141" => 0x4), "\x6f\x66\146\163\145\x74" => array("\160\x61\143\153" => "\x56"), "\x74\171\160\x65" => array("\160\x61\x63\153" => "\x56", "\x64\141\x74\141" => 0x1e), "\x64\141\164\x61" => array("\x64\x61\x74\x61" => $dataProp, "\x6c\145\156\x67\164\x68" => strlen($dataProp))); goto Z75gI; mumsQ: $dataProp = $this->phpExcel->getProperties()->getCreator(); goto Xbu1I; Z75gI: $dataSection_NumProps++; goto yRlvW; yRlvW: } goto iYYmG; DQYxQ: $data .= $dataSection_Summary; goto xAqHR; utnb2: $dataSection = array(); goto Y4NPp; Ii1W9: $data .= pack("\126", $dataSection_Content_Offset); goto qxNMw; Iyqzj: $dataSection[] = array("\163\165\155\155\141\x72\x79" => array("\160\141\x63\x6b" => "\126", "\144\x61\164\141" => 0x13), "\157\146\146\163\145\164" => array("\x70\141\x63\153" => "\x56"), "\x74\x79\x70\x65" => array("\160\x61\143\153" => "\126", "\x64\x61\x74\141" => 0x3), "\x64\x61\164\141" => array("\x64\141\x74\x61" => 0x0)); goto ipnL8; XJCW2: return $data; goto eh8X9; agRmZ: $data .= pack("\x76", 0x106); goto PFEsR; xwAnF: if ($this->phpExcel->getProperties()->getModified()) { goto F5wA9; F5wA9: $dataProp = $this->phpExcel->getProperties()->getModified(); goto wJoTZ; mwDMw: $dataSection_NumProps++; goto BE749; wJoTZ: $dataSection[] = array("\163\x75\155\155\x61\162\x79" => array("\160\141\143\153" => "\126", "\x64\x61\164\x61" => 0xd), "\157\146\x66\163\145\164" => array("\160\x61\143\x6b" => "\126"), "\x74\x79\160\x65" => array("\160\141\x63\x6b" => "\126", "\x64\x61\164\141" => 0x40), "\x64\x61\164\141" => array("\x64\x61\x74\x61" => PHPExcel_Shared_OLE::LocalDate2OLE($dataProp))); goto mwDMw; BE749: } goto Iyqzj; AX6eC: $data .= pack("\126", 0x1); goto uDB1G; DRtBL: $data .= pack("\x56", 0x30); goto utnb2; rzP8L: if ($this->phpExcel->getProperties()->getSubject()) { goto D7IdI; DfMCY: $dataSection_NumProps++; goto Pq5u3; D7IdI: $dataProp = $this->phpExcel->getProperties()->getSubject(); goto fX8vo; fX8vo: $dataSection[] = array("\x73\x75\x6d\x6d\x61\162\171" => array("\x70\141\143\x6b" => "\126", "\x64\141\164\x61" => 0x3), "\157\x66\146\x73\145\164" => array("\x70\141\143\153" => "\x56"), "\x74\x79\x70\145" => array("\x70\141\143\x6b" => "\126", "\144\141\164\x61" => 0x1e), "\x64\x61\x74\141" => array("\x64\141\164\141" => $dataProp, "\154\x65\x6e\x67\164\150" => strlen($dataProp))); goto DfMCY; Pq5u3: } goto qFG4_; PFEsR: $data .= pack("\x76", 0x2); goto nvwlq; xAqHR: $data .= $dataSection_Content; goto XJCW2; qJIFy: if ($this->phpExcel->getProperties()->getTitle()) { goto khxVa; khxVa: $dataProp = $this->phpExcel->getProperties()->getTitle(); goto PJBS1; PJBS1: $dataSection[] = array("\163\165\x6d\155\x61\x72\171" => array("\160\x61\x63\x6b" => "\126", "\x64\141\164\x61" => 0x2), "\157\x66\146\x73\145\164" => array("\160\141\x63\153" => "\126"), "\x74\171\x70\x65" => array("\160\141\x63\153" => "\126", "\x64\x61\x74\x61" => 0x1e), "\x64\x61\x74\141" => array("\x64\x61\164\x61" => $dataProp, "\154\x65\x6e\x67\164\150" => strlen($dataProp))); goto k4Bvh; k4Bvh: $dataSection_NumProps++; goto PbR4u; PbR4u: } goto rzP8L; lBeVD: $data .= pack("\x76", 0x0); goto agRmZ; yq08D: $data = pack("\x76", 0xfffe); goto lBeVD; K_qWo: foreach ($dataSection as $dataProp) { goto dtQFi; hLWTo: $dataSection_Content .= pack($dataProp["\164\171\x70\145"]["\x70\x61\x63\x6b"], $dataProp["\164\x79\160\x65"]["\x64\141\164\141"]); goto HRE2q; HRE2q: if ($dataProp["\x74\171\x70\145"]["\x64\x61\164\141"] == 0x2) { $dataSection_Content .= pack("\x56", $dataProp["\x64\141\164\141"]["\144\141\164\x61"]); $dataSection_Content_Offset += 4 + 4; } elseif ($dataProp["\x74\171\160\145"]["\144\141\164\141"] == 0x3) { $dataSection_Content .= pack("\126", $dataProp["\x64\x61\164\x61"]["\144\141\x74\141"]); $dataSection_Content_Offset += 4 + 4; } elseif ($dataProp["\x74\x79\x70\145"]["\144\141\164\141"] == 0x1e) { goto Onrrp; Hc13A: $dataSection_Content_Offset += 4 + 4 + strlen($dataProp["\144\141\164\141"]["\x64\x61\x74\x61"]); goto wL8t8; iZMjy: $dataSection_Content .= $dataProp["\144\x61\x74\x61"]["\144\x61\164\141"]; goto Hc13A; XCT7b: $dataSection_Content .= pack("\x56", $dataProp["\x64\141\164\x61"]["\x6c\x65\156\x67\x74\150"]); goto iZMjy; Onrrp: $dataProp["\x64\x61\x74\x61"]["\144\141\x74\141"] .= chr(0); goto I9AFD; D64Dd: $dataProp["\x64\x61\x74\x61"]["\x64\141\x74\141"] = str_pad($dataProp["\x64\x61\164\x61"]["\x64\x61\x74\x61"], $dataProp["\x64\x61\164\x61"]["\x6c\145\156\147\164\150"], chr(0), STR_PAD_RIGHT); goto XCT7b; I9AFD: $dataProp["\144\x61\x74\141"]["\154\x65\156\x67\x74\x68"] += 1; goto U8T5D; U8T5D: $dataProp["\x64\141\x74\141"]["\154\x65\156\x67\164\x68"] = $dataProp["\x64\141\164\141"]["\x6c\145\156\147\164\x68"] + (4 - $dataProp["\144\141\x74\x61"]["\154\x65\156\147\164\150"] % 4 == 4 ? 0 : 4 - $dataProp["\x64\141\164\141"]["\x6c\145\156\x67\164\150"] % 4); goto D64Dd; wL8t8: } elseif ($dataProp["\164\171\x70\145"]["\x64\x61\x74\141"] == 0x40) { $dataSection_Content .= $dataProp["\144\x61\x74\x61"]["\144\141\x74\x61"]; $dataSection_Content_Offset += 4 + 8; } else { } goto pDf3_; dtQFi: $dataSection_Summary .= pack($dataProp["\163\x75\155\155\141\162\x79"]["\160\x61\143\x6b"], $dataProp["\163\165\x6d\155\x61\x72\171"]["\144\141\x74\141"]); goto o_t3T; o_t3T: $dataSection_Summary .= pack($dataProp["\x6f\x66\146\x73\145\x74"]["\x70\141\x63\153"], $dataSection_Content_Offset); goto hLWTo; pDf3_: } goto Ii1W9; Y4NPp: $dataSection_NumProps = 0; goto BNm0P; nvwlq: $data .= pack("\126\126\126\x56", 0x0, 0x0, 0x0, 0x0); goto AX6eC; vdL2g: $dataSection[] = array("\x73\165\155\155\x61\x72\171" => array("\160\x61\143\153" => "\126", "\x64\x61\164\141" => 0x1), "\157\x66\x66\x73\x65\164" => array("\x70\141\x63\x6b" => "\x56"), "\164\x79\160\145" => array("\160\x61\143\x6b" => "\x56", "\144\141\164\141" => 0x2), "\x64\141\x74\141" => array("\x64\x61\164\141" => 1252)); goto A6cBn; BNm0P: $dataSection_Summary = ''; goto p3yJ0; eh8X9: } }
