<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto gRdxF; BBv_b: if (!function_exists("\x69\x73\x5f\x63\157\156\x74\162\151\x62\165\164\145\165\162")) { function is_contributeur($user = false) { global $CI; return $CI->control->is_contributeur($user); } } goto OgXuu; gRdxF: $CI =& get_instance(); goto VhMLs; yi8H8: if (!function_exists("\151\x73\137\x6d\x6f\x64\145\162\141\x74\145\165\162")) { function is_moderateur($user = false) { global $CI; return $CI->control->is_moderateur($user); } } goto YIw_Y; VhMLs: $CI->load->library("\163\145\x73\x73\151\x6f\x6e"); goto UELnS; w1Gjs: if (!function_exists("\x69\x73\x5f\x61\x64\155\151\156")) { function is_admin($user = false) { global $CI; return $CI->control->is_admin($user); } } goto HJ9FE; YIw_Y: if (!function_exists("\x69\163\137\x72\145\x64\x61\143\x74\x65\x75\x72")) { function is_redacteur($user = false) { global $CI; return $CI->control->is_redacteur($user); } } goto BBv_b; UELnS: $CI->load->library("\143\157\156\x74\x72\x6f\154"); goto w1Gjs; HJ9FE: if (!function_exists("\x69\x73\137\145\x64\151\164\x65\x75\x72")) { function is_editeur($user = false) { global $CI; return $CI->control->is_editeur($user); } } goto yi8H8; OgXuu: if (!function_exists("\x69\x73\x5f\143\154\x69\x65\x6e\164")) { function is_client($user = false) { global $CI; return $CI->control->is_client($user); } }
