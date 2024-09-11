<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 require_once PHPEXCEL_ROOT . "\x50\110\120\105\170\x63\x65\154\57\x53\150\141\162\x65\144\57\x74\x72\x65\x6e\x64\57\142\x65\x73\x74\106\151\164\x43\154\141\163\x73\x2e\160\x68\x70"; class PHPExcel_Linear_Best_Fit extends PHPExcel_Best_Fit { protected $bestFitType = "\154\151\156\145\141\162"; public function getValueOfYForX($xValue) { return $this->getIntersect() + $this->getSlope() * $xValue; } public function getValueOfXForY($yValue) { return ($yValue - $this->getIntersect()) / $this->getSlope(); } public function getEquation($dp = 0) { goto rx010; wyzuZ: return "\x59\40\75\40" . $intersect . "\40\53\x20" . $slope . "\x20\52\40\x58"; goto ikeyR; rx010: $slope = $this->getSlope($dp); goto qktpz; qktpz: $intersect = $this->getIntersect($dp); goto wyzuZ; ikeyR: } private function linearRegression($yValues, $xValues, $const) { $this->leastSquareFit($yValues, $xValues, $const); } public function __construct($yValues, $xValues = array(), $const = true) { if (parent::__construct($yValues, $xValues) !== false) { $this->linearRegression($yValues, $xValues, $const); } } }
