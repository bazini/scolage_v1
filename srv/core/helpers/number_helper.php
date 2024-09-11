<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\x53\105\x50\101\124\x48") or exit("\116\x6f\40\144\151\x72\145\x63\164\x20\163\x63\x72\151\160\164\x20\x61\143\143\x65\x73\x73\x20\141\154\x6c\x6f\167\145\144"); if (!function_exists("\142\x79\x74\145\x5f\146\157\x72\x6d\141\x74")) { function byte_format($num, $precision = 1) { goto RISkt; EABQQ: $CI->lang->load("\156\165\155\x62\145\162"); goto U_QCn; Eejh1: return number_format($num, $precision) . "\40" . $unit; goto qDenm; RISkt: $CI =& get_instance(); goto EABQQ; U_QCn: if ($num >= 1000000000000) { $num = round($num / 1099511627776, $precision); $unit = $CI->lang->line("\x74\145\x72\141\142\171\x74\145\137\x61\x62\142\162"); } elseif ($num >= 1000000000) { $num = round($num / 1073741824, $precision); $unit = $CI->lang->line("\147\x69\147\x61\142\171\x74\x65\x5f\141\x62\x62\x72"); } elseif ($num >= 1000000) { $num = round($num / 1048576, $precision); $unit = $CI->lang->line("\x6d\145\147\x61\142\x79\x74\145\137\x61\142\x62\x72"); } elseif ($num >= 1000) { $num = round($num / 1024, $precision); $unit = $CI->lang->line("\153\x69\154\x6f\142\171\164\x65\137\141\142\x62\x72"); } else { $unit = $CI->lang->line("\x62\171\164\x65\x73"); return number_format($num) . "\x20" . $unit; } goto Eejh1; qDenm: } }
