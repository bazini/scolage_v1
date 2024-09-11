<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 if (!defined("\120\x48\120\x45\x58\103\x45\x4c\x5f\122\117\x4f\x54")) { define("\120\110\120\x45\130\103\x45\x4c\x5f\122\x4f\117\x54", dirname(__FILE__) . "\x2f\x2e\56\57\56\x2e\x2f"); require PHPEXCEL_ROOT . "\x50\110\120\105\x78\143\x65\154\57\x41\x75\x74\157\x6c\x6f\141\144\145\x72\56\160\150\160"; } class PHPExcel_Calculation_DateTime { public static function isLeapYear($year) { return $year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0; } private static function dateDiff360($startDay, $startMonth, $startYear, $endDay, $endMonth, $endYear, $methodUS) { goto nuH56; nuH56: if ($startDay == 31) { --$startDay; } elseif ($methodUS && ($startMonth == 2 && ($startDay == 29 || $startDay == 28 && !self::isLeapYear($startYear)))) { $startDay = 30; } goto rYAPO; nII5e: return $endDay + $endMonth * 30 + $endYear * 360 - $startDay - $startMonth * 30 - $startYear * 360; goto Zk2eV; rYAPO: if ($endDay == 31) { if ($methodUS && $startDay != 30) { $endDay = 1; if ($endMonth == 12) { ++$endYear; $endMonth = 1; } else { ++$endMonth; } } else { $endDay = 30; } } goto nII5e; Zk2eV: } public static function getDateValue($dateValue) { if (!is_numeric($dateValue)) { if (is_string($dateValue) && PHPExcel_Calculation_Functions::getCompatibilityMode() == PHPExcel_Calculation_Functions::COMPATIBILITY_GNUMERIC) { return PHPExcel_Calculation_Functions::VALUE(); } if (is_object($dateValue) && $dateValue instanceof DateTime) { $dateValue = PHPExcel_Shared_Date::PHPToExcel($dateValue); } else { goto rnPMZ; OP8Ht: PHPExcel_Calculation_Functions::setReturnDateType($saveReturnDateType); goto C6Dsk; jcX8f: PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL); goto G3wxj; rnPMZ: $saveReturnDateType = PHPExcel_Calculation_Functions::getReturnDateType(); goto jcX8f; G3wxj: $dateValue = self::DATEVALUE($dateValue); goto OP8Ht; C6Dsk: } } return $dateValue; } private static function getTimeValue($timeValue) { goto xrkzE; R59Nf: PHPExcel_Calculation_Functions::setReturnDateType($saveReturnDateType); goto E5x4c; d5JSB: $timeValue = self::TIMEVALUE($timeValue); goto R59Nf; E5x4c: return $timeValue; goto DikVJ; xrkzE: $saveReturnDateType = PHPExcel_Calculation_Functions::getReturnDateType(); goto BUaXB; BUaXB: PHPExcel_Calculation_Functions::setReturnDateType(PHPExcel_Calculation_Functions::RETURNDATE_EXCEL); goto d5JSB; DikVJ: } private static function adjustDateByMonths($dateValue = 0, $adjustmentMonths = 0) { goto qaUyl; MqXhx: $nMonth = (int) $PHPDateObject->format("\155"); goto k5nnQ; qaUyl: $PHPDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($dateValue); goto mPlxA; BlKJI: return $PHPDateObject; goto rOyF_; cr4dn: if ($adjustmentMonths > 0) { $adjustmentMonthsString = "\x2b" . $adjustmentMonths; } goto vao33; mPlxA: $oMonth = (int) $PHPDateObject->format("\155"); goto kWnCs; k5nnQ: $nYear = (int) $PHPDateObject->format("\131"); goto zQ8FM; xWrX5: $adjustmentMonthsString = (string) $adjustmentMonths; goto cr4dn; kWnCs: $oYear = (int) $PHPDateObject->format("\x59"); goto xWrX5; zQ8FM: $monthDiff = $nMonth - $oMonth + ($nYear - $oYear) * 12; goto qLGys; vao33: if ($adjustmentMonths != 0) { $PHPDateObject->modify($adjustmentMonthsString . "\x20\155\157\x6e\x74\150\163"); } goto MqXhx; qLGys: if ($monthDiff != $adjustmentMonths) { goto jc5Gi; a161F: $PHPDateObject->modify($adjustDaysString); goto rCWva; sQjKn: $adjustDaysString = "\55" . $adjustDays . "\40\x64\x61\171\x73"; goto a161F; jc5Gi: $adjustDays = (int) $PHPDateObject->format("\x64"); goto sQjKn; rCWva: } goto BlKJI; rOyF_: } public static function DATETIMENOW() { goto kHFkn; GoVil: date_default_timezone_set($saveTimeZone); goto nx4s_; G7eXR: $retValue = false; goto D9x5I; D9x5I: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: $retValue = (float) PHPExcel_Shared_Date::PHPToExcel(time()); break; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: $retValue = (int) time(); break; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: $retValue = new DateTime(); break; } goto GoVil; kW1Xg: date_default_timezone_set("\x55\x54\x43"); goto G7eXR; nx4s_: return $retValue; goto mf_oD; kHFkn: $saveTimeZone = date_default_timezone_get(); goto kW1Xg; mf_oD: } public static function DATENOW() { goto xfl95; X2To_: date_default_timezone_set("\125\124\103"); goto J9t_H; J9t_H: $retValue = false; goto ad_pS; RaLXe: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: $retValue = (float) $excelDateTime; break; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: $retValue = (int) PHPExcel_Shared_Date::ExcelToPHP($excelDateTime); break; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: $retValue = PHPExcel_Shared_Date::ExcelToPHPObject($excelDateTime); break; } goto nJXqT; VsM4W: return $retValue; goto c0AWn; nJXqT: date_default_timezone_set($saveTimeZone); goto VsM4W; xfl95: $saveTimeZone = date_default_timezone_get(); goto X2To_; ad_pS: $excelDateTime = floor(PHPExcel_Shared_Date::PHPToExcel(time())); goto RaLXe; c0AWn: } public static function DATE($year = 0, $month = 1, $day = 1) { goto Gh9P4; T0Y9f: $month = PHPExcel_Calculation_Functions::flattenSingleValue($month); goto L9Hwl; ME6uj: if ($day !== null && !is_numeric($day)) { $day = PHPExcel_Shared_Date::dayStringToNumber($day); } goto yqVDr; IVsxy: if ($month < 1) { goto mkBQc; HXlWA: $year += ceil($month / 12) - 1; goto zlJjb; mkBQc: --$month; goto HXlWA; zlJjb: $month = 13 - abs($month % 12); goto pSEgo; pSEgo: } elseif ($month > 12) { $year += floor($month / 12); $month = $month % 12; } goto cpVyO; qnj5F: if ($year < $baseYear && $year >= $baseYear - 1900) { $year += 1900; } goto IVsxy; d7Ym1: if ($month !== null && !is_numeric($month)) { $month = PHPExcel_Shared_Date::monthStringToNumber($month); } goto ME6uj; Jj784: if (!is_numeric($year) || !is_numeric($month) || !is_numeric($day)) { return PHPExcel_Calculation_Functions::VALUE(); } goto ucE_q; akqRn: $day = $day !== null ? PHPExcel_Shared_String::testStringAsNumeric($day) : 0; goto Jj784; Tuw2o: $excelDateValue = PHPExcel_Shared_Date::FormattedPHPToExcel($year, $month, $day); goto PGI1M; XkWrV: if ($baseYear - 1900 != 0 && $year < $baseYear && $year >= 1900) { return PHPExcel_Calculation_Functions::NaN(); } goto qnj5F; RD4Mh: $month = (int) $month; goto BSEV3; PGI1M: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: return (float) $excelDateValue; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) PHPExcel_Shared_Date::ExcelToPHP($excelDateValue); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: return PHPExcel_Shared_Date::ExcelToPHPObject($excelDateValue); } goto Uf3YW; WLs_B: if ($year < $baseYear - 1900) { return PHPExcel_Calculation_Functions::NaN(); } goto XkWrV; yqVDr: $year = $year !== null ? PHPExcel_Shared_String::testStringAsNumeric($year) : 0; goto Ia_kB; ucE_q: $year = (int) $year; goto RD4Mh; cpVyO: if ($year < $baseYear || $year >= 10000) { return PHPExcel_Calculation_Functions::NaN(); } goto Tuw2o; EztqE: $baseYear = PHPExcel_Shared_Date::getExcelCalendar(); goto WLs_B; L9Hwl: $day = PHPExcel_Calculation_Functions::flattenSingleValue($day); goto d7Ym1; Gh9P4: $year = PHPExcel_Calculation_Functions::flattenSingleValue($year); goto T0Y9f; Ia_kB: $month = $month !== null ? PHPExcel_Shared_String::testStringAsNumeric($month) : 0; goto akqRn; BSEV3: $day = (int) $day; goto EztqE; Uf3YW: } public static function TIME($hour = 0, $minute = 0, $second = 0) { goto qr9Ls; HYOZX: if ($hour == '') { $hour = 0; } goto awDaD; uwHpr: if (!is_numeric($hour) || !is_numeric($minute) || !is_numeric($second)) { return PHPExcel_Calculation_Functions::VALUE(); } goto Psmb_; AUdcN: if ($hour > 23) { $hour = $hour % 24; } elseif ($hour < 0) { return PHPExcel_Calculation_Functions::NaN(); } goto OlVwd; K0jaO: if ($second == '') { $second = 0; } goto uwHpr; tDbKt: $second = PHPExcel_Calculation_Functions::flattenSingleValue($second); goto HYOZX; JvF5r: $minute = (int) $minute; goto AWwJq; OlVwd: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: goto U0EEA; U0EEA: $date = 0; goto OXj5f; OXj5f: $calendar = PHPExcel_Shared_Date::getExcelCalendar(); goto bp5bu; bp5bu: if ($calendar != PHPExcel_Shared_Date::CALENDAR_WINDOWS_1900) { $date = 1; } goto b1ec7; b1ec7: return (float) PHPExcel_Shared_Date::FormattedPHPToExcel($calendar, 1, $date, $hour, $minute, $second); goto rMdiF; rMdiF: case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) PHPExcel_Shared_Date::ExcelToPHP(PHPExcel_Shared_Date::FormattedPHPToExcel(1970, 1, 1, $hour, $minute, $second)); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: goto Q7FjT; BplA4: if ($dayAdjust != 0) { $phpDateObject->modify($dayAdjust . "\x20\144\x61\171\x73"); } goto Js6ZU; NzuKD: if ($hour < 0) { goto RyixF; EIa1h: $hour = 24 - abs($hour % 24); goto mY76i; mY76i: if ($hour == 24) { $hour = 0; } goto kq0xj; RyixF: $dayAdjust = floor($hour / 24); goto EIa1h; kq0xj: } elseif ($hour >= 24) { $dayAdjust = floor($hour / 24); $hour = $hour % 24; } goto HXtaY; HXtaY: $phpDateObject = new DateTime("\61\x39\x30\x30\x2d\x30\61\x2d\x30\61\x20" . $hour . "\72" . $minute . "\72" . $second); goto BplA4; Js6ZU: return $phpDateObject; goto dW0VR; Q7FjT: $dayAdjust = 0; goto NzuKD; dW0VR: } goto MpvVv; qr9Ls: $hour = PHPExcel_Calculation_Functions::flattenSingleValue($hour); goto W1mIo; Psmb_: $hour = (int) $hour; goto JvF5r; awDaD: if ($minute == '') { $minute = 0; } goto K0jaO; AWwJq: $second = (int) $second; goto Qdm8Y; pMK3F: if ($minute < 0) { goto iiFaa; iiFaa: $hour += floor($minute / 60); goto oiTPw; OW9Jd: if ($minute == 60) { $minute = 0; } goto YkvGO; oiTPw: $minute = 60 - abs($minute % 60); goto OW9Jd; YkvGO: } elseif ($minute >= 60) { $hour += floor($minute / 60); $minute = $minute % 60; } goto AUdcN; W1mIo: $minute = PHPExcel_Calculation_Functions::flattenSingleValue($minute); goto tDbKt; Qdm8Y: if ($second < 0) { goto R5kL8; Xze1I: if ($second == 60) { $second = 0; } goto pzl9b; PTwxU: $second = 60 - abs($second % 60); goto Xze1I; R5kL8: $minute += floor($second / 60); goto PTwxU; pzl9b: } elseif ($second >= 60) { $minute += floor($second / 60); $second = $second % 60; } goto pMK3F; MpvVv: } public static function DATEVALUE($dateValue = 1) { goto MhozC; DdGfd: $yearFound = false; goto JKqqa; b00DB: $dateValue = preg_replace("\x2f\50\134\144\x29\x28\x73\x74\174\x6e\x64\174\x72\144\x7c\x74\150\51\50\133\40\55\134\57\135\51\x2f\x55\151", "\x24\61\44\63", $dateValue); goto tAeU_; u2C3q: unset($t); goto uCWzZ; rn0Y_: if (count($t1) == 1 && strpos($t, "\x3a") != false) { return 0.0; } elseif (count($t1) == 2) { if ($yearFound) { array_unshift($t1, 1); } else { array_push($t1, date("\x59")); } } goto u2C3q; EjRqy: return PHPExcel_Calculation_Functions::VALUE(); goto R0pew; gHIGM: foreach ($t1 as &$t) { if (is_numeric($t) && $t > 31) { if ($yearFound) { return PHPExcel_Calculation_Functions::VALUE(); } else { if ($t < 100) { $t += 1900; } $yearFound = true; } } } goto rn0Y_; MhozC: $dateValue = trim(PHPExcel_Calculation_Functions::flattenSingleValue($dateValue), "\x22"); goto b00DB; JKqqa: $t1 = explode("\x20", $dateValue); goto gHIGM; g6Aeb: if ($PHPDateArray !== false && $PHPDateArray["\x65\162\x72\157\162\x5f\x63\157\x75\x6e\164"] == 0) { goto CtYE1; yQKFG: $excelDateValue = floor(PHPExcel_Shared_Date::FormattedPHPToExcel($PHPDateArray["\171\x65\x61\x72"], $PHPDateArray["\155\x6f\156\x74\x68"], $PHPDateArray["\144\141\171"], $PHPDateArray["\150\x6f\165\162"], $PHPDateArray["\155\x69\156\x75\x74\x65"], $PHPDateArray["\163\145\143\157\x6e\144"])); goto SyO3J; SyO3J: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: return (float) $excelDateValue; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) PHPExcel_Shared_Date::ExcelToPHP($excelDateValue); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: return new DateTime($PHPDateArray["\171\x65\x61\162"] . "\x2d" . $PHPDateArray["\155\157\x6e\164\x68"] . "\55" . $PHPDateArray["\x64\x61\x79"] . "\40\x30\60\x3a\60\x30\72\x30\60"); } goto xpgAi; UdC17: if ($PHPDateArray["\144\x61\x79"] == '') { $PHPDateArray["\x64\141\x79"] = strftime("\45\x64"); } goto yQKFG; RKLVo: if ($PHPDateArray["\x6d\157\156\x74\x68"] == '') { $PHPDateArray["\155\157\156\164\150"] = strftime("\45\155"); } goto UdC17; CtYE1: if ($PHPDateArray["\171\145\x61\x72"] == '') { $PHPDateArray["\171\x65\141\162"] = strftime("\x25\x59"); } goto JfHjh; JfHjh: if ($PHPDateArray["\x79\x65\x61\162"] < 1900) { return PHPExcel_Calculation_Functions::VALUE(); } goto RKLVo; xpgAi: } goto EjRqy; tAeU_: $dateValue = str_replace(array("\x2f", "\x2e", "\x2d", "\x20\x20"), array("\40", "\40", "\40", "\40"), $dateValue); goto DdGfd; uCWzZ: $dateValue = implode("\x20", $t1); goto cw4RY; pIHaI: if ($PHPDateArray === false || $PHPDateArray["\x65\x72\162\157\x72\137\143\x6f\x75\x6e\164"] > 0) { goto U02TQ; woUYl: $PHPDateArray = date_parse($testVal1 . "\55" . $testVal2 . "\55" . $testVal3); goto lKXet; Rzcsm: if ($testVal1 !== false) { $testVal2 = strtok("\55\x20"); if ($testVal2 !== false) { $testVal3 = strtok("\55\x20"); if ($testVal3 === false) { $testVal3 = strftime("\x25\x59"); } } else { return PHPExcel_Calculation_Functions::VALUE(); } } else { return PHPExcel_Calculation_Functions::VALUE(); } goto woUYl; U02TQ: $testVal1 = strtok($dateValue, "\55\40"); goto Rzcsm; lKXet: if ($PHPDateArray === false || $PHPDateArray["\x65\x72\162\x6f\162\137\143\x6f\165\156\x74"] > 0) { $PHPDateArray = date_parse($testVal2 . "\55" . $testVal1 . "\55" . $testVal3); if ($PHPDateArray === false || $PHPDateArray["\x65\x72\162\157\x72\x5f\x63\x6f\165\x6e\x74"] > 0) { return PHPExcel_Calculation_Functions::VALUE(); } } goto RySSN; RySSN: } goto g6Aeb; cw4RY: $PHPDateArray = date_parse($dateValue); goto pIHaI; R0pew: } public static function TIMEVALUE($timeValue) { goto q2G6g; q2G6g: $timeValue = trim(PHPExcel_Calculation_Functions::flattenSingleValue($timeValue), "\42"); goto x8b2I; x8b2I: $timeValue = str_replace(array("\x2f", "\56"), array("\x2d", "\55"), $timeValue); goto DlKHE; V57vX: return PHPExcel_Calculation_Functions::VALUE(); goto KsVtk; AsbhU: if ($PHPDateArray !== false && $PHPDateArray["\x65\162\x72\157\162\x5f\143\x6f\x75\156\x74"] == 0) { if (PHPExcel_Calculation_Functions::getCompatibilityMode() == PHPExcel_Calculation_Functions::COMPATIBILITY_OPENOFFICE) { $excelDateValue = PHPExcel_Shared_Date::FormattedPHPToExcel($PHPDateArray["\171\x65\x61\x72"], $PHPDateArray["\x6d\x6f\x6e\x74\x68"], $PHPDateArray["\x64\x61\171"], $PHPDateArray["\150\x6f\x75\x72"], $PHPDateArray["\155\x69\x6e\165\x74\145"], $PHPDateArray["\x73\145\143\x6f\156\144"]); } else { $excelDateValue = PHPExcel_Shared_Date::FormattedPHPToExcel(1900, 1, 1, $PHPDateArray["\x68\157\165\162"], $PHPDateArray["\155\x69\156\165\x74\145"], $PHPDateArray["\x73\x65\143\157\x6e\x64"]) - 1; } switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: return (float) $excelDateValue; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) ($phpDateValue = PHPExcel_Shared_Date::ExcelToPHP($excelDateValue + 25569) - 3600); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: return new DateTime("\61\x39\60\60\55\60\x31\55\60\x31\x20" . $PHPDateArray["\x68\157\x75\162"] . "\72" . $PHPDateArray["\x6d\151\156\165\164\145"] . "\72" . $PHPDateArray["\x73\145\x63\x6f\x6e\x64"]); } } goto V57vX; DlKHE: $PHPDateArray = date_parse($timeValue); goto AsbhU; KsVtk: } public static function DATEDIF($startDate = 0, $endDate = 0, $unit = "\x44") { goto izA3b; QjTjw: $PHPEndDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($endDate); goto PwVvb; st5Pq: if (is_string($endDate = self::getDateValue($endDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto h5LKX; JVwRH: $startMonths = $PHPStartDateObject->format("\x6e"); goto USzfS; dVCaH: $endMonths = $PHPEndDateObject->format("\x6e"); goto By5e2; KbLEo: if (is_string($startDate = self::getDateValue($startDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto st5Pq; X1BcE: $startDays = $PHPStartDateObject->format("\152"); goto JVwRH; USzfS: $startYears = $PHPStartDateObject->format("\x59"); goto QjTjw; KdOdZ: $retVal = PHPExcel_Calculation_Functions::NaN(); goto TV9TT; UJnn6: $PHPStartDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($startDate); goto X1BcE; izA3b: $startDate = PHPExcel_Calculation_Functions::flattenSingleValue($startDate); goto VQPak; By5e2: $endYears = $PHPEndDateObject->format("\x59"); goto KdOdZ; XwAG_: $difference = $endDate - $startDate; goto UJnn6; PwVvb: $endDays = $PHPEndDateObject->format("\x6a"); goto dVCaH; fLyKH: $unit = strtoupper(PHPExcel_Calculation_Functions::flattenSingleValue($unit)); goto KbLEo; VQPak: $endDate = PHPExcel_Calculation_Functions::flattenSingleValue($endDate); goto fLyKH; anBgI: return $retVal; goto coP27; TV9TT: switch ($unit) { case "\104": $retVal = intval($difference); break; case "\x4d": goto SdQM1; SdQM1: $retVal = intval($endMonths - $startMonths) + intval($endYears - $startYears) * 12; goto L_aYg; Pz3dd: break; goto Bi1aa; L_aYg: if ($endDays < $startDays) { --$retVal; } goto Pz3dd; Bi1aa: case "\x59": goto nLLQ3; kw_mR: if ($endMonths < $startMonths) { --$retVal; } elseif ($endMonths == $startMonths && $endDays < $startDays) { --$retVal; } goto ti_gY; nLLQ3: $retVal = intval($endYears - $startYears); goto kw_mR; ti_gY: break; goto b8Z8s; b8Z8s: case "\115\x44": if ($endDays < $startDays) { goto uN31v; GakBk: $PHPEndDateObject->modify("\55" . $endDays . "\40\144\141\x79\163"); goto b9ZIH; b9ZIH: $adjustDays = $PHPEndDateObject->format("\x6a"); goto HiMJG; HiMJG: if ($adjustDays > $startDays) { $retVal += $adjustDays - $startDays; } goto NUxvl; uN31v: $retVal = $endDays; goto GakBk; NUxvl: } else { $retVal = $endDays - $startDays; } break; case "\x59\x4d": goto Pyl8f; zo1b3: if ($endDays < $startDays) { --$retVal; } goto adp8w; Pyl8f: $retVal = intval($endMonths - $startMonths); goto TFEtR; TFEtR: if ($retVal < 0) { $retVal += 12; } goto zo1b3; adp8w: break; goto JnGAt; JnGAt: case "\x59\x44": goto QIKk0; QIKk0: $retVal = intval($difference); goto rx3LG; rx3LG: if ($endYears > $startYears) { goto eJ8c5; eJ8c5: while ($endYears > $startYears) { $PHPEndDateObject->modify("\55\x31\40\171\145\141\x72"); $endYears = $PHPEndDateObject->format("\131"); } goto rF2Pr; rF2Pr: $retVal = $PHPEndDateObject->format("\172") - $PHPStartDateObject->format("\x7a"); goto nsjFy; nsjFy: if ($retVal < 0) { $retVal += 365; } goto N9MTS; N9MTS: } goto BXhog; BXhog: break; goto pitS5; pitS5: default: $retVal = PHPExcel_Calculation_Functions::NaN(); } goto anBgI; h5LKX: if ($startDate >= $endDate) { return PHPExcel_Calculation_Functions::NaN(); } goto XwAG_; coP27: } public static function DAYS360($startDate = 0, $endDate = 0, $method = false) { goto l2H21; t95Nq: $PHPEndDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($endDate); goto TrMQG; oWgcg: $startDay = $PHPStartDateObject->format("\152"); goto pUOH4; qIRVy: $startYear = $PHPStartDateObject->format("\x59"); goto t95Nq; dJ3Cn: $PHPStartDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($startDate); goto oWgcg; TrMQG: $endDay = $PHPEndDateObject->format("\152"); goto Ri9eD; Ooils: return self::dateDiff360($startDay, $startMonth, $startYear, $endDay, $endMonth, $endYear, !$method); goto I3WTq; fuuh7: if (is_string($startDate = self::getDateValue($startDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto cZDdh; nouWT: $endDate = PHPExcel_Calculation_Functions::flattenSingleValue($endDate); goto fuuh7; OGYtk: $endYear = $PHPEndDateObject->format("\131"); goto Ooils; iTZwf: if (!is_bool($method)) { return PHPExcel_Calculation_Functions::VALUE(); } goto dJ3Cn; Ri9eD: $endMonth = $PHPEndDateObject->format("\156"); goto OGYtk; pUOH4: $startMonth = $PHPStartDateObject->format("\156"); goto qIRVy; l2H21: $startDate = PHPExcel_Calculation_Functions::flattenSingleValue($startDate); goto nouWT; cZDdh: if (is_string($endDate = self::getDateValue($endDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto iTZwf; I3WTq: } public static function YEARFRAC($startDate = 0, $endDate = 0, $method = 0) { goto yAm0v; yAm0v: $startDate = PHPExcel_Calculation_Functions::flattenSingleValue($startDate); goto RbEY2; clwcv: return PHPExcel_Calculation_Functions::VALUE(); goto xSjii; ujcEw: if (is_string($endDate = self::getDateValue($endDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto XhMQo; hEm1J: $method = PHPExcel_Calculation_Functions::flattenSingleValue($method); goto pJDDA; pJDDA: if (is_string($startDate = self::getDateValue($startDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto ujcEw; XhMQo: if (is_numeric($method) && !is_string($method) || $method == '') { switch ($method) { case 0: return self::DAYS360($startDate, $endDate) / 360; case 1: goto IcRbc; tt_tq: if ($years == 1) { if (self::isLeapYear($endYear)) { goto knNzj; Fr4YD: if ($startMonth < 3 || $endMonth * 100 + $endDay >= 2 * 100 + 29) { $leapDays += 1; } goto bX9LL; knNzj: $startMonth = self::MONTHOFYEAR($startDate); goto iu2n2; M2JTP: $endDay = self::DAYOFMONTH($endDate); goto Fr4YD; iu2n2: $endMonth = self::MONTHOFYEAR($endDate); goto M2JTP; bX9LL: } } else { goto eHqUl; ik1vH: $leapDays /= $years; goto fVvFO; TW5yT: if ($years == 2) { if ($leapDays == 0 && self::isLeapYear($startYear) && $days > 365) { $leapDays = 1; } elseif ($days < 366) { $years = 1; } } goto ik1vH; eHqUl: for ($year = $startYear; $year <= $endYear; ++$year) { if ($year == $startYear) { goto qm1Wg; IIcJc: if ($startMonth < 3) { $leapDays += self::isLeapYear($year) ? 1 : 0; } goto s9Tpd; qm1Wg: $startMonth = self::MONTHOFYEAR($startDate); goto SGgqt; SGgqt: $startDay = self::DAYOFMONTH($startDate); goto IIcJc; s9Tpd: } elseif ($year == $endYear) { goto i2fpc; z0AKW: if ($endMonth * 100 + $endDay >= 2 * 100 + 29) { $leapDays += self::isLeapYear($year) ? 1 : 0; } goto qGOfb; i2fpc: $endMonth = self::MONTHOFYEAR($endDate); goto JoXuI; JoXuI: $endDay = self::DAYOFMONTH($endDate); goto z0AKW; qGOfb: } else { $leapDays += self::isLeapYear($year) ? 1 : 0; } } goto TW5yT; fVvFO: } goto zWfLd; zWfLd: return $days / (365 + $leapDays); goto KL_9W; IcRbc: $days = self::DATEDIF($startDate, $endDate); goto jyESa; x7uQd: $endYear = self::YEAR($endDate); goto HOIeG; AFsiY: $leapDays = 0; goto tt_tq; HOIeG: $years = $endYear - $startYear + 1; goto AFsiY; jyESa: $startYear = self::YEAR($startDate); goto x7uQd; KL_9W: case 2: return self::DATEDIF($startDate, $endDate) / 360; case 3: return self::DATEDIF($startDate, $endDate) / 365; case 4: return self::DAYS360($startDate, $endDate, true) / 360; } } goto clwcv; RbEY2: $endDate = PHPExcel_Calculation_Functions::flattenSingleValue($endDate); goto hEm1J; xSjii: } public static function NETWORKDAYS($startDate, $endDate) { goto aOi_q; Vta_i: $dateArgs = PHPExcel_Calculation_Functions::flattenArray(func_get_args()); goto Wwk6s; KMCek: foreach ($dateArgs as $holidayDate) { if (is_string($holidayDate = self::getDateValue($holidayDate))) { return PHPExcel_Calculation_Functions::VALUE(); } if ($holidayDate >= $startDate && $holidayDate <= $endDate) { if (self::DAYOFWEEK($holidayDate, 2) < 6 && !in_array($holidayDate, $holidayCountedArray)) { --$partWeekDays; $holidayCountedArray[] = $holidayDate; } } } goto Wuyx9; zoPii: $startDoW = 6 - self::DAYOFWEEK($startDate, 2); goto WeLo4; YBHPd: if ($sDate > $eDate) { $startDate = $eDate; $endDate = $sDate; } goto zoPii; aOi_q: $startDate = PHPExcel_Calculation_Functions::flattenSingleValue($startDate); goto t1D3m; ypWxN: array_shift($dateArgs); goto LN4CM; WeLo4: if ($startDoW < 0) { $startDoW = 0; } goto M38N7; BCfPa: $partWeekDays = $endDoW + $startDoW; goto u_pp1; t1D3m: $endDate = PHPExcel_Calculation_Functions::flattenSingleValue($endDate); goto Vta_i; duFMs: if (is_string($endDate = $eDate = self::getDateValue($endDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto oUYa4; Wwk6s: array_shift($dateArgs); goto ypWxN; oUYa4: $endDate = (float) floor($endDate); goto YBHPd; HCzcC: $holidayCountedArray = array(); goto KMCek; M38N7: $endDoW = self::DAYOFWEEK($endDate, 2); goto agvjW; yUs8f: return $wholeWeekDays + $partWeekDays; goto HSOb5; u_pp1: if ($partWeekDays > 5) { $partWeekDays -= 5; } goto HCzcC; wWaLt: $wholeWeekDays = floor(($endDate - $startDate) / 7) * 5; goto BCfPa; nKI2N: $startDate = (float) floor($startDate); goto duFMs; Wuyx9: if ($sDate > $eDate) { return 0 - ($wholeWeekDays + $partWeekDays); } goto yUs8f; agvjW: if ($endDoW >= 6) { $endDoW = 0; } goto wWaLt; LN4CM: if (is_string($startDate = $sDate = self::getDateValue($startDate))) { return PHPExcel_Calculation_Functions::VALUE(); } goto nKI2N; HSOb5: } public static function WORKDAY($startDate, $endDays) { goto IN0zJ; MiHq_: if ($endDoW >= 5) { $endDate += $decrementing ? -$endDoW + 4 : 7 - $endDoW; } goto WfeKY; EMGuI: $endDoW = self::DAYOFWEEK($endDate, 3); goto MiHq_; T6coH: $endDate = (float) $startDate + intval($endDays / 5) * 7 + $endDays % 5; goto EMGuI; MD1ik: $startDoW = self::DAYOFWEEK($startDate, 3); goto YqEi8; fX_ES: $decrementing = $endDays < 0 ? true : false; goto MD1ik; xNliP: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: return (float) $endDate; case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) PHPExcel_Shared_Date::ExcelToPHP($endDate); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: return PHPExcel_Shared_Date::ExcelToPHPObject($endDate); } goto txOkM; T7fgS: $dateArgs = PHPExcel_Calculation_Functions::flattenArray(func_get_args()); goto nGV6a; lTVm8: $endDays = PHPExcel_Calculation_Functions::flattenSingleValue($endDays); goto T7fgS; REyfp: if ($endDays == 0) { return $startDate; } goto fX_ES; jKnb_: $endDays = (int) floor($endDays); goto REyfp; YqEi8: if (self::DAYOFWEEK($startDate, 3) >= 5) { $startDate += $decrementing ? -$startDoW + 4 : 7 - $startDoW; $decrementing ? $endDays++ : $endDays--; } goto T6coH; aVHCl: if (is_string($startDate = self::getDateValue($startDate)) || !is_numeric($endDays)) { return PHPExcel_Calculation_Functions::VALUE(); } goto U_mv2; bmK9C: array_shift($dateArgs); goto aVHCl; IN0zJ: $startDate = PHPExcel_Calculation_Functions::flattenSingleValue($startDate); goto lTVm8; WfeKY: if (!empty($dateArgs)) { goto ImF7U; hbjQX: if ($decrementing) { rsort($holidayDates, SORT_NUMERIC); } else { sort($holidayDates, SORT_NUMERIC); } goto MrRzm; MrRzm: foreach ($holidayDates as $holidayDate) { goto aKUjy; aKUjy: if ($decrementing) { if ($holidayDate <= $startDate && $holidayDate >= $endDate) { if (!in_array($holidayDate, $holidayCountedArray)) { --$endDate; $holidayCountedArray[] = $holidayDate; } } } else { if ($holidayDate >= $startDate && $holidayDate <= $endDate) { if (!in_array($holidayDate, $holidayCountedArray)) { ++$endDate; $holidayCountedArray[] = $holidayDate; } } } goto jRFby; khnws: if ($endDoW >= 5) { $endDate += $decrementing ? -$endDoW + 4 : 7 - $endDoW; } goto ZroyT; jRFby: $endDoW = self::DAYOFWEEK($endDate, 3); goto khnws; ZroyT: } goto EPMbt; ImF7U: $holidayCountedArray = $holidayDates = array(); goto chwRj; chwRj: foreach ($dateArgs as $holidayDate) { if ($holidayDate !== null && trim($holidayDate) > '') { if (is_string($holidayDate = self::getDateValue($holidayDate))) { return PHPExcel_Calculation_Functions::VALUE(); } if (self::DAYOFWEEK($holidayDate, 3) < 5) { $holidayDates[] = $holidayDate; } } } goto hbjQX; EPMbt: } goto xNliP; nGV6a: array_shift($dateArgs); goto bmK9C; U_mv2: $startDate = (float) floor($startDate); goto jKnb_; txOkM: } public static function DAYOFMONTH($dateValue = 1) { goto wtAaw; wtAaw: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto r9h2U; r9h2U: if ($dateValue === null) { $dateValue = 1; } elseif (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($dateValue == 0.0) { return 0; } elseif ($dateValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto VCcn_; VuSnL: return (int) $PHPDateObject->format("\x6a"); goto FftQZ; VCcn_: $PHPDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($dateValue); goto VuSnL; FftQZ: } public static function DAYOFWEEK($dateValue = 1, $style = 1) { goto yZ1Gc; IypqX: $style = PHPExcel_Calculation_Functions::flattenSingleValue($style); goto yn4BV; hKjAI: if (PHPExcel_Calculation_Functions::getCompatibilityMode() == PHPExcel_Calculation_Functions::COMPATIBILITY_EXCEL) { if ($PHPDateObject->format("\131") == 1900 && $PHPDateObject->format("\156") <= 2) { --$DoW; if ($DoW < $firstDay) { $DoW += 7; } } } goto c5Oph; Pdevw: switch ($style) { case 1: ++$DoW; break; case 2: if ($DoW == 0) { $DoW = 7; } break; case 3: goto YBigx; A0_SJ: $firstDay = 0; goto qAZrI; bkRBB: break; goto A6YM7; qAZrI: --$DoW; goto bkRBB; YBigx: if ($DoW == 0) { $DoW = 7; } goto A0_SJ; A6YM7: } goto hKjAI; aReAQ: $DoW = $PHPDateObject->format("\x77"); goto d87SH; yPDYd: if ($dateValue === null) { $dateValue = 1; } elseif (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($dateValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto q1nx3; mbWhP: $style = floor($style); goto yPDYd; yn4BV: if (!is_numeric($style)) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($style < 1 || $style > 3) { return PHPExcel_Calculation_Functions::NaN(); } goto mbWhP; yZ1Gc: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto IypqX; q1nx3: $PHPDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($dateValue); goto aReAQ; d87SH: $firstDay = 1; goto Pdevw; c5Oph: return (int) $DoW; goto eonzS; eonzS: } public static function WEEKOFYEAR($dateValue = 1, $method = 1) { goto k6gos; bTsgr: $PHPDateObject->modify("\x2d" . $dayOfYear . "\x20\x64\x61\171\163"); goto Trkhu; g4OE0: $dow = $PHPDateObject->format("\x77"); goto bTsgr; Trkhu: $dow = $PHPDateObject->format("\x77"); goto v_46C; PE1c6: $PHPDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($dateValue); goto z50V4; wVafV: if ($dateValue === null) { $dateValue = 1; } elseif (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($dateValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto PE1c6; k9cZO: $method = floor($method); goto wVafV; rsPj2: $method = PHPExcel_Calculation_Functions::flattenSingleValue($method); goto TA0bU; k6gos: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto rsPj2; z50V4: $dayOfYear = $PHPDateObject->format("\172"); goto g4OE0; zlGNH: $weekOfYear = ceil($dayOfYear / 7) + 1; goto zyrrr; zyrrr: return (int) $weekOfYear; goto EWJSV; v_46C: $daysInFirstWeek = 7 - ($dow + (2 - $method)) % 7; goto PWK4L; PWK4L: $dayOfYear -= $daysInFirstWeek; goto zlGNH; TA0bU: if (!is_numeric($method)) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($method < 1 || $method > 2) { return PHPExcel_Calculation_Functions::NaN(); } goto k9cZO; EWJSV: } public static function MONTHOFYEAR($dateValue = 1) { goto KbBaI; Moqid: if ($dateValue === null) { $dateValue = 1; } elseif (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($dateValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto hxWZQ; ZefuH: return (int) $PHPDateObject->format("\x6e"); goto ehGZB; KbBaI: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto Moqid; hxWZQ: $PHPDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($dateValue); goto ZefuH; ehGZB: } public static function YEAR($dateValue = 1) { goto t9swt; rDsCS: return (int) $PHPDateObject->format("\131"); goto pxrGQ; kLOxw: $PHPDateObject = PHPExcel_Shared_Date::ExcelToPHPObject($dateValue); goto rDsCS; pwnH5: if ($dateValue === null) { $dateValue = 1; } elseif (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } elseif ($dateValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto kLOxw; t9swt: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto pwnH5; pxrGQ: } public static function HOUROFDAY($timeValue = 0) { goto SSVca; SSVca: $timeValue = PHPExcel_Calculation_Functions::flattenSingleValue($timeValue); goto hYM91; hYM91: if (!is_numeric($timeValue)) { goto zMlTx; afP4k: if (is_string($timeValue)) { return PHPExcel_Calculation_Functions::VALUE(); } goto qfPcl; WjxMS: $timeValue = self::getTimeValue($timeValue); goto afP4k; zMlTx: if (PHPExcel_Calculation_Functions::getCompatibilityMode() == PHPExcel_Calculation_Functions::COMPATIBILITY_GNUMERIC) { $testVal = strtok($timeValue, "\57\55\x3a\40"); if (strlen($testVal) < strlen($timeValue)) { return PHPExcel_Calculation_Functions::VALUE(); } } goto WjxMS; qfPcl: } goto qpXNw; l8SUV: $timeValue = PHPExcel_Shared_Date::ExcelToPHP($timeValue); goto aRk_k; aRk_k: return (int) gmdate("\x47", $timeValue); goto ve5et; qpXNw: if ($timeValue >= 1) { $timeValue = fmod($timeValue, 1); } elseif ($timeValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto l8SUV; ve5et: } public static function MINUTEOFHOUR($timeValue = 0) { goto oHAVK; IoYX2: $timeValue = PHPExcel_Shared_Date::ExcelToPHP($timeValue); goto fhMzJ; OH4GP: if ($timeValue >= 1) { $timeValue = fmod($timeValue, 1); } elseif ($timeValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto IoYX2; fhMzJ: return (int) gmdate("\x69", $timeValue); goto MMtBB; oHAVK: $timeValue = $timeTester = PHPExcel_Calculation_Functions::flattenSingleValue($timeValue); goto fSZ72; fSZ72: if (!is_numeric($timeValue)) { goto gIefI; gIefI: if (PHPExcel_Calculation_Functions::getCompatibilityMode() == PHPExcel_Calculation_Functions::COMPATIBILITY_GNUMERIC) { $testVal = strtok($timeValue, "\x2f\x2d\72\x20"); if (strlen($testVal) < strlen($timeValue)) { return PHPExcel_Calculation_Functions::VALUE(); } } goto ZoOz_; SOb0Z: if (is_string($timeValue)) { return PHPExcel_Calculation_Functions::VALUE(); } goto WZFfN; ZoOz_: $timeValue = self::getTimeValue($timeValue); goto SOb0Z; WZFfN: } goto OH4GP; MMtBB: } public static function SECONDOFMINUTE($timeValue = 0) { goto B86zE; Vx6yI: return (int) gmdate("\163", $timeValue); goto OeyYf; PFJrK: $timeValue = PHPExcel_Shared_Date::ExcelToPHP($timeValue); goto Vx6yI; B86zE: $timeValue = PHPExcel_Calculation_Functions::flattenSingleValue($timeValue); goto Q8mD0; Q8mD0: if (!is_numeric($timeValue)) { goto qvN6L; k3vaD: if (is_string($timeValue)) { return PHPExcel_Calculation_Functions::VALUE(); } goto px9YE; qvN6L: if (PHPExcel_Calculation_Functions::getCompatibilityMode() == PHPExcel_Calculation_Functions::COMPATIBILITY_GNUMERIC) { $testVal = strtok($timeValue, "\x2f\x2d\x3a\40"); if (strlen($testVal) < strlen($timeValue)) { return PHPExcel_Calculation_Functions::VALUE(); } } goto k7vWE; k7vWE: $timeValue = self::getTimeValue($timeValue); goto k3vaD; px9YE: } goto vuZOP; vuZOP: if ($timeValue >= 1) { $timeValue = fmod($timeValue, 1); } elseif ($timeValue < 0.0) { return PHPExcel_Calculation_Functions::NaN(); } goto PFJrK; OeyYf: } public static function EDATE($dateValue = 1, $adjustmentMonths = 0) { goto Nx2_W; e1NAL: $adjustmentMonths = floor($adjustmentMonths); goto oA_je; Nx2_W: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto ZHG_s; WNISa: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: return (float) PHPExcel_Shared_Date::PHPToExcel($PHPDateObject); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) PHPExcel_Shared_Date::ExcelToPHP(PHPExcel_Shared_Date::PHPToExcel($PHPDateObject)); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: return $PHPDateObject; } goto nN3VV; qy7Fw: $PHPDateObject = self::adjustDateByMonths($dateValue, $adjustmentMonths); goto WNISa; oA_je: if (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } goto qy7Fw; J1bKf: if (!is_numeric($adjustmentMonths)) { return PHPExcel_Calculation_Functions::VALUE(); } goto e1NAL; ZHG_s: $adjustmentMonths = PHPExcel_Calculation_Functions::flattenSingleValue($adjustmentMonths); goto J1bKf; nN3VV: } public static function EOMONTH($dateValue = 1, $adjustmentMonths = 0) { goto EcjFs; j0Zdi: $PHPDateObject->modify($adjustDaysString); goto bxpfz; Guann: if (is_string($dateValue = self::getDateValue($dateValue))) { return PHPExcel_Calculation_Functions::VALUE(); } goto T432Q; WKkGG: $adjustmentMonths = floor($adjustmentMonths); goto Guann; XVOKL: $adjustDaysString = "\55" . $adjustDays . "\x20\144\141\171\163"; goto j0Zdi; EcjFs: $dateValue = PHPExcel_Calculation_Functions::flattenSingleValue($dateValue); goto NgyKy; bxpfz: switch (PHPExcel_Calculation_Functions::getReturnDateType()) { case PHPExcel_Calculation_Functions::RETURNDATE_EXCEL: return (float) PHPExcel_Shared_Date::PHPToExcel($PHPDateObject); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_NUMERIC: return (int) PHPExcel_Shared_Date::ExcelToPHP(PHPExcel_Shared_Date::PHPToExcel($PHPDateObject)); case PHPExcel_Calculation_Functions::RETURNDATE_PHP_OBJECT: return $PHPDateObject; } goto LNj35; NgyKy: $adjustmentMonths = PHPExcel_Calculation_Functions::flattenSingleValue($adjustmentMonths); goto jNBUb; jNBUb: if (!is_numeric($adjustmentMonths)) { return PHPExcel_Calculation_Functions::VALUE(); } goto WKkGG; T432Q: $PHPDateObject = self::adjustDateByMonths($dateValue, $adjustmentMonths + 1); goto aWxwd; aWxwd: $adjustDays = (int) $PHPDateObject->format("\x64"); goto XVOKL; LNj35: } }
