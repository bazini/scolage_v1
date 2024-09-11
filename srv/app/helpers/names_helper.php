<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto OCWiN; lSCi5: if (!function_exists("\147\145\x74\137\166\141\162\151\141\x6e\x74\137\156\141\x6d\x65")) { function get_variant_name($niveau, $variant) { if ($niveau == 4) { $var = variant2(); } else { $var = variant1(); } return $var[$variant]; } } goto nu4qV; OCWiN: if (!defined("\102\x41\x53\105\x50\101\124\x48")) { exit("\x4e\x6f\x20\x64\x69\162\145\143\x74\40\x73\x63\162\151\160\x74\40\141\143\x63\x65\x73\x73\x20\141\154\154\157\x77\x65\144"); } goto Xo1r0; Xo1r0: if (!function_exists("\146\157\162\155\141\164\x5f\x63\154\x61\163\x73\x5f\x6e\141\155\145")) { function format_class_name($nom, $cls_id, $niveau, $serie, $variant) { goto lJSAP; vnKQo: return $d; goto IGk04; wjOOt: if ($serie !== false) { $d .= "\40" . $serie; } goto zZUYu; lJSAP: $d = $nom; goto wjOOt; zZUYu: if ($variant !== false) { $d .= "\x20" . get_variant_name($niveau, $variant); } goto vnKQo; IGk04: } } goto lSCi5; nu4qV: if (!function_exists("\166\141\162\151\141\x6e\164\61")) { function variant1() { return array(0 => "\x41", 1 => "\102", 2 => "\103", 3 => "\x44", 4 => "\x45", 5 => "\x46", 6 => "\107", 7 => "\x48", 8 => "\x49", 9 => "\x4a"); } } goto uc2GF; uc2GF: if (!function_exists("\166\141\162\151\x61\156\x74\x32")) { function variant2() { return array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5, 5 => 6, 6 => 7, 7 => 8, 8 => 9, 9 => 10); } }
