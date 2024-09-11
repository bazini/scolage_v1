<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\x45\120\101\x54\x48") or exit("\116\157\x20\144\151\x72\x65\143\x74\40\163\143\x72\x69\x70\x74\x20\141\143\143\145\x73\x73\40\x61\154\x6c\157\167\145\x64"); class Appstats { protected $CI; private $mydb; public function __construct() { $this->CI =& get_instance(); $this->mydb =& $this->CI->mydb; } public function users() { $d = $this->mydb->count_all("\x75\x73\x65\x72\163"); return $d; } public function blocked_users() { $d = $this->mydb->count("\x75\163\x65\162\163", array("\143\x61\156\137\x6c\x6f\x67\x69\x6e" => 0)); return $d; } }
