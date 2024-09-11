<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\x53\x45\x50\101\124\x48") or exit("\116\157\40\x64\151\x72\145\143\x74\40\163\143\162\x69\x70\164\x20\141\143\143\145\x73\x73\x20\x61\x6c\x6c\157\167\x65\144"); class Langs { private $CI; private $mydb; public function __construct() { $this->CI =& get_instance(); $this->mydb =& $this->CI->mydb; } public function get_by_code($code) { goto jpmku; eDUy5: if (!empty($lang)) { $d = $lang; } goto bslu8; H0lDi: $lang = $this->mydb->get("\154\x61\x6e\x67\165\145", '', array("\x63\x6f\x64\145" => $code)); goto eDUy5; jpmku: $d = false; goto H0lDi; bslu8: return $d; goto WFS9W; WFS9W: } public function get_by_nom($nom) { goto L0Q9H; L0Q9H: $d = false; goto q8Uin; q0jtU: if (!empty($lang)) { $d = $lang; } goto wOuer; wOuer: return $d; goto oUPxj; q8Uin: $lang = $this->mydb->get("\x6c\141\156\147\165\145", '', array("\156\x6f\x6d" => $nom)); goto q0jtU; oUPxj: } public function get_by_id($id) { goto IbZss; PBdRV: return $d; goto JuzQv; iv6Uj: $lang = $this->mydb->get("\154\x61\x6e\147\165\x65", '', array("\x69\x64\154\141\x6e\147" => $id)); goto NCpp9; NCpp9: if (!empty($lang)) { $d = $lang; } goto PBdRV; IbZss: $d = false; goto iv6Uj; JuzQv: } }
