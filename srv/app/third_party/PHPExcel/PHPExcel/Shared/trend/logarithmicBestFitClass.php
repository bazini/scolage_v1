<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 require_once PHPEXCEL_ROOT . "\x50\x48\120\105\170\x63\145\154\57\x53\x68\x61\x72\x65\144\57\x74\162\x65\x6e\144\57\142\145\x73\x74\106\x69\164\x43\x6c\141\163\163\x2e\160\x68\x70"; class PHPExcel_Logarithmic_Best_Fit extends PHPExcel_Best_Fit { protected $bestFitType = "\154\x6f\x67\141\x72\151\164\x68\x6d\151\x63"; public function getValueOfYForX($xValue) { return $this->getIntersect() + $this->getSlope() * log($xValue - $this->xOffset); } public function getValueOfXForY($yValue) { return exp(($yValue - $this->getIntersect()) / $this->getSlope()); } public function getEquation($dp = 0) { goto rqiT3; rqiT3: $slope = $this->getSlope($dp); goto T_P1X; G3e6d: return "\131\40\x3d\40" . $intersect . "\x20\x2b\40" . $slope . "\40\x2a\40\154\157\147\x28\130\x29"; goto LPdf7; T_P1X: $intersect = $this->getIntersect($dp); goto G3e6d; LPdf7: } private function logarithmicRegression($yValues, $xValues, $const) { goto fGDbw; iPmEi: unset($value); goto wBzx5; wBzx5: $this->leastSquareFit($yValues, $xValues, $const); goto JCgoS; fGDbw: foreach ($xValues as &$value) { if ($value < 0.0) { $value = 0 - log(abs($value)); } elseif ($value > 0.0) { $value = log($value); } } goto iPmEi; JCgoS: } public function __construct($yValues, $xValues = array(), $const = true) { if (parent::__construct($yValues, $xValues) !== false) { $this->logarithmicRegression($yValues, $xValues, $const); } } }
