<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto ZWmgB; ZWmgB: defined("\x42\101\x53\x45\120\x41\x54\x48") or exit("\x4e\157\x20\144\151\162\145\x63\164\40\163\143\162\x69\160\164\x20\x61\x63\143\145\x73\x73\40\x61\154\154\157\167\x65\144"); goto VrQWo; drTtE: function is_true($test) { return $test === TRUE; } goto Ku0it; VrQWo: class CI_Unit_test { public $active = TRUE; public $results = array(); public $strict = FALSE; protected $_template = NULL; protected $_template_rows = NULL; protected $_test_items_visible = array("\x74\x65\x73\x74\137\x6e\141\155\145", "\164\x65\163\x74\137\144\141\x74\141\x74\x79\x70\x65", "\x72\x65\163\x5f\x64\x61\164\x61\x74\x79\160\145", "\x72\145\163\165\x6c\164", "\146\x69\x6c\145", "\154\x69\x6e\145", "\156\157\x74\145\x73"); public function __construct() { log_message("\x69\x6e\x66\157", "\125\156\151\x74\40\124\x65\x73\x74\151\x6e\x67\40\103\154\141\163\163\x20\111\156\151\x74\x69\141\154\x69\172\x65\x64"); } public function set_test_items($items) { if (!empty($items) && is_array($items)) { $this->_test_items_visible = $items; } } public function run($test, $expected = TRUE, $test_name = "\x75\x6e\144\x65\x66\151\x6e\145\x64", $notes = '') { goto pAIc3; ZLQat: if (in_array($expected, array("\151\163\x5f\x6f\142\x6a\x65\x63\164", "\151\x73\137\x73\164\162\151\156\147", "\151\163\137\x62\157\x6f\x6c", "\x69\x73\137\164\x72\x75\145", "\x69\163\137\x66\141\154\x73\145", "\x69\163\137\x69\156\164", "\x69\163\x5f\x6e\165\x6d\x65\162\151\x63", "\x69\x73\x5f\x66\154\x6f\141\164", "\x69\163\x5f\144\x6f\x75\x62\x6c\x65", "\151\163\x5f\x61\162\162\x61\x79", "\151\163\x5f\x6e\x75\x6c\x6c", "\x69\x73\x5f\x72\x65\163\157\x75\x72\143\145"), TRUE)) { $result = $expected($test); $extype = str_replace(array("\x74\162\x75\145", "\x66\x61\x6c\x73\145"), "\142\x6f\157\154", str_replace("\151\x73\x5f", '', $expected)); } else { $result = $this->strict === TRUE ? $test === $expected : $test == $expected; $extype = gettype($expected); } goto p0xg3; UFoU5: return $this->report($this->result(array($report))); goto fZbzw; p0xg3: $back = $this->_backtrace(); goto DrrEx; DrrEx: $report = array("\164\145\163\x74\137\x6e\x61\x6d\145" => $test_name, "\x74\x65\x73\x74\x5f\x64\141\x74\x61\164\171\x70\145" => gettype($test), "\162\x65\163\137\x64\141\x74\x61\x74\x79\x70\145" => $extype, "\x72\x65\163\x75\x6c\164" => $result === TRUE ? "\x70\x61\163\x73\x65\x64" : "\x66\x61\151\x6c\x65\144", "\146\x69\x6c\145" => $back["\146\x69\x6c\145"], "\154\x69\x6e\145" => $back["\x6c\151\x6e\x65"], "\156\157\x74\x65\163" => $notes); goto Z37NV; Z37NV: $this->results[] = $report; goto UFoU5; pAIc3: if ($this->active === FALSE) { return FALSE; } goto ZLQat; fZbzw: } public function report($result = array()) { goto WeWhY; T39ZY: $r = ''; goto prB0r; WeWhY: if (count($result) === 0) { $result = $this->result(); } goto xbVRU; oNJuz: $this->_parse_template(); goto T39ZY; prB0r: foreach ($result as $res) { goto FDHJU; woeC2: foreach ($res as $key => $val) { if ($key === $CI->lang->line("\x75\164\x5f\x72\145\163\x75\x6c\x74")) { if ($val === $CI->lang->line("\165\164\137\160\141\163\x73\x65\144")) { $val = "\x3c\163\x70\141\x6e\x20\x73\164\171\x6c\145\x3d\x22\x63\x6f\x6c\x6f\162\x3a\40\43\60\x43\x30\73\42\76" . $val . "\x3c\x2f\163\x70\x61\x6e\x3e"; } elseif ($val === $CI->lang->line("\x75\x74\137\x66\141\x69\154\x65\144")) { $val = "\74\x73\x70\141\x6e\40\163\x74\171\x6c\x65\x3d\x22\x63\157\x6c\157\x72\72\x20\43\103\x30\60\73\x22\x3e" . $val . "\74\x2f\163\x70\141\156\x3e"; } } $table .= str_replace(array("\173\151\164\145\x6d\175", "\173\x72\x65\x73\x75\154\x74\x7d"), array($key, $val), $this->_template_rows); } goto rR1vF; FDHJU: $table = ''; goto woeC2; rR1vF: $r .= str_replace("\173\162\x6f\167\x73\x7d", $table, $this->_template); goto cH7nv; cH7nv: } goto Or7Lt; xbVRU: $CI =& get_instance(); goto oCbhU; oCbhU: $CI->load->language("\165\x6e\x69\x74\137\164\145\x73\164"); goto oNJuz; Or7Lt: return $r; goto YiugQ; YiugQ: } public function use_strict($state = TRUE) { $this->strict = (bool) $state; } public function active($state = TRUE) { $this->active = (bool) $state; } public function result($results = array()) { goto xJknx; cny6G: foreach ($results as $result) { goto tIpkw; tIpkw: $temp = array(); goto DzSLg; DzSLg: foreach ($result as $key => $val) { if (!in_array($key, $this->_test_items_visible)) { continue; } elseif (in_array($key, array("\164\145\163\164\x5f\x6e\x61\155\145", "\x74\x65\163\x74\137\144\141\x74\x61\164\171\x70\145", "\162\x65\163\137\144\x61\x74\x61\164\171\160\145", "\162\x65\163\x75\x6c\x74"), TRUE)) { if (FALSE !== ($line = $CI->lang->line(strtolower("\x75\x74\x5f" . $val), FALSE))) { $val = $line; } } $temp[$CI->lang->line("\165\164\137" . $key, FALSE)] = $val; } goto U1KEg; U1KEg: $retval[] = $temp; goto FEftM; FEftM: } goto cOOvg; cOOvg: return $retval; goto JOjaA; AfWz9: if (count($results) === 0) { $results = $this->results; } goto LdkaN; LdkaN: $retval = array(); goto cny6G; xJknx: $CI =& get_instance(); goto Lxsqb; Lxsqb: $CI->load->language("\x75\x6e\151\164\x5f\x74\x65\163\164"); goto AfWz9; JOjaA: } public function set_template($template) { $this->_template = $template; } protected function _backtrace() { $back = debug_backtrace(); return array("\146\151\x6c\x65" => isset($back[1]["\146\151\x6c\x65"]) ? $back[1]["\146\x69\x6c\145"] : '', "\x6c\x69\x6e\x65" => isset($back[1]["\154\x69\156\x65"]) ? $back[1]["\154\151\x6e\x65"] : ''); } protected function _default_template() { $this->_template = "\12" . "\x3c\x74\141\x62\x6c\x65\40\163\164\171\154\x65\75\x22\x77\151\x64\x74\150\72\x31\x30\x30\45\x3b\40\146\157\x6e\x74\55\x73\151\172\145\x3a\x73\155\x61\x6c\154\73\40\x6d\x61\x72\147\x69\x6e\x3a\61\x30\160\x78\40\60\x3b\40\x62\157\162\144\145\x72\55\x63\157\154\154\141\160\x73\145\x3a\143\x6f\x6c\x6c\141\x70\163\x65\73\x20\142\x6f\x72\x64\145\162\72\61\x70\170\40\163\x6f\x6c\x69\144\x20\x23\103\x43\x43\73\42\76\173\162\x6f\x77\x73\x7d" . "\12\x3c\x2f\x74\141\142\154\x65\76"; $this->_template_rows = "\12\11\x3c\164\x72\x3e\xa\11\11" . "\x3c\164\x68\40\163\x74\x79\x6c\x65\75\x22\x74\x65\170\x74\x2d\141\x6c\x69\x67\x6e\x3a\x20\154\x65\146\164\73\40\142\x6f\162\x64\145\162\55\142\157\164\x74\x6f\x6d\72\61\160\x78\x20\163\x6f\154\x69\x64\40\43\x43\103\x43\73\42\76\173\151\164\x65\155\x7d\x3c\57\x74\150\x3e" . "\12\11\x9" . "\74\164\x64\x20\x73\164\x79\x6c\145\x3d\x22\142\x6f\162\x64\145\x72\55\x62\x6f\164\164\x6f\x6d\x3a\61\x70\x78\x20\163\157\154\x69\x64\x20\43\x43\x43\103\x3b\42\76\173\162\x65\163\x75\x6c\164\x7d\74\x2f\x74\x64\76" . "\12\11\x3c\x2f\164\162\x3e"; } protected function _parse_template() { goto XSqCb; Lc9LF: $this->_template_rows = $match[1]; goto BVhds; BVhds: $this->_template = str_replace($match[0], "\x7b\x72\x6f\x77\163\x7d", $this->_template); goto hNJHI; XSqCb: if ($this->_template_rows !== NULL) { return; } goto w5sOR; w5sOR: if ($this->_template === NULL or !preg_match("\57\134\x7b\x72\x6f\167\163\134\x7d\50\56\x2a\x3f\51\134\173\134\x2f\x72\157\167\x73\x5c\175\x2f\163\x69", $this->_template, $match)) { $this->_default_template(); return; } goto Lc9LF; hNJHI: } } goto drTtE; Ku0it: function is_false($test) { return $test === FALSE; }
