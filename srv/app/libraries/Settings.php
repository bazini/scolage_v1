<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\x45\x50\101\124\x48") or exit("\x4e\157\40\144\151\162\145\143\164\40\x73\143\x72\151\x70\x74\40\141\x63\143\x65\x73\163\40\141\154\x6c\157\167\x65\144"); class Settings { private $CI; private $mydb; private $table; public function __construct() { goto OvxBs; qZPUq: $this->mydb =& $this->CI->mydb; goto noSff; noSff: $this->table = "\x73\171\x73\164\145\x6d\137\166\141\x72\x69\x61\142\x6c\145\x73"; goto F3b1o; OvxBs: $this->CI =& get_instance(); goto qZPUq; F3b1o: } public function get($key) { goto q1C5T; bX5Sc: return $d; goto Oivr8; jnAYJ: if (!empty($var)) { $d = $var->id; } goto bX5Sc; q1C5T: $d = false; goto vd0xr; vd0xr: $var = $this->mydb->get($this->table, '', array("\153\x65\x79" => $key)); goto jnAYJ; Oivr8: } public function set($vars) { goto hPNWL; gnxBE: return $d; goto kSnx8; hPNWL: $d["\145\162\x72\157\x72"] = true; goto XV8Ig; XV8Ig: $keys = array_keys($vars); goto gnxBE; kSnx8: } }
