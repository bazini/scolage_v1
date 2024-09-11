<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 abstract class PHPExcel_Writer_Abstract implements PHPExcel_Writer_IWriter { protected $includeCharts = false; protected $preCalculateFormulas = true; protected $_useDiskCaching = false; protected $_diskCachingDirectory = "\x2e\57"; public function getIncludeCharts() { return $this->includeCharts; } public function setIncludeCharts($pValue = false) { $this->includeCharts = (bool) $pValue; return $this; } public function getPreCalculateFormulas() { return $this->preCalculateFormulas; } public function setPreCalculateFormulas($pValue = true) { $this->preCalculateFormulas = (bool) $pValue; return $this; } public function getUseDiskCaching() { return $this->_useDiskCaching; } public function setUseDiskCaching($pValue = false, $pDirectory = null) { goto H3QMF; H3QMF: $this->_useDiskCaching = $pValue; goto sJY5m; c0Xch: return $this; goto n4Y4z; sJY5m: if ($pDirectory !== null) { if (is_dir($pDirectory)) { $this->_diskCachingDirectory = $pDirectory; } else { throw new PHPExcel_Writer_Exception("\104\x69\162\145\143\x74\157\162\171\x20\144\157\145\x73\40\156\x6f\x74\40\x65\x78\151\163\x74\72\40{$pDirectory}"); } } goto c0Xch; n4Y4z: } public function getDiskCachingDirectory() { return $this->_diskCachingDirectory; } }
