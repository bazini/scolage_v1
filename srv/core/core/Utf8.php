<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\123\105\x50\101\x54\x48") or exit("\116\157\40\144\151\162\145\143\164\x20\x73\x63\162\151\x70\164\40\x61\143\143\x65\x73\x73\40\x61\x6c\x6c\x6f\x77\x65\144"); class CI_Utf8 { public function __construct() { if (defined("\x50\x52\x45\x47\137\102\101\104\137\125\124\x46\x38\x5f\105\122\x52\117\x52") && (ICONV_ENABLED === TRUE or MB_ENABLED === TRUE) && strtoupper(config_item("\143\150\x61\x72\x73\145\164")) === "\125\x54\106\55\x38") { define("\x55\124\106\x38\137\x45\116\x41\x42\x4c\x45\x44", TRUE); log_message("\x64\145\142\165\x67", "\125\x54\106\x2d\x38\40\x53\165\160\160\157\x72\x74\40\105\x6e\x61\142\154\145\144"); } else { define("\x55\x54\106\70\137\105\x4e\x41\x42\x4c\x45\x44", FALSE); log_message("\144\x65\142\165\147", "\x55\x54\x46\x2d\x38\40\123\x75\x70\160\x6f\x72\x74\40\104\x69\163\141\x62\x6c\145\144"); } log_message("\151\x6e\146\x6f", "\x55\x74\146\x38\40\103\154\141\163\x73\x20\x49\156\x69\164\x69\141\154\151\172\145\144"); } public function clean_string($str) { if ($this->is_ascii($str) === FALSE) { if (MB_ENABLED) { $str = mb_convert_encoding($str, "\x55\124\x46\x2d\x38", "\x55\x54\106\x2d\x38"); } elseif (ICONV_ENABLED) { $str = @iconv("\x55\124\x46\x2d\x38", "\x55\x54\106\55\70\57\57\111\x47\116\x4f\122\x45", $str); } } return $str; } public function safe_ascii_for_xml($str) { return remove_invisible_characters($str, FALSE); } public function convert_to_utf8($str, $encoding) { if (MB_ENABLED) { return mb_convert_encoding($str, "\125\x54\x46\x2d\x38", $encoding); } elseif (ICONV_ENABLED) { return @iconv($encoding, "\x55\x54\x46\55\x38", $str); } return FALSE; } public function is_ascii($str) { return preg_match("\x2f\133\x5e\x5c\x78\60\x30\x2d\x5c\x78\x37\x46\x5d\x2f\123", $str) === 0; } }
