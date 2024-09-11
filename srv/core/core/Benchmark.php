<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\105\120\101\x54\x48") or exit("\116\157\40\x64\x69\x72\x65\143\164\40\163\143\162\x69\160\x74\x20\141\143\143\145\163\x73\x20\141\154\x6c\x6f\167\145\144"); class CI_Benchmark { public $marker = array(); public function mark($name) { $this->marker[$name] = microtime(TRUE); } public function elapsed_time($point1 = '', $point2 = '', $decimals = 4) { goto g1gLs; oohRZ: if (!isset($this->marker[$point1])) { return ''; } goto bSXxu; g1gLs: if ($point1 === '') { return "\x7b\x65\x6c\x61\x70\x73\x65\x64\x5f\x74\x69\x6d\x65\x7d"; } goto oohRZ; vMq1L: return number_format($this->marker[$point2] - $this->marker[$point1], $decimals); goto N8tCF; bSXxu: if (!isset($this->marker[$point2])) { $this->marker[$point2] = microtime(TRUE); } goto vMq1L; N8tCF: } public function memory_usage() { return "\173\x6d\x65\x6d\x6f\162\171\x5f\165\x73\141\x67\x65\x7d"; } }
