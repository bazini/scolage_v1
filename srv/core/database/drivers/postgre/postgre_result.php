<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\123\x45\x50\101\124\110") or exit("\x4e\x6f\40\x64\151\x72\x65\x63\164\x20\x73\x63\x72\151\x70\x74\40\141\143\143\145\x73\x73\40\x61\154\x6c\x6f\x77\145\x64"); class CI_DB_postgre_result extends CI_DB_result { public function num_rows() { return is_int($this->num_rows) ? $this->num_rows : ($this->num_rows = pg_num_rows($this->result_id)); } public function num_fields() { return pg_num_fields($this->result_id); } public function list_fields() { goto DwDkT; DwDkT: $field_names = array(); goto CS6DN; QNqfM: return $field_names; goto umzwZ; CS6DN: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $field_names[] = pg_field_name($this->result_id, $i); } goto QNqfM; umzwZ: } public function field_data() { goto DD2Y5; DD2Y5: $retval = array(); goto kROjp; kROjp: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $retval[$i] = new stdClass(); $retval[$i]->name = pg_field_name($this->result_id, $i); $retval[$i]->type = pg_field_type($this->result_id, $i); $retval[$i]->max_length = pg_field_size($this->result_id, $i); } goto kN2B1; kN2B1: return $retval; goto NKlft; NKlft: } public function free_result() { if (is_resource($this->result_id)) { pg_free_result($this->result_id); $this->result_id = FALSE; } } public function data_seek($n = 0) { return pg_result_seek($this->result_id, $n); } protected function _fetch_assoc() { return pg_fetch_assoc($this->result_id); } protected function _fetch_object($class_name = "\x73\x74\x64\103\x6c\141\163\163") { return pg_fetch_object($this->result_id, NULL, $class_name); } }
