<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-10-01 17:33:00              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto j0XeH; WswEI: if (!function_exists("\x66\x6f\x72\155\x61\164\x5f\x64\145\163\164")) { function format_dest($dest, $id) { goto LbWch; HvbAe: return $d; goto Nipqk; LbWch: $d = ''; goto Xy9yE; Xy9yE: if (!empty($dest)) { $parts = explode("\x3a", $dest); if (!empty($parts)) { goto nKT8q; cxOfb: if (isset($parts[1]) && !empty($parts[1])) { goto q6pEg; eI8yn: if (!empty($params)) { foreach ($params as $param) { $p = explode("\x3d", $param); if (!empty($p) && count($p) == 2) { $str .= "\x26" . $p[0] . "\x3d" . $p[1]; } } } goto jAa1V; KNUK6: $str = ''; goto eI8yn; q6pEg: $params = explode("\x3b", $parts[1]); goto KNUK6; jAa1V: if (!empty($str)) { $d .= $str; } goto x_oru; x_oru: } goto fuxVN; qmHDF: $d .= "\x3f\151\x64\x3d" . $id; goto cxOfb; nKT8q: $d .= $parts[0]; goto qmHDF; fuxVN: } } goto HvbAe; Nipqk: } } goto wAihE; NWcPe: if (!function_exists("\144\x65\142\165\x74\x5f\x61\x6e\x73\x63\157\x6c")) { function debut_anscol($date) { goto bGGc9; CvpGW: $date = $an . "\x2d" . $mois . "\55" . $jr . "\x20\x30\67\x3a\x30\60\72\x30\x30"; goto eRp3k; IVAkd: $mois = $dts[1]; goto gOlZq; D92ka: $an = $dts[2]; goto IVAkd; gOlZq: $jr = $dts[0]; goto CvpGW; bGGc9: $dts = explode("\x2f", $date); goto D92ka; eRp3k: return $date; goto tD0VG; tD0VG: } } goto wQlav; Mq3ja: if (!function_exists("\x64\x61\164\x65\x32\x6d\171\163\x71\154")) { function date2mysql($date) { goto vDSGn; vDSGn: $dte = preg_replace("\x23\50\133\x30\55\71\135\x7b\x32\x7d\x29\x2d\50\133\x30\55\71\135\173\62\175\51\x2d\50\133\60\55\71\x5d\x7b\x34\x7d\x29\x23", "\44\x33\x2d\44\62\x2d\44\61", $date); goto jYTg4; jYTg4: $d = dte2mysql($dte); goto tLZ4U; tLZ4U: return $d; goto DXB25; DXB25: } } goto RyUWs; PnrSL: if (!function_exists("\144\141\x74\x65\155\x79\163\161\154")) { function datemysql($date) { return preg_replace("\43\x28\133\x30\x2d\71\135\173\64\x7d\x29\55\50\133\60\x2d\x39\135\x7b\62\x7d\51\55\50\x5b\60\55\x39\135\x7b\x32\x7d\x29\134\163\x28\133\60\x2d\x39\135\173\62\175\x29\72\x28\x5b\60\x2d\x39\135\173\x32\x7d\x29\x3a\50\133\x30\x2d\x39\x5d\173\62\175\51\43", "\x24\63\x2f\44\x32\57\44\x31", $date); } } goto vHY2U; NCCCw: if (!function_exists("\x65\170\x63\x65\x72\x70\164\x5f\x74\151\x74\154\145")) { function excerpt_title($text, $length = 10) { goto YlpVu; XnToG: return implode("\x20", $ss) . $more; goto hfB2E; s7qf3: if (count($chaine) > $length) { $ss = array_slice($chaine, 0, $length); $more = "\x2e\56\x2e"; } else { $ss = $chaine; $more = ''; } goto XnToG; YlpVu: $chaine = explode("\x20", $text); goto s7qf3; hfB2E: } } goto jDlcd; ZX8_W: if (!function_exists("\x6e\145\154")) { function nel($nbr) { goto QN0FP; evNkW: $nf = new ChiffreEnLettre(); goto YIFLr; QN0FP: require_once APPPATH . "\164\x68\151\x72\x64\137\160\x61\x72\164\171\x2f\103\x68\x69\146\x66\162\x65\x73\105\x6e\x4c\145\164\164\x72\145\x73\56\x70\x68\160"; goto evNkW; D0yW7: return $nbf; goto QoJgo; Gq3DM: if (preg_match("\x23\50\133\60\x2d\x39\x5d\x7b\61\54\x32\x7d\x29\x5c\56\50\x5b\x30\x2d\x39\x5d\51\43", $nbr)) { goto cWeZ0; OqVPI: $nbf .= $nf->Conversion($nb2); goto F2XD0; S5biM: $nbf .= "\x20\166\151\162\x67\165\154\145\x20"; goto kzi3R; kzi3R: if (substr($nb2, 0, 1) == "\60") { $nbf .= "\x20\x7a\303\xa9\162\x6f\40"; } goto mzRdX; jV88W: $nbf .= $nf->Conversion($nb1); goto S5biM; mzRdX: if (strlen($nb2) == 1) { $nb2 = $nb2 . "\x30"; } goto OqVPI; ddaZ6: $nb2 = preg_replace("\x23\x28\133\60\x2d\71\x5d\173\x31\x2c\62\x7d\x29\x5c\x2e\50\133\60\55\x39\x5d\51\43", "\x24\x32", $nbr); goto jV88W; cWeZ0: $nb1 = explode("\56", $nbr)[0]; goto ddaZ6; F2XD0: } else { $nbf .= $nf->Conversion($nbr); } goto D0yW7; YIFLr: $nbf = ''; goto Gq3DM; QoJgo: } } goto Joa9R; j0XeH: if (!defined("\x42\101\123\x45\x50\x41\x54\110")) { exit("\116\157\x20\x64\x69\162\145\143\164\x20\x73\x63\x72\x69\x70\164\x20\x61\143\143\145\x73\x73\x20\141\154\154\x6f\x77\x65\x64"); } goto Vfrev; l0tvk: if (!function_exists("\155\x6f\156\x74\150\163")) { function months() { return array(1 => "\112\141\x6e\x75\141\x72\x79", 2 => "\x46\145\142\x72\165\141\x72\171", 3 => "\115\x61\162\x63\x68", 4 => "\101\x70\162\x69\154", 5 => "\x4d\x61\x79", 6 => "\112\x75\156\145", 7 => "\x4a\x75\x6c\x79", 8 => "\x41\165\x67\165\163\x74", 9 => "\x53\145\160\164\145\x6d\x62\145\162", 10 => "\117\x63\164\x6f\x62\x65\x72", 11 => "\x4e\x6f\x76\x65\x6d\142\x65\x72", 12 => "\x44\145\143\145\155\142\x65\x72"); } } goto Oh6Kp; vfJga: if (!function_exists("\x73\164\x72\x32\155\171\x73\161\154\x73\150\157\162\164\x64\141\x74\145")) { function str2mysqlshortdate($str) { goto PuV_o; DpwQk: if (!empty($date)) { $d = explode("\x20", $date)[0]; } goto CeWLL; CeWLL: return $d; goto Utltw; PuV_o: $d = ''; goto tTv3X; tTv3X: $date = str2mysqldate($str); goto DpwQk; Utltw: } } goto IrLay; zpC9e: if (!function_exists("\155\x79\163\x71\154\x32\x74\x69\x6d\145")) { function mysql2time($date) { return strtotime(gmdate($date)); } } goto PnrSL; zKq7s: if (!function_exists("\160\141\147\x65\162")) { function pager($total, $epp = 15) { goto X3923; b0c2R: $info->start = $start; goto vQmFh; zbQyg: $info->current = $current; goto GuOZL; EOhU3: $start = $current * $epp - $epp; goto dwZBw; X3923: $nbPages = ceil($total / $epp); goto jUOsG; vQmFh: return $info; goto qTcHZ; u7Hkr: if (isset($nb) && is_numeric($nb)) { $current_page = intval($nb); if ($current_page >= 1 && $current_page <= $nbPages) { $current = $current_page; } else { if ($current_page < 1) { $current = 1; } else { $current = $nbPages; } } } goto l6P_A; l6P_A: require_once APPPATH . "\57\164\150\151\x72\x64\x5f\160\141\162\164\171\x2f\x70\141\x67\x69\x6e\x61\164\x65\x2e\160\x68\160"; goto EOhU3; jUOsG: $current = 1; goto O5k9M; O5k9M: $nb = isset($_GET["\x70"]) ? $_GET["\160"] : ''; goto u7Hkr; fug1y: $info->nbpages = $nbPages; goto zbQyg; dwZBw: $info = new stdClass(); goto fug1y; GuOZL: $info->epp = $epp; goto b0c2R; qTcHZ: } } goto af8hc; B7F2O: if (!function_exists("\x6a\163\137\x6d\141\x73\x74\145\x72")) { function js_master($nom) { return base_url() . "\x70\165\142\x6c\151\x63\57\163\164\x61\164\x69\143\x73\57\x6d\141\163\164\x65\162\57" . $nom . "\56\x6a\163"; } } goto gq3Mx; cS3QJ: if (!function_exists("\x64\x61\x74\145\137\143\157\155\x70\154\145\164\145")) { function date_complete() { goto N_wO9; mk7Rc: $time = gmdate("\131\x2d\x6d\55\x64\x20\x48\x3a\151\x3a\163"); goto paPeZ; N_wO9: setlocale(LC_TIME, ''); goto mk7Rc; paPeZ: $times = strtotime($time); goto Br0cI; Br0cI: return strftime("\45\144\40\45\102\40\x25\131", $times); goto GJq35; GJq35: } } goto H7Y3a; IrLay: if (!function_exists("\x73\164\x72\x32\x73\150\157\x72\164\x64\x61\x74\145")) { function str2shortdate($str) { goto REZnE; ZJM6w: $dts = explode("\40", $date); goto yPDg6; yPDg6: return $dts[0]; goto apEJj; REZnE: $date = str2date($str); goto ZJM6w; apEJj: } } goto Mq3ja; G69jb: if (!function_exists("\x68\x61\x73\x68\x5f\160\141\x73\163\167\x6f\162\x64")) { function hash_password($pass, $id) { $salt = md5($id); return hash("\x73\x68\141\x32\x35\66", $salt . $pass); } } goto hYPcQ; vHY2U: if (!function_exists("\x64\x61\164\145\146\x6f\x72\x6d\x61\x74")) { function dateformat($date) { return preg_replace("\43\x28\x5b\60\x2d\71\x5d\x7b\x34\x7d\x29\55\x28\133\60\55\x39\135\x7b\62\175\51\x2d\x28\133\60\55\71\135\173\62\175\51\x23", "\x24\x33\57\x24\x32\x2f\44\61", $date); } } goto zG84B; WGbk7: if (!function_exists("\x6a\163\x5f\x70\x6c\x75\x67\x69\x6e")) { function js_plugin($nom) { return base_url() . "\160\x75\142\x6c\151\x63\57\x73\x74\141\x74\x69\143\x73\x2f\160\x6c\x75\147\x69\x6e\x73\x2f" . $nom . "\56\152\x73"; } } goto J8yo_; Fv62B: if (!function_exists("\x73\164\162\62\x64\x61\x74\x65")) { function str2date($str) { $date = date("\x64\57\x6d\57\x59\x20\303\xa0\x20\110\72\151\72\x73", $str); return $date; } } goto zPXnJ; lGSjZ: if (!function_exists("\151\x73\137\154\157\147\147\x65\144\151\156")) { function is_loggedin() { $CI =& get_instance(); return $CI->auth->is_loggedin(); } } goto EXs63; hYPcQ: if (!function_exists("\146\157\x72\155\141\164\137\154\151\156\153")) { function format_link($text) { if (preg_match("\x23\x5b\x27\303\xa9\303\240\303\271\303\273\303\xab\xc3\252\xc3\266\xc3\242\xc3\xae\xc3\xaf\xc3\xb4\303\xa7\134\x73\x5d\x23", $text)) { goto Q59sm; X2RDg: $replacements[17] = "\143"; goto Lpfpz; GsNRg: $replacements[19] = "\x75"; goto JQwZW; aDUd1: $patterns[7] = "\57\303\xa4\57"; goto v6ALU; Io4bc: $patterns[5] = "\x2f\303\264\57"; goto iU06_; H3q4S: $replacements[21] = "\x65"; goto gbSAq; um3O2: $replacements[16] = "\x75"; goto X2RDg; Ukj_e: $patterns[20] = "\x2f\xc3\234\x2f"; goto Hcr9s; R0P1H: $patterns[3] = "\57\xc3\xa2\x2f"; goto FBSQz; gbSAq: $replacements[22] = "\151"; goto ZlUsq; fcGsb: $patterns[1] = "\57\xc3\xa0\57"; goto cKFlM; Ld6qz: $replacements[2] = "\x75"; goto qCg0o; sGa8S: $patterns[19] = "\x2f\303\xbc\57"; goto Ukj_e; vLdMN: $patterns[11] = "\x2f\x5f\57"; goto RUzYk; HicbH: $replacements[5] = "\157"; goto xtO4X; U_POy: $replacements[9] = "\x2d"; goto TVBNC; cKFlM: $patterns[2] = "\57\303\xb9\57"; goto R0P1H; vXO4h: $replacements[14] = "\x65"; goto mY7E0; PYIuT: $patterns[15] = "\x2f\xc3\xaf\x2f"; goto AikKO; Hcr9s: $patterns[21] = "\x2f\303\x8b\x2f"; goto Rbj1H; NYXGG: $replacements[13] = "\x65"; goto vXO4h; Q59sm: $patterns[0] = "\x2f\303\251\57"; goto fcGsb; RUzYk: $patterns[12] = "\x2f\x5c\163\x2f"; goto bBZEa; ZlUsq: $lien = strtolower(preg_replace($patterns, $replacements, $text)); goto PhsXd; v6ALU: $patterns[8] = "\x2f\303\xb6\x2f"; goto f4Qix; qCg0o: $replacements[3] = "\141"; goto zUzhn; KCIZ5: $replacements[12] = "\x2d"; goto NYXGG; f4Qix: $patterns[9] = "\x2f\47\57"; goto oo4yr; FBSQz: $patterns[4] = "\x2f\xc3\256\57"; goto Io4bc; bBZEa: $patterns[13] = "\57\xc3\xa8\x2f"; goto sXLRI; evONO: $patterns[17] = "\x2f\303\247\x2f"; goto c3elT; mMcNe: $replacements[0] = "\x65"; goto d4Yz_; Lpfpz: $replacements[18] = "\141"; goto GsNRg; a5jfX: $replacements[7] = "\141"; goto YFDWz; mY7E0: $replacements[15] = "\151"; goto um3O2; TVBNC: $replacements[10] = "\x2d"; goto WwO9s; xtO4X: $replacements[6] = "\x65"; goto a5jfX; d4Yz_: $replacements[1] = "\141"; goto Ld6qz; iU06_: $patterns[6] = "\x2f\303\xab\57"; goto aDUd1; YFDWz: $replacements[8] = "\157"; goto U_POy; sXLRI: $patterns[14] = "\57\xc3\xaa\x2f"; goto PYIuT; oo4yr: $patterns[10] = "\x2f\x2d\57"; goto vLdMN; zUzhn: $replacements[4] = "\151"; goto HicbH; c3elT: $patterns[18] = "\57\303\x84\57"; goto sGa8S; AikKO: $patterns[16] = "\x2f\xc3\xbb\x2f"; goto evONO; Rbj1H: $patterns[22] = "\x2f\303\217\x2f"; goto mMcNe; WwO9s: $replacements[11] = "\x2d"; goto KCIZ5; JQwZW: $replacements[20] = "\165"; goto H3q4S; PhsXd: } else { $lien = strtolower($text); } return url_title($lien, "\144\x61\163\x68", true); } } goto zKq7s; zG84B: if (!function_exists("\x6d\171\163\161\x6c\146\x6f\x72\155\x61\x74\62\144\141\164\145")) { function mysqlformat2date($date) { return preg_replace("\x23\x28\x5b\60\x2d\71\135\173\64\x7d\x29\x2d\x28\x5b\x30\x2d\x39\135\x7b\x32\x7d\x29\x2d\50\133\x30\x2d\71\135\x7b\x32\x7d\x29\x5c\x73\x28\x5b\60\55\x39\x5d\x7b\x32\175\x29\x3a\x28\133\x30\55\x39\x5d\173\62\175\x29\x3a\50\x5b\60\x2d\71\135\173\62\175\51\x23", "\x24\x33\57\x24\x32\x2f\x24\x31", $date); } } goto Em0T0; oSf4s: if (!function_exists("\151\163\x5f\x68\x6f\x6d\145")) { function is_home() { goto Xor56; Xor56: $url = current_url(); goto p3hWu; p3hWu: if (preg_match("\43\56\150\164\155\x6c\43", $url)) { $u = preg_replace("\x23\x2e\150\164\x6d\154\x23", '', $url); } else { $u = $url; } goto pN3wL; pN3wL: if ($u == trim(base_link(), "\x2f")) { $d = true; } else { $d = false; } goto zFnfV; zFnfV: return $d; goto vS0Qq; vS0Qq: } } goto u2jaE; aVaUI: if (!function_exists("\144\x74\145\62\155\x79\163\161\x6c")) { function dte2mysql($date) { goto v19vl; v19vl: $dts = explode("\x2d", $date); goto ICbKD; ICbKD: $an = $dts[0]; goto l27Za; l27Za: $mois = $dts[1]; goto gkr9m; gkr9m: $jr = $dts[2]; goto yIb4s; bGqvF: return $date; goto ZQWqd; yIb4s: $date = $an . "\x2d" . $mois . "\x2d" . $jr . "\x20" . gmdate("\x48\x3a\x69\72\163"); goto bGqvF; ZQWqd: } } goto NWcPe; VfOo8: if (!function_exists("\x63\163\x73\x5f\x70\x6c\x75\x67\x69\156")) { function css_plugin($nom) { return base_url() . "\x70\165\142\x6c\x69\x63\57\x73\164\141\x74\151\143\163\57\160\154\x75\147\x69\156\x73\x2f" . $nom . "\x2e\x63\163\163"; } } goto WGbk7; QCWMV: if (!function_exists("\143\x69\x64")) { function cid($user) { goto cePHb; rio6o: return $str1 . date("\x69") . $user . $str2 . date("\x6d") . date("\x57") . date("\171") . date("\x73"); goto IIHSL; VoOIv: $str2 = substr(date("\115"), 0, 1); goto rio6o; cePHb: $str1 = substr(date("\104"), 0, 1); goto VoOIv; IIHSL: } } goto lGSjZ; L4kez: if (!function_exists("\147\x65\164\x5f\163\x74\144\137\x61\166\141\x74\x61\x72")) { function get_std_avatar($name) { goto xbacs; xqeti: return $d; goto nGZrE; xbacs: $d = false; goto HatUZ; vdd1R: if (!empty($avatar)) { $d = $avatar; } else { $d = tmpl_img("\141\166\141\164\141\162\56\160\x6e\x67"); } goto xqeti; HatUZ: $avatar = img2base64($name); goto vdd1R; nGZrE: } } goto ZX8_W; R83NQ: if (!function_exists("\151\155\147\62\x62\x61\x73\x65\66\x34")) { function img2base64($name) { goto phWMN; phWMN: $d = ''; goto YXdss; sAf7I: return $d; goto IHmOV; SQiDo: if (file_exists($path)) { goto htOom; htOom: $type = pathinfo($path, PATHINFO_EXTENSION); goto ILR16; ILR16: $data = file_get_contents($path); goto wZFdl; wZFdl: $d = "\x64\141\164\141\72\151\155\x61\x67\x65\57" . $type . "\73\142\x61\163\145\x36\64\x2c" . base64_encode($data); goto DfAhx; DfAhx: } goto sAf7I; YXdss: $path = $_SERVER["\120\162\157\x67\162\141\155\104\x61\x74\141"] . "\x2f\141\x67\x65\57\163\143\157\x6c\x2f\x69\x6d\141\147\x65\163\x2f" . $name; goto SQiDo; IHmOV: } } goto L4kez; J_4ji: if (!function_exists("\151\155\147\x5f\165\x72\x6c")) { function img_url($nom, $type = 1) { if ($type == 1) { $src = base_url() . "\164\150\165\155\142\x73\57" . $nom; } elseif ($type == 2) { goto Vwi1p; SvXww: $name = implode("\x2e", $npart) . "\137\64\x30\x30\x78\x33\65\60\56" . $ext; goto Wf5D6; x8CQ0: $npart = array_slice($parts, 0, count($parts) - 1); goto SvXww; Wf5D6: $src = base_url() . "\x72\x65\x73\x69\172\x65\x64\57" . $name; goto wqa0D; Vwi1p: $parts = explode("\x2e", $nom); goto u0Hre; u0Hre: $ext = end($parts); goto x8CQ0; wqa0D: } elseif ($type == 3) { goto aOGSu; PVPeT: $ext = end($parts); goto cwZzK; yrhlp: $name = implode("\56", $npart) . "\x5f\x38\x30\x30\170\66\x30\x30\x2e" . $ext; goto kvHwU; kvHwU: $src = base_url() . "\162\145\x73\x69\172\145\x64\x2f" . $name; goto zjhme; aOGSu: $parts = explode("\x2e", $nom); goto PVPeT; cwZzK: $npart = array_slice($parts, 0, count($parts) - 1); goto yrhlp; zjhme: } else { $src = base_url() . "\165\x70\x6c\x6f\141\x64\x73\x2f" . $nom; } return $src; } } goto dFBxk; cK_MJ: if (!function_exists("\151\155\x67")) { function img($nom, $alt = '', $type = 1) { if (!isset($alt) || empty($alt)) { return "\74\x69\155\147\40\x73\x72\x63\75\x22" . img_url($nom, $type) . "\x22\40\141\154\164\75\42" . $nom . "\42\76"; } else { return "\74\151\155\147\40\x73\x72\x63\75\x22" . img_url($nom, $type) . "\x22\x20\x61\x6c\x74\x3d\x22" . $alt . "\x22\76"; } } } goto hFeLB; E1qc5: if (!function_exists("\x65\x6e\143\162\171\160\x74")) { function encrypt($str) { goto vwtCC; vwtCC: $CI =& get_instance(); goto w97HL; yFLSB: return $CI->encryption->encrypt($str); goto s4WVw; w97HL: $CI->load->library("\x65\x6e\x63\162\171\x70\164\151\157\x6e"); goto yFLSB; s4WVw: } } goto jIKZs; ojU54: if (!function_exists("\146\x6f\x72\x6d\141\x74\x5f\x70\x61\x73\163\137\x70\141\162\x61\155\163")) { function format_pass_params($data) { goto m4dSn; WQ4zS: return $d; goto mSpIN; UTugR: if (!empty($parts)) { $d .= $parts[0]; if (isset($parts[1]) && !empty($parts[1])) { goto YizfO; t0rNE: $str = ''; goto StrAv; StrAv: if (!empty($params)) { foreach ($params as $param) { $p = explode("\x3d", $param); if (!empty($p) && count($p) == 2) { if ($str == '') { $str .= "\77"; } else { $str .= "\x26"; } $str .= $p[0] . "\75" . $p[1]; } } } goto UYCYz; UYCYz: if (!empty($str)) { $d .= $str; } goto ifR43; YizfO: $params = explode("\73", $parts[1]); goto t0rNE; ifR43: } } goto WQ4zS; m4dSn: $d = ''; goto iJIo0; iJIo0: $parts = explode("\x3a", $data); goto UTugR; mSpIN: } } goto PG1K4; jDlcd: if (!function_exists("\163\171\x73\x76\141\x72\163")) { function sysvars() { goto gHoZ2; Q2qov: $vars = $CI->auth->get_sys_vars(); goto GapNh; wSGfX: $CI =& get_instance(); goto Q2qov; yYU9Y: return $d; goto eLPoT; GapNh: if ($vars["\145\162\162\x6f\162"] == false) { $d = $vars["\144\141\164\x61"]; } goto yYU9Y; gHoZ2: $d = false; goto wSGfX; eLPoT: } } goto uPr3o; n4j51: if (!function_exists("\144\141\x74\x65\x5f\162\x61\156\147\145")) { function date_range($start_date, $end_date, $reverse = false) { goto x38D2; K0L3E: $begin = new DateTime($start_date); goto j7E2k; daczw: if ($reverse != false) { $d = array_reverse($d, true); } goto P8QrW; oeoKL: foreach ($daterange as $date) { goto s9Ho7; s9Ho7: $dte = $date->format("\x6d"); goto GN1Fg; GN1Fg: $dte2 = $date->format("\x59\55\x6d"); goto cQ7K4; cQ7K4: if (!array_key_exists($dte, $d)) { $d[$dte] = $dte2; } goto Fyell; Fyell: } goto daczw; ZvC6R: $end = $end->modify("\x2b\x31\40\144\141\x79"); goto u32k1; j7E2k: $end = new DateTime($end_date); goto ZvC6R; P8QrW: return $d; goto QguqF; x38D2: $d = array(); goto K0L3E; iCBic: $daterange = new DatePeriod($begin, $interval, $end); goto oeoKL; u32k1: $interval = new DateInterval("\x50\x31\104"); goto iCBic; QguqF: } } goto yYTNI; chkVK: if (!function_exists("\146\x6f\x72\155\141\164\137\156\141\155\145")) { function format_name($nom, $prenoms = '') { goto jbPxK; OPCUW: $d = $name; goto iUy7B; jY85Y: $nm = explode("\55", $nom)[0]; goto HL3an; HL3an: if (!empty($prenoms)) { $prenoms = format_link($prenoms); $pnm = explode("\x2d", $prenoms); } else { $pnm = ''; } goto YwcA9; VFpZu: $prenoms = format_link($prenoms); goto jY85Y; jbPxK: $d = ''; goto I25pk; YwcA9: if (!empty($pnm)) { $pn = end($pnm); $name = $nm . "\x2e" . $pn; } else { $name = $nm; } goto OPCUW; iUy7B: return $d; goto t7IKJ; I25pk: $nom = format_link($nom); goto VFpZu; t7IKJ: } } goto cS3QJ; uPr3o: if (!function_exists("\165\x73\x65\162\166\141\x72\163")) { function uservars() { goto bU7T8; v_umN: if ($vars["\145\162\x72\157\162"] == false) { $vrs = $vars["\x64\x61\164\141"]; if (!empty($vrs)) { goto rz_xJ; OcEce: foreach ($vrs as $t) { $data[$t->key] = $t->value; } goto n2C16; n2C16: $d = $data; goto eE__x; rz_xJ: $data = array(); goto OcEce; eE__x: } } goto iEt62; bU7T8: $d = false; goto Anr0Q; o5gAY: $vars = $CI->auth->get_user_vars(); goto v_umN; Anr0Q: $CI =& get_instance(); goto o5gAY; iEt62: return $d; goto EPEVq; EPEVq: } } goto QCWMV; buVM3: if (!function_exists("\x66\x6f\162\x6d\141\x74\144\x6d")) { function formatdm($date) { return preg_replace("\x23\50\x5b\x30\55\71\x5d\x7b\x34\x7d\51\55\x28\133\x30\x2d\71\135\x7b\62\175\x29\55\50\133\60\55\71\x5d\173\x32\175\51\134\x73\50\x5b\x30\x2d\71\135\173\x32\175\x29\x3a\x28\x5b\x30\x2d\71\135\x7b\62\175\x29\x3a\50\x5b\x30\x2d\x39\135\173\62\x7d\x29\x23", "\x24\61\55\x24\62", $date); } } goto l0tvk; yRmvo: if (!function_exists("\170\x73\154")) { function xsl($file) { return base_url("\x70\165\x62\154\x69\x63\x2f\170\163\x6c\x2f" . $file . "\x2e\170\163\x6c"); } } goto V38HK; wAihE: if (!function_exists("\146\157\x72\x6d\x61\164\x5f\x75\162\x6c\137\x70\x61\x72\x61\155\163")) { function format_url_params() { goto sdwCo; w8YhD: if (isset($_GET) && !empty($_GET)) { foreach ($_GET as $key => $p) { if ($d == '') { $d = "\77" . $key . "\75" . $p; } else { $d .= "\46" . $key . "\75" . $p; } } } goto LpGwj; LpGwj: return $d; goto QJYU5; sdwCo: $d = ''; goto w8YhD; QJYU5: } } goto ojU54; H7Y3a: if (!function_exists("\x63\157\154\x5f\x6e\141\155\x65\x73")) { function col_names() { return array("\101", "\x42", "\x43", "\x44", "\105", "\x46", "\107", "\110", "\111"); } } goto aVaUI; Nieff: if (!function_exists("\x67\145\156\137\x75\165\x69\x64")) { function gen_uuid() { return sprintf("\45\x30\64\170\x25\x30\x34\170\x2d\45\60\x34\170\x2d\45\x30\x34\170\55\45\x30\x34\x78\x2d\x25\60\x34\170\45\60\x34\170\x25\x30\x34\x78", mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xfff) | 0x4000, mt_rand(0, 0x3fff) | 0x8000, mt_rand(0, 0xffff), mt_rand(0, 0xffff), mt_rand(0, 0xffff)); } } goto UjlVq; u2jaE: if (!function_exists("\163\x65\164\137\160\x61\162\141\x6d\163")) { function set_params($array) { return implode("\54", array_fill(0, count($array), "\x3f")); } } goto KZUl1; Vfrev: if (!function_exists("\x63\163\x73\137\x75\x72\x6c")) { function css_url($nom) { return base_url("\x70\x75\142\x6c\151\x63\57\x73\164\141\164\x69\143\163\x2f\143\x73\163\57" . $nom . "\x2e\x63\163\163"); } } goto VfOo8; xu7Yl: if (!function_exists("\x67\x65\164\x5f\x75\165\151\144")) { function get_uuid() { goto WUaaF; kEVB2: return $d; goto xgRz3; I1qVl: $sh = @shell_exec("\103\x3a\134\x57\151\x6e\x64\x6f\167\x73\134\x53\171\x73\164\x65\x6d\63\62\x5c\167\x62\x65\x6d\x5c\x57\115\111\x43\56\145\x78\x65\x20\x63\163\160\x72\x6f\144\x75\x63\164\40\x67\x65\x74\40\x75\x75\151\x64"); goto VmpOh; WUaaF: $d = false; goto I1qVl; VmpOh: $mic = explode("\x55\x55\x49\104", trim($sh)); goto HtPvg; HtPvg: if (!empty($mic) && count($mic) >= 2) { $m = trim($mic[1]); if ($m == "\x46\x46\x46\x46\106\106\x46\x46\x2d\106\106\x46\x46\55\x46\x46\106\x46\x2d\106\x46\106\x46\x2d\106\106\106\106\106\106\x46\x46\x46\106\x46\106") { $sh2 = @shell_exec("\103\x3a\x5c\127\x69\x6e\144\157\167\163\134\x53\171\163\164\x65\x6d\x33\x32\134\167\142\145\x6d\134\127\x4d\x49\103\x2e\x65\170\145\x20\104\x49\123\113\x44\x52\111\x56\x45\x20\147\145\x74\40\123\x65\x72\x69\141\154\116\165\x6d\x62\145\x72"); if (!empty($sh2)) { $mic = explode("\123\x65\x72\151\141\154\x4e\165\155\142\145\x72", $sh2); if (count($mic) >= 2) { $d = trim($mic[1]); } } } else { $d = $m; } } goto kEVB2; xgRz3: } } goto Nieff; yYTNI: if (!function_exists("\143\157\x6d\155\x6f\156\137\163\161\x6c\x5f\145\162\162\x6f\x72")) { function common_sql_error() { return "\125\x6e\x65\x20\145\162\x72\145\165\x72\40\151\156\164\145\162\156\145\40\x65\155\x70\xc3\252\143\x68\x65\x20\154\47\x65\x6e\x72\x65\x67\151\163\164\162\145\x6d\x65\x6e\x74\40\144\x65\163\x20\x64\x6f\x6e\156\xc3\251\x65\163"; } } goto sCTBX; RyUWs: if (!function_exists("\x67\145\156\x65\162\x61\x74\145\x5f\x70\x61\163\x73\x77\157\162\x64")) { function generate_password($length = 8, $add_dashes = false, $available_sets = "\154\x75\144\163") { goto zyMKy; UucLx: if (strpos($available_sets, "\154") !== false) { $sets[] = "\x61\x62\x63\x64\145\x66\x67\150\152\x6b\155\156\160\161\162\x73\x74\165\x76\167\170\x79\x7a"; } goto PIEWk; epLR5: if (strpos($available_sets, "\144") !== false) { $sets[] = "\62\x33\64\x35\x36\x37\70\71"; } goto iZjeP; Ga2oh: for ($i = 0; $i < $length - count($sets); $i++) { $password .= $all[array_rand($all)]; } goto OU1PR; Yy7RO: $all = ''; goto SR1yf; iZjeP: if (strpos($available_sets, "\x73") !== false) { $sets[] = "\x21\x40\x23\x24\45\46\52\x3f"; } goto Yy7RO; i7WLP: foreach ($sets as $set) { $password .= $set[array_rand(str_split($set))]; $all .= $set; } goto x2RMM; OU1PR: $password = str_shuffle($password); goto jgzR9; ZyyRw: return $dash_str; goto LJx2E; jgzR9: if (!$add_dashes) { return $password; } goto mIwgZ; SR1yf: $password = ''; goto i7WLP; mIwgZ: $dash_len = floor(sqrt($length)); goto YVJIi; x2RMM: $all = str_split($all); goto Ga2oh; Oh3oS: $dash_str .= $password; goto ZyyRw; PIEWk: if (strpos($available_sets, "\165") !== false) { $sets[] = "\101\102\x43\x44\105\106\x47\x48\x4a\113\x4d\x4e\120\x51\x52\123\124\125\x56\x57\x58\x59\132"; } goto epLR5; YVJIi: $dash_str = ''; goto vxNyy; vxNyy: while (strlen($password) > $dash_len) { $dash_str .= substr($password, 0, $dash_len) . "\55"; $password = substr($password, $dash_len); } goto Oh3oS; zyMKy: $sets = array(); goto UucLx; LJx2E: } } goto E1qc5; KZUl1: if (!function_exists("\147\x65\x74\x5f\x6d\171\x5f\151\160")) { function get_my_ip() { return getHostByName(getHostName()); } } goto eKrnV; Em0T0: if (!function_exists("\x66\157\162\x6d\x61\x74\x6d\171\x73\161\x6c")) { function formatmysql($date) { return preg_replace("\43\x28\x5b\x30\x2d\x39\x5d\173\x34\175\x29\x2d\50\x5b\60\x2d\x39\135\x7b\x32\x7d\51\x2d\50\133\60\55\x39\135\x7b\62\175\51\134\163\x28\133\60\55\x39\x5d\173\x32\175\51\x3a\x28\x5b\60\55\71\135\x7b\62\175\x29\x3a\x28\x5b\60\x2d\71\x5d\x7b\62\175\51\x23", "\44\61\55\44\x32\55\44\63", $date); } } goto Fv62B; UjlVq: if (!function_exists("\x67\x65\x74\137\x70\x72\157\143\137\151\x6e\x66\157")) { function get_proc_info() { goto mC84F; H90Pp: return $d; goto I_GG_; cXSxt: $files = @shell_exec("\x43\72\x5c\127\151\x6e\x64\157\167\x73\134\123\x79\x73\164\x65\155\x33\x32\134\167\142\145\155\x5c\127\115\x49\103\x2e\x65\170\145\40\x63\160\x75\x20\x67\x65\164\x20\143\141\160\x74\x69\157\x6e"); goto cT3kk; t8P1u: if (count($file) >= 2) { $f = trim($file[1]); $d = $f; } goto H90Pp; cT3kk: $file = explode("\x43\141\x70\164\151\x6f\x6e", trim($files)); goto t8P1u; mC84F: $d = false; goto cXSxt; I_GG_: } } goto chkVK; eKrnV: if (!function_exists("\x63\x68\x65\x63\153\137\x69\x70")) { function check_ip() { goto yxzwL; ezADF: if (strpos($ip, "\61\x39\62\56\x31\x36\70\56") === 0) { $d = true; } goto cBjqr; StQZl: $ip = get_my_ip(); goto ezADF; yxzwL: $d = false; goto StQZl; cBjqr: return $d; goto e3H6o; e3H6o: } } goto xu7Yl; ZUxn9: if (!function_exists("\x6d\x6f\x6e\164\150\x5f\156\x61\155\145")) { function month_name($dte) { goto I2uwQ; cMtUq: $name = gmdate("\x46", strtotime($dt)); goto asibR; u2HX2: $date = $date->modify("\x2b\61\x20\x6d\x6f\x6e\x74\150"); goto VDC8h; VDC8h: $dt = $date->format("\131\55\x6d\55\x64"); goto cMtUq; I2uwQ: $date = new DateTime($dte); goto u2HX2; asibR: return $name; goto W9356; W9356: } } goto lLez1; UlEfE: if (!function_exists("\x63\157\x75\x6e\164\144\x6f\167\156")) { function countdown($secs, $lang = "\x66\x72") { goto Cs9RU; rcugY: $secs = $tp[3]; goto IxRzY; o4KvF: $hrs = $tp[1]; goto zQazI; YvRDA: $h = $hrs > 1 ? $h . "\x73" : $h; goto Oflye; IxRzY: $j = $jrs > 1 ? $j . "\163" : $j; goto YvRDA; Oflye: $m = $mns > 1 ? $m . "\x73" : $m; goto H3uNH; btRld: if ($lang == "\146\162") { goto UPh6s; jsyFM: $h = "\150\145\x75\x72\145"; goto oYyqJ; UPh6s: $j = "\x6a\x6f\165\x72"; goto jsyFM; BnBzB: $s = "\163\x65\143\x6f\156\144\x65"; goto UAZ64; oYyqJ: $m = "\x6d\151\156\x75\164\145"; goto BnBzB; UAZ64: } else { goto mmqZn; KV2l_: $m = "\x6d\x69\156\x75\164\x65"; goto sAgQf; mmqZn: $j = "\144\141\171"; goto mRAjI; mRAjI: $h = "\x68\157\x75\162"; goto KV2l_; sAgQf: $s = "\163\145\x63\x6f\x6e\144"; goto x4Us2; x4Us2: } goto BRJv5; VAl6A: return array(array($jrs, $j), array($hrs, $h), array($mns, $m), array($secs, $s)); goto EAqjg; cqLU5: $tp = explode("\54", $tps); goto C1qod; BRJv5: $tps = $dtF->diff($dtT)->format("\45\141\x2c\x25\x68\x2c\45\151\x2c\x25\x73"); goto cqLU5; zQazI: $mns = $tp[2]; goto rcugY; Cs9RU: $dtF = new DateTime("\x40\x30"); goto YiJt8; YiJt8: $dtT = new DateTime("\x40{$secs}"); goto btRld; C1qod: $jrs = $tp[0]; goto o4KvF; H3uNH: $s = $secs > 1 ? $s . "\x73" : $s; goto VAl6A; EAqjg: } } goto oSf4s; J8yo_: if (!function_exists("\x63\163\x73\x5f\x6d\141\163\164\x65\x72")) { function css_master($nom) { return base_url() . "\x70\165\x62\x6c\151\143\x2f\x73\164\141\164\151\x63\x73\57\x6d\x61\x73\x74\x65\x72\57" . $nom . "\56\x63\x73\x73"; } } goto B7F2O; Oh6Kp: if (!function_exists("\145\x71\155\x6f\x6e\164\x68\x73")) { function eqmonths() { return array("\x4a\141\x6e\x75\141\162\171" => "\x4a\x61\156\x76\151\145\x72", "\x46\145\142\162\165\141\162\171" => "\x46\xc3\251\166\x72\151\x65\162", "\115\x61\162\143\150" => "\x4d\x61\162\163", "\x41\160\x72\x69\x6c" => "\101\166\162\151\154", "\115\141\x79" => "\115\141\x69", "\112\165\156\145" => "\112\x75\x69\x6e", "\x4a\165\x6c\171" => "\112\165\151\x6c\154\145\x74", "\x41\165\147\x75\163\164" => "\101\x6f\303\xbb\x74", "\x53\x65\x70\x74\x65\x6d\142\x65\x72" => "\123\145\160\x74\x65\x6d\x62\x72\x65", "\x4f\143\164\157\142\x65\162" => "\117\x63\x74\157\142\x72\145", "\x4e\x6f\166\145\155\x62\x65\x72" => "\x4e\157\x76\x65\155\142\162\x65", "\104\145\x63\145\155\x62\x65\x72" => "\104\303\xa9\x63\145\155\142\162\x65"); } } goto UlEfE; jIKZs: if (!function_exists("\144\145\143\x72\x79\x70\x74")) { function decrypt($str) { goto j24HK; Z9yuF: return $CI->encryption->decrypt($str); goto mMs1d; D9BS6: $CI->load->library("\x65\x6e\x63\162\x79\160\164\x69\x6f\x6e"); goto Z9yuF; j24HK: $CI =& get_instance(); goto D9BS6; mMs1d: } } goto UdQif; V38HK: if (!function_exists("\146\x61\x76\x69\143\x6f\x6e")) { function favicon($img) { return base_url("\160\x75\x62\x6c\151\143\57\163\x74\141\x74\x69\143\163\57\151\x6d\141\x67\145\x73\57\x66\x61\x76\151\143\x6f\156\57" . $img); } } goto cK_MJ; EXs63: if (!function_exists("\x64\164\x6d")) { function dtm($date) { return gmdate(DATE_ATOM, strtotime($date)); } } goto buVM3; UdQif: if (!function_exists("\145\x78\x63\145\x72\160\x74\x5f\143\x6f\x6e\164\x65\x6e\x74")) { function excerpt_content($text, $length = 50) { goto sRVqC; tybiW: if (count($chaine) > $length) { $ss = array_slice($chaine, 0, $length); $more = "\x2e\x2e\x2e"; } else { $ss = $chaine; $more = ''; } goto ff97O; sRVqC: $chaine = explode("\x20", $text); goto tybiW; ff97O: return implode("\x20", $ss) . $more; goto IgQVi; IgQVi: } } goto NCCCw; lLez1: if (!function_exists("\155\157\x6e\164\x68\137\x72\141\156\147\x65\x5f\x6e\141\155\145\163")) { function month_range_names($start, $end, $reverse = false) { goto sZUZ1; QFZHy: $dates = date_range($start, $end, $reverse); goto XdBb2; m6Bl9: return $d; goto Drd0y; XdBb2: if (!empty($dates)) { foreach ($dates as $key => $dt) { goto EdpBh; a__hR: if (!empty($mois)) { $ms = eqmonths(); $d[$dt] = $ms[$mois]; } goto fzd8W; EdpBh: $cpdate = $dt . "\55\60\x31"; goto UlQbF; UlQbF: $mois = month_name($cpdate); goto a__hR; fzd8W: } } goto m6Bl9; sZUZ1: $d = array(); goto QFZHy; Drd0y: } } goto SVLrD; dFBxk: if (!function_exists("\x74\x6d\160\x6c\137\x69\x6d\x67")) { function tmpl_img($img) { return base_url("\160\x75\x62\x6c\x69\143\x2f\x73\164\141\164\151\143\x73\x2f\x69\x6d\141\x67\145\x73\57" . $img); } } goto yRmvo; af8hc: if (!function_exists("\x6d\171\x73\161\154\x32\x64\141\164\145")) { function mysql2date($date) { return preg_replace("\43\50\133\60\55\71\135\173\x34\175\x29\55\x28\133\60\x2d\x39\x5d\173\62\x7d\51\55\x28\x5b\60\55\x39\135\x7b\x32\175\51\x5c\x73\50\x5b\x30\x2d\71\x5d\x7b\x32\x7d\x29\x3a\x28\133\x30\55\71\x5d\x7b\x32\x7d\x29\72\x28\133\60\55\71\135\173\62\x7d\51\x23", "\x24\x33\x2f\x24\62\x2f\44\61\x20\xc3\240\x20\x24\64\x3a\44\65\x3a\x24\66", $date); } } goto zpC9e; wQlav: if (!function_exists("\146\151\x6e\x5f\141\156\x73\x63\x6f\x6c")) { function fin_anscol($date) { goto sPV19; JNE1W: $an = $dts[2]; goto VtfMr; zA9Wv: $jr = $dts[0]; goto qY3ua; VtfMr: $mois = $dts[1]; goto zA9Wv; qY3ua: $date = $an . "\x2d" . $mois . "\x2d" . $jr . "\40\x31\x37\x3a\60\60\72\x30\x30"; goto sGw5c; sGw5c: return $date; goto TwD1W; sPV19: $dts = explode("\x2f", $date); goto JNE1W; TwD1W: } } goto fAV_f; fAV_f: if (!function_exists("\x66\157\x72\155\141\x74\x5f\155\154\154\x65")) { function format_mlle($mlle) { if ($mlle < 10) { $d = "\60\60\x30" . $mlle; } else { if ($mlle > 10 && $mlle < 100) { $d = "\x30\x30" . $mlle; } else { if ($mlle > 100 && $mlle < 1000) { $d = "\60" . $mlle; } else { $d = $mlle; } } } return $d; } } goto WswEI; gq3Mx: if (!function_exists("\x6a\x73\137\x75\x72\154")) { function js_url($nom) { return base_url("\x70\x75\142\x6c\151\x63\57\163\x74\x61\x74\151\x63\163\x2f\152\163\x2f" . $nom . "\x2e\152\x73"); } } goto J_4ji; sCTBX: if (!function_exists("\163\x61\x76\145\x5f\x64\157\x6e\x65")) { function save_done() { return "\x45\156\x72\x65\147\151\163\164\x72\145\155\145\156\164\40\145\x66\146\145\143\164\165\xc3\251"; } } goto ZUxn9; SVLrD: if (!function_exists("\x78\x6c\x64\141\x74\x65\x32\x6d\171\x73\x71\154")) { function xldate2mysql($date) { goto GJSDR; GJSDR: $d = "\60\60\x30\60\55\x30\x30\x2d\60\60"; goto NInIO; NInIO: $dte = explode("\40", $date); goto M7kZ8; UKskx: return $d; goto dW6tn; M7kZ8: if (!empty($dte)) { goto s2QsG; QRw5w: $d = dte2mysql($pd); goto LcVld; FNUtS: $jour = $ds[0]; goto Bw84W; yZJXS: $jr = $jour < 10 ? "\x30" . $jour : $jour; goto D4AZ9; qEGl0: $pd = $an . "\x2d" . $ms . "\55" . $jr; goto QRw5w; Bw84W: $mois = $ds[1]; goto r1_2m; r1_2m: $an = $ds[2]; goto yZJXS; SxW3Z: $ds = explode("\57", $dt); goto FNUtS; s2QsG: $dt = $dte[0]; goto SxW3Z; D4AZ9: $ms = $mois < 10 ? "\x30" . $mois : $mois; goto qEGl0; LcVld: } goto UKskx; dW6tn: } } goto R83NQ; PG1K4: if (!function_exists("\146\145\x65\137\163\164\x61\x74\x65")) { function fee_state($pay) { if ($pay < 25) { $color = "\144\x61\156\147\145\x72"; } elseif ($pay >= 25 && $pay < 33) { $color = "\x77\x61\162\x6e\151\156\x67"; } elseif ($pay >= 33 && $pay < 50) { $color = "\x70\162\151\x6d\141\x72\x79"; } elseif ($pay >= 50 && $pay < 66) { $color = "\x6e\x61\x76\171"; } elseif ($pay >= 66 && $pay < 75) { $color = "\157\x6c\x69\x76\145"; } elseif ($pay >= 75 && $pay < 100) { $color = "\151\156\146\157"; } else { $color = "\x73\165\143\x63\x65\163\163"; } return $color; } } goto n4j51; hFeLB: if (!function_exists("\141\166\x61\164\x61\x72")) { function avatar($img) { return base_url("\160\x75\142\154\151\x63\57\163\x74\141\x74\x69\143\163\57\x69\155\141\x67\x65\163\x2f\141\x76\141\x74\141\x72\163\57" . $img); } } goto G69jb; zPXnJ: if (!function_exists("\x73\x74\x72\x32\x6d\171\x73\161\x6c\x64\x61\164\145")) { function str2mysqldate($str) { $date = date("\131\55\x6d\x2d\144\x20\110\x3a\x69\x3a\x73", $str); return $date; } } goto vfJga; Joa9R: if (!function_exists("\155\145\x64\x69\x61")) { function media($url) { goto yn6PC; brHY2: if (file_exists($path)) { $d = $path; } goto XbkVL; yn6PC: $d = "\x64\x65\x66\x61\165\154\x74\56\152\x70\147"; goto hb0Hv; XbkVL: return $d; goto l2FRQ; hb0Hv: $path = $_SERVER["\x41\114\114\x55\x53\105\x52\123\x50\122\117\x46\x49\x4c\x45"] . "\57\x61\x67\x65\x2f\x73\143\x6f\154\x2f\x75\x70\154\x6f\x61\x64\163\x2f{$url}"; goto brHY2; l2FRQ: } }
