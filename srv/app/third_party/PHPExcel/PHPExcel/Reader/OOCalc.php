<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 if (!defined("\x50\110\120\x45\130\x43\x45\114\x5f\122\x4f\117\124")) { define("\x50\110\120\105\130\x43\x45\114\137\x52\117\117\x54", dirname(__FILE__) . "\57\56\56\x2f\x2e\x2e\57"); require PHPEXCEL_ROOT . "\x50\110\x50\x45\170\x63\x65\x6c\x2f\x41\x75\x74\x6f\x6c\157\x61\x64\x65\x72\56\160\x68\160"; } class PHPExcel_Reader_OOCalc extends PHPExcel_Reader_Abstract implements PHPExcel_Reader_IReader { private $styles = array(); public function __construct() { $this->readFilter = new PHPExcel_Reader_DefaultReadFilter(); } public function canRead($pFilename) { goto mjdLj; g7MFX: if ($zip->open($pFilename) === true) { goto cab8B; i5LWH: $zip->close(); goto eLA9s; eLA9s: return $mimeType === "\x61\160\x70\x6c\151\x63\x61\x74\151\157\156\x2f\166\x6e\144\56\x6f\141\163\x69\163\x2e\x6f\x70\145\x6e\144\x6f\x63\165\155\145\x6e\164\x2e\x73\x70\162\x65\x61\144\163\x68\x65\145\x74"; goto y_AT8; Uf9aF: if ($stat && $stat["\163\x69\x7a\145"] <= 255) { $mimeType = $zip->getFromName($stat["\156\x61\x6d\145"]); } elseif ($stat = $zip->statName("\115\105\124\x41\x2d\x49\116\106\x2f\x6d\x61\x6e\x69\146\x65\x73\x74\56\170\155\154")) { goto ga_VC; j5BGy: $namespacesContent = $xml->getNamespaces(true); goto a9IQb; a9IQb: if (isset($namespacesContent["\x6d\x61\156\151\x66\x65\x73\164"])) { $manifest = $xml->children($namespacesContent["\155\x61\156\151\x66\x65\163\164"]); foreach ($manifest as $manifestDataSet) { $manifestAttributes = $manifestDataSet->attributes($namespacesContent["\155\x61\x6e\x69\146\x65\163\164"]); if ($manifestAttributes->{"\146\165\x6c\154\x2d\160\141\x74\150"} == "\57") { $mimeType = (string) $manifestAttributes->{"\155\145\144\x69\141\x2d\x74\x79\160\145"}; break; } } } goto pvyDS; ga_VC: $xml = simplexml_load_string($this->securityScan($zip->getFromName("\x4d\105\124\x41\x2d\111\116\x46\x2f\155\x61\156\151\146\145\x73\164\56\x78\155\x6c")), "\123\x69\155\160\x6c\x65\130\115\x4c\x45\154\x65\x6d\145\x6e\164", PHPExcel_Settings::getLibXmlLoaderOptions()); goto j5BGy; pvyDS: } goto i5LWH; cab8B: $stat = $zip->statName("\155\x69\155\145\x74\x79\160\x65"); goto Uf9aF; y_AT8: } goto EqM_Z; pPObs: $mimeType = "\125\116\x4b\116\x4f\x57\116"; goto N0wsi; mjdLj: if (!file_exists($pFilename)) { throw new PHPExcel_Reader_Exception("\x43\x6f\165\x6c\144\x20\156\157\x74\40\x6f\x70\x65\x6e\40" . $pFilename . "\40\146\157\162\x20\162\x65\141\x64\x69\156\147\41\40\x46\x69\154\145\x20\144\157\x65\x73\40\x6e\157\x74\x20\145\x78\151\163\164\x2e"); } goto VE0MP; N0wsi: $zip = new $zipClass(); goto g7MFX; VE0MP: $zipClass = PHPExcel_Settings::getZipClass(); goto pPObs; EqM_Z: return false; goto vnnfn; vnnfn: } public function listWorksheetNames($pFilename) { goto HOBGD; AqdJ0: $res = $xml->xml($this->securityScanFile("\172\151\x70\72\57\x2f" . realpath($pFilename) . "\x23\x63\x6f\156\164\145\156\x74\x2e\170\155\154"), null, PHPExcel_Settings::getLibXmlLoaderOptions()); goto AGUi3; HOBGD: if (!file_exists($pFilename)) { throw new PHPExcel_Reader_Exception("\103\157\x75\154\x64\x20\x6e\157\164\40\157\x70\x65\x6e\40" . $pFilename . "\x20\146\x6f\162\x20\162\145\141\x64\151\x6e\x67\x21\40\106\x69\154\145\40\144\157\x65\163\40\x6e\x6f\164\x20\x65\x78\151\x73\x74\56"); } goto jRLb5; Tk1Sn: $worksheetNames = array(); goto kPVrr; a1DoS: $zip = new $zipClass(); goto dBylz; CYA8G: return $worksheetNames; goto fbipm; oKn1S: while ($xml->read()) { while ($xml->name !== "\157\146\x66\x69\x63\145\x3a\x62\x6f\x64\x79") { if ($xml->isEmptyElement) { $xml->read(); } else { $xml->next(); } } while ($xml->read()) { if ($xml->name == "\164\141\x62\x6c\145\72\164\x61\x62\154\145" && $xml->nodeType == XMLReader::ELEMENT) { do { $worksheetNames[] = $xml->getAttribute("\164\x61\x62\x6c\x65\x3a\156\141\155\145"); $xml->next(); } while ($xml->name == "\164\x61\x62\154\145\x3a\x74\141\142\154\145" && $xml->nodeType == XMLReader::ELEMENT); } } } goto CYA8G; kPVrr: $xml = new XMLReader(); goto AqdJ0; AGUi3: $xml->setParserProperty(2, true); goto ZBRFX; ZBRFX: $xml->read(); goto oKn1S; dBylz: if (!$zip->open($pFilename)) { throw new PHPExcel_Reader_Exception("\103\x6f\165\x6c\x64\40\x6e\x6f\x74\x20\157\160\145\156\40" . $pFilename . "\x20\146\157\162\40\162\x65\x61\144\151\x6e\147\41\40\105\x72\162\x6f\x72\x20\157\160\145\x6e\151\x6e\147\x20\x66\151\154\145\56"); } goto Tk1Sn; jRLb5: $zipClass = PHPExcel_Settings::getZipClass(); goto a1DoS; fbipm: } public function listWorksheetInfo($pFilename) { goto nKPRF; MsVX0: return $worksheetInfo; goto SW44R; nKPRF: if (!file_exists($pFilename)) { throw new PHPExcel_Reader_Exception("\x43\157\165\x6c\144\x20\x6e\157\164\40\x6f\x70\145\x6e\40" . $pFilename . "\x20\x66\x6f\162\40\162\145\141\x64\x69\156\147\x21\x20\x46\151\154\145\40\x64\x6f\x65\163\40\x6e\x6f\164\40\x65\x78\x69\163\164\56"); } goto S0xYV; TnlKq: $xml->setParserProperty(2, true); goto lj8Op; q1k4W: if (!$zip->open($pFilename)) { throw new PHPExcel_Reader_Exception("\103\x6f\x75\x6c\x64\x20\156\157\x74\40\157\x70\145\156\40" . $pFilename . "\40\x66\157\162\40\162\x65\x61\144\151\x6e\x67\x21\x20\105\162\162\x6f\162\x20\157\x70\x65\156\x69\156\x67\x20\146\151\x6c\x65\56"); } goto YbLhL; lj8Op: $xml->read(); goto J2tNP; J2tNP: while ($xml->read()) { while ($xml->name !== "\157\146\x66\x69\x63\x65\x3a\142\x6f\144\171") { if ($xml->isEmptyElement) { $xml->read(); } else { $xml->next(); } } while ($xml->read()) { if ($xml->name == "\x74\x61\142\x6c\145\72\164\x61\x62\154\x65" && $xml->nodeType == XMLReader::ELEMENT) { goto fYzda; JAn_N: $tmpInfo = array("\x77\x6f\162\153\x73\x68\145\145\164\x4e\x61\x6d\145" => $xml->getAttribute("\164\141\x62\154\145\x3a\x6e\141\x6d\145"), "\x6c\141\163\164\103\x6f\x6c\165\155\x6e\x4c\x65\164\x74\x65\x72" => "\101", "\154\141\x73\x74\x43\157\x6c\165\155\x6e\111\x6e\x64\x65\170" => 0, "\x74\157\164\x61\x6c\x52\157\167\x73" => 0, "\x74\157\164\141\x6c\103\157\x6c\165\x6d\x6e\163" => 0); goto p2vGZ; XVYYW: $tmpInfo["\154\141\163\164\x43\157\x6c\165\x6d\156\111\x6e\144\x65\170"] = $tmpInfo["\x74\x6f\x74\x61\154\103\x6f\x6c\x75\x6d\x6e\x73"] - 1; goto o5n3T; y5Zc_: $tmpInfo["\x74\x6f\164\141\x6c\103\157\x6c\x75\x6d\156\x73"] = max($tmpInfo["\x74\x6f\x74\141\x6c\103\157\154\x75\155\x6e\x73"], $currCells); goto XVYYW; fYzda: $worksheetNames[] = $xml->getAttribute("\x74\x61\x62\154\x65\x3a\156\141\155\145"); goto JAn_N; o5n3T: $tmpInfo["\154\x61\163\164\103\157\154\x75\155\x6e\x4c\x65\x74\164\145\162"] = PHPExcel_Cell::stringFromColumnIndex($tmpInfo["\x6c\x61\x73\164\103\157\x6c\165\155\156\111\x6e\x64\x65\170"]); goto i5s7s; p2vGZ: $currCells = 0; goto c13Qt; c13Qt: do { $xml->read(); if ($xml->name == "\164\141\x62\154\145\x3a\x74\x61\142\x6c\x65\55\162\x6f\167" && $xml->nodeType == XMLReader::ELEMENT) { goto syCwj; anxW3: do { if ($xml->name == "\164\x61\x62\x6c\x65\x3a\x74\141\142\x6c\x65\x2d\143\145\154\x6c" && $xml->nodeType == XMLReader::ELEMENT) { if (!$xml->isEmptyElement) { $currCells++; $xml->next(); } else { $xml->read(); } } elseif ($xml->name == "\164\141\x62\154\145\72\x63\x6f\166\x65\x72\145\x64\55\164\x61\142\154\x65\55\143\145\154\154" && $xml->nodeType == XMLReader::ELEMENT) { goto OjU6m; OjU6m: $mergeSize = $xml->getAttribute("\x74\141\142\154\x65\72\156\165\155\142\x65\162\55\x63\x6f\154\165\155\x6e\163\x2d\162\145\160\145\x61\164\x65\x64"); goto JSc3v; dMtUT: $xml->read(); goto aqgZJ; JSc3v: $currCells += $mergeSize; goto dMtUT; aqgZJ: } } while ($xml->name != "\164\141\x62\x6c\145\72\164\x61\142\154\x65\x2d\x72\157\x77"); goto qY2qv; t8GaZ: $rowspan = empty($rowspan) ? 1 : $rowspan; goto nQxYu; bz1KF: $currCells = 0; goto cLaXs; syCwj: $rowspan = $xml->getAttribute("\164\x61\x62\x6c\145\72\x6e\165\x6d\142\x65\x72\55\162\157\x77\x73\55\162\x65\160\x65\x61\x74\145\x64"); goto t8GaZ; nQxYu: $tmpInfo["\x74\157\x74\141\x6c\x52\157\x77\x73"] += $rowspan; goto z9kHW; z9kHW: $tmpInfo["\164\157\x74\x61\154\103\x6f\x6c\x75\x6d\x6e\x73"] = max($tmpInfo["\x74\157\x74\141\x6c\103\157\x6c\165\155\x6e\163"], $currCells); goto bz1KF; cLaXs: $xml->read(); goto anxW3; qY2qv: } } while ($xml->name != "\164\x61\142\x6c\145\x3a\x74\141\x62\154\145"); goto y5Zc_; i5s7s: $worksheetInfo[] = $tmpInfo; goto v4XZl; v4XZl: } } } goto MsVX0; YbLhL: $xml = new XMLReader(); goto HZ7_a; S0xYV: $worksheetInfo = array(); goto uqpgC; D7vMy: $zip = new $zipClass(); goto q1k4W; HZ7_a: $res = $xml->xml($this->securityScanFile("\172\x69\160\72\57\57" . realpath($pFilename) . "\x23\143\x6f\156\164\x65\x6e\164\56\170\155\x6c"), null, PHPExcel_Settings::getLibXmlLoaderOptions()); goto TnlKq; uqpgC: $zipClass = PHPExcel_Settings::getZipClass(); goto D7vMy; SW44R: } public function load($pFilename) { $objPHPExcel = new PHPExcel(); return $this->loadIntoExisting($pFilename, $objPHPExcel); } private static function identifyFixedStyleValue($styleList, &$styleAttributeValue) { goto WFRdE; YFn0z: foreach ($styleList as $style) { if ($styleAttributeValue == strtolower($style)) { $styleAttributeValue = $style; return true; } } goto SoIDg; WFRdE: $styleAttributeValue = strtolower($styleAttributeValue); goto YFn0z; SoIDg: return false; goto NO15Q; NO15Q: } public function loadIntoExisting($pFilename, PHPExcel $objPHPExcel) { goto j6Z5R; AYZtQ: if (!$zip->open($pFilename)) { throw new PHPExcel_Reader_Exception("\103\157\x75\x6c\144\40\x6e\157\x74\x20\x6f\x70\145\156\x20" . $pFilename . "\40\x66\157\162\x20\162\145\141\144\151\156\147\41\40\105\162\x72\157\162\40\157\160\145\156\x69\156\x67\x20\x66\151\154\145\x2e"); } goto D3nSk; eKj5k: $namespacesMeta = $xml->getNamespaces(true); goto HS4p1; kl08c: $namespacesContent = $xml->getNamespaces(true); goto ASCDR; xfiqh: $xml = simplexml_load_string($this->securityScan($zip->getFromName("\x63\157\x6e\x74\x65\x6e\164\56\170\x6d\x6c")), "\123\151\155\x70\154\x65\130\115\x4c\105\x6c\145\x6d\145\x6e\x74", PHPExcel_Settings::getLibXmlLoaderOptions()); goto kl08c; ASCDR: $workbook = $xml->children($namespacesContent["\x6f\146\146\151\143\x65"]); goto ObMhU; HATET: $zipClass = PHPExcel_Settings::getZipClass(); goto VUygH; j6Z5R: if (!file_exists($pFilename)) { throw new PHPExcel_Reader_Exception("\x43\x6f\x75\x6c\x64\x20\156\157\x74\40\157\x70\145\156\x20" . $pFilename . "\40\146\x6f\x72\40\162\145\x61\144\x69\156\x67\41\x20\x46\151\154\145\40\x64\157\145\163\40\156\157\164\40\x65\170\x69\163\164\x2e"); } goto NQaBS; VUygH: $zip = new $zipClass(); goto AYZtQ; aNpp0: return $objPHPExcel; goto uBj0t; ObMhU: foreach ($workbook->body->spreadsheet as $workbookData) { goto DMr8k; DMr8k: $workbookData = $workbookData->children($namespacesContent["\164\x61\142\x6c\145"]); goto n24Vj; Wk49d: foreach ($workbookData->table as $worksheetDataSet) { goto npULb; hdnk0: foreach ($worksheetData as $key => $rowData) { switch ($key) { case "\164\141\x62\154\145\x2d\x68\x65\141\144\x65\162\55\162\x6f\x77\x73": foreach ($rowData as $key => $cellData) { $rowData = $cellData; break; } case "\164\x61\x62\154\145\x2d\x72\157\167": goto fbkK2; YHLn4: break; goto OSaUP; zDW36: foreach ($rowData as $key => $cellData) { goto dj6Vh; F2uJK: $cellDataTableAttributes = $cellData->attributes($namespacesContent["\164\x61\x62\154\145"]); goto cOUy7; YHBZX: $cellDataOffice = $cellData->children($namespacesContent["\x6f\146\146\151\x63\145"]); goto YIyz3; NHzxR: $hasCalculatedValue = false; goto v8vZU; IrF8r: $cellDataText = isset($namespacesContent["\x74\145\x78\164"]) ? $cellData->children($namespacesContent["\x74\145\170\x74"]) : ''; goto YHBZX; zzn2Z: if (isset($cellDataText->p)) { goto IEnWJ; kTemc: switch ($cellDataOfficeAttributes["\166\x61\154\165\145\x2d\x74\171\160\x65"]) { case "\x73\164\162\x69\x6e\x67": goto mIsv4; bq3MC: $dataValue = $allCellDataText; goto qRiXp; w49Ls: break; goto YpXLo; qRiXp: if (isset($dataValue->a)) { goto qgpW4; cWguL: $hyperlink = $cellXLinkAttributes["\x68\x72\x65\x66"]; goto zdjfh; qgpW4: $dataValue = $dataValue->a; goto yKIKb; yKIKb: $cellXLinkAttributes = $dataValue->attributes($namespacesContent["\x78\x6c\x69\x6e\153"]); goto cWguL; zdjfh: } goto w49Ls; mIsv4: $type = PHPExcel_Cell_DataType::TYPE_STRING; goto bq3MC; YpXLo: case "\x62\x6f\157\154\x65\x61\156": goto sNb0O; fuQmp: break; goto QiskH; Srdim: $dataValue = $allCellDataText == "\x54\x52\125\x45" ? true : false; goto fuQmp; sNb0O: $type = PHPExcel_Cell_DataType::TYPE_BOOL; goto Srdim; QiskH: case "\160\x65\x72\143\145\156\x74\141\x67\x65": goto is1GX; BKDz9: if (floor($dataValue) == $dataValue) { $dataValue = (int) $dataValue; } goto pD9k8; HVtsE: break; goto oSIPA; is1GX: $type = PHPExcel_Cell_DataType::TYPE_NUMERIC; goto BbiTh; pD9k8: $formatting = PHPExcel_Style_NumberFormat::FORMAT_PERCENTAGE_00; goto HVtsE; BbiTh: $dataValue = (float) $cellDataOfficeAttributes["\x76\141\x6c\165\145"]; goto BKDz9; oSIPA: case "\143\x75\162\162\145\x6e\x63\171": goto KzBHx; kI7KY: $dataValue = (float) $cellDataOfficeAttributes["\166\141\x6c\x75\145"]; goto YnY5l; COPDA: $formatting = PHPExcel_Style_NumberFormat::FORMAT_CURRENCY_USD_SIMPLE; goto F97Gd; KzBHx: $type = PHPExcel_Cell_DataType::TYPE_NUMERIC; goto kI7KY; F97Gd: break; goto CT2KO; YnY5l: if (floor($dataValue) == $dataValue) { $dataValue = (int) $dataValue; } goto COPDA; CT2KO: case "\146\x6c\x6f\141\x74": goto yI0wA; yI0wA: $type = PHPExcel_Cell_DataType::TYPE_NUMERIC; goto UHqmV; kFxBR: break; goto pdf8X; QWIaC: if (floor($dataValue) == $dataValue) { if ($dataValue == (int) $dataValue) { $dataValue = (int) $dataValue; } else { $dataValue = (float) $dataValue; } } goto kFxBR; UHqmV: $dataValue = (float) $cellDataOfficeAttributes["\x76\x61\154\x75\145"]; goto QWIaC; pdf8X: case "\144\141\164\x65": goto lwMp9; OgJn5: $dataValue = PHPExcel_Shared_Date::FormattedPHPToExcel($year, $month, $day, $hour, $minute, $second); goto AwNYP; GU2hb: break; goto pNF71; rC01d: list($year, $month, $day, $hour, $minute, $second) = explode("\40", $dateObj->format("\131\40\x6d\x20\144\x20\x48\x20\x69\x20\163")); goto OgJn5; lwMp9: $type = PHPExcel_Cell_DataType::TYPE_NUMERIC; goto s8AxA; CsR7k: $dateObj->setTimeZone($timezoneObj); goto rC01d; AwNYP: if ($dataValue != floor($dataValue)) { $formatting = PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX15 . "\40" . PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME4; } else { $formatting = PHPExcel_Style_NumberFormat::FORMAT_DATE_XLSX15; } goto GU2hb; s8AxA: $dateObj = new DateTime($cellDataOfficeAttributes["\x64\141\164\x65\x2d\166\141\x6c\165\x65"], $GMT); goto CsR7k; pNF71: case "\x74\x69\x6d\x65": goto HmI4t; HmI4t: $type = PHPExcel_Cell_DataType::TYPE_NUMERIC; goto yrwI9; yrwI9: $dataValue = PHPExcel_Shared_Date::PHPToExcel(strtotime("\x30\61\x2d\60\61\x2d\61\x39\67\60\x20" . implode("\x3a", sscanf($cellDataOfficeAttributes["\x74\x69\155\x65\55\166\141\x6c\x75\x65"], "\x50\x54\45\x64\110\x25\x64\115\45\x64\123")))); goto S2RJA; S2RJA: $formatting = PHPExcel_Style_NumberFormat::FORMAT_DATE_TIME4; goto T6QWM; T6QWM: break; goto Qi9TU; Qi9TU: } goto jx2MU; eAluB: foreach ($cellDataText->p as $pData) { if (isset($pData->span)) { goto xR2F7; xR2F7: $spanSection = ''; goto Qr0X7; Qr0X7: foreach ($pData->span as $spanData) { $spanSection .= $spanData; } goto m0LA3; m0LA3: array_push($dataArray, $spanSection); goto z6yU4; z6yU4: } else { array_push($dataArray, $pData); } } goto oZIMS; oZIMS: $allCellDataText = implode($dataArray, "\12"); goto kTemc; IEnWJ: $dataArray = array(); goto eAluB; jx2MU: } else { $type = PHPExcel_Cell_DataType::TYPE_NULL; $dataValue = null; } goto hls5Q; cOUy7: $type = $formatting = $hyperlink = null; goto NHzxR; Pqjmb: if (isset($cellDataTableAttributes["\146\x6f\162\155\x75\x6c\141"])) { $cellDataFormula = $cellDataTableAttributes["\x66\157\x72\x6d\165\x6c\x61"]; $hasCalculatedValue = true; } goto rxJ_d; dj6Vh: if ($this->getReadFilter() !== null) { if (!$this->getReadFilter()->readCell($columnID, $rowID, $worksheetName)) { continue; } } goto IrF8r; ykBHP: if (isset($cellDataTableAttributes["\x6e\x75\155\x62\x65\162\55\143\157\x6c\165\x6d\156\163\x2d\163\x70\141\x6e\x6e\x65\x64"]) || isset($cellDataTableAttributes["\x6e\165\155\x62\145\162\x2d\x72\x6f\x77\x73\x2d\x73\x70\x61\x6e\156\x65\x64"])) { if ($type !== PHPExcel_Cell_DataType::TYPE_NULL || !$this->readDataOnly) { goto KOmR_; ff1_K: $cellRange = $columnID . $rowID . "\x3a" . $columnTo . $rowTo; goto zyV3v; rkvuQ: if (isset($cellDataTableAttributes["\x6e\165\155\x62\145\162\55\143\157\x6c\165\x6d\x6e\x73\x2d\x73\160\141\156\x6e\x65\144"])) { $columnTo = PHPExcel_Cell::stringFromColumnIndex(PHPExcel_Cell::columnIndexFromString($columnID) + $cellDataTableAttributes["\156\x75\155\x62\x65\x72\55\x63\x6f\154\x75\155\x6e\163\55\x73\160\x61\156\x6e\x65\x64"] - 2); } goto aDe89; KOmR_: $columnTo = $columnID; goto rkvuQ; aDe89: $rowTo = $rowID; goto VARix; VARix: if (isset($cellDataTableAttributes["\156\165\155\142\x65\x72\x2d\x72\157\167\x73\x2d\x73\x70\x61\156\156\x65\x64"])) { $rowTo = $rowTo + $cellDataTableAttributes["\156\165\155\x62\x65\x72\x2d\162\157\167\x73\x2d\163\x70\141\156\x6e\145\x64"] - 1; } goto ff1_K; zyV3v: $objPHPExcel->getActiveSheet()->mergeCells($cellRange); goto gzw4l; gzw4l: } } goto UHTm0; rxJ_d: if (isset($cellDataOffice->annotation)) { goto nqS60; a2Q0c: $textArray = array(); goto rwek0; rwek0: foreach ($annotationText as $t) { if (isset($t->span)) { foreach ($t->span as $text) { $textArray[] = (string) $text; } } else { $textArray[] = (string) $t; } } goto aLOH9; nqS60: $annotationText = $cellDataOffice->annotation->children($namespacesContent["\164\x65\170\164"]); goto a2Q0c; LopkA: $objPHPExcel->getActiveSheet()->getComment($columnID . $rowID)->setText($this->parseRichText($text)); goto BoHBZ; aLOH9: $text = implode("\12", $textArray); goto LopkA; BoHBZ: } goto zzn2Z; GD41d: if ($type !== null) { for ($i = 0; $i < $colRepeats; ++$i) { if ($i > 0) { ++$columnID; } if ($type !== PHPExcel_Cell_DataType::TYPE_NULL) { for ($rowAdjust = 0; $rowAdjust < $rowRepeats; ++$rowAdjust) { $rID = $rowID + $rowAdjust; $objPHPExcel->getActiveSheet()->getCell($columnID . $rID)->setValueExplicit($hasCalculatedValue ? $cellDataFormula : $dataValue, $type); if ($hasCalculatedValue) { $objPHPExcel->getActiveSheet()->getCell($columnID . $rID)->setCalculatedValue($dataValue); } if ($formatting !== null) { $objPHPExcel->getActiveSheet()->getStyle($columnID . $rID)->getNumberFormat()->setFormatCode($formatting); } else { $objPHPExcel->getActiveSheet()->getStyle($columnID . $rID)->getNumberFormat()->setFormatCode(PHPExcel_Style_NumberFormat::FORMAT_GENERAL); } if ($hyperlink !== null) { $objPHPExcel->getActiveSheet()->getCell($columnID . $rID)->getHyperlink()->setUrl($hyperlink); } } } } } goto ykBHP; YIyz3: $cellDataOfficeAttributes = $cellData->attributes($namespacesContent["\x6f\x66\146\x69\x63\x65"]); goto F2uJK; UHTm0: ++$columnID; goto U3dKw; v8vZU: $cellDataFormula = ''; goto Pqjmb; hls5Q: if ($hasCalculatedValue) { goto YhtWG; ekhW6: $temp = explode("\42", $cellDataFormula); goto itzfs; upafw: unset($value); goto T8Qmj; itzfs: $tKey = false; goto lUYzU; YhtWG: $type = PHPExcel_Cell_DataType::TYPE_FORMULA; goto JUML1; lUYzU: foreach ($temp as &$value) { if ($tKey = !$tKey) { goto rkPC1; laU93: $value = preg_replace("\57\134\x5b\x5c\56\x28\133\x5e\134\56\135\53\x29\x3a\x5c\56\x28\133\136\x5c\x2e\x5d\53\x29\x5c\x5d\x2f\x55\x69", "\x24\x31\x3a\x24\x32", $value); goto i8k4f; hzaEe: $value = PHPExcel_Calculation::translateSeparator("\73", "\x2c", $value, $inBraces); goto pipZy; i8k4f: $value = preg_replace("\57\x5c\133\134\x2e\50\133\136\x5c\x2e\x5d\53\51\134\135\57\x55\x69", "\44\61", $value); goto hzaEe; rkPC1: $value = preg_replace("\x2f\x5c\133\x28\133\136\134\x2e\x5d\x2b\51\134\x2e\50\133\x5e\134\56\135\53\51\72\134\56\x28\x5b\x5e\134\x2e\x5d\x2b\x29\x5c\x5d\x2f\x55\151", "\x24\61\x21\x24\x32\72\x24\63", $value); goto BJtR7; BJtR7: $value = preg_replace("\x2f\x5c\x5b\50\133\136\134\x2e\135\x2b\51\x5c\x2e\50\133\136\x5c\56\x5d\x2b\51\134\135\57\125\x69", "\44\x31\41\44\62", $value); goto laU93; pipZy: } } goto upafw; JUML1: $cellDataFormula = substr($cellDataFormula, strpos($cellDataFormula, "\x3a\75") + 1); goto ekhW6; T8Qmj: $cellDataFormula = implode("\x22", $temp); goto IXodT; IXodT: } goto lXj3H; lXj3H: $colRepeats = isset($cellDataTableAttributes["\156\x75\155\142\x65\162\x2d\143\157\x6c\x75\155\156\163\55\162\145\160\x65\141\164\x65\x64"]) ? $cellDataTableAttributes["\x6e\165\155\x62\145\x72\x2d\x63\x6f\154\165\x6d\156\x73\x2d\162\x65\x70\145\x61\164\x65\144"] : 1; goto GD41d; U3dKw: } goto I_r2Y; OEwZd: $columnID = "\101"; goto zDW36; T7mho: $rowRepeats = isset($rowDataTableAttributes["\x6e\165\155\142\x65\162\x2d\x72\157\x77\x73\55\x72\145\x70\145\x61\x74\145\x64"]) ? $rowDataTableAttributes["\156\x75\x6d\142\145\x72\55\162\157\167\163\55\162\x65\x70\145\141\x74\145\144"] : 1; goto OEwZd; I_r2Y: $rowID += $rowRepeats; goto YHLn4; fbkK2: $rowDataTableAttributes = $rowData->attributes($namespacesContent["\164\141\x62\154\x65"]); goto T7mho; OSaUP: } } goto wxkl_; npULb: $worksheetData = $worksheetDataSet->children($namespacesContent["\x74\x61\x62\154\145"]); goto r7UsZ; wxkl_: ++$worksheetID; goto tIEoU; S3y0M: $rowID = 1; goto hdnk0; rn6u7: $objPHPExcel->setActiveSheetIndex($worksheetID); goto p24Mb; guuoY: if (isset($this->loadSheetsOnly) && isset($worksheetDataAttributes["\156\x61\155\x65"]) && !in_array($worksheetDataAttributes["\x6e\141\x6d\x65"], $this->loadSheetsOnly)) { continue; } goto zacx7; zacx7: $objPHPExcel->createSheet(); goto rn6u7; r7UsZ: $worksheetDataAttributes = $worksheetDataSet->attributes($namespacesContent["\x74\141\x62\154\x65"]); goto guuoY; p24Mb: if (isset($worksheetDataAttributes["\x6e\141\x6d\x65"])) { $worksheetName = (string) $worksheetDataAttributes["\x6e\141\x6d\145"]; $objPHPExcel->getActiveSheet()->setTitle($worksheetName, false); } goto S3y0M; tIEoU: } goto ZxbVl; n24Vj: $worksheetID = 0; goto Wk49d; ZxbVl: } goto aNpp0; C3sI7: $officeProperty = $xml->children($namespacesMeta["\157\x66\146\x69\x63\x65"]); goto jqRTp; HS4p1: $docProps = $objPHPExcel->getProperties(); goto C3sI7; D3nSk: $xml = simplexml_load_string($this->securityScan($zip->getFromName("\x6d\x65\164\141\56\170\155\x6c")), "\123\151\x6d\160\x6c\145\x58\x4d\x4c\x45\x6c\145\x6d\145\x6e\164", PHPExcel_Settings::getLibXmlLoaderOptions()); goto eKj5k; NQaBS: $timezoneObj = new DateTimeZone("\105\165\x72\x6f\160\145\x2f\x4c\x6f\156\x64\x6f\156"); goto V1hM7; jqRTp: foreach ($officeProperty as $officePropertyData) { goto idLvx; cQwDk: if (isset($namespacesMeta["\x64\x63"])) { $officePropertyDC = $officePropertyData->children($namespacesMeta["\144\143"]); } goto EMBLE; Inixa: if (isset($namespacesMeta["\144\x63"])) { $officePropertyMeta = $officePropertyData->children($namespacesMeta["\x6d\x65\164\141"]); } goto eswy2; eswy2: foreach ($officePropertyMeta as $propertyName => $propertyValue) { goto vLclv; vLclv: $propertyValueAttributes = $propertyValue->attributes($namespacesMeta["\155\x65\164\141"]); goto n3nKi; JUkBN: switch ($propertyName) { case "\x69\x6e\x69\164\x69\x61\x6c\x2d\143\x72\x65\141\x74\157\162": $docProps->setCreator($propertyValue); break; case "\153\x65\x79\167\x6f\162\144": $docProps->setKeywords($propertyValue); break; case "\x63\x72\145\141\164\151\157\x6e\55\x64\x61\164\x65": goto CsS6n; uWyGw: break; goto KLcFB; DZhYs: $docProps->setCreated($creationDate); goto uWyGw; CsS6n: $creationDate = strtotime($propertyValue); goto DZhYs; KLcFB: case "\x75\x73\145\162\x2d\x64\145\x66\151\156\x65\x64": goto jjGMa; jjGMa: $propertyValueType = PHPExcel_DocumentProperties::PROPERTY_TYPE_STRING; goto xyCNx; J0Otf: $docProps->setCustomProperty($propertyValueName, $propertyValue, $propertyValueType); goto fPChI; fPChI: break; goto V1YdA; xyCNx: foreach ($propertyValueAttributes as $key => $value) { if ($key == "\156\x61\155\x65") { $propertyValueName = (string) $value; } elseif ($key == "\166\x61\x6c\x75\x65\55\164\x79\160\x65") { switch ($value) { case "\144\x61\x74\x65": goto iaqct; iaqct: $propertyValue = PHPExcel_DocumentProperties::convertProperty($propertyValue, "\144\141\164\145"); goto oA5d7; oA5d7: $propertyValueType = PHPExcel_DocumentProperties::PROPERTY_TYPE_DATE; goto Zjr6Y; Zjr6Y: break; goto wo02m; wo02m: case "\142\157\x6f\154\x65\x61\156": goto VEoiM; VEoiM: $propertyValue = PHPExcel_DocumentProperties::convertProperty($propertyValue, "\x62\157\x6f\x6c"); goto OEiev; Y29si: break; goto eKda7; OEiev: $propertyValueType = PHPExcel_DocumentProperties::PROPERTY_TYPE_BOOLEAN; goto Y29si; eKda7: case "\146\154\x6f\141\164": goto D8Cuk; TtT0e: break; goto K2hbv; PIeDC: $propertyValueType = PHPExcel_DocumentProperties::PROPERTY_TYPE_FLOAT; goto TtT0e; D8Cuk: $propertyValue = PHPExcel_DocumentProperties::convertProperty($propertyValue, "\162\64"); goto PIeDC; K2hbv: default: $propertyValueType = PHPExcel_DocumentProperties::PROPERTY_TYPE_STRING; } } } goto J0Otf; V1YdA: } goto x31AX; n3nKi: $propertyValue = (string) $propertyValue; goto JUkBN; x31AX: } goto ZtKYF; coG_m: $officePropertyMeta = array(); goto Inixa; idLvx: $officePropertyDC = array(); goto cQwDk; EMBLE: foreach ($officePropertyDC as $propertyName => $propertyValue) { $propertyValue = (string) $propertyValue; switch ($propertyName) { case "\x74\151\x74\x6c\x65": $docProps->setTitle($propertyValue); break; case "\x73\165\142\x6a\x65\x63\x74": $docProps->setSubject($propertyValue); break; case "\x63\162\x65\141\x74\x6f\x72": goto Bv0E8; Bv0E8: $docProps->setCreator($propertyValue); goto zuOpP; cCkF6: break; goto QaHXu; zuOpP: $docProps->setLastModifiedBy($propertyValue); goto cCkF6; QaHXu: case "\x64\141\164\x65": goto xJq4l; XHdcH: break; goto a7bOI; kUYOt: $docProps->setCreated($creationDate); goto uxD9O; uxD9O: $docProps->setModified($creationDate); goto XHdcH; xJq4l: $creationDate = strtotime($propertyValue); goto kUYOt; a7bOI: case "\144\145\163\x63\x72\151\x70\164\x69\x6f\156": $docProps->setDescription($propertyValue); break; } } goto coG_m; ZtKYF: } goto xfiqh; V1hM7: $GMT = new DateTimeZone("\125\x54\103"); goto HATET; uBj0t: } private function parseRichText($is = '') { goto kq8ZU; kq8ZU: $value = new PHPExcel_RichText(); goto mbnIL; Wh4Gr: return $value; goto q2tMd; mbnIL: $value->createText($is); goto Wh4Gr; q2tMd: } }
