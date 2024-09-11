<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\123\x45\x50\x41\x54\110") or exit("\116\x6f\x20\144\151\162\x65\x63\164\40\163\143\162\x69\x70\164\x20\x61\143\143\x65\163\163\x20\x61\154\x6c\x6f\167\x65\x64"); class CI_DB_mssql_result extends CI_DB_result { public function num_rows() { return is_int($this->num_rows) ? $this->num_rows : ($this->num_rows = mssql_num_rows($this->result_id)); } public function num_fields() { return mssql_num_fields($this->result_id); } public function list_fields() { goto U7mQq; IK9Qb: return $field_names; goto hKeqF; U7mQq: $field_names = array(); goto coeQn; U4C8O: while ($field = mssql_fetch_field($this->result_id)) { $field_names[] = $field->name; } goto IK9Qb; coeQn: mssql_field_seek($this->result_id, 0); goto U4C8O; hKeqF: } public function field_data() { goto HY3m7; DeOCf: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $field = mssql_fetch_field($this->result_id, $i); $retval[$i] = new stdClass(); $retval[$i]->name = $field->name; $retval[$i]->type = $field->type; $retval[$i]->max_length = $field->max_length; } goto CToXg; CToXg: return $retval; goto S2y_s; HY3m7: $retval = array(); goto DeOCf; S2y_s: } public function free_result() { if (is_resource($this->result_id)) { mssql_free_result($this->result_id); $this->result_id = FALSE; } } public function data_seek($n = 0) { return mssql_data_seek($this->result_id, $n); } protected function _fetch_assoc() { return mssql_fetch_assoc($this->result_id); } protected function _fetch_object($class_name = "\163\164\144\103\154\141\x73\163") { goto RBbxe; STztl: if ($class_name === "\163\x74\144\103\154\141\163\x73" or !$row) { return $row; } goto cygnq; qw3Iu: return $class_name; goto FQIIJ; cygnq: $class_name = new $class_name(); goto ysMrf; ysMrf: foreach ($row as $key => $value) { $class_name->{$key} = $value; } goto qw3Iu; RBbxe: $row = mssql_fetch_object($this->result_id); goto STztl; FQIIJ: } }
