<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Shared_TimeZone { protected static $timezone = "\x55\x54\103"; public static function _validateTimeZone($timezone) { if (in_array($timezone, DateTimeZone::listIdentifiers())) { return true; } return false; } public static function setTimeZone($timezone) { if (self::_validateTimezone($timezone)) { self::$timezone = $timezone; return true; } return false; } public static function getTimeZone() { return self::$timezone; } private static function getTimezoneTransitions($objTimezone, $timestamp) { goto UHEyh; NtsK6: foreach ($allTransitions as $key => $transition) { if ($transition["\x74\x73"] > $timestamp) { $transitions[] = $key > 0 ? $allTransitions[$key - 1] : $transition; break; } if (empty($transitions)) { $transitions[] = end($allTransitions); } } goto YIdZq; lCsaO: $transitions = array(); goto NtsK6; UHEyh: $allTransitions = $objTimezone->getTransitions(); goto lCsaO; YIdZq: return $transitions; goto u3dJN; u3dJN: } public static function getTimeZoneAdjustment($timezone, $timestamp) { goto rgx_6; nBFVq: if ($timezone == "\x55\x53\x54") { return 0; } goto jPqDY; LwTLF: if (version_compare(PHP_VERSION, "\65\x2e\63\x2e\60") >= 0) { $transitions = $objTimezone->getTransitions($timestamp, $timestamp); } else { $transitions = self::getTimezoneTransitions($objTimezone, $timestamp); } goto Dsqjq; Dsqjq: return count($transitions) > 0 ? $transitions[0]["\157\x66\x66\x73\x65\164"] : 0; goto aBsMW; jPqDY: $objTimezone = new DateTimeZone($timezone); goto LwTLF; rgx_6: if ($timezone !== null) { if (!self::_validateTimezone($timezone)) { throw new PHPExcel_Exception("\x49\x6e\x76\141\x6c\x69\144\x20\164\151\155\x65\172\157\x6e\145\40" . $timezone); } } else { $timezone = self::$timezone; } goto nBFVq; aBsMW: } }
