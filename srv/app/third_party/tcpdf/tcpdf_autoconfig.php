<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:19              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto M7jiX; xzSk8: if (!defined("\120\104\106\137\110\105\101\x44\105\122\x5f\x4c\x4f\107\117")) { goto nXbHH; yxeXw: if (@file_exists(K_PATH_IMAGES . "\x74\x63\x70\144\x66\137\154\x6f\147\x6f\x2e\152\x70\x67")) { $tcpdf_header_logo = "\x74\x63\160\144\x66\x5f\154\157\147\x6f\56\152\x70\147"; } goto ur_GA; nXbHH: $tcpdf_header_logo = ''; goto yxeXw; ur_GA: define("\x50\104\x46\x5f\110\x45\x41\x44\105\122\x5f\114\x4f\107\117", $tcpdf_header_logo); goto XQaBU; XQaBU: } goto RxGzE; oCNnl: if (!defined("\113\137\x50\x41\124\110\x5f\115\x41\x49\116")) { define("\x4b\x5f\120\101\x54\110\137\x4d\x41\x49\x4e", dirname(__FILE__) . "\x2f"); } goto hDJlq; MoDHt: if (!defined("\x4b\x5f\124\103\120\x44\106\x5f\105\x58\124\x45\122\116\101\114\137\103\x4f\116\x46\111\107") or !K_TCPDF_EXTERNAL_CONFIG) { $tcpdf_config_files = array(dirname(__FILE__) . "\57\x63\x6f\x6e\x66\x69\x67\x2f\x74\143\x70\144\x66\x5f\143\x6f\156\x66\x69\147\x2e\160\x68\x70", "\57\145\164\143\57\x70\x68\160\x2d\164\x63\x70\144\146\x2f\164\x63\160\144\146\x5f\143\157\156\146\x69\147\x2e\x70\150\160", "\x2f\145\164\x63\x2f\164\143\x70\x64\146\x2f\x74\143\x70\144\x66\137\143\x6f\156\146\x69\x67\x2e\160\x68\160", "\57\145\x74\143\57\x74\143\x70\x64\x66\137\x63\x6f\x6e\x66\x69\x67\x2e\x70\150\160"); foreach ($tcpdf_config_files as $tcpdf_config) { if (@file_exists($tcpdf_config) and is_readable($tcpdf_config)) { require_once $tcpdf_config; break; } } } goto oCNnl; dx7BI: if (!defined("\113\137\102\x4c\101\x4e\x4b\137\x49\x4d\101\x47\105")) { define("\113\137\x42\x4c\101\116\113\x5f\111\x4d\x41\x47\105", "\137\x62\x6c\x61\x6e\x6b\x2e\160\156\x67"); } goto hIafp; CVH6f: if (!defined("\113\137\124\110\x41\111\x5f\124\117\120\x43\x48\x41\x52\123")) { define("\x4b\x5f\124\x48\x41\111\x5f\x54\x4f\x50\x43\110\x41\x52\123", true); } goto xGv3J; v_lo1: if (!defined("\120\x44\x46\137\x50\x41\x47\x45\137\117\x52\x49\105\x4e\124\x41\x54\x49\117\x4e")) { define("\120\x44\106\x5f\x50\x41\x47\x45\137\x4f\122\111\x45\116\x54\101\124\111\x4f\x4e", "\120"); } goto ivG8m; iIkDG: if (!defined("\113\137\120\101\124\110\137\x55\122\114")) { goto MFmcy; MFmcy: $k_path_url = K_PATH_MAIN; goto PA30C; uj1ey: define("\x4b\x5f\120\101\124\x48\137\125\122\x4c", $k_path_url); goto QjgCL; PA30C: if (isset($_SERVER["\x48\x54\124\120\x5f\110\x4f\123\x54"]) and !empty($_SERVER["\110\124\124\120\137\110\117\123\124"])) { goto SYiU7; SYiU7: if (isset($_SERVER["\110\x54\x54\120\123"]) and !empty($_SERVER["\110\124\x54\120\123"]) and strtolower($_SERVER["\110\124\124\x50\123"]) != "\x6f\x66\x66") { $k_path_url = "\x68\x74\164\160\163\72\57\57"; } else { $k_path_url = "\x68\x74\164\160\72\x2f\57"; } goto MqQER; MqQER: $k_path_url .= $_SERVER["\x48\x54\124\x50\137\x48\117\123\124"]; goto gLlj1; gLlj1: $k_path_url .= str_replace("\134", "\x2f", substr(K_PATH_MAIN, strlen($_SERVER["\x44\117\103\125\x4d\105\x4e\x54\137\x52\117\117\x54"]) - 1)); goto Orj1l; Orj1l: } goto uj1ey; QjgCL: } goto UzUpR; JZ3mL: if (!defined("\x48\105\x41\104\137\x4d\x41\x47\116\x49\x46\111\x43\101\x54\x49\x4f\116")) { define("\110\x45\x41\x44\137\115\x41\107\x4e\111\106\111\x43\101\124\111\117\x4e", 1.1); } goto hBnoW; PcsaE: if (!defined("\120\x44\x46\137\x4d\101\x52\x47\x49\116\x5f\102\117\x54\124\x4f\115")) { define("\x50\x44\x46\x5f\115\101\122\x47\x49\x4e\x5f\102\x4f\124\124\117\x4d", 25); } goto Py24Z; cGef4: if (!defined("\x50\104\106\137\x4d\101\122\x47\111\x4e\137\x52\111\107\x48\124")) { define("\120\x44\x46\137\115\101\122\107\111\116\x5f\122\111\x47\x48\124", 15); } goto wz5QL; qsnqh: if (!defined("\x50\x44\x46\137\115\101\x52\107\111\116\x5f\x48\105\101\x44\105\122")) { define("\x50\x44\x46\x5f\x4d\x41\122\x47\x49\116\x5f\x48\x45\x41\104\105\x52", 5); } goto xW5AR; gCysR: if (!defined("\x50\x44\x46\x5f\125\x4e\111\124")) { define("\120\104\x46\137\125\x4e\111\124", "\155\155"); } goto qsnqh; hIafp: if (!defined("\x50\x44\x46\137\120\x41\107\105\x5f\x46\117\122\x4d\x41\x54")) { define("\120\x44\x46\x5f\x50\101\107\x45\x5f\106\x4f\x52\x4d\101\x54", "\x41\x34"); } goto v_lo1; PZkXT: if (!defined("\120\x44\x46\x5f\x49\x4d\x41\107\105\137\x53\103\x41\114\x45\137\x52\x41\x54\x49\x4f")) { define("\120\104\x46\137\x49\115\101\107\105\137\123\103\x41\114\105\x5f\122\x41\x54\111\x4f", 1.25); } goto JZ3mL; fxU1O: $_SERVER["\104\x4f\x43\125\115\x45\x4e\x54\x5f\x52\x4f\x4f\x54"] = str_replace("\57\x2f", "\57", $_SERVER["\104\x4f\x43\125\x4d\x45\116\x54\137\x52\117\x4f\124"]); goto tD6D7; M7jiX: if (!isset($_SERVER["\x44\x4f\103\x55\115\x45\116\x54\x5f\122\117\x4f\x54"]) or empty($_SERVER["\x44\x4f\x43\x55\115\x45\x4e\124\137\x52\x4f\x4f\x54"])) { if (isset($_SERVER["\x53\x43\122\x49\x50\124\137\106\111\x4c\105\116\x41\115\105"])) { $_SERVER["\104\x4f\x43\x55\115\105\116\124\x5f\122\x4f\117\x54"] = str_replace("\134", "\57", substr($_SERVER["\x53\103\x52\111\x50\124\137\106\x49\x4c\x45\116\101\x4d\105"], 0, 0 - strlen($_SERVER["\x50\110\120\x5f\x53\105\114\106"]))); } elseif (isset($_SERVER["\x50\x41\x54\110\137\x54\122\101\116\123\114\x41\124\x45\104"])) { $_SERVER["\104\x4f\x43\x55\x4d\x45\116\124\x5f\122\117\117\x54"] = str_replace("\x5c", "\x2f", substr(str_replace("\x5c\134", "\x5c", $_SERVER["\120\x41\x54\110\137\124\122\x41\116\123\114\101\x54\105\x44"]), 0, 0 - strlen($_SERVER["\120\110\x50\x5f\123\x45\114\x46"]))); } else { $_SERVER["\x44\x4f\103\x55\115\105\116\x54\137\122\117\117\x54"] = "\x2f"; } } goto fxU1O; klyeb: if (!defined("\x4b\x5f\123\115\x41\114\114\137\122\101\x54\x49\x4f")) { define("\x4b\137\123\115\x41\114\114\137\122\101\124\111\117", 2 / 3); } goto CVH6f; AksTZ: if (!defined("\120\x44\106\137\x46\117\116\124\x5f\115\x4f\116\x4f\x53\120\101\x43\105\104")) { define("\120\104\106\137\106\x4f\x4e\124\137\115\x4f\116\117\123\x50\x41\x43\x45\x44", "\143\157\165\162\151\145\x72"); } goto PZkXT; xGv3J: if (!defined("\113\x5f\124\103\x50\104\x46\137\103\x41\114\114\x53\137\111\116\137\110\x54\x4d\x4c")) { define("\113\x5f\x54\103\120\104\106\137\x43\x41\114\x4c\x53\137\x49\x4e\x5f\x48\124\115\x4c", false); } goto hb0Qq; hDJlq: if (!defined("\x4b\137\x50\x41\x54\x48\137\x46\117\116\x54\123")) { define("\113\137\x50\101\x54\110\137\106\117\116\124\x53", K_PATH_MAIN . "\x66\x6f\x6e\164\163\x2f"); } goto iIkDG; RxGzE: if (!defined("\x50\104\106\137\110\105\x41\104\x45\x52\137\114\x4f\107\x4f\x5f\x57\x49\104\124\110")) { if (!empty($tcpdf_header_logo)) { define("\x50\104\x46\x5f\110\105\101\104\x45\122\137\x4c\x4f\107\117\137\127\x49\104\x54\110", 30); } else { define("\120\x44\106\137\x48\x45\x41\x44\105\122\x5f\x4c\117\107\x4f\x5f\x57\x49\104\x54\x48", 0); } } goto TvneT; NerLu: if (!defined("\x50\x44\106\x5f\x46\117\116\124\x5f\116\x41\x4d\x45\137\x44\101\x54\x41")) { define("\120\x44\106\x5f\106\117\116\124\x5f\x4e\101\115\105\137\104\101\x54\101", "\150\x65\154\166\145\164\x69\x63\141"); } goto X22S0; xW5AR: if (!defined("\x50\x44\x46\137\115\101\122\107\111\116\x5f\x46\117\117\x54\x45\x52")) { define("\x50\x44\106\137\115\101\122\107\111\116\137\106\x4f\x4f\x54\105\122", 10); } goto NLdS0; UzUpR: if (!defined("\x4b\137\120\101\124\x48\137\111\115\x41\107\x45\123")) { $tcpdf_images_dirs = array(K_PATH_MAIN . "\x65\170\x61\x6d\x70\154\x65\x73\57\x69\155\x61\147\x65\x73\57", K_PATH_MAIN . "\151\155\141\x67\145\x73\x2f", "\x2f\165\163\x72\57\163\150\x61\162\x65\57\144\157\143\57\160\x68\x70\55\164\143\x70\x64\146\57\145\x78\x61\155\160\x6c\145\x73\x2f\151\x6d\x61\x67\x65\x73\57", "\x2f\x75\x73\x72\57\x73\150\x61\x72\x65\57\144\157\x63\x2f\x74\x63\x70\x64\146\x2f\x65\x78\141\155\160\154\145\x73\57\151\x6d\141\147\145\x73\57", "\x2f\165\x73\x72\x2f\163\x68\x61\162\x65\x2f\x64\157\143\x2f\160\150\x70\57\x74\143\160\144\x66\57\x65\x78\x61\x6d\x70\x6c\145\163\x2f\x69\x6d\x61\x67\x65\x73\57", "\57\166\141\x72\x2f\167\x77\167\57\x74\x63\x70\x64\x66\x2f\151\155\x61\x67\x65\163\57", "\x2f\166\x61\x72\x2f\167\x77\167\57\150\164\x6d\154\57\x74\x63\160\144\146\x2f\151\x6d\x61\x67\145\163\57", "\x2f\165\x73\x72\57\x6c\157\x63\141\154\57\x61\160\141\x63\150\x65\x32\57\x68\164\144\157\143\163\57\164\x63\x70\x64\146\57\x69\x6d\141\x67\145\163\x2f", K_PATH_MAIN); foreach ($tcpdf_images_dirs as $tcpdf_images_path) { if (@file_exists($tcpdf_images_path)) { define("\x4b\x5f\120\x41\124\x48\137\111\x4d\x41\x47\x45\x53", $tcpdf_images_path); break; } } } goto xzSk8; hb0Qq: if (!defined("\113\x5f\124\103\120\x44\x46\137\x54\110\x52\117\127\137\x45\130\x43\x45\x50\x54\x49\x4f\x4e\x5f\x45\122\x52\117\122")) { define("\x4b\137\x54\x43\120\104\x46\137\x54\110\122\117\x57\x5f\x45\x58\103\x45\x50\x54\111\117\x4e\x5f\x45\122\122\117\122", false); } goto NBS4m; QoFws: if (!defined("\x50\x44\x46\x5f\101\x55\x54\110\x4f\122")) { define("\120\x44\x46\137\101\x55\x54\x48\x4f\x52", "\x54\x43\x50\x44\106"); } goto X_0CE; NLdS0: if (!defined("\120\104\x46\137\x4d\x41\x52\107\x49\116\137\124\x4f\120")) { define("\120\x44\106\137\115\x41\122\x47\111\x4e\x5f\124\x4f\120", 27); } goto PcsaE; KOKCe: if (!defined("\x4b\137\x54\111\124\114\x45\x5f\x4d\101\x47\116\x49\106\x49\x43\x41\x54\x49\x4f\x4e")) { define("\x4b\137\x54\x49\124\114\x45\x5f\115\x41\x47\116\x49\x46\111\103\101\124\x49\x4f\116", 1.3); } goto klyeb; TvneT: if (!defined("\x4b\137\x50\x41\x54\110\137\x43\x41\x43\110\x45")) { goto Z8rZ5; gPLyj: define("\x4b\x5f\120\x41\124\x48\x5f\x43\x41\x43\x48\105", $K_PATH_CACHE); goto Kad5C; Z8rZ5: $K_PATH_CACHE = ini_get("\165\x70\154\x6f\141\x64\137\x74\x6d\160\x5f\144\x69\x72") ? ini_get("\165\x70\x6c\x6f\141\x64\137\164\155\160\137\x64\x69\162") : sys_get_temp_dir(); goto iPuHS; iPuHS: if (substr($K_PATH_CACHE, -1) != "\x2f") { $K_PATH_CACHE .= "\x2f"; } goto gPLyj; Kad5C: } goto dx7BI; Py24Z: if (!defined("\120\104\106\x5f\115\x41\122\107\111\x4e\x5f\114\x45\106\x54")) { define("\x50\x44\x46\x5f\115\x41\122\x47\x49\x4e\x5f\114\105\x46\124", 15); } goto cGef4; tD6D7: if (substr($_SERVER["\104\x4f\103\125\x4d\x45\116\124\x5f\x52\x4f\x4f\124"], -1) != "\57") { $_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"] .= "\x2f"; } goto MoDHt; ivG8m: if (!defined("\120\104\106\137\103\x52\105\x41\x54\117\x52")) { define("\120\104\x46\x5f\103\x52\105\101\124\x4f\122", "\x54\x43\x50\x44\106"); } goto QoFws; wXcps: if (!defined("\x50\104\106\x5f\x48\105\x41\104\105\122\x5f\x53\124\x52\x49\x4e\107")) { define("\x50\x44\x46\137\110\x45\101\x44\x45\122\x5f\123\124\122\111\x4e\x47", "\142\171\x20\116\151\143\x6f\x6c\x61\x20\x41\163\x75\x6e\151\40\55\x20\124\x65\x63\156\151\143\x6b\x2e\143\157\155\12\167\x77\167\56\164\143\x70\x64\146\56\157\162\147"); } goto gCysR; X_0CE: if (!defined("\120\x44\x46\x5f\110\x45\101\x44\x45\122\137\x54\x49\x54\114\x45")) { define("\x50\x44\106\137\110\105\x41\104\x45\122\x5f\124\x49\x54\x4c\x45", "\124\x43\120\104\x46\40\x45\170\x61\155\x70\x6c\145"); } goto wXcps; NX1N3: if (!defined("\120\x44\106\x5f\106\117\x4e\x54\137\x53\x49\x5a\x45\137\115\x41\x49\116")) { define("\120\104\x46\137\106\117\116\124\137\x53\x49\132\105\x5f\x4d\101\x49\116", 10); } goto NerLu; X22S0: if (!defined("\120\x44\106\137\x46\117\x4e\124\137\123\111\132\105\137\104\x41\124\101")) { define("\120\x44\x46\137\x46\117\116\x54\x5f\123\111\x5a\x45\137\x44\x41\x54\101", 8); } goto AksTZ; wz5QL: if (!defined("\120\104\x46\x5f\x46\x4f\116\124\x5f\116\101\x4d\105\x5f\x4d\101\x49\116")) { define("\120\x44\x46\x5f\106\x4f\116\124\137\116\101\115\105\137\x4d\x41\111\116", "\150\145\x6c\x76\145\164\151\x63\x61"); } goto NX1N3; hBnoW: if (!defined("\113\137\103\x45\114\114\x5f\x48\x45\111\107\110\124\137\x52\101\124\x49\117")) { define("\113\137\103\x45\x4c\x4c\x5f\x48\x45\111\x47\110\124\x5f\122\101\x54\x49\x4f", 1.25); } goto KOKCe; NBS4m: if (!defined("\113\x5f\124\x49\115\105\x5a\x4f\x4e\105")) { define("\113\x5f\x54\x49\115\x45\x5a\x4f\116\x45", @date_default_timezone_get()); }
