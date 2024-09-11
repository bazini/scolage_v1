<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:07              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_CalcEngine_Logger { private $writeDebugLog = false; private $echoDebugLog = false; private $debugLog = array(); private $cellStack; public function __construct(PHPExcel_CalcEngine_CyclicReferenceStack $stack) { $this->cellStack = $stack; } public function setWriteDebugLog($pValue = false) { $this->writeDebugLog = $pValue; } public function getWriteDebugLog() { return $this->writeDebugLog; } public function setEchoDebugLog($pValue = false) { $this->echoDebugLog = $pValue; } public function getEchoDebugLog() { return $this->echoDebugLog; } public function writeDebugLog() { if ($this->writeDebugLog) { goto VEfy5; diviX: if ($this->echoDebugLog) { echo $cellReference, $this->cellStack->count() > 0 ? "\x20\x3d\x3e\40" : '', $message, PHP_EOL; } goto IPccf; VEfy5: $message = implode(func_get_args()); goto JYW_Z; JYW_Z: $cellReference = implode("\40\55\x3e\40", $this->cellStack->showStack()); goto diviX; IPccf: $this->debugLog[] = $cellReference . ($this->cellStack->count() > 0 ? "\40\x3d\76\40" : '') . $message; goto xCW0s; xCW0s: } } public function clearLog() { $this->debugLog = array(); } public function getLog() { return $this->debugLog; } }
