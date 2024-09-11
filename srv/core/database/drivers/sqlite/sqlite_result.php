<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\105\x50\x41\124\x48") or exit("\x4e\157\x20\x64\x69\x72\x65\x63\164\40\x73\143\x72\151\160\x74\40\141\143\x63\145\x73\x73\x20\x61\x6c\154\x6f\x77\145\144"); class CI_DB_sqlite_result extends CI_DB_result { public function num_rows() { return is_int($this->num_rows) ? $this->num_rows : ($this->num_rows = @sqlite_num_rows($this->result_id)); } public function num_fields() { return @sqlite_num_fields($this->result_id); } public function list_fields() { goto PpfvC; cfo54: return $field_names; goto quGn8; PpfvC: $field_names = array(); goto LB78s; LB78s: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $field_names[$i] = sqlite_field_name($this->result_id, $i); } goto cfo54; quGn8: } public function field_data() { goto IIenS; DgxqN: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $retval[$i] = new stdClass(); $retval[$i]->name = sqlite_field_name($this->result_id, $i); $retval[$i]->type = NULL; $retval[$i]->max_length = NULL; } goto QqfKP; IIenS: $retval = array(); goto DgxqN; QqfKP: return $retval; goto aN92t; aN92t: } public function data_seek($n = 0) { return sqlite_seek($this->result_id, $n); } protected function _fetch_assoc() { return sqlite_fetch_array($this->result_id); } protected function _fetch_object($class_name = "\x73\164\144\103\x6c\141\163\x73") { return sqlite_fetch_object($this->result_id, $class_name); } }
