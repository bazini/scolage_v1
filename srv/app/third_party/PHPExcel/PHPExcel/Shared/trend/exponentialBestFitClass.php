<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 require_once PHPEXCEL_ROOT . "\x50\110\120\105\x78\143\x65\x6c\x2f\123\150\141\162\x65\x64\x2f\x74\162\145\x6e\144\x2f\142\145\x73\164\x46\151\x74\x43\154\141\163\x73\56\160\150\160"; class PHPExcel_Exponential_Best_Fit extends PHPExcel_Best_Fit { protected $bestFitType = "\145\x78\160\157\x6e\145\156\164\x69\x61\x6c"; public function getValueOfYForX($xValue) { return $this->getIntersect() * pow($this->getSlope(), $xValue - $this->xOffset); } public function getValueOfXForY($yValue) { return log(($yValue + $this->yOffset) / $this->getIntersect()) / log($this->getSlope()); } public function getEquation($dp = 0) { goto q8P0E; q8P0E: $slope = $this->getSlope($dp); goto mOX0i; sU5Oh: return "\131\x20\75\x20" . $intersect . "\x20\x2a\40" . $slope . "\136\130"; goto AZHwJ; mOX0i: $intersect = $this->getIntersect($dp); goto sU5Oh; AZHwJ: } public function getSlope($dp = 0) { if ($dp != 0) { return round(exp($this->_slope), $dp); } return exp($this->_slope); } public function getIntersect($dp = 0) { if ($dp != 0) { return round(exp($this->intersect), $dp); } return exp($this->intersect); } private function exponentialRegression($yValues, $xValues, $const) { goto qz3c3; lwbIG: $this->leastSquareFit($yValues, $xValues, $const); goto wPVLG; qz3c3: foreach ($yValues as &$value) { if ($value < 0.0) { $value = 0 - log(abs($value)); } elseif ($value > 0.0) { $value = log($value); } } goto Dsttg; Dsttg: unset($value); goto lwbIG; wPVLG: } public function __construct($yValues, $xValues = array(), $const = true) { if (parent::__construct($yValues, $xValues) !== false) { $this->exponentialRegression($yValues, $xValues, $const); } } }
