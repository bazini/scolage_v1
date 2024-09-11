<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\x45\120\101\x54\x48") or exit("\x4e\157\x20\x64\x69\x72\x65\143\x74\x20\163\143\x72\x69\x70\x74\x20\141\143\143\145\163\x73\40\141\x6c\154\157\x77\145\144"); class CI_DB_ibase_utility extends CI_DB_utility { protected function _backup($filename) { if ($service = ibase_service_attach($this->db->hostname, $this->db->username, $this->db->password)) { goto Mpoa4; syszj: ibase_service_detach($service); goto vEla1; vEla1: return $res; goto cBFhm; Mpoa4: $res = ibase_backup($service, $this->db->database, $filename . "\56\x66\142\153"); goto syszj; cBFhm: } return FALSE; } }
