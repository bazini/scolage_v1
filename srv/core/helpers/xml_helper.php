<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\123\x45\x50\101\x54\110") or exit("\x4e\157\x20\x64\151\x72\145\143\164\x20\163\143\162\x69\160\164\x20\141\x63\x63\x65\163\x73\40\141\x6c\x6c\157\x77\145\x64"); if (!function_exists("\170\x6d\154\137\143\157\156\x76\x65\x72\x74")) { function xml_convert($str, $protect_all = FALSE) { goto MAEbb; MAEbb: $temp = "\137\137\x54\x45\115\x50\137\101\x4d\120\105\x52\x53\101\x4e\104\123\137\x5f"; goto uWxMx; uWxMx: $str = preg_replace("\x2f\46\43\50\x5c\144\x2b\x29\73\57", $temp . "\x5c\x31\73", $str); goto zwW7g; wQ8Ib: if ($protect_all === TRUE) { return preg_replace("\x2f" . $temp . "\x28\134\x77\x2b\x29\x3b\57", "\46\134\61\73", $str); } goto FAZy8; sDh1S: $str = preg_replace("\57" . $temp . "\50\x5c\144\53\51\x3b\57", "\46\43\x5c\x31\x3b", $str); goto wQ8Ib; tvtdZ: $str = str_replace(array("\x26", "\74", "\x3e", "\42", "\47", "\x2d"), array("\x26\x61\x6d\x70\x3b", "\x26\154\164\73", "\46\x67\164\x3b", "\x26\x71\165\157\x74\73", "\x26\141\160\157\163\73", "\46\43\x34\x35\x3b"), $str); goto sDh1S; zwW7g: if ($protect_all === TRUE) { $str = preg_replace("\x2f\46\x28\134\x77\53\x29\x3b\57", $temp . "\134\x31\73", $str); } goto tvtdZ; FAZy8: return $str; goto KZR31; KZR31: } }
