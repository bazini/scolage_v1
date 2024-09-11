<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto lg6Vt; FCF1I: if (!function_exists("\x73\141\x6e\151\x74\151\x7a\x65\x5f\146\151\x6c\x65\156\141\x6d\x65")) { function sanitize_filename($filename) { return get_instance()->security->sanitize_filename($filename); } } goto GHEEf; lg6Vt: defined("\102\101\123\x45\120\x41\x54\110") or exit("\116\157\x20\144\x69\162\145\x63\164\40\x73\143\162\x69\160\164\x20\141\x63\143\145\x73\163\x20\141\154\x6c\x6f\167\x65\x64"); goto pp1ww; pp1ww: if (!function_exists("\170\x73\163\x5f\x63\154\x65\141\156")) { function xss_clean($str, $is_image = FALSE) { return get_instance()->security->xss_clean($str, $is_image); } } goto FCF1I; DoPH1: if (!function_exists("\163\x74\x72\151\x70\137\151\x6d\x61\x67\x65\137\164\x61\147\163")) { function strip_image_tags($str) { return get_instance()->security->strip_image_tags($str); } } goto coV7z; GHEEf: if (!function_exists("\144\x6f\x5f\x68\x61\163\x68")) { function do_hash($str, $type = "\x73\x68\141\x31") { if (!in_array(strtolower($type), hash_algos())) { $type = "\x6d\144\x35"; } return hash($type, $str); } } goto DoPH1; coV7z: if (!function_exists("\145\156\x63\157\144\x65\x5f\x70\x68\x70\x5f\164\x61\x67\x73")) { function encode_php_tags($str) { return str_replace(array("\x3c\77", "\77\76"), array("\x26\154\x74\73\77", "\x3f\46\x67\164\x3b"), $str); } }
