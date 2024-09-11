<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\x53\105\120\101\x54\110") or exit("\x4e\157\40\x64\151\162\x65\143\x74\40\163\x63\162\x69\160\164\40\141\x63\143\x65\163\163\x20\141\154\x6c\x6f\167\x65\x64"); if (!function_exists("\x73\145\x74\x5f\x72\145\141\x6c\x70\141\x74\150")) { function set_realpath($path, $check_existance = FALSE) { goto h2nen; iyEBE: if (realpath($path) !== FALSE) { $path = realpath($path); } elseif ($check_existance && !is_dir($path) && !is_file($path)) { show_error("\x4e\157\164\x20\x61\40\x76\141\154\151\144\x20\160\141\x74\x68\72\x20" . $path); } goto Lr2sp; Lr2sp: return is_dir($path) ? rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR : $path; goto nV1OP; h2nen: if (preg_match("\43\x5e\x28\x68\164\x74\x70\x3a\x5c\x2f\134\57\174\150\x74\164\x70\163\72\x5c\57\134\x2f\x7c\167\x77\167\x5c\56\174\146\x74\160\x7c\160\150\160\72\134\x2f\x5c\x2f\51\x23\151", $path) or filter_var($path, FILTER_VALIDATE_IP) === $path) { show_error("\x54\x68\x65\x20\x70\141\164\x68\x20\x79\x6f\x75\x20\163\165\x62\x6d\151\x74\x74\145\144\x20\x6d\165\163\x74\x20\x62\x65\40\141\x20\x6c\x6f\143\141\x6c\x20\163\145\162\166\x65\x72\x20\160\x61\x74\150\x2c\40\156\x6f\164\40\141\40\125\122\114"); } goto iyEBE; nV1OP: } }
