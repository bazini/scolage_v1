<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\x53\105\x50\101\x54\x48") or exit("\x4e\157\40\144\151\x72\x65\143\164\40\163\143\x72\x69\x70\x74\x20\x61\143\x63\145\x73\x73\40\x61\x6c\154\x6f\x77\x65\x64"); class CI_Trackback { public $charset = "\x55\x54\x46\x2d\70"; public $data = array("\x75\x72\x6c" => '', "\164\151\164\x6c\x65" => '', "\x65\170\143\x65\162\160\x74" => '', "\x62\154\157\147\137\156\x61\155\145" => '', "\x63\x68\x61\x72\x73\x65\164" => ''); public $convert_ascii = TRUE; public $response = ''; public $error_msg = array(); public function __construct() { log_message("\x69\156\x66\x6f", "\x54\162\x61\143\153\142\141\x63\x6b\x20\x43\154\141\163\163\40\111\x6e\x69\x74\151\x61\x6c\x69\x7a\145\x64"); } public function send($tb_data) { goto zm6pa; GoEsN: return $return; goto mBjsQ; RE2KS: if (count($ping_url) > 0) { foreach ($ping_url as $url) { if ($this->process($url, $data) === FALSE) { $return = FALSE; } } } goto GoEsN; zm6pa: if (!is_array($tb_data)) { $this->set_error("\x54\150\x65\40\163\145\156\144\x28\x29\40\x6d\x65\x74\150\157\144\40\155\x75\163\164\x20\x62\x65\x20\160\x61\x73\163\x65\x64\40\141\156\x20\x61\x72\x72\x61\171"); return FALSE; } goto wJynP; Dgk1h: $return = TRUE; goto RE2KS; bQLR5: $charset = isset($tb_data["\143\x68\141\x72\x73\145\164"]) ? $tb_data["\143\x68\x61\x72\x73\x65\x74"] : $this->charset; goto Zpm0O; wJynP: foreach (array("\165\162\x6c", "\x74\x69\x74\x6c\145", "\145\170\x63\x65\162\x70\x74", "\x62\154\157\147\137\156\x61\155\145", "\x70\151\x6e\147\137\165\162\x6c") as $item) { goto K6wpc; K6wpc: if (!isset($tb_data[$item])) { $this->set_error("\122\x65\x71\165\151\x72\145\x64\x20\x69\164\145\155\40\x6d\x69\x73\x73\151\x6e\147\72\40" . $item); return FALSE; } goto wganm; hY3nF: if ($this->convert_ascii === TRUE && in_array($item, array("\x65\170\x63\145\x72\x70\164", "\x74\x69\164\154\x65", "\x62\154\x6f\x67\x5f\156\x61\x6d\x65"), TRUE)) { ${$item} = $this->convert_ascii(${$item}); } goto k2FFQ; wganm: switch ($item) { case "\x70\151\156\147\137\165\x72\x6c": ${$item} = $this->extract_urls($tb_data[$item]); break; case "\145\x78\x63\145\x72\160\x74": ${$item} = $this->limit_characters($this->convert_xml(strip_tags(stripslashes($tb_data[$item])))); break; case "\165\x72\154": ${$item} = str_replace("\x26\43\64\65\73", "\55", $this->convert_xml(strip_tags(stripslashes($tb_data[$item])))); break; default: ${$item} = $this->convert_xml(strip_tags(stripslashes($tb_data[$item]))); break; } goto hY3nF; k2FFQ: } goto bQLR5; Zpm0O: $data = "\165\162\154\x3d" . rawurlencode($url) . "\46\x74\x69\x74\154\x65\75" . rawurlencode($title) . "\46\x62\x6c\157\x67\137\x6e\141\x6d\x65\x3d" . rawurlencode($blog_name) . "\46\145\x78\143\x65\x72\160\164\75" . rawurlencode($excerpt) . "\46\143\x68\141\x72\x73\x65\x74\x3d" . rawurlencode($charset); goto Dgk1h; mBjsQ: } public function receive() { foreach (array("\x75\x72\154", "\164\x69\x74\154\145", "\142\x6c\x6f\147\x5f\x6e\141\x6d\x65", "\145\x78\143\145\x72\x70\164") as $val) { goto r1WOv; tqEup: if ($val !== "\165\162\x6c" && MB_ENABLED === TRUE) { if (MB_ENABLED === TRUE) { $_POST[$val] = mb_convert_encoding($_POST[$val], $this->charset, $this->data["\143\150\x61\x72\x73\x65\164"]); } elseif (ICONV_ENABLED === TRUE) { $_POST[$val] = @iconv($this->data["\143\150\x61\162\x73\x65\x74"], $this->charset . "\x2f\57\x49\107\116\117\x52\105", $_POST[$val]); } } goto qLiRt; m_XUC: $this->data[$val] = $_POST[$val]; goto xn2F8; qLiRt: $_POST[$val] = $val !== "\x75\x72\x6c" ? $this->convert_xml(strip_tags($_POST[$val])) : strip_tags($_POST[$val]); goto k3iid; r1WOv: if (empty($_POST[$val])) { $this->set_error("\x54\x68\x65\40\146\x6f\x6c\x6c\x6f\167\x69\x6e\x67\x20\162\x65\161\165\151\x72\x65\144\40\x50\x4f\x53\x54\x20\166\x61\162\x69\141\142\x6c\x65\40\x69\163\x20\155\151\x73\x73\151\x6e\147\72\40" . $val); return FALSE; } goto VIeMZ; k3iid: if ($val === "\x65\170\143\x65\162\x70\x74") { $_POST["\145\170\143\145\x72\160\x74"] = $this->limit_characters($_POST["\x65\x78\143\145\162\160\x74"]); } goto m_XUC; VIeMZ: $this->data["\x63\150\x61\162\x73\x65\x74"] = isset($_POST["\x63\150\141\x72\163\145\x74"]) ? strtoupper(trim($_POST["\143\150\141\162\163\x65\x74"])) : "\141\165\x74\157"; goto tqEup; xn2F8: } return TRUE; } public function send_error($message = "\x49\x6e\x63\157\155\160\x6c\x65\x74\x65\x20\111\156\x66\157\162\155\141\x74\x69\157\x6e") { exit("\74\x3f\170\155\x6c\x20\x76\x65\x72\163\151\x6f\x6e\x3d\42\61\x2e\x30\x22\40\x65\x6e\x63\x6f\144\x69\x6e\147\75\x22\x75\x74\x66\55\70\42\x3f" . "\x3e\xa\x3c\162\x65\163\160\157\156\163\145\x3e\12\x3c\145\162\162\x6f\x72\76\x31\74\x2f\x65\x72\x72\x6f\x72\x3e\12\74\x6d\x65\x73\x73\141\147\145\76" . $message . "\74\57\x6d\145\x73\x73\x61\147\145\x3e\12\x3c\57\162\145\163\160\157\x6e\x73\145\x3e"); } public function send_success() { exit("\x3c\77\x78\x6d\x6c\40\166\x65\162\x73\151\x6f\x6e\75\x22\61\x2e\x30\x22\40\x65\156\143\157\144\151\x6e\147\x3d\x22\x75\164\146\55\x38\42\x3f" . "\x3e\xa\x3c\162\x65\x73\x70\157\156\163\x65\76\xa\74\145\162\162\x6f\x72\76\60\74\57\145\162\162\157\162\x3e\12\74\57\162\145\x73\x70\157\x6e\x73\145\x3e"); } public function data($item) { return isset($this->data[$item]) ? $this->data[$item] : ''; } public function process($url, $data) { goto zkZoo; xTF5e: fputs($fp, $data); goto PWCZM; ZChEI: if ($id = $this->get_id($url)) { $data = "\x74\142\x5f\151\x64\x3d" . $id . "\46" . $data; } goto jyVWm; H6Zzm: fputs($fp, "\x43\157\156\164\145\156\x74\x2d\164\171\160\145\x3a\x20\x61\160\x70\x6c\151\x63\x61\164\151\157\156\57\x78\x2d\167\x77\167\55\146\x6f\162\x6d\x2d\165\162\154\x65\156\x63\x6f\144\145\x64\xd\12"); goto IXVEI; jaGkG: while (!feof($fp)) { $this->response .= fgets($fp, 128); } goto KWHU8; PWCZM: $this->response = ''; goto jaGkG; ikrcx: fputs($fp, "\103\x6f\156\x6e\145\143\x74\x69\157\x6e\x3a\x20\x63\x6c\x6f\x73\145\xd\xa\15\xa"); goto xTF5e; D0fk_: if (stripos($this->response, "\x3c\145\x72\162\157\162\x3e\x30\74\57\145\x72\162\157\162\76") === FALSE) { goto JtAkJ; DSqSq: return FALSE; goto aOCtg; JtAkJ: $message = preg_match("\x2f\74\155\x65\x73\x73\x61\147\145\x3e\x28\x2e\52\77\51\x3c\134\x2f\155\145\163\163\x61\147\145\x3e\57\151\x73", $this->response, $match) ? trim($match[1]) : "\x41\x6e\x20\165\x6e\153\156\157\167\156\x20\145\162\x72\157\x72\40\167\x61\163\x20\145\x6e\143\157\x75\156\x74\145\162\x65\x64"; goto nm3ZJ; nm3ZJ: $this->set_error($message); goto DSqSq; aOCtg: } goto tfLFT; O8pZ8: empty($target["\x71\x75\145\162\x79"]) or $path .= "\x3f" . $target["\161\165\x65\162\171"]; goto ZChEI; qRHUM: if (!($fp = @fsockopen($target["\x68\157\163\164"], 80))) { $this->set_error("\111\156\x76\x61\x6c\x69\x64\x20\x43\x6f\x6e\x6e\145\143\x74\x69\157\156\72\x20" . $url); return FALSE; } goto NCuuI; tfLFT: return TRUE; goto Sl8zp; IXVEI: fputs($fp, "\x43\x6f\156\164\x65\x6e\x74\55\x6c\x65\156\147\x74\150\72\x20" . strlen($data) . "\xd\xa"); goto ikrcx; xI7Ig: fputs($fp, "\110\x6f\x73\164\72\x20" . $target["\x68\x6f\x73\164"] . "\15\xa"); goto H6Zzm; KWHU8: @fclose($fp); goto D0fk_; NCuuI: $path = isset($target["\160\141\x74\x68"]) ? $target["\x70\x61\164\x68"] : $url; goto O8pZ8; jyVWm: fputs($fp, "\120\x4f\x53\x54\x20" . $path . "\40\x48\x54\124\120\57\61\x2e\60\xd\xa"); goto xI7Ig; zkZoo: $target = parse_url($url); goto qRHUM; Sl8zp: } public function extract_urls($urls) { goto A6il8; A6il8: $urls = str_replace("\54\x2c", "\x2c", preg_replace("\x2f\x5c\163\52\x28\x5c\123\53\51\134\x73\x2a\x2f", "\134\x31\x2c", $urls)); goto oOiKT; E9oRr: array_walk($urls, array($this, "\166\x61\x6c\151\144\x61\x74\145\137\x75\x72\x6c")); goto S5lta; oOiKT: $urls = array_unique(preg_split("\x2f\133\x2c\135\57", rtrim($urls, "\54"))); goto E9oRr; S5lta: return $urls; goto awGBk; awGBk: } public function validate_url(&$url) { $url = trim($url); if (stripos($url, "\x68\x74\164\x70") !== 0) { $url = "\150\x74\x74\160\72\x2f\x2f" . $url; } } public function get_id($url) { goto fnhnG; fnhnG: $tb_id = ''; goto gvhw_; gvhw_: if (strpos($url, "\x3f") !== FALSE) { goto BnXKl; kVOkI: if (!is_numeric($tb_end)) { $tb_end = $tb_array[count($tb_array) - 2]; } goto H8qyt; FBZZw: $tb_end = $tb_array[count($tb_array) - 1]; goto kVOkI; kHPfO: $tb_id = $tb_array[count($tb_array) - 1]; goto J6Mgq; H8qyt: $tb_array = explode("\75", $tb_end); goto kHPfO; BnXKl: $tb_array = explode("\57", $url); goto FBZZw; J6Mgq: } else { goto I4loz; cCEbN: $tb_array = explode("\x2f", $url); goto VgOhD; QE5Da: if (!is_numeric($tb_id)) { $tb_id = $tb_array[count($tb_array) - 2]; } goto PPAfm; I4loz: $url = rtrim($url, "\57"); goto cCEbN; VgOhD: $tb_id = $tb_array[count($tb_array) - 1]; goto QE5Da; PPAfm: } goto LS2Yn; LS2Yn: return ctype_digit((string) $tb_id) ? $tb_id : FALSE; goto VqBin; VqBin: } public function convert_xml($str) { goto GfZkX; oQPyG: $str = str_replace(array("\46", "\74", "\x3e", "\42", "\47", "\55"), array("\46\141\x6d\160\73", "\x26\154\x74\x3b", "\46\147\164\73", "\46\161\165\157\x74\73", "\46\43\x33\x39\73", "\46\43\x34\x35\73"), $str); goto FDRCf; FDRCf: return preg_replace(array("\57" . $temp . "\50\x5c\144\x2b\x29\x3b\x2f", "\x2f" . $temp . "\50\x5c\167\x2b\51\73\x2f"), array("\x26\43\134\61\73", "\x26\134\61\73"), $str); goto K5ks9; UBz7s: $str = preg_replace(array("\57\x26\x23\x28\134\x64\x2b\51\73\x2f", "\x2f\x26\x28\134\167\53\x29\73\x2f"), $temp . "\134\x31\73", $str); goto oQPyG; GfZkX: $temp = "\137\x5f\124\x45\x4d\x50\137\101\115\120\x45\122\123\x41\116\104\123\x5f\137"; goto UBz7s; K5ks9: } public function limit_characters($str, $n = 500, $end_char = "\x26\43\70\62\x33\x30\x3b") { goto ywlKY; ywlKY: if (strlen($str) < $n) { return $str; } goto NVKUF; sr8AW: foreach (explode("\40", trim($str)) as $val) { $out .= $val . "\x20"; if (strlen($out) >= $n) { return rtrim($out) . $end_char; } } goto e3Sdx; UDkiH: if (strlen($str) <= $n) { return $str; } goto AV_eM; NVKUF: $str = preg_replace("\57\x5c\163\53\57", "\40", str_replace(array("\xd\12", "\15", "\12"), "\x20", $str)); goto UDkiH; AV_eM: $out = ''; goto sr8AW; e3Sdx: } public function convert_ascii($str) { goto CB3Aq; UBNGr: $temp = array(); goto xHjx7; xHjx7: for ($i = 0, $s = strlen($str); $i < $s; $i++) { $ordinal = ord($str[$i]); if ($ordinal < 128) { $out .= $str[$i]; } else { goto s_7Ep; bZpCB: if (count($temp) === $count) { goto maCsk; maCsk: $number = $count === 3 ? $temp[0] % 16 * 4096 + $temp[1] % 64 * 64 + $temp[2] % 64 : $temp[0] % 32 * 64 + $temp[1] % 64; goto dLr05; oQi10: $temp = array(); goto Zl4Nl; dLr05: $out .= "\46\x23" . $number . "\73"; goto pKCaQ; pKCaQ: $count = 1; goto oQi10; Zl4Nl: } goto Q_Jh6; VPmjG: $temp[] = $ordinal; goto bZpCB; s_7Ep: if (count($temp) === 0) { $count = $ordinal < 224 ? 2 : 3; } goto VPmjG; Q_Jh6: } } goto ONRk1; rVFZX: $out = ''; goto UBNGr; ONRk1: return $out; goto KL0I6; CB3Aq: $count = 1; goto rVFZX; KL0I6: } public function set_error($msg) { log_message("\145\x72\162\157\x72", $msg); $this->error_msg[] = $msg; } public function display_errors($open = "\74\x70\x3e", $close = "\x3c\57\160\76") { return count($this->error_msg) > 0 ? $open . implode($close . $open, $this->error_msg) . $close : ''; } }
