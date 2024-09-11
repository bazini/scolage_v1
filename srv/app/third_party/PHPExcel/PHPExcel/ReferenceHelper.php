<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_ReferenceHelper { const REFHELPER_REGEXP_CELLREF = "\x28\50\x5c\x77\52\174\47\x5b\136\41\x5d\x2a\x27\51\41\51\x3f\50\x3f\x3c\x21\133\x3a\x61\55\172\134\44\x5d\51\50\134\x24\x3f\133\x61\x2d\172\x5d\173\61\x2c\x33\x7d\x5c\44\x3f\x5c\144\x2b\51\50\x3f\x3d\133\x5e\72\41\x5c\144\x27\135\x29"; const REFHELPER_REGEXP_CELLRANGE = "\50\x28\x5c\167\52\x7c\x27\133\136\x21\135\52\47\x29\x21\x29\77\50\x5c\44\x3f\x5b\x61\x2d\172\x5d\x7b\61\54\63\x7d\134\x24\77\x5c\x64\53\x29\x3a\x28\x5c\44\x3f\133\x61\55\x7a\135\x7b\x31\x2c\63\175\x5c\44\x3f\134\144\53\51"; const REFHELPER_REGEXP_ROWRANGE = "\x28\50\134\167\52\174\x27\x5b\x5e\x21\x5d\x2a\47\x29\41\51\x3f\50\134\x24\77\134\144\x2b\51\x3a\x28\134\44\77\x5c\144\x2b\51"; const REFHELPER_REGEXP_COLRANGE = "\50\x28\x5c\x77\52\174\x27\133\136\41\x5d\x2a\x27\x29\41\x29\77\50\x5c\x24\x3f\133\141\55\x7a\x5d\x7b\61\54\x33\175\51\x3a\50\134\44\x3f\x5b\x61\x2d\172\x5d\173\x31\54\63\175\51"; private static $instance; public static function getInstance() { if (!isset(self::$instance) || self::$instance === null) { self::$instance = new PHPExcel_ReferenceHelper(); } return self::$instance; } protected function __construct() { } public static function columnSort($a, $b) { return strcasecmp(strlen($a) . $a, strlen($b) . $b); } public static function columnReverseSort($a, $b) { return 1 - strcasecmp(strlen($a) . $a, strlen($b) . $b); } public static function cellSort($a, $b) { goto LDpcI; FZx0P: return $ar < $br ? -1 : 1; goto lykqv; gC0cY: if ($ar == $br) { return strcasecmp(strlen($ac) . $ac, strlen($bc) . $bc); } goto FZx0P; LDpcI: sscanf($a, "\x25\133\x41\x2d\132\135\x25\x64", $ac, $ar); goto QG6Hs; QG6Hs: sscanf($b, "\45\x5b\x41\x2d\132\x5d\x25\144", $bc, $br); goto gC0cY; lykqv: } public static function cellReverseSort($a, $b) { goto Bkg97; Bkg97: sscanf($a, "\45\x5b\101\55\132\x5d\x25\144", $ac, $ar); goto fm4xy; toTf5: if ($ar == $br) { return 1 - strcasecmp(strlen($ac) . $ac, strlen($bc) . $bc); } goto UK1Fb; UK1Fb: return $ar < $br ? 1 : -1; goto Sjfes; fm4xy: sscanf($b, "\x25\133\101\x2d\x5a\135\45\x64", $bc, $br); goto toTf5; Sjfes: } private static function cellAddressInDeleteRange($cellAddress, $beforeRow, $pNumRows, $beforeColumnIndex, $pNumCols) { goto SywE3; jxu5b: if ($pNumRows < 0 && $cellRow >= $beforeRow + $pNumRows && $cellRow < $beforeRow) { return true; } elseif ($pNumCols < 0 && $cellColumnIndex >= $beforeColumnIndex + $pNumCols && $cellColumnIndex < $beforeColumnIndex) { return true; } goto aTFSC; MYEXF: $cellColumnIndex = PHPExcel_Cell::columnIndexFromString($cellColumn); goto jxu5b; aTFSC: return false; goto tlb2S; SywE3: list($cellColumn, $cellRow) = PHPExcel_Cell::coordinateFromString($cellAddress); goto MYEXF; tlb2S: } protected function adjustPageBreaks(PHPExcel_Worksheet $pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { goto B8kr4; jnA1u: $pNumCols > 0 || $pNumRows > 0 ? uksort($aBreaks, array("\x50\110\120\105\170\143\145\154\137\122\x65\146\145\162\x65\x6e\143\x65\110\145\154\x70\x65\x72", "\x63\x65\x6c\154\x52\145\166\145\162\163\x65\123\157\162\x74")) : uksort($aBreaks, array("\x50\110\120\x45\x78\143\x65\x6c\137\x52\x65\x66\x65\x72\x65\156\143\x65\x48\x65\154\x70\145\x72", "\x63\145\154\x6c\x53\x6f\x72\164")); goto f66LM; f66LM: foreach ($aBreaks as $key => $value) { if (self::cellAddressInDeleteRange($key, $beforeRow, $pNumRows, $beforeColumnIndex, $pNumCols)) { $pSheet->setBreak($key, PHPExcel_Worksheet::BREAK_NONE); } else { $newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows); if ($key != $newReference) { $pSheet->setBreak($newReference, $value)->setBreak($key, PHPExcel_Worksheet::BREAK_NONE); } } } goto DCUO5; B8kr4: $aBreaks = $pSheet->getBreaks(); goto jnA1u; DCUO5: } protected function adjustComments($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { goto zPoqK; lhYnK: $aNewComments = array(); goto QrAkM; zPoqK: $aComments = $pSheet->getComments(); goto lhYnK; QrAkM: foreach ($aComments as $key => &$value) { if (!self::cellAddressInDeleteRange($key, $beforeRow, $pNumRows, $beforeColumnIndex, $pNumCols)) { $newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows); $aNewComments[$newReference] = $value; } } goto Ea19v; Ea19v: $pSheet->setComments($aNewComments); goto mSgRB; mSgRB: } protected function adjustHyperlinks($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { goto qWrvv; m65BU: $pNumCols > 0 || $pNumRows > 0 ? uksort($aHyperlinkCollection, array("\120\x48\120\x45\170\143\x65\x6c\137\122\145\x66\145\162\145\x6e\x63\145\110\x65\154\x70\145\x72", "\143\145\154\x6c\122\145\166\145\x72\x73\x65\x53\x6f\x72\x74")) : uksort($aHyperlinkCollection, array("\x50\x48\120\x45\x78\x63\145\154\x5f\122\145\146\145\162\x65\156\x63\145\x48\x65\154\x70\x65\162", "\143\x65\x6c\154\123\x6f\162\164")); goto hDwhX; hDwhX: foreach ($aHyperlinkCollection as $key => $value) { $newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows); if ($key != $newReference) { $pSheet->setHyperlink($newReference, $value); $pSheet->setHyperlink($key, null); } } goto XrMXQ; qWrvv: $aHyperlinkCollection = $pSheet->getHyperlinkCollection(); goto m65BU; XrMXQ: } protected function adjustDataValidations($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { goto Fhqf1; Fhqf1: $aDataValidationCollection = $pSheet->getDataValidationCollection(); goto XkRdm; XkRdm: $pNumCols > 0 || $pNumRows > 0 ? uksort($aDataValidationCollection, array("\120\x48\120\105\170\x63\145\x6c\x5f\x52\x65\146\145\x72\x65\156\143\145\110\x65\154\x70\x65\x72", "\143\x65\x6c\x6c\122\145\x76\x65\x72\x73\x65\x53\x6f\x72\x74")) : uksort($aDataValidationCollection, array("\120\x48\x50\105\170\143\145\154\x5f\122\145\x66\145\162\x65\x6e\x63\145\x48\x65\154\x70\x65\x72", "\143\145\x6c\x6c\123\157\x72\x74")); goto OECnZ; OECnZ: foreach ($aDataValidationCollection as $key => $value) { $newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows); if ($key != $newReference) { $pSheet->setDataValidation($newReference, $value); $pSheet->setDataValidation($key, null); } } goto vyrc0; vyrc0: } protected function adjustMergeCells($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { goto AkKwm; rgpqo: $pSheet->setMergeCells($aNewMergeCells); goto bFkei; AkKwm: $aMergeCells = $pSheet->getMergeCells(); goto X2q_e; ccRgW: foreach ($aMergeCells as $key => &$value) { $newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows); $aNewMergeCells[$newReference] = $newReference; } goto rgpqo; X2q_e: $aNewMergeCells = array(); goto ccRgW; bFkei: } protected function adjustProtectedCells($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { goto fGHf8; ZX9Vb: $pNumCols > 0 || $pNumRows > 0 ? uksort($aProtectedCells, array("\x50\110\120\x45\x78\x63\x65\154\137\x52\145\x66\x65\162\x65\x6e\143\145\110\x65\x6c\x70\145\162", "\143\145\x6c\x6c\122\145\166\x65\162\163\x65\x53\157\162\164")) : uksort($aProtectedCells, array("\120\x48\120\105\170\x63\x65\154\x5f\x52\145\146\x65\162\145\x6e\x63\145\x48\145\154\x70\145\x72", "\143\145\x6c\x6c\x53\157\162\x74")); goto IQEuj; IQEuj: foreach ($aProtectedCells as $key => $value) { $newReference = $this->updateCellReference($key, $pBefore, $pNumCols, $pNumRows); if ($key != $newReference) { $pSheet->protectCells($newReference, $value, true); $pSheet->unprotectCells($key); } } goto KgDFV; fGHf8: $aProtectedCells = $pSheet->getProtectedCells(); goto ZX9Vb; KgDFV: } protected function adjustColumnDimensions($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { $aColumnDimensions = array_reverse($pSheet->getColumnDimensions(), true); if (!empty($aColumnDimensions)) { foreach ($aColumnDimensions as $objColumnDimension) { goto Rp1hT; H1JWo: if ($objColumnDimension->getColumnIndex() != $newReference) { $objColumnDimension->setColumnIndex($newReference); } goto J_oTs; Rp1hT: $newReference = $this->updateCellReference($objColumnDimension->getColumnIndex() . "\x31", $pBefore, $pNumCols, $pNumRows); goto VEeD5; VEeD5: list($newReference) = PHPExcel_Cell::coordinateFromString($newReference); goto H1JWo; J_oTs: } $pSheet->refreshColumnDimensions(); } } protected function adjustRowDimensions($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows) { $aRowDimensions = array_reverse($pSheet->getRowDimensions(), true); if (!empty($aRowDimensions)) { goto GPTrU; GPTrU: foreach ($aRowDimensions as $objRowDimension) { goto Hlgtu; ZuT6d: if ($objRowDimension->getRowIndex() != $newReference) { $objRowDimension->setRowIndex($newReference); } goto EQ_zX; Wr_6F: list(, $newReference) = PHPExcel_Cell::coordinateFromString($newReference); goto ZuT6d; Hlgtu: $newReference = $this->updateCellReference("\101" . $objRowDimension->getRowIndex(), $pBefore, $pNumCols, $pNumRows); goto Wr_6F; EQ_zX: } goto T8wrb; e995J: for ($i = $beforeRow; $i <= $beforeRow - 1 + $pNumRows; ++$i) { $newDimension = $pSheet->getRowDimension($i); $newDimension->setRowHeight($copyDimension->getRowHeight()); $newDimension->setVisible($copyDimension->getVisible()); $newDimension->setOutlineLevel($copyDimension->getOutlineLevel()); $newDimension->setCollapsed($copyDimension->getCollapsed()); } goto ZPDlP; T8wrb: $pSheet->refreshRowDimensions(); goto ZdG3l; ZdG3l: $copyDimension = $pSheet->getRowDimension($beforeRow - 1); goto e995J; ZPDlP: } } public function insertNewBefore($pBefore = "\101\61", $pNumCols = 0, $pNumRows = 0, PHPExcel_Worksheet $pSheet = null) { goto GDbk6; PtpFf: while ($cellID = array_pop($aCellCollection)) { $cell = $pSheet->getCell($cellID); $cellIndex = PHPExcel_Cell::columnIndexFromString($cell->getColumn()); if ($cellIndex - 1 + $pNumCols < 0) { continue; } $newCoordinates = PHPExcel_Cell::stringFromColumnIndex($cellIndex - 1 + $pNumCols) . ($cell->getRow() + $pNumRows); if ($cellIndex >= $beforeColumnIndex && $cell->getRow() >= $beforeRow) { goto jfPBQ; rKVd5: if ($cell->getDataType() == PHPExcel_Cell_DataType::TYPE_FORMULA) { $pSheet->getCell($newCoordinates)->setValue($this->updateFormulaReferences($cell->getValue(), $pBefore, $pNumCols, $pNumRows, $pSheet->getTitle())); } else { $pSheet->getCell($newCoordinates)->setValue($cell->getValue()); } goto QyFGt; QyFGt: $pSheet->getCellCacheController()->deleteCacheData($cellID); goto WOE0c; jfPBQ: $pSheet->getCell($newCoordinates)->setXfIndex($cell->getXfIndex()); goto rKVd5; WOE0c: } else { if ($cell->getDataType() == PHPExcel_Cell_DataType::TYPE_FORMULA) { $cell->setValue($this->updateFormulaReferences($cell->getValue(), $pBefore, $pNumCols, $pNumRows, $pSheet->getTitle())); } } } goto rdAa0; oOE6V: if (count($pSheet->getParent()->getNamedRanges()) > 0) { foreach ($pSheet->getParent()->getNamedRanges() as $namedRange) { if ($namedRange->getWorksheet()->getHashCode() == $pSheet->getHashCode()) { $namedRange->setRange($this->updateCellReference($namedRange->getRange(), $pBefore, $pNumCols, $pNumRows)); } } } goto u6Fgi; df1As: $highestRow = $pSheet->getHighestRow(); goto PSIpR; DVUSY: $this->adjustProtectedCells($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto YgmUJ; cz77g: if (!empty($autoFilterRange)) { if ($pNumCols != 0) { $autoFilterColumns = array_keys($autoFilter->getColumns()); if (count($autoFilterColumns) > 0) { goto XoRzR; XoRzR: sscanf($pBefore, "\45\x5b\x41\x2d\132\135\45\144", $column, $row); goto A0W8C; ACw61: list($rangeStart, $rangeEnd) = PHPExcel_Cell::rangeBoundaries($autoFilterRange); goto iW2FC; A0W8C: $columnIndex = PHPExcel_Cell::columnIndexFromString($column); goto ACw61; iW2FC: if ($columnIndex <= $rangeEnd[0]) { goto PGDJb; PGDJb: if ($pNumCols < 0) { goto YcHnx; YL3ex: $deleteCount = abs($pNumCols); goto QUb6j; QUb6j: for ($i = 1; $i <= $deleteCount; ++$i) { if (in_array(PHPExcel_Cell::stringFromColumnIndex($deleteColumn), $autoFilterColumns)) { $autoFilter->clearColumn(PHPExcel_Cell::stringFromColumnIndex($deleteColumn)); } ++$deleteColumn; } goto kgb80; YcHnx: $deleteColumn = $columnIndex + $pNumCols - 1; goto YL3ex; kgb80: } goto OYAKX; OYAKX: $startCol = $columnIndex > $rangeStart[0] ? $columnIndex : $rangeStart[0]; goto Solwk; Solwk: if ($pNumCols > 0) { goto N4L08; ARPpO: $endColRef = $rangeEnd[0]; goto wGgyV; wH6DP: $startColRef = $startCol; goto ARPpO; EnHCr: $toColID = PHPExcel_Cell::stringFromColumnIndex($startCol + $pNumCols - 1); goto OyCdU; N4L08: $startColID = PHPExcel_Cell::stringFromColumnIndex($startCol - 1); goto EnHCr; OyCdU: $endColID = PHPExcel_Cell::stringFromColumnIndex($rangeEnd[0]); goto wH6DP; DrtEL: do { $autoFilter->shiftColumn(PHPExcel_Cell::stringFromColumnIndex($endColRef - 1), PHPExcel_Cell::stringFromColumnIndex($toColRef - 1)); --$endColRef; --$toColRef; } while ($startColRef <= $endColRef); goto s15a5; wGgyV: $toColRef = $rangeEnd[0] + $pNumCols; goto DrtEL; s15a5: } else { goto saVAX; saVAX: $startColID = PHPExcel_Cell::stringFromColumnIndex($startCol - 1); goto jHL3U; WHgGj: do { $autoFilter->shiftColumn($startColID, $toColID); ++$startColID; ++$toColID; } while ($startColID != $endColID); goto NVlbG; sh1_Z: $endColID = PHPExcel_Cell::stringFromColumnIndex($rangeEnd[0]); goto WHgGj; jHL3U: $toColID = PHPExcel_Cell::stringFromColumnIndex($startCol + $pNumCols - 1); goto sh1_Z; NVlbG: } goto m3cKk; m3cKk: } goto tcy_P; tcy_P: } } $pSheet->setAutoFilter($this->updateCellReference($autoFilterRange, $pBefore, $pNumCols, $pNumRows)); } goto at8_L; FxXmU: $this->adjustColumnDimensions($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto BhYPa; u6Fgi: $pSheet->garbageCollect(); goto OC792; rkIYn: $aDrawings = $pSheet->getDrawingCollection(); goto wvoAY; ljYgW: $this->adjustPageBreaks($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto sTWP_; WFFri: $this->adjustHyperlinks($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto v6c3o; GDbk6: $remove = $pNumCols < 0 || $pNumRows < 0; goto WCnoS; ZfIoZ: $autoFilterRange = $autoFilter->getRange(); goto cz77g; i5Tto: if ($pNumRows > 0 && $beforeRow - 1 > 0) { for ($i = $beforeColumnIndex - 1; $i <= PHPExcel_Cell::columnIndexFromString($highestColumn) - 1; ++$i) { $coordinate = PHPExcel_Cell::stringFromColumnIndex($i) . ($beforeRow - 1); if ($pSheet->cellExists($coordinate)) { goto tajul; sl81E: for ($j = $beforeRow; $j <= $beforeRow - 1 + $pNumRows; ++$j) { $pSheet->getCell(PHPExcel_Cell::stringFromColumnIndex($i) . $j)->setXfIndex($xfIndex); if ($conditionalStyles) { goto SLnCO; SLnCO: $cloned = array(); goto CuaeE; XLyjg: $pSheet->setConditionalStyles(PHPExcel_Cell::stringFromColumnIndex($i) . $j, $cloned); goto zFhwP; CuaeE: foreach ($conditionalStyles as $conditionalStyle) { $cloned[] = clone $conditionalStyle; } goto XLyjg; zFhwP: } } goto qzAs6; JtIxm: $conditionalStyles = $pSheet->conditionalStylesExists($coordinate) ? $pSheet->getConditionalStyles($coordinate) : false; goto sl81E; tajul: $xfIndex = $pSheet->getCell($coordinate)->getXfIndex(); goto JtIxm; qzAs6: } } } goto FxXmU; sTWP_: $this->adjustComments($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto WFFri; wJyNb: if ($pNumCols > 0 && $beforeColumnIndex - 2 > 0) { for ($i = $beforeRow; $i <= $highestRow - 1; ++$i) { $coordinate = PHPExcel_Cell::stringFromColumnIndex($beforeColumnIndex - 2) . $i; if ($pSheet->cellExists($coordinate)) { goto rxzis; nn8Qz: $conditionalStyles = $pSheet->conditionalStylesExists($coordinate) ? $pSheet->getConditionalStyles($coordinate) : false; goto DSxvg; rxzis: $xfIndex = $pSheet->getCell($coordinate)->getXfIndex(); goto nn8Qz; DSxvg: for ($j = $beforeColumnIndex - 1; $j <= $beforeColumnIndex - 2 + $pNumCols; ++$j) { $pSheet->getCellByColumnAndRow($j, $i)->setXfIndex($xfIndex); if ($conditionalStyles) { goto rjiLn; WRRNW: $pSheet->setConditionalStyles(PHPExcel_Cell::stringFromColumnIndex($j) . $i, $cloned); goto Vq6m7; rjiLn: $cloned = array(); goto XYzZt; XYzZt: foreach ($conditionalStyles as $conditionalStyle) { $cloned[] = clone $conditionalStyle; } goto WRRNW; Vq6m7: } } goto N34eQ; N34eQ: } } } goto i5Tto; mfcfk: $this->adjustMergeCells($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto DVUSY; PSIpR: if ($pNumCols < 0 && $beforeColumnIndex - 2 + $pNumCols > 0) { for ($i = 1; $i <= $highestRow - 1; ++$i) { for ($j = $beforeColumnIndex - 1 + $pNumCols; $j <= $beforeColumnIndex - 2; ++$j) { $coordinate = PHPExcel_Cell::stringFromColumnIndex($j) . $i; $pSheet->removeConditionalStyles($coordinate); if ($pSheet->cellExists($coordinate)) { $pSheet->getCell($coordinate)->setValueExplicit('', PHPExcel_Cell_DataType::TYPE_NULL); $pSheet->getCell($coordinate)->setXfIndex(0); } } } } goto N2SAy; v6c3o: $this->adjustDataValidations($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto mfcfk; uz6Tf: $highestRow = $pSheet->getHighestRow(); goto wJyNb; rdAa0: $highestColumn = $pSheet->getHighestColumn(); goto uz6Tf; THrhv: $highestColumn = $pSheet->getHighestColumn(); goto df1As; a_8ex: $beforeRow = 1; goto wlgjY; BhYPa: $this->adjustRowDimensions($pSheet, $pBefore, $beforeColumnIndex, $pNumCols, $beforeRow, $pNumRows); goto ljYgW; WCnoS: $aCellCollection = $pSheet->getCellCollection(); goto Z26E8; wvoAY: foreach ($aDrawings as $objDrawing) { $newReference = $this->updateCellReference($objDrawing->getCoordinates(), $pBefore, $pNumCols, $pNumRows); if ($objDrawing->getCoordinates() != $newReference) { $objDrawing->setCoordinates($newReference); } } goto oOE6V; zzxp0: if ($remove) { $aCellCollection = array_reverse($aCellCollection); } goto PtpFf; wlgjY: list($beforeColumn, $beforeRow) = PHPExcel_Cell::coordinateFromString($pBefore); goto TMzNA; at8_L: if ($pSheet->getFreezePane() != '') { $pSheet->freezePane($this->updateCellReference($pSheet->getFreezePane(), $pBefore, $pNumCols, $pNumRows)); } goto Qhi4i; TMzNA: $beforeColumnIndex = PHPExcel_Cell::columnIndexFromString($beforeColumn); goto THrhv; N2SAy: if ($pNumRows < 0 && $beforeRow - 1 + $pNumRows > 0) { for ($i = $beforeColumnIndex - 1; $i <= PHPExcel_Cell::columnIndexFromString($highestColumn) - 1; ++$i) { for ($j = $beforeRow + $pNumRows; $j <= $beforeRow - 1; ++$j) { $coordinate = PHPExcel_Cell::stringFromColumnIndex($i) . $j; $pSheet->removeConditionalStyles($coordinate); if ($pSheet->cellExists($coordinate)) { $pSheet->getCell($coordinate)->setValueExplicit('', PHPExcel_Cell_DataType::TYPE_NULL); $pSheet->getCell($coordinate)->setXfIndex(0); } } } } goto zzxp0; Z26E8: $beforeColumn = "\x41"; goto a_8ex; YgmUJ: $autoFilter = $pSheet->getAutoFilter(); goto ZfIoZ; Qhi4i: if ($pSheet->getPageSetup()->isPrintAreaSet()) { $pSheet->getPageSetup()->setPrintArea($this->updateCellReference($pSheet->getPageSetup()->getPrintArea(), $pBefore, $pNumCols, $pNumRows)); } goto rkIYn; OC792: } public function updateFormulaReferences($pFormula = '', $pBefore = "\x41\x31", $pNumCols = 0, $pNumRows = 0, $sheetName = '') { goto UD3fT; z9kdA: foreach ($formulaBlocks as &$formulaBlock) { if ($i = !$i) { goto vfG0D; TUFO2: if ($matchCount > 0) { foreach ($matches as $match) { goto rdixc; vTQdd: $modified3 = substr($this->updateCellReference($match[3] . "\44\x31", $pBefore, $pNumCols, $pNumRows), 0, -2); goto BqZ3a; aWUQp: if ($match[3] . "\x3a" . $match[4] !== $modified3 . "\x3a" . $modified4) { if ($match[2] == '' || trim($match[2], "\x27") == $sheetName) { goto QPb0G; RsMmH: $column = PHPExcel_Cell::columnIndexFromString(trim($match[3], "\x24")) + 100000; goto P9kxA; QPb0G: $toString = $match[2] > '' ? $match[2] . "\41" : ''; goto YB5hx; P9kxA: $row = 10000000; goto AS1nP; AS1nP: $cellIndex = $column . $row; goto G96a5; YB5hx: $toString .= $modified3 . "\72" . $modified4; goto RsMmH; ZtA_r: ++$adjustCount; goto ATrFb; G96a5: $newCellTokens[$cellIndex] = preg_quote($toString); goto VAGzK; VAGzK: $cellTokens[$cellIndex] = "\57\x28\x3f\x3c\41\133\x41\x2d\x5a\134\44\134\x21\x5d\x29" . preg_quote($fromString) . "\50\x3f\x21\133\101\55\132\135\x29\x2f\x69"; goto ZtA_r; ATrFb: } } goto W3v4D; DuUwx: $fromString .= $match[3] . "\x3a" . $match[4]; goto vTQdd; BqZ3a: $modified4 = substr($this->updateCellReference($match[4] . "\44\x31", $pBefore, $pNumCols, $pNumRows), 0, -2); goto aWUQp; rdixc: $fromString = $match[2] > '' ? $match[2] . "\41" : ''; goto DuUwx; W3v4D: } } goto RPCh7; IGLCV: if ($matchCount > 0) { foreach ($matches as $match) { goto DM0r8; Pd1Kh: $modified3 = $this->updateCellReference($match[3], $pBefore, $pNumCols, $pNumRows); goto VNT0W; GC9oE: $fromString .= $match[3] . "\72" . $match[4]; goto Pd1Kh; VNT0W: $modified4 = $this->updateCellReference($match[4], $pBefore, $pNumCols, $pNumRows); goto pB3U7; DM0r8: $fromString = $match[2] > '' ? $match[2] . "\41" : ''; goto GC9oE; pB3U7: if ($match[3] . $match[4] !== $modified3 . $modified4) { if ($match[2] == '' || trim($match[2], "\47") == $sheetName) { goto hpN71; UEq3G: $row = trim($row, "\x24") + 10000000; goto b_KMg; b_KMg: $cellIndex = $column . $row; goto rN7MF; MoEEo: list($column, $row) = PHPExcel_Cell::coordinateFromString($match[3]); goto uGevb; hpN71: $toString = $match[2] > '' ? $match[2] . "\x21" : ''; goto fT3a2; fT3a2: $toString .= $modified3 . "\x3a" . $modified4; goto MoEEo; Aivtn: ++$adjustCount; goto NQNCB; uGevb: $column = PHPExcel_Cell::columnIndexFromString(trim($column, "\44")) + 100000; goto UEq3G; QSqBB: $cellTokens[$cellIndex] = "\x2f\x28\77\x3c\41\x5b\x41\x2d\x5a\x5d\x5c\x24\134\41\51" . preg_quote($fromString) . "\x28\x3f\x21\x5c\144\x29\x2f\x69"; goto Aivtn; rN7MF: $newCellTokens[$cellIndex] = preg_quote($toString); goto QSqBB; NQNCB: } } goto kIxR4; kIxR4: } } goto bw9oI; RPCh7: $matchCount = preg_match_all("\57" . self::REFHELPER_REGEXP_CELLRANGE . "\x2f\x69", "\x20" . $formulaBlock . "\40", $matches, PREG_SET_ORDER); goto IGLCV; m5sDo: if ($adjustCount > 0) { if ($pNumCols > 0 || $pNumRows > 0) { krsort($cellTokens); krsort($newCellTokens); } else { ksort($cellTokens); ksort($newCellTokens); } $formulaBlock = str_replace("\134", '', preg_replace($cellTokens, $newCellTokens, $formulaBlock)); } goto ECSFU; bw9oI: $matchCount = preg_match_all("\57" . self::REFHELPER_REGEXP_CELLREF . "\x2f\151", "\x20" . $formulaBlock . "\x20", $matches, PREG_SET_ORDER); goto orabQ; orabQ: if ($matchCount > 0) { foreach ($matches as $match) { goto yMP52; vpAAX: if ($match[3] !== $modified3) { if ($match[2] == '' || trim($match[2], "\x27") == $sheetName) { goto HJJo1; r35UV: $cellTokens[$cellIndex] = "\57\x28\x3f\x3c\41\x5b\x41\55\132\134\44\134\41\135\51" . preg_quote($fromString) . "\50\x3f\41\x5c\144\x29\57\151"; goto vMGEQ; vMGEQ: ++$adjustCount; goto bwaXt; HJJo1: $toString = $match[2] > '' ? $match[2] . "\x21" : ''; goto nJmVm; dmBZ5: $column = PHPExcel_Cell::columnIndexFromString(trim($column, "\44")) + 100000; goto mr2LM; nJmVm: $toString .= $modified3; goto A0FoF; A0FoF: list($column, $row) = PHPExcel_Cell::coordinateFromString($match[3]); goto dmBZ5; EMOYu: $cellIndex = $row . $column; goto prtDe; prtDe: $newCellTokens[$cellIndex] = preg_quote($toString); goto r35UV; mr2LM: $row = trim($row, "\x24") + 10000000; goto EMOYu; bwaXt: } } goto OYcFc; DqJCA: $fromString .= $match[3]; goto lBVsW; lBVsW: $modified3 = $this->updateCellReference($match[3], $pBefore, $pNumCols, $pNumRows); goto vpAAX; yMP52: $fromString = $match[2] > '' ? $match[2] . "\41" : ''; goto DqJCA; OYcFc: } } goto m5sDo; Togf_: if ($matchCount > 0) { foreach ($matches as $match) { goto u6TRb; ui63H: $modified4 = substr($this->updateCellReference("\44\x41" . $match[4], $pBefore, $pNumCols, $pNumRows), 2); goto PBHgY; SD5_V: $fromString .= $match[3] . "\x3a" . $match[4]; goto Wm7Ql; Wm7Ql: $modified3 = substr($this->updateCellReference("\44\x41" . $match[3], $pBefore, $pNumCols, $pNumRows), 2); goto ui63H; PBHgY: if ($match[3] . "\72" . $match[4] !== $modified3 . "\72" . $modified4) { if ($match[2] == '' || trim($match[2], "\47") == $sheetName) { goto CXmyy; roXxu: $cellIndex = $column . $row; goto ALKhZ; HUEk2: $column = 100000; goto Ad3c8; CXmyy: $toString = $match[2] > '' ? $match[2] . "\41" : ''; goto WopeH; ALKhZ: $newCellTokens[$cellIndex] = preg_quote($toString); goto uy7nM; PsNXm: ++$adjustCount; goto DLY6f; WopeH: $toString .= $modified3 . "\72" . $modified4; goto HUEk2; uy7nM: $cellTokens[$cellIndex] = "\57\x28\x3f\x3c\41\134\x64\134\x24\134\x21\51" . preg_quote($fromString) . "\x28\x3f\x21\x5c\144\x29\57\151"; goto PsNXm; Ad3c8: $row = 10000000 + trim($match[3], "\x24"); goto roXxu; DLY6f: } } goto LG2UB; u6TRb: $fromString = $match[2] > '' ? $match[2] . "\x21" : ''; goto SD5_V; LG2UB: } } goto g_Tck; g_Tck: $matchCount = preg_match_all("\57" . self::REFHELPER_REGEXP_COLRANGE . "\57\151", "\40" . $formulaBlock . "\x20", $matches, PREG_SET_ORDER); goto TUFO2; g1_6t: $matchCount = preg_match_all("\x2f" . self::REFHELPER_REGEXP_ROWRANGE . "\x2f\151", "\40" . $formulaBlock . "\40", $matches, PREG_SET_ORDER); goto Togf_; vfG0D: $adjustCount = 0; goto LwIRp; LwIRp: $newCellTokens = $cellTokens = array(); goto g1_6t; ECSFU: } } goto MSTAA; UD3fT: $formulaBlocks = explode("\x22", $pFormula); goto S9Q23; S9Q23: $i = false; goto z9kdA; MSTAA: unset($formulaBlock); goto jVJSF; jVJSF: return implode("\x22", $formulaBlocks); goto dDwO7; dDwO7: } public function updateCellReference($pCellRange = "\x41\x31", $pBefore = "\x41\61", $pNumCols = 0, $pNumRows = 0) { if (strpos($pCellRange, "\41") !== false) { return $pCellRange; } elseif (strpos($pCellRange, "\x3a") === false && strpos($pCellRange, "\54") === false) { return $this->updateSingleCellReference($pCellRange, $pBefore, $pNumCols, $pNumRows); } elseif (strpos($pCellRange, "\x3a") !== false || strpos($pCellRange, "\x2c") !== false) { return $this->updateCellRange($pCellRange, $pBefore, $pNumCols, $pNumRows); } else { return $pCellRange; } } public function updateNamedFormulas(PHPExcel $pPhpExcel, $oldName = '', $newName = '') { if ($oldName == '') { return; } foreach ($pPhpExcel->getWorksheetIterator() as $sheet) { foreach ($sheet->getCellCollection(false) as $cellID) { $cell = $sheet->getCell($cellID); if ($cell !== null && $cell->getDataType() == PHPExcel_Cell_DataType::TYPE_FORMULA) { $formula = $cell->getValue(); if (strpos($formula, $oldName) !== false) { goto vAU2E; YZe37: $formula = str_replace($oldName . "\x21", $newName . "\x21", $formula); goto R0XWR; vAU2E: $formula = str_replace("\47" . $oldName . "\47\x21", "\x27" . $newName . "\47\x21", $formula); goto YZe37; R0XWR: $cell->setValueExplicit($formula, PHPExcel_Cell_DataType::TYPE_FORMULA); goto Exjc_; Exjc_: } } } } } private function updateCellRange($pCellRange = "\x41\61\x3a\101\61", $pBefore = "\101\61", $pNumCols = 0, $pNumRows = 0) { if (strpos($pCellRange, "\72") !== false || strpos($pCellRange, "\x2c") !== false) { goto IffX_; IffX_: $range = PHPExcel_Cell::splitRange($pCellRange); goto RYX9k; gDyL_: return PHPExcel_Cell::buildRange($range); goto v1WAE; jD0_v: for ($i = 0; $i < $ic; ++$i) { $jc = count($range[$i]); for ($j = 0; $j < $jc; ++$j) { if (ctype_alpha($range[$i][$j])) { $r = PHPExcel_Cell::coordinateFromString($this->updateSingleCellReference($range[$i][$j] . "\x31", $pBefore, $pNumCols, $pNumRows)); $range[$i][$j] = $r[0]; } elseif (ctype_digit($range[$i][$j])) { $r = PHPExcel_Cell::coordinateFromString($this->updateSingleCellReference("\101" . $range[$i][$j], $pBefore, $pNumCols, $pNumRows)); $range[$i][$j] = $r[1]; } else { $range[$i][$j] = $this->updateSingleCellReference($range[$i][$j], $pBefore, $pNumCols, $pNumRows); } } } goto gDyL_; RYX9k: $ic = count($range); goto jD0_v; v1WAE: } else { throw new PHPExcel_Exception("\117\156\x6c\171\40\143\x65\x6c\154\40\x72\141\x6e\x67\x65\x73\x20\x6d\x61\x79\40\x62\145\40\x70\141\163\x73\x65\144\40\x74\x6f\40\164\x68\151\x73\40\x6d\x65\164\x68\157\144\56"); } } private function updateSingleCellReference($pCellReference = "\101\61", $pBefore = "\x41\x31", $pNumCols = 0, $pNumRows = 0) { if (strpos($pCellReference, "\72") === false && strpos($pCellReference, "\x2c") === false) { goto x_8MY; BnIYo: return $newColumn . $newRow; goto lceCX; sZ8gL: if ($updateRow) { $newRow = $newRow + $pNumRows; } goto BnIYo; x_8MY: list($beforeColumn, $beforeRow) = PHPExcel_Cell::coordinateFromString($pBefore); goto sWoDV; sWoDV: list($newColumn, $newRow) = PHPExcel_Cell::coordinateFromString($pCellReference); goto nmb_1; Ef_cA: $updateRow = $newRow[0] != "\44" && $beforeRow[0] != "\x24" && $newRow >= $beforeRow; goto yU1j3; nmb_1: $updateColumn = $newColumn[0] != "\44" && $beforeColumn[0] != "\44" && PHPExcel_Cell::columnIndexFromString($newColumn) >= PHPExcel_Cell::columnIndexFromString($beforeColumn); goto Ef_cA; yU1j3: if ($updateColumn) { $newColumn = PHPExcel_Cell::stringFromColumnIndex(PHPExcel_Cell::columnIndexFromString($newColumn) - 1 + $pNumCols); } goto sZ8gL; lceCX: } else { throw new PHPExcel_Exception("\117\x6e\154\171\x20\163\151\156\147\x6c\x65\x20\143\x65\x6c\154\40\162\x65\146\x65\162\x65\156\x63\145\163\x20\x6d\141\171\x20\x62\145\40\x70\x61\x73\163\145\x64\40\164\157\40\x74\x68\151\x73\40\155\145\164\150\x6f\144\56"); } } public final function __clone() { throw new PHPExcel_Exception("\103\154\x6f\156\151\156\x67\40\141\40\x53\151\x6e\147\x6c\x65\164\x6f\156\x20\151\x73\40\x6e\157\164\x20\x61\x6c\154\157\x77\145\144\41"); } }
