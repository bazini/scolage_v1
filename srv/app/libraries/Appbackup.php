<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\123\105\120\x41\124\110") or exit("\x4e\x6f\40\x64\151\162\x65\143\164\x20\x73\143\162\151\160\164\40\x61\x63\143\145\x73\163\40\141\154\x6c\x6f\x77\x65\144"); class Appbackup { protected $CI; private $config; private $dbutil; public function __construct() { goto IBrub; wUzVB: $this->dbutil =& $this->CI->dbutil; goto s8boW; s8boW: $this->config = array("\164\141\142\154\x65\x73" => array(), "\x69\147\x6e\x6f\x72\x65" => array(), "\x66\157\162\155\141\164" => "\172\151\160", "\x66\151\x6c\x65\x6e\141\x6d\x65" => "\142\141\143\x6b\x75\160\x2e\163\161\x6c", "\x61\144\144\137\144\x72\157\x70" => TRUE, "\141\144\x64\x5f\151\x6e\x73\x65\162\x74" => TRUE, "\x6e\x65\167\x6c\x69\156\x65" => "\12"); goto kEqsq; S0teU: $this->CI->load->dbutil(); goto wUzVB; IBrub: $this->CI =& get_instance(); goto S0teU; kEqsq: } public function all() { return $this->dbutil->backup($this->config); } public function classes() { goto TS5RJ; Rt0l_: return $this->dbutil->backup($this->config); goto IOlMj; SHk7h: $this->config["\x74\x61\x62\154\x65\x73"] = array("\x63\x6c\x61\x73\163\145", "\143\154\x61\163\163\x65\137\x70\141\162\x61\155\x73"); goto Rt0l_; TS5RJ: $this->config["\x66\151\154\x65\x6e\x61\155\x65"] = "\143\154\141\163\163\x65\163\x2d" . gmdate("\131\155\144\x48\151\x73") . "\x2e\163\161\154"; goto SHk7h; IOlMj: } }
