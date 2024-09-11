<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\x45\120\x41\x54\x48") or exit("\116\157\40\x64\151\162\x65\143\x74\40\163\x63\162\151\160\x74\40\x61\x63\143\x65\x73\163\40\x61\154\154\x6f\x77\x65\144"); class CI_DB_cubrid_utility extends CI_DB_utility { public function list_databases() { if (isset($this->db->data_cache["\144\x62\137\156\x61\155\x65\163"])) { return $this->db->data_cache["\144\142\x5f\x6e\141\x6d\145\163"]; } return $this->db->data_cache["\x64\x62\137\156\141\155\x65\163"] = cubrid_list_dbs($this->db->conn_id); } protected function _backup($params = array()) { return $this->db->display_error("\x64\142\137\x75\156\x73\165\x70\x70\x6f\162\164\x65\x64\137\146\x65\141\x74\165\162\145"); } }
