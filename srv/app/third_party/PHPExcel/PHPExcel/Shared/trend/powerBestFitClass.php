<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 require_once PHPEXCEL_ROOT . "\120\110\x50\x45\x78\x63\145\x6c\x2f\123\150\141\162\x65\144\57\164\x72\145\x6e\144\57\x62\x65\163\x74\x46\151\x74\x43\x6c\x61\x73\x73\56\160\x68\160"; class PHPExcel_Power_Best_Fit extends PHPExcel_Best_Fit { protected $bestFitType = "\x70\x6f\x77\145\162"; public function getValueOfYForX($xValue) { return $this->getIntersect() * pow($xValue - $this->xOffset, $this->getSlope()); } public function getValueOfXForY($yValue) { return pow(($yValue + $this->yOffset) / $this->getIntersect(), 1 / $this->getSlope()); } public function getEquation($dp = 0) { goto LANbL; oOOUc: $intersect = $this->getIntersect($dp); goto qGJok; qGJok: return "\131\40\x3d\x20" . $intersect . "\x20\x2a\40\130\136" . $slope; goto sbqov; LANbL: $slope = $this->getSlope($dp); goto oOOUc; sbqov: } public function getIntersect($dp = 0) { if ($dp != 0) { return round(exp($this->intersect), $dp); } return exp($this->intersect); } private function powerRegression($yValues, $xValues, $const) { goto hDhMu; GJgcP: unset($value); goto lvEs4; lvEs4: $this->leastSquareFit($yValues, $xValues, $const); goto hVkLn; PwTl3: unset($value); goto toVzf; hDhMu: foreach ($xValues as &$value) { if ($value < 0.0) { $value = 0 - log(abs($value)); } elseif ($value > 0.0) { $value = log($value); } } goto PwTl3; toVzf: foreach ($yValues as &$value) { if ($value < 0.0) { $value = 0 - log(abs($value)); } elseif ($value > 0.0) { $value = log($value); } } goto GJgcP; hVkLn: } public function __construct($yValues, $xValues = array(), $const = true) { if (parent::__construct($yValues, $xValues) !== false) { $this->powerRegression($yValues, $xValues, $const); } } }
