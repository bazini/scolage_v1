<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto NQOlO; z_buv: if (!function_exists("\147\x65\164\x5f\143\157\x6f\x6b\x69\x65")) { function get_cookie($index, $xss_clean = NULL) { goto oy5mU; EV3Mj: return get_instance()->input->cookie($prefix . $index, $xss_clean); goto x3FhA; GmiKx: $prefix = isset($_COOKIE[$index]) ? '' : config_item("\143\157\157\153\151\x65\x5f\160\x72\145\x66\151\170"); goto EV3Mj; oy5mU: is_bool($xss_clean) or $xss_clean = config_item("\x67\154\157\142\141\154\137\170\163\163\x5f\x66\151\154\164\145\x72\151\156\147") === TRUE; goto GmiKx; x3FhA: } } goto YbmWo; Est0E: if (!function_exists("\x73\x65\x74\137\x63\x6f\x6f\x6b\151\145")) { function set_cookie($name, $value = '', $expire = '', $domain = '', $path = "\x2f", $prefix = '', $secure = NULL, $httponly = NULL) { get_instance()->input->set_cookie($name, $value, $expire, $domain, $path, $prefix, $secure, $httponly); } } goto z_buv; NQOlO: defined("\x42\101\123\x45\120\101\x54\x48") or exit("\x4e\x6f\40\x64\151\162\145\x63\x74\x20\x73\x63\162\151\x70\164\40\141\143\143\x65\x73\163\40\141\154\x6c\157\167\145\x64"); goto Est0E; YbmWo: if (!function_exists("\x64\145\154\x65\x74\145\137\x63\x6f\x6f\x6b\151\x65")) { function delete_cookie($name, $domain = '', $path = "\57", $prefix = '') { set_cookie($name, '', '', $domain, $path, $prefix); } }
