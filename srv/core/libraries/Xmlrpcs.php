<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto XPPSo; a2WMQ: if (!class_exists("\103\x49\x5f\x58\x6d\154\x72\x70\x63", FALSE)) { show_error("\x59\x6f\x75\40\x6d\x75\163\164\40\x6c\157\x61\144\x20\164\x68\145\x20\x58\x6d\x6c\162\160\x63\40\143\x6c\x61\x73\x73\40\x62\x65\146\x6f\162\145\x20\154\157\x61\144\x69\x6e\x67\x20\x74\x68\145\40\130\155\x6c\162\x70\x63\163\x20\143\154\x61\x73\163\40\x69\156\40\157\162\x64\145\162\x20\x74\x6f\40\x63\162\x65\141\164\x65\x20\141\x20\163\x65\162\x76\145\162\56"); } goto JnWe2; fJqIY: if (!function_exists("\x78\155\154\x5f\160\141\x72\163\x65\162\x5f\143\162\145\141\x74\145")) { show_error("\131\157\165\x72\40\x50\110\120\x20\151\x6e\163\164\x61\154\154\141\x74\x69\x6f\x6e\40\144\x6f\x65\x73\x20\x6e\157\164\40\x73\x75\x70\x70\x6f\x72\164\x20\x58\x4d\x4c"); } goto a2WMQ; XPPSo: defined("\x42\101\123\x45\120\x41\124\110") or exit("\116\x6f\x20\x64\151\x72\x65\x63\x74\40\x73\x63\162\x69\x70\164\x20\x61\x63\143\145\163\x73\x20\141\154\x6c\157\x77\x65\x64"); goto fJqIY; JnWe2: class CI_Xmlrpcs extends CI_Xmlrpc { public $methods = array(); public $debug_msg = ''; public $system_methods = array(); public $object = FALSE; public function __construct($config = array()) { goto dKx5K; mrUCN: if (isset($config["\x66\165\156\143\x74\x69\157\156\163"]) && is_array($config["\x66\165\x6e\143\164\x69\x6f\x6e\x73"])) { $this->methods = array_merge($this->methods, $config["\146\x75\156\x63\x74\151\157\x6e\163"]); } goto L0wv0; jvHgx: $this->set_system_methods(); goto mrUCN; dKx5K: parent::__construct(); goto jvHgx; L0wv0: log_message("\x69\156\146\x6f", "\130\x4d\114\x2d\x52\120\x43\40\x53\145\x72\166\145\162\x20\103\x6c\141\163\163\x20\x49\x6e\151\x74\x69\x61\154\151\x7a\145\x64"); goto vVlpj; vVlpj: } public function initialize($config = array()) { goto PWcJt; t42BA: if (isset($config["\144\145\x62\x75\x67"])) { $this->debug = $config["\144\145\x62\165\147"]; } goto sQK_K; PWcJt: if (isset($config["\x66\x75\156\x63\164\x69\157\x6e\163"]) && is_array($config["\x66\165\156\143\x74\x69\157\156\163"])) { $this->methods = array_merge($this->methods, $config["\x66\x75\x6e\143\x74\x69\157\156\x73"]); } goto t42BA; sQK_K: if (isset($config["\157\142\x6a\x65\x63\x74"]) && is_object($config["\157\142\152\145\x63\x74"])) { $this->object = $config["\157\x62\x6a\145\143\x74"]; } goto WXC2K; WXC2K: if (isset($config["\170\163\x73\137\x63\x6c\145\141\156"])) { $this->xss_clean = $config["\x78\x73\163\137\x63\154\x65\x61\x6e"]; } goto oXEo3; oXEo3: } public function set_system_methods() { $this->methods = array("\x73\171\x73\x74\145\x6d\x2e\x6c\x69\x73\164\115\x65\x74\150\157\144\163" => array("\x66\x75\x6e\143\x74\151\x6f\x6e" => "\x74\x68\151\x73\x2e\154\151\x73\164\115\x65\x74\150\x6f\144\163", "\x73\x69\x67\156\x61\x74\x75\162\x65" => array(array($this->xmlrpcArray, $this->xmlrpcString), array($this->xmlrpcArray)), "\x64\x6f\143\163\x74\x72\x69\156\147" => "\122\x65\x74\x75\162\x6e\163\40\141\156\40\x61\162\162\141\171\40\157\146\40\141\166\x61\x69\154\141\142\x6c\145\40\x6d\x65\164\150\x6f\144\x73\x20\157\156\x20\x74\x68\151\x73\40\163\x65\162\166\x65\x72"), "\163\171\163\x74\x65\x6d\x2e\155\x65\164\x68\x6f\144\x48\x65\x6c\x70" => array("\146\165\156\x63\164\151\157\x6e" => "\164\x68\x69\163\x2e\155\x65\x74\150\x6f\144\x48\145\x6c\x70", "\163\151\x67\x6e\x61\x74\x75\162\145" => array(array($this->xmlrpcString, $this->xmlrpcString)), "\x64\x6f\143\163\164\x72\151\x6e\x67" => "\x52\x65\164\x75\162\x6e\163\x20\x61\40\144\157\143\x75\x6d\x65\156\x74\141\x74\151\x6f\156\40\163\164\x72\151\156\x67\x20\146\x6f\162\40\164\150\x65\x20\x73\160\145\x63\151\x66\x69\x65\144\40\x6d\x65\164\150\157\x64"), "\163\171\163\x74\x65\x6d\56\x6d\145\x74\x68\x6f\x64\x53\x69\147\x6e\141\164\165\162\145" => array("\146\165\156\143\x74\151\157\x6e" => "\x74\x68\x69\x73\56\x6d\x65\x74\150\x6f\x64\123\x69\147\x6e\x61\164\x75\x72\x65", "\163\x69\147\156\x61\164\165\162\145" => array(array($this->xmlrpcArray, $this->xmlrpcString)), "\x64\157\143\163\164\162\x69\x6e\147" => "\x52\145\x74\165\162\x6e\163\40\141\x6e\40\x61\x72\x72\141\x79\40\x64\145\x73\143\x72\151\142\151\x6e\147\40\164\x68\145\x20\162\145\164\x75\162\156\40\164\x79\160\145\x20\141\x6e\144\40\162\x65\161\165\151\x72\145\x64\x20\160\x61\x72\141\155\145\x74\x65\162\x73\40\x6f\146\x20\141\x20\155\145\x74\x68\157\x64"), "\163\171\x73\x74\x65\x6d\56\155\x75\154\x74\x69\x63\141\x6c\x6c" => array("\146\x75\156\143\x74\151\157\x6e" => "\x74\x68\x69\x73\x2e\x6d\165\154\164\x69\143\141\x6c\x6c", "\163\x69\147\156\141\164\165\162\x65" => array(array($this->xmlrpcArray, $this->xmlrpcArray)), "\x64\157\143\163\164\162\x69\156\x67" => "\x43\x6f\x6d\142\x69\156\145\x20\x6d\x75\x6c\x74\151\x70\154\x65\40\122\120\x43\40\143\141\x6c\x6c\x73\40\151\156\x20\157\x6e\145\40\x72\145\x71\x75\x65\163\x74\x2e\40\x53\x65\145\x20\x68\x74\x74\x70\x3a\x2f\57\167\167\167\56\170\x6d\x6c\x72\x70\143\56\x63\157\x6d\57\144\151\x73\x63\165\x73\x73\x2f\x6d\163\x67\122\x65\x61\x64\145\162\x24\61\62\60\70\x20\x66\x6f\x72\x20\144\145\164\x61\x69\154\x73")); } public function serve() { goto tOdyg; c1RaJ: exit($payload); goto ygJsK; tOdyg: $r = $this->parseRequest(); goto n7AhW; EXZHI: header("\x43\x6f\156\x74\x65\x6e\164\x2d\x4c\x65\x6e\147\164\150\x3a\x20" . strlen($payload)); goto c1RaJ; vs33t: header("\103\157\156\164\145\156\164\55\124\171\160\x65\72\x20\164\x65\170\x74\57\170\x6d\154"); goto EXZHI; n7AhW: $payload = "\74\77\170\x6d\x6c\40\166\145\162\x73\x69\157\x6e\75\x22\61\56\x30\x22\x20\x65\156\143\157\144\x69\x6e\147\75\42" . $this->xmlrpc_defencoding . "\42\77" . "\76" . "\12" . $this->debug_msg . $r->prepare_response(); goto vs33t; ygJsK: } public function add_to_map($methodname, $function, $sig, $doc) { $this->methods[$methodname] = array("\x66\x75\156\143\x74\151\157\x6e" => $function, "\x73\151\147\156\141\x74\x75\162\x65" => $sig, "\x64\157\x63\x73\164\x72\151\x6e\147" => $doc); } public function parseRequest($data = '') { goto TaOQN; DkCZ6: return $r; goto snhMS; Y2Cg4: $pname = (string) $parser; goto A8VWW; wJ9rI: xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, TRUE); goto nz8gH; NkyGN: xml_set_character_data_handler($parser, "\x63\150\141\x72\x61\143\x74\x65\162\x5f\144\x61\x74\141"); goto P3UVN; P3UVN: if (!xml_parse($parser, $data, 1)) { $r = new XML_RPC_Response(0, $this->xmlrpcerrxml + xml_get_error_code($parser), sprintf("\x58\115\x4c\40\145\162\x72\x6f\x72\72\x20\x25\x73\40\141\x74\40\x6c\151\x6e\x65\40\45\144", xml_error_string(xml_get_error_code($parser)), xml_get_current_line_number($parser))); xml_parser_free($parser); } elseif ($parser_object->xh[$pname]["\x69\x73\x66"]) { return new XML_RPC_Response(0, $this->xmlrpcerr["\x69\156\x76\x61\x6c\151\144\137\162\145\164\x75\x72\156"], $this->xmlrpcstr["\x69\x6e\166\x61\154\151\x64\x5f\162\145\164\165\162\156"]); } else { goto nVcp1; BpAE1: $r = $this->_execute($m); goto EDdfk; C0pJe: for ($i = 0, $c = count($parser_object->xh[$pname]["\x70\x61\162\x61\x6d\163"]); $i < $c; $i++) { if ($this->debug === TRUE) { $plist .= $i . "\x20\x2d\x20" . print_r(get_object_vars($parser_object->xh[$pname]["\160\x61\162\141\155\163"][$i]), TRUE) . "\x3b\12"; } $m->addParam($parser_object->xh[$pname]["\x70\141\162\x61\x6d\163"][$i]); } goto V0Tlk; nVcp1: xml_parser_free($parser); goto dgoXR; GOZ7D: $plist = ''; goto C0pJe; dgoXR: $m = new XML_RPC_Message($parser_object->xh[$pname]["\x6d\x65\164\x68\157\144"]); goto GOZ7D; V0Tlk: if ($this->debug === TRUE) { echo "\74\x70\x72\145\76\55\x2d\x2d\120\x4c\111\123\x54\55\55\55\xa" . $plist . "\xa\55\x2d\55\x50\114\111\x53\x54\40\105\116\x44\55\55\x2d\xa\12\x3c\x2f\x70\x72\145\76"; } goto BpAE1; EDdfk: } goto u5FcE; p8M3a: $parser = xml_parser_create($this->xmlrpc_defencoding); goto KFp_s; A8VWW: $parser_object->xh[$pname] = array("\x69\163\146" => 0, "\x69\x73\146\137\162\145\x61\163\x6f\156" => '', "\160\141\162\141\155\x73" => array(), "\x73\164\141\143\153" => array(), "\166\x61\154\x75\x65\163\164\x61\143\x6b" => array(), "\x6d\x65\164\150\x6f\x64" => ''); goto fSKcA; KFp_s: $parser_object = new XML_RPC_Message("\x66\x69\x6c\154\145\x72"); goto Y2Cg4; nz8gH: xml_set_element_handler($parser, "\157\x70\145\x6e\137\164\141\147", "\143\154\x6f\x73\151\156\147\x5f\x74\141\147"); goto NkyGN; fSKcA: xml_set_object($parser, $parser_object); goto wJ9rI; TaOQN: if ($data === '') { $CI =& get_instance(); if ($CI->input->method() === "\x70\x6f\x73\x74") { $data = $CI->input->raw_input_stream; } } goto p8M3a; u5FcE: if ($this->debug === TRUE) { $this->debug_msg = "\x3c\41\x2d\x2d\x20\104\105\102\x55\x47\40\x49\x4e\x46\x4f\72\xa\xa" . $plist . "\xa\40\105\116\x44\40\104\105\x42\125\107\55\55\x3e\xa"; } goto DkCZ6; snhMS: } protected function _execute($m) { goto NQmJt; ms8Yd: return call_user_func($this->methods[$methName]["\x66\165\156\143\164\x69\157\156"], $m); goto EtKYV; kBz1H: if ($this->xss_clean === FALSE) { $m->xss_clean = FALSE; } goto EcZ10; EcZ10: if (!isset($this->methods[$methName]["\x66\165\x6e\x63\x74\x69\157\x6e"])) { return new XML_RPC_Response(0, $this->xmlrpcerr["\165\x6e\153\x6e\157\x77\156\x5f\x6d\x65\x74\x68\157\144"], $this->xmlrpcstr["\165\156\153\156\157\167\x6e\x5f\x6d\145\164\x68\x6f\x64"]); } goto TkoxE; TkoxE: $method_parts = explode("\56", $this->methods[$methName]["\146\165\x6e\x63\164\x69\157\156"]); goto Ugk9m; gMOLK: if ($system_call === TRUE) { if (!is_callable(array($this, $method_parts[1]))) { return new XML_RPC_Response(0, $this->xmlrpcerr["\165\x6e\x6b\156\157\x77\156\x5f\155\145\x74\x68\157\x64"], $this->xmlrpcstr["\x75\x6e\153\156\x6f\167\x6e\x5f\x6d\x65\x74\x68\157\144"]); } } elseif ($objectCall && !is_callable(array($method_parts[0], $method_parts[1])) or !$objectCall && !is_callable($this->methods[$methName]["\146\165\x6e\143\164\x69\x6f\156"])) { return new XML_RPC_Response(0, $this->xmlrpcerr["\165\156\153\x6e\x6f\167\x6e\137\155\145\164\150\x6f\x64"], $this->xmlrpcstr["\165\156\x6b\x6e\x6f\167\156\x5f\155\145\x74\x68\x6f\x64"]); } goto HVtGx; BrXYM: $system_call = strpos($methName, "\x73\171\x73\x74\x65\155") === 0; goto kBz1H; s25R4: if ($objectCall === TRUE) { if ($method_parts[0] === "\x74\x68\x69\x73" && $system_call === TRUE) { return call_user_func(array($this, $method_parts[1]), $m); } elseif ($this->object === FALSE) { return get_instance()->{$method_parts[1]}($m); } return $this->object->{$method_parts[1]}($m); } goto ms8Yd; HVtGx: if (isset($this->methods[$methName]["\x73\x69\x67\156\x61\x74\x75\162\x65"])) { $sig = $this->methods[$methName]["\163\151\x67\x6e\141\x74\165\x72\x65"]; for ($i = 0, $c = count($sig); $i < $c; $i++) { $current_sig = $sig[$i]; if (count($current_sig) === count($m->params) + 1) { for ($n = 0, $mc = count($m->params); $n < $mc; $n++) { $p = $m->params[$n]; $pt = $p->kindOf() === "\x73\143\141\x6c\141\162" ? $p->scalarval() : $p->kindOf(); if ($pt !== $current_sig[$n + 1]) { goto ccTL0; t7Gbc: return new XML_RPC_Response(0, $this->xmlrpcerr["\x69\x6e\x63\x6f\x72\x72\x65\x63\x74\x5f\x70\x61\x72\x61\x6d\x73"], $this->xmlrpcstr["\151\x6e\143\x6f\162\x72\145\143\x74\x5f\x70\x61\x72\141\155\163"] . "\72\x20\127\141\156\x74\145\x64\x20" . $wanted . "\x2c\40\x67\x6f\x74\x20" . $pt . "\x20\x61\x74\40\160\x61\x72\x61\155\40" . $pno . "\51"); goto mU5Ij; HdUfB: $wanted = $current_sig[$n + 1]; goto t7Gbc; ccTL0: $pno = $n + 1; goto HdUfB; mU5Ij: } } } } } goto s25R4; Ugk9m: $objectCall = !empty($method_parts[1]); goto gMOLK; NQmJt: $methName = $m->method_name; goto BrXYM; EtKYV: } public function listMethods($m) { goto cunBT; cunBT: $v = new XML_RPC_Values(); goto AXi7V; DEdTw: return new XML_RPC_Response($v); goto DZ6QX; xRo6Q: foreach ($this->system_methods as $key => $value) { $output[] = new XML_RPC_Values($key, "\x73\164\x72\151\156\x67"); } goto CEvy3; CEvy3: $v->addArray($output); goto DEdTw; AXi7V: $output = array(); goto qAjTj; qAjTj: foreach ($this->methods as $key => $value) { $output[] = new XML_RPC_Values($key, "\163\164\162\151\x6e\x67"); } goto xRo6Q; DZ6QX: } public function methodSignature($m) { goto ubnm1; JXnw2: $method_name = $parameters[0]; goto lwWpv; ubnm1: $parameters = $m->output_parameters(); goto JXnw2; lwWpv: if (isset($this->methods[$method_name])) { if ($this->methods[$method_name]["\163\151\x67\x6e\141\164\165\x72\x65"]) { goto IS6qa; FB7rF: $signature = $this->methods[$method_name]["\x73\151\x67\156\x61\164\x75\162\145"]; goto f7U62; IS6qa: $sigs = array(); goto FB7rF; K9_2n: return new XML_RPC_Response(new XML_RPC_Values($sigs, "\x61\x72\162\x61\171")); goto SNHzt; f7U62: for ($i = 0, $c = count($signature); $i < $c; $i++) { $cursig = array(); $inSig = $signature[$i]; for ($j = 0, $jc = count($inSig); $j < $jc; $j++) { $cursig[] = new XML_RPC_Values($inSig[$j], "\163\x74\162\151\x6e\147"); } $sigs[] = new XML_RPC_Values($cursig, "\x61\x72\x72\x61\x79"); } goto K9_2n; SNHzt: } return new XML_RPC_Response(new XML_RPC_Values("\x75\x6e\144\145\x66", "\x73\164\162\x69\156\x67")); } goto AZHoV; AZHoV: return new XML_RPC_Response(0, $this->xmlrpcerr["\151\156\164\162\x6f\163\x70\x65\x63\164\x5f\x75\x6e\x6b\156\157\x77\x6e"], $this->xmlrpcstr["\x69\x6e\x74\x72\157\163\x70\145\x63\164\x5f\165\156\x6b\156\157\167\x6e"]); goto Z0yWG; Z0yWG: } public function methodHelp($m) { goto G07r9; xmqXr: if (isset($this->methods[$method_name])) { $docstring = isset($this->methods[$method_name]["\144\x6f\143\163\x74\162\151\156\x67"]) ? $this->methods[$method_name]["\x64\157\143\x73\164\162\x69\156\147"] : ''; return new XML_RPC_Response(new XML_RPC_Values($docstring, "\x73\x74\x72\151\x6e\x67")); } goto y7zHg; HgCRL: $method_name = $parameters[0]; goto xmqXr; y7zHg: return new XML_RPC_Response(0, $this->xmlrpcerr["\151\156\x74\x72\157\163\x70\x65\143\164\x5f\x75\x6e\x6b\156\157\x77\x6e"], $this->xmlrpcstr["\151\x6e\x74\162\157\163\x70\145\x63\164\137\165\x6e\153\156\157\167\156"]); goto RuaHX; G07r9: $parameters = $m->output_parameters(); goto HgCRL; RuaHX: } public function multicall($m) { goto EoEFK; FbQka: foreach ($calls as $value) { goto uVWC4; GkpSA: if ($attempt->faultCode() !== 0) { return $attempt; } goto FnOUE; qj8gM: $attempt = $this->_execute($m); goto GkpSA; uVWC4: $m = new XML_RPC_Message($value[0]); goto ZnBTg; aPI3Q: for ($i = 0, $c = count($value[1]); $i < $c; $i++) { $m->addParam(new XML_RPC_Values($value[1][$i], "\x73\x74\x72\x69\x6e\147")); } goto qj8gM; ZnBTg: $plist = ''; goto aPI3Q; FnOUE: $result[] = new XML_RPC_Values(array($attempt->value()), "\141\x72\162\x61\171"); goto m57br; m57br: } goto NQyf6; ouAtU: $result = array(); goto FbQka; eHzFG: $calls = $parameters[0]; goto ouAtU; VqP6a: $parameters = $m->output_parameters(); goto eHzFG; EoEFK: return new XML_RPC_Response(0, $this->xmlrpcerr["\165\x6e\x6b\156\x6f\167\156\x5f\x6d\x65\x74\x68\x6f\x64"], $this->xmlrpcstr["\165\x6e\153\x6e\157\167\156\137\x6d\x65\x74\150\157\x64"]); goto VqP6a; NQyf6: return new XML_RPC_Response(new XML_RPC_Values($result, "\141\x72\162\141\x79")); goto AQpXp; AQpXp: } public function multicall_error($err) { goto KU29v; qxxyY: $code = is_string($err) ? $this->xmlrpcerr["\x6d\x75\154\x74\x69\x63\x61\154\x6c\x5f{$err}"] : $err->faultCode(); goto gkB5Z; keIaS: $struct["\x66\x61\x75\154\x74\123\x74\162\x69\x6e\x67"] = new XML_RPC_Values($str, "\x73\164\x72\x69\156\147"); goto nzgR4; nzgR4: return new XML_RPC_Values($struct, "\163\164\x72\165\x63\x74"); goto Vd_H3; KU29v: $str = is_string($err) ? $this->xmlrpcstr["\155\x75\x6c\x74\x69\143\x61\154\154\x5f{$err}"] : $err->faultString(); goto qxxyY; gkB5Z: $struct["\x66\141\165\x6c\164\103\x6f\144\x65"] = new XML_RPC_Values($code, "\x69\x6e\164"); goto keIaS; Vd_H3: } public function do_multicall($call) { goto nlN7z; s9tK7: return new XML_RPC_Values(array($result->value()), "\141\x72\x72\141\171"); goto df15G; W8UvF: list($scalar_value, $scalar_type) = array(reset($methName->me), key($methName->me)); goto GfXdD; pXQFN: for ($i = 0, $numParams = count($b); $i < $numParams; $i++) { $msg->params[] = $params->me["\141\x72\162\141\171"][$i]; } goto kFjl6; uEFH0: $msg = new XML_RPC_Message($scalar_value); goto pXQFN; GfXdD: $scalar_type = $scalar_type === $this->xmlrpcI4 ? $this->xmlrpcInt : $scalar_type; goto gijAM; ZYujT: if ($result->faultCode() !== 0) { return $this->multicall_error($result); } goto s9tK7; nlN7z: if ($call->kindOf() !== "\x73\164\x72\x75\143\164") { return $this->multicall_error("\x6e\x6f\164\163\164\162\165\x63\164"); } elseif (!($methName = $call->me["\163\164\x72\x75\143\164"]["\155\x65\x74\x68\x6f\x64\x4e\x61\155\145"])) { return $this->multicall_error("\156\x6f\155\x65\164\x68\157\x64"); } goto W8UvF; kFjl6: $result = $this->_execute($msg); goto ZYujT; EKRt5: list($b, $a) = array(reset($params->me), key($params->me)); goto uEFH0; gijAM: if ($methName->kindOf() !== "\163\x63\141\x6c\141\162" or $scalar_type !== "\163\164\x72\151\x6e\x67") { return $this->multicall_error("\x6e\157\x74\x73\164\162\x69\x6e\147"); } elseif ($scalar_value === "\163\x79\x73\164\145\x6d\56\155\165\x6c\164\x69\143\x61\154\154") { return $this->multicall_error("\162\x65\143\165\162\163\x69\x6f\x6e"); } elseif (!($params = $call->me["\x73\164\162\165\x63\164"]["\x70\141\162\x61\x6d\163"])) { return $this->multicall_error("\x6e\x6f\160\x61\162\x61\x6d\163"); } elseif ($params->kindOf() !== "\141\x72\162\x61\x79") { return $this->multicall_error("\x6e\x6f\x74\x61\162\x72\x61\171"); } goto EKRt5; df15G: } }
