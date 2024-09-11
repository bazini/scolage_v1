<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 if (!defined("\120\x48\x50\x45\130\x43\105\114\137\x52\117\117\x54")) { define("\x50\110\x50\105\130\103\x45\114\137\x52\x4f\x4f\124", dirname(__FILE__) . "\x2f\x2e\56\57\x2e\x2e\57"); require PHPEXCEL_ROOT . "\x50\110\x50\105\170\x63\145\x6c\57\x41\165\x74\157\x6c\x6f\x61\x64\145\162\56\x70\x68\x70"; } class PHPExcel_Calculation_LookupRef { public static function CELL_ADDRESS($row, $column, $relativity = 1, $referenceStyle = true, $sheetText = '') { goto jCPwA; jaMMB: if ($sheetText > '') { if (strpos($sheetText, "\x20") !== false) { $sheetText = "\x27" . $sheetText . "\x27"; } $sheetText .= "\41"; } goto J27Za; XJ9ZJ: $relativity = PHPExcel_Calculation_Functions::flattenSingleValue($relativity); goto oJD2t; j8fWo: if ($row < 1 || $column < 1) { return PHPExcel_Calculation_Functions::VALUE(); } goto jaMMB; jCPwA: $row = PHPExcel_Calculation_Functions::flattenSingleValue($row); goto jaoYe; J27Za: if (!is_bool($referenceStyle) || $referenceStyle) { goto P6Yjg; y0aDg: if ($relativity == 3 || $relativity == 4) { $rowRelative = ''; } goto s_xYX; G9kVw: if ($relativity == 2 || $relativity == 4) { $columnRelative = ''; } goto y0aDg; B_VsC: $column = PHPExcel_Cell::stringFromColumnIndex($column - 1); goto G9kVw; s_xYX: return $sheetText . $columnRelative . $column . $rowRelative . $row; goto WjJDF; P6Yjg: $rowRelative = $columnRelative = "\44"; goto B_VsC; WjJDF: } else { goto jqQ9H; EnggO: return $sheetText . "\122" . $row . "\x43" . $column; goto Enxjb; V0Pyr: if ($relativity == 3 || $relativity == 4) { $row = "\x5b" . $row . "\x5d"; } goto EnggO; jqQ9H: if ($relativity == 2 || $relativity == 4) { $column = "\133" . $column . "\135"; } goto V0Pyr; Enxjb: } goto dtJHg; oJD2t: $sheetText = PHPExcel_Calculation_Functions::flattenSingleValue($sheetText); goto j8fWo; jaoYe: $column = PHPExcel_Calculation_Functions::flattenSingleValue($column); goto XJ9ZJ; dtJHg: } public static function COLUMN($cellAddress = null) { if (is_null($cellAddress) || trim($cellAddress) === '') { return 0; } if (is_array($cellAddress)) { foreach ($cellAddress as $columnKey => $value) { $columnKey = preg_replace("\x2f\133\136\141\55\x7a\135\57\x69", '', $columnKey); return (int) PHPExcel_Cell::columnIndexFromString($columnKey); } } else { if (strpos($cellAddress, "\41") !== false) { list($sheet, $cellAddress) = explode("\x21", $cellAddress); } if (strpos($cellAddress, "\72") !== false) { goto rkkdq; gpsD5: $returnValue = array(); goto sn234; EwplV: return $returnValue; goto V9v1Y; oyWBX: $startAddress = preg_replace("\x2f\133\x5e\x61\55\172\x5d\x2f\151", '', $startAddress); goto nAUQf; sn234: do { $returnValue[] = (int) PHPExcel_Cell::columnIndexFromString($startAddress); } while ($startAddress++ != $endAddress); goto EwplV; nAUQf: $endAddress = preg_replace("\x2f\x5b\x5e\x61\x2d\172\135\57\x69", '', $endAddress); goto gpsD5; rkkdq: list($startAddress, $endAddress) = explode("\x3a", $cellAddress); goto oyWBX; V9v1Y: } else { $cellAddress = preg_replace("\x2f\133\136\141\55\172\x5d\57\151", '', $cellAddress); return (int) PHPExcel_Cell::columnIndexFromString($cellAddress); } } } public static function COLUMNS($cellAddress = null) { goto Pv0QK; b3STK: $isMatrix = is_numeric(key($cellAddress)); goto yRHuj; yRHuj: list($columns, $rows) = PHPExcel_Calculation::_getMatrixDimensions($cellAddress); goto KHg7E; KHg7E: if ($isMatrix) { return $rows; } else { return $columns; } goto kErF2; Mm8bc: reset($cellAddress); goto b3STK; Pv0QK: if (is_null($cellAddress) || $cellAddress === '') { return 1; } elseif (!is_array($cellAddress)) { return PHPExcel_Calculation_Functions::VALUE(); } goto Mm8bc; kErF2: } public static function ROW($cellAddress = null) { if (is_null($cellAddress) || trim($cellAddress) === '') { return 0; } if (is_array($cellAddress)) { foreach ($cellAddress as $columnKey => $rowValue) { foreach ($rowValue as $rowKey => $cellValue) { return (int) preg_replace("\x2f\133\136\x30\x2d\71\135\57\151", '', $rowKey); } } } else { if (strpos($cellAddress, "\41") !== false) { list($sheet, $cellAddress) = explode("\41", $cellAddress); } if (strpos($cellAddress, "\72") !== false) { goto pgY5S; U_7_u: return $returnValue; goto VwaCd; W7GDh: $endAddress = preg_replace("\57\x5b\x5e\60\55\71\135\x2f", '', $endAddress); goto ns67b; ns67b: $returnValue = array(); goto PEYKC; PEYKC: do { $returnValue[][] = (int) $startAddress; } while ($startAddress++ != $endAddress); goto U_7_u; pgY5S: list($startAddress, $endAddress) = explode("\x3a", $cellAddress); goto HAAq6; HAAq6: $startAddress = preg_replace("\x2f\133\x5e\60\55\x39\x5d\57", '', $startAddress); goto W7GDh; VwaCd: } else { list($cellAddress) = explode("\x3a", $cellAddress); return (int) preg_replace("\57\x5b\x5e\60\x2d\x39\135\57", '', $cellAddress); } } } public static function ROWS($cellAddress = null) { goto Vg65S; VLmZP: reset($cellAddress); goto GEldi; Vg65S: if (is_null($cellAddress) || $cellAddress === '') { return 1; } elseif (!is_array($cellAddress)) { return PHPExcel_Calculation_Functions::VALUE(); } goto VLmZP; GEldi: $isMatrix = is_numeric(key($cellAddress)); goto HTugW; fLiAS: if ($isMatrix) { return $columns; } else { return $rows; } goto L7dH2; HTugW: list($columns, $rows) = PHPExcel_Calculation::_getMatrixDimensions($cellAddress); goto fLiAS; L7dH2: } public static function HYPERLINK($linkURL = '', $displayName = null, PHPExcel_Cell $pCell = null) { goto kcxTt; BD6ET: if (!is_object($pCell) || trim($linkURL) == '') { return PHPExcel_Calculation_Functions::REF(); } goto E83in; VIqzk: $pCell = array_pop($args); goto tzx8p; rfF5U: $pCell->getHyperlink()->setTooltip($displayName); goto Bpthm; Bpthm: return $displayName; goto OMWu0; hGlxq: $displayName = is_null($displayName) ? '' : PHPExcel_Calculation_Functions::flattenSingleValue($displayName); goto BD6ET; tzx8p: $linkURL = is_null($linkURL) ? '' : PHPExcel_Calculation_Functions::flattenSingleValue($linkURL); goto hGlxq; E83in: if (is_object($displayName) || trim($displayName) == '') { $displayName = $linkURL; } goto OYDi9; kcxTt: $args = func_get_args(); goto VIqzk; OYDi9: $pCell->getHyperlink()->setUrl($linkURL); goto rfF5U; OMWu0: } public static function INDIRECT($cellAddress = null, PHPExcel_Cell $pCell = null) { goto qlKcL; GFifW: if (is_null($cellAddress) || $cellAddress === '') { return PHPExcel_Calculation_Functions::REF(); } goto OB1Mx; m2cEX: return PHPExcel_Calculation::getInstance()->extractCellRange($cellAddress, $pSheet, false); goto E5ucb; AX0Mr: if (strpos($cellAddress, "\72") !== false) { list($cellAddress1, $cellAddress2) = explode("\72", $cellAddress); } goto hWpKd; xZ8od: $cellAddress2 = null; goto AX0Mr; qlKcL: $cellAddress = PHPExcel_Calculation_Functions::flattenSingleValue($cellAddress); goto GFifW; OB1Mx: $cellAddress1 = $cellAddress; goto xZ8od; A1oXp: if (strpos($cellAddress, "\41") !== false) { goto AaJGr; SUdTb: $sheetName = trim($sheetName, "\x27"); goto Pyr7t; AaJGr: list($sheetName, $cellAddress) = explode("\41", $cellAddress); goto SUdTb; Pyr7t: $pSheet = $pCell->getWorksheet()->getParent()->getSheetByName($sheetName); goto qUNqk; qUNqk: } else { $pSheet = $pCell->getWorksheet(); } goto m2cEX; hWpKd: if (!preg_match("\x2f\136" . PHPExcel_Calculation::CALCULATION_REGEXP_CELLREF . "\x24\x2f\x69", $cellAddress1, $matches) || !is_null($cellAddress2) && !preg_match("\57\x5e" . PHPExcel_Calculation::CALCULATION_REGEXP_CELLREF . "\44\57\x69", $cellAddress2, $matches)) { goto NTq3A; HHI94: if (strpos($cellAddress, "\x21") !== false) { goto wZ6k2; gjLyo: $pSheet = $pCell->getWorksheet()->getParent()->getSheetByName($sheetName); goto BI3r_; Fz_Rm: $sheetName = trim($sheetName, "\x27"); goto gjLyo; wZ6k2: list($sheetName, $cellAddress) = explode("\x21", $cellAddress); goto Fz_Rm; BI3r_: } else { $pSheet = $pCell->getWorksheet(); } goto r36kR; r36kR: return PHPExcel_Calculation::getInstance()->extractNamedRange($cellAddress, $pSheet, false); goto nOFEy; NTq3A: if (!preg_match("\57\x5e" . PHPExcel_Calculation::CALCULATION_REGEXP_NAMEDRANGE . "\x24\57\151", $cellAddress1, $matches)) { return PHPExcel_Calculation_Functions::REF(); } goto HHI94; nOFEy: } goto A1oXp; E5ucb: } public static function OFFSET($cellAddress = null, $rows = 0, $columns = 0, $height = null, $width = null) { goto aWiD6; uz4AJ: return PHPExcel_Calculation::getInstance()->extractCellRange($cellAddress, $pSheet, false); goto isfR_; rmqAe: $startCellColumn = PHPExcel_Cell::stringFromColumnIndex($startCellColumn); goto DI0pw; DI0pw: if ($height != null && !is_object($height)) { $endCellRow = $startCellRow + $height - 1; } else { $endCellRow += $rows; } goto CRYO0; tNTKw: $endCellColumn = PHPExcel_Cell::stringFromColumnIndex($endCellColumn); goto DIVJ8; NEEqm: if (strpos($cellAddress, "\41")) { list($sheetName, $cellAddress) = explode("\41", $cellAddress); $sheetName = trim($sheetName, "\x27"); } goto gp4vO; W_otI: list($endCellColumn, $endCellRow) = PHPExcel_Cell::coordinateFromString($endCell); goto ic82u; wZMex: $endCellColumn = PHPExcel_Cell::columnIndexFromString($endCellColumn) - 1; goto KqoXs; ag6Pq: if (!is_object($pCell)) { return PHPExcel_Calculation_Functions::REF(); } goto YfxmZ; LHOaf: if ($sheetName !== null) { $pSheet = $pCell->getWorksheet()->getParent()->getSheetByName($sheetName); } else { $pSheet = $pCell->getWorksheet(); } goto uz4AJ; hY7Wd: if ($cellAddress == null) { return 0; } goto BST2S; Cgf4U: $height = PHPExcel_Calculation_Functions::flattenSingleValue($height); goto XEAjV; CRYO0: if ($endCellRow <= 0 || $endCellColumn < 0) { return PHPExcel_Calculation_Functions::REF(); } goto tNTKw; LpByB: $startCellColumn = PHPExcel_Cell::columnIndexFromString($startCellColumn) - 1; goto J_yUq; aWiD6: $rows = PHPExcel_Calculation_Functions::flattenSingleValue($rows); goto PLMh7; KqoXs: if ($width != null && !is_object($width)) { $endCellColumn = $startCellColumn + $width - 1; } else { $endCellColumn += $columns; } goto rmqAe; DIVJ8: $cellAddress = $startCellColumn . $startCellRow; goto HQQqJ; HQQqJ: if ($startCellColumn != $endCellColumn || $startCellRow != $endCellRow) { $cellAddress .= "\72" . $endCellColumn . $endCellRow; } goto LHOaf; gp4vO: if (strpos($cellAddress, "\72")) { list($startCell, $endCell) = explode("\72", $cellAddress); } else { $startCell = $endCell = $cellAddress; } goto I3AQs; J_yUq: $startCellColumn += $columns; goto NQYNh; T5jhn: $pCell = array_pop($args); goto ag6Pq; PLMh7: $columns = PHPExcel_Calculation_Functions::flattenSingleValue($columns); goto Cgf4U; BST2S: $args = func_get_args(); goto T5jhn; ic82u: $startCellRow += $rows; goto LpByB; YfxmZ: $sheetName = null; goto NEEqm; I3AQs: list($startCellColumn, $startCellRow) = PHPExcel_Cell::coordinateFromString($startCell); goto W_otI; NQYNh: if ($startCellRow <= 0 || $startCellColumn < 0) { return PHPExcel_Calculation_Functions::REF(); } goto wZMex; XEAjV: $width = PHPExcel_Calculation_Functions::flattenSingleValue($width); goto hY7Wd; isfR_: } public static function CHOOSE() { goto rn69Y; x_F6q: if (is_numeric($chosenEntry) && !is_bool($chosenEntry)) { --$chosenEntry; } else { return PHPExcel_Calculation_Functions::VALUE(); } goto S_VSb; yhfi4: if (is_array($chosenEntry)) { $chosenEntry = array_shift($chosenEntry); } goto x_F6q; S_VSb: $chosenEntry = floor($chosenEntry); goto nAcS1; rn69Y: $chooseArgs = func_get_args(); goto CgJDX; trgQ1: $entryCount = count($chooseArgs) - 1; goto yhfi4; CQXH1: if (is_array($chooseArgs[$chosenEntry])) { return PHPExcel_Calculation_Functions::flattenArray($chooseArgs[$chosenEntry]); } else { return $chooseArgs[$chosenEntry]; } goto Y5Xvd; CgJDX: $chosenEntry = PHPExcel_Calculation_Functions::flattenArray(array_shift($chooseArgs)); goto trgQ1; nAcS1: if ($chosenEntry < 0 || $chosenEntry > $entryCount) { return PHPExcel_Calculation_Functions::VALUE(); } goto CQXH1; Y5Xvd: } public static function MATCH($lookup_value, $lookup_array, $match_type = 1) { goto cJpY8; c4mWD: if ($match_type !== 0 && $match_type !== -1 && $match_type !== 1) { return PHPExcel_Calculation_Functions::NA(); } goto yj8z5; l5eUj: if ($lookupArraySize <= 0) { return PHPExcel_Calculation_Functions::NA(); } goto o9C8S; F4MZ0: return PHPExcel_Calculation_Functions::NA(); goto XDfPn; x84kc: $match_type = is_null($match_type) ? 1 : (int) PHPExcel_Calculation_Functions::flattenSingleValue($match_type); goto kFbvq; wJD8M: $lookup_value = PHPExcel_Calculation_Functions::flattenSingleValue($lookup_value); goto x84kc; paHsn: if ($match_type == 1) { asort($lookup_array); $keySet = array_keys($lookup_array); } elseif ($match_type == -1) { arsort($lookup_array); $keySet = array_keys($lookup_array); } goto DG5gy; DG5gy: foreach ($lookup_array as $i => $lookupArrayValue) { if ($match_type == 0 && $lookupArrayValue == $lookup_value) { return ++$i; } elseif ($match_type == -1 && $lookupArrayValue <= $lookup_value) { $i = array_search($i, $keySet); if ($i < 1) { break; } else { return $keySet[$i - 1] + 1; } } elseif ($match_type == 1 && $lookupArrayValue >= $lookup_value) { $i = array_search($i, $keySet); if ($i < 1) { break; } else { return $keySet[$i - 1] + 1; } } } goto F4MZ0; kFbvq: $lookup_value = strtolower($lookup_value); goto KNzvx; KNzvx: if (!is_numeric($lookup_value) && !is_string($lookup_value) && !is_bool($lookup_value)) { return PHPExcel_Calculation_Functions::NA(); } goto c4mWD; cJpY8: $lookup_array = PHPExcel_Calculation_Functions::flattenArray($lookup_array); goto wJD8M; o9C8S: foreach ($lookup_array as $i => $lookupArrayValue) { goto CAs_v; GHG_r: if (is_null($lookupArrayValue) && ($match_type == 1 || $match_type == -1)) { $lookup_array = array_slice($lookup_array, 0, $i - 1); } goto wosy6; lvl73: if (is_string($lookupArrayValue)) { $lookup_array[$i] = strtolower($lookupArrayValue); } goto GHG_r; CAs_v: if (!is_numeric($lookupArrayValue) && !is_string($lookupArrayValue) && !is_bool($lookupArrayValue) && !is_null($lookupArrayValue)) { return PHPExcel_Calculation_Functions::NA(); } goto lvl73; wosy6: } goto paHsn; yj8z5: $lookupArraySize = count($lookup_array); goto l5eUj; XDfPn: } public static function INDEX($arrayValues, $rowNum = 0, $columnNum = 0) { goto cf3jK; THfY8: $columnKeys = @array_keys($arrayValues[$rowKeys[0]]); goto J7A0O; DySgF: $rowKeys = array_keys($arrayValues); goto THfY8; Hr00B: if (!is_array($arrayValues)) { return PHPExcel_Calculation_Functions::REF(); } goto DySgF; J7A0O: if ($columnNum > count($columnKeys)) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($columnNum == 0) { goto EhHjA; h9iG2: foreach ($arrayValues as $arrayColumn) { if (is_array($arrayColumn)) { if (isset($arrayColumn[$rowNum])) { $returnArray[] = $arrayColumn[$rowNum]; } else { return $arrayValues[$rowNum]; } } else { return $arrayValues[$rowNum]; } } goto GzCjv; iVTgm: $returnArray = array(); goto h9iG2; GzCjv: return $returnArray; goto wEw42; EhHjA: if ($rowNum == 0) { return $arrayValues; } goto uxdjA; uxdjA: $rowNum = $rowKeys[--$rowNum]; goto iVTgm; wEw42: } goto Fgiax; aNtfz: $rowNum = $rowKeys[--$rowNum]; goto YsUqQ; cf3jK: if ($rowNum < 0 || $columnNum < 0) { return PHPExcel_Calculation_Functions::VALUE(); } goto Hr00B; Fgiax: $columnNum = $columnKeys[--$columnNum]; goto k6_u6; k6_u6: if ($rowNum > count($rowKeys)) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($rowNum == 0) { return $arrayValues[$columnNum]; } goto aNtfz; YsUqQ: return $arrayValues[$rowNum][$columnNum]; goto DY6E0; DY6E0: } public static function TRANSPOSE($matrixData) { goto jbEpL; t2Xu2: return $returnMatrix; goto J4OZ0; jbEpL: $returnMatrix = array(); goto ECzgK; ECzgK: if (!is_array($matrixData)) { $matrixData = array(array($matrixData)); } goto xyotc; xyotc: $column = 0; goto kUDAQ; kUDAQ: foreach ($matrixData as $matrixRow) { goto tvSNy; hdORx: foreach ($matrixRow as $matrixCell) { $returnMatrix[$row][$column] = $matrixCell; ++$row; } goto dbnRu; tvSNy: $row = 0; goto hdORx; dbnRu: ++$column; goto MgG9U; MgG9U: } goto t2Xu2; J4OZ0: } private static function vlookupSort($a, $b) { goto CQ4K2; l8yGX: $firstColumn = key($a); goto C6gqV; CQ4K2: reset($a); goto l8yGX; ahUTp: return $aLower < $bLower ? -1 : 1; goto zScI_; C6gqV: if (($aLower = strtolower($a[$firstColumn])) == ($bLower = strtolower($b[$firstColumn]))) { return 0; } goto ahUTp; zScI_: } public static function VLOOKUP($lookup_value, $lookup_array, $index_number, $not_exact_match = true) { goto C6FqJ; mTLMO: $rowNumber = $rowValue = false; goto e_1d6; n2nNX: if ($index_number < 1) { return PHPExcel_Calculation_Functions::VALUE(); } goto ghxau; C6FqJ: $lookup_value = PHPExcel_Calculation_Functions::flattenSingleValue($lookup_value); goto dg6_c; ghxau: if (!is_array($lookup_array) || empty($lookup_array)) { return PHPExcel_Calculation_Functions::REF(); } else { goto r6HPd; r6HPd: $f = array_keys($lookup_array); goto k4jXs; k4jXs: $firstRow = array_pop($f); goto xPUEf; xPUEf: if (!is_array($lookup_array[$firstRow]) || $index_number > count($lookup_array[$firstRow])) { return PHPExcel_Calculation_Functions::REF(); } else { goto GXe3x; h_ZxM: $returnColumn = $columnKeys[--$index_number]; goto uN8uJ; uN8uJ: $firstColumn = array_shift($columnKeys); goto dcmJg; GXe3x: $columnKeys = array_keys($lookup_array[$firstRow]); goto h_ZxM; dcmJg: } goto B1rpj; B1rpj: } goto hbqZj; fJgpb: $not_exact_match = PHPExcel_Calculation_Functions::flattenSingleValue($not_exact_match); goto n2nNX; hbqZj: if (!$not_exact_match) { uasort($lookup_array, array("\x73\145\154\146", "\x76\x6c\157\157\x6b\x75\x70\x53\x6f\162\x74")); } goto mTLMO; dg6_c: $index_number = PHPExcel_Calculation_Functions::flattenSingleValue($index_number); goto fJgpb; byod_: if ($rowNumber !== false) { if (!$not_exact_match && $rowValue != $lookup_value) { return PHPExcel_Calculation_Functions::NA(); } else { return $lookup_array[$rowNumber][$returnColumn]; } } goto sFyZ8; sFyZ8: return PHPExcel_Calculation_Functions::NA(); goto t28Ri; e_1d6: foreach ($lookup_array as $rowKey => $rowData) { goto vRZWR; ifAZm: $rowNumber = $rowKey; goto FKSHP; vRZWR: if (is_numeric($lookup_value) && is_numeric($rowData[$firstColumn]) && $rowData[$firstColumn] > $lookup_value || !is_numeric($lookup_value) && !is_numeric($rowData[$firstColumn]) && strtolower($rowData[$firstColumn]) > strtolower($lookup_value)) { break; } goto ifAZm; FKSHP: $rowValue = $rowData[$firstColumn]; goto b25Ic; b25Ic: } goto byod_; t28Ri: } public static function HLOOKUP($lookup_value, $lookup_array, $index_number, $not_exact_match = true) { goto y99HR; dADoN: foreach ($lookup_array[$firstColumn] as $rowKey => $rowData) { goto IJ5tG; AVctd: $rowValue = $rowData; goto Fyhpv; IJ5tG: if (is_numeric($lookup_value) && is_numeric($rowData) && $rowData > $lookup_value || !is_numeric($lookup_value) && !is_numeric($rowData) && strtolower($rowData) > strtolower($lookup_value)) { break; } goto YqB3c; YqB3c: $rowNumber = $rowKey; goto AVctd; Fyhpv: } goto JhKPR; JhKPR: if ($rowNumber !== false) { if (!$not_exact_match && $rowValue != $lookup_value) { return PHPExcel_Calculation_Functions::NA(); } else { return $lookup_array[$returnColumn][$rowNumber]; } } goto WMyLi; werMA: $index_number = PHPExcel_Calculation_Functions::flattenSingleValue($index_number); goto DHI09; B2ZLP: if (!$not_exact_match) { $firstRowH = asort($lookup_array[$firstColumn]); } goto l2AWB; mcDyd: if (!is_array($lookup_array) || empty($lookup_array)) { return PHPExcel_Calculation_Functions::REF(); } else { goto L51Gy; Ivr56: $firstRow = array_pop($f); goto ckQ9H; ckQ9H: if (!is_array($lookup_array[$firstRow]) || $index_number > count($lookup_array[$firstRow])) { return PHPExcel_Calculation_Functions::REF(); } else { goto rxfCT; ifPHM: $returnColumn = $firstkey + $index_number; goto XUsVQ; XUsVQ: $firstColumn = array_shift($f); goto tmJ4V; Rj9Su: $firstkey = $f[0] - 1; goto ifPHM; rxfCT: $columnKeys = array_keys($lookup_array[$firstRow]); goto Rj9Su; tmJ4V: } goto E7RVN; L51Gy: $f = array_keys($lookup_array); goto Ivr56; E7RVN: } goto B2ZLP; y99HR: $lookup_value = PHPExcel_Calculation_Functions::flattenSingleValue($lookup_value); goto werMA; dxpKo: if ($index_number < 1) { return PHPExcel_Calculation_Functions::VALUE(); } goto mcDyd; DHI09: $not_exact_match = PHPExcel_Calculation_Functions::flattenSingleValue($not_exact_match); goto dxpKo; WMyLi: return PHPExcel_Calculation_Functions::NA(); goto JLK8j; l2AWB: $rowNumber = $rowValue = false; goto dADoN; JLK8j: } public static function LOOKUP($lookup_value, $lookup_vector, $result_vector = null) { goto JRMhl; rDTxt: if ($lookupRows == 1 && $lookupColumns > 1 || $lookupRows == 2 && $lookupColumns != 2) { goto cdQhQ; j7TGB: $l = array_keys($lookup_vector); goto L2Zcu; VbtgS: $lookupRows = count($lookup_vector); goto j7TGB; cdQhQ: $lookup_vector = self::TRANSPOSE($lookup_vector); goto VbtgS; L2Zcu: $lookupColumns = count($lookup_vector[array_shift($l)]); goto lLJFn; lLJFn: } goto fFX4u; btjUy: $l = array_shift($l); goto WUGMc; wmO72: $l = array_keys($lookup_vector); goto MbW8i; JcCVu: if ($resultRows == 1 && $resultColumns > 1 || $resultRows == 2 && $resultColumns != 2) { goto m4e8g; PyCo1: $resultColumns = count($result_vector[array_shift($r)]); goto wbJov; m4e8g: $result_vector = self::TRANSPOSE($result_vector); goto gIOSC; gIOSC: $resultRows = count($result_vector); goto zynzK; zynzK: $r = array_keys($result_vector); goto PyCo1; wbJov: } goto OAopd; r7cS0: $lookupRows = count($lookup_vector); goto wmO72; W7E0E: $l = array_keys($result_vector); goto btjUy; MbW8i: $l = array_shift($l); goto SZb7q; FOQnq: if ($lookupColumns != 2) { foreach ($lookup_vector as &$value) { goto yuqY6; wLXil: $dataValue2 = array_shift($result_vector); goto Vimqa; yuqY6: if (is_array($value)) { goto RZGM_; YnYp2: $key2++; goto jfUj0; jfUj0: $dataValue1 = $value[$key1]; goto jDp6U; tCxu9: $key1 = $key2 = array_shift($k); goto YnYp2; RZGM_: $k = array_keys($value); goto tCxu9; jDp6U: } else { goto FWSH9; A5eXf: $key2 = 1; goto GcL8M; GcL8M: $dataValue1 = $value; goto BoT2C; FWSH9: $key1 = 0; goto A5eXf; BoT2C: } goto wLXil; aYyfX: $value = array($key1 => $dataValue1, $key2 => $dataValue2); goto dWZ9t; Vimqa: if (is_array($dataValue2)) { $dataValue2 = array_shift($dataValue2); } goto aYyfX; dWZ9t: } unset($value); } goto ChOGF; JRMhl: $lookup_value = PHPExcel_Calculation_Functions::flattenSingleValue($lookup_value); goto drsM_; drsM_: if (!is_array($lookup_vector)) { return PHPExcel_Calculation_Functions::NA(); } goto r7cS0; WUGMc: $resultColumns = count($result_vector[$l]); goto JcCVu; SZb7q: $lookupColumns = count($lookup_vector[$l]); goto rDTxt; OAopd: if ($lookupRows == 2) { $result_vector = array_pop($lookup_vector); $lookup_vector = array_shift($lookup_vector); } goto FOQnq; SohXW: $resultRows = count($result_vector); goto W7E0E; fFX4u: if (is_null($result_vector)) { $result_vector = $lookup_vector; } goto SohXW; ChOGF: return self::VLOOKUP($lookup_value, $lookup_vector, 2); goto vJhaG; vJhaG: } }
