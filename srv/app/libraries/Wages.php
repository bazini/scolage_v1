<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\x53\105\x50\x41\x54\110") or exit("\116\157\x20\144\151\x72\145\x63\x74\40\163\143\162\x69\x70\x74\40\x61\143\143\x65\x73\163\x20\141\x6c\154\x6f\167\x65\x64"); class Wages { protected $CI; private $table; private $mydb; private $utils; public function __construct() { goto e9UN7; e9UN7: $this->CI =& get_instance(); goto wV2Up; u5Rsx: $this->table = "\160\x61\x69\145"; goto WALHp; v933q: $this->utils =& $this->CI->utilitaire; goto u5Rsx; wV2Up: $this->mydb =& $this->CI->mydb; goto v933q; WALHp: } public function index() { goto q0fWR; jLv4J: $an = $this->utils->get_an(); goto rvgb9; rvgb9: if (!empty($an)) { $mont = $this->mydb->gets($this->table, array(), array("\x61\x6e" => $an->id)); if (!empty($mont)) { foreach ($mont as $m) { $d += $m->montant + $m->prime; } } } goto i29GY; q0fWR: $d = 0; goto jLv4J; i29GY: return $d; goto oRlRX; oRlRX: } }
