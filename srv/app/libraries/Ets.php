<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\105\120\x41\x54\110") or exit("\x4e\157\x20\144\x69\162\145\x63\x74\x20\x73\143\162\x69\160\x74\40\141\143\x63\x65\163\163\40\x61\154\154\157\167\145\144"); class Ets { protected $CI; private $mydb; private $auth; public function __construct() { goto Qn0vE; Qn0vE: $this->CI =& get_instance(); goto lSeqv; w0w6T: $this->auth =& $this->CI->auth; goto eMxGr; lSeqv: $this->mydb =& $this->CI->mydb; goto w0w6T; eMxGr: } public function info() { goto mk4rq; l3kMf: return $d; goto Y6UTp; OS4Av: if ($vars["\145\x72\162\157\x72"] == false) { goto vfyvu; vfyvu: $data = array(); goto ve75y; sD17u: $d = $data; goto wGR2b; ve75y: foreach ($vars["\x64\x61\x74\141"] as $key => $var) { if ($key == "\156\x61\x6d\145" || $key == "\x63\x6f\x6e\164\141\x63\x74" || $key == "\x65\155\141\x69\154" || $key == "\x61\x64\162\x65\163\x73\x65" || $key == "\141\x75\x74\157\162\x69\x73\141\x74\151\x6f\156") { if ($key == "\x6e\141\155\145") { $var = utf8_decode($var); } $data[$key] = $var; } } goto sD17u; wGR2b: } goto l3kMf; mk4rq: $d = false; goto TEM_V; TEM_V: $vars = $this->auth->get_sys_vars(); goto OS4Av; Y6UTp: } }
