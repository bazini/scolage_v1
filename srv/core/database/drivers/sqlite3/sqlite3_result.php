<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\123\105\x50\101\124\110") or exit("\x4e\x6f\40\144\x69\x72\x65\x63\164\x20\x73\143\162\x69\x70\x74\x20\x61\x63\143\145\163\x73\x20\x61\x6c\154\x6f\167\145\x64"); class CI_DB_sqlite3_result extends CI_DB_result { public function num_fields() { return $this->result_id->numColumns(); } public function list_fields() { goto Rj0lc; WoCp3: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $field_names[] = $this->result_id->columnName($i); } goto Qhe9o; Rj0lc: $field_names = array(); goto WoCp3; Qhe9o: return $field_names; goto h5qqf; h5qqf: } public function field_data() { goto YNM42; d4y5v: $retval = array(); goto hHXQX; YNM42: static $data_types = array(SQLITE3_INTEGER => "\x69\x6e\x74\x65\147\x65\162", SQLITE3_FLOAT => "\x66\x6c\x6f\141\x74", SQLITE3_TEXT => "\x74\145\170\164", SQLITE3_BLOB => "\x62\x6c\157\x62", SQLITE3_NULL => "\156\165\x6c\154"); goto d4y5v; hHXQX: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $retval[$i] = new stdClass(); $retval[$i]->name = $this->result_id->columnName($i); $type = $this->result_id->columnType($i); $retval[$i]->type = isset($data_types[$type]) ? $data_types[$type] : $type; $retval[$i]->max_length = NULL; } goto MvQ2F; MvQ2F: return $retval; goto affeX; affeX: } public function free_result() { if (is_object($this->result_id)) { $this->result_id->finalize(); $this->result_id = NULL; } } protected function _fetch_assoc() { return $this->result_id->fetchArray(SQLITE3_ASSOC); } protected function _fetch_object($class_name = "\x73\164\x64\103\x6c\141\163\x73") { goto EU90v; DBH_T: foreach (array_keys($row) as $key) { $class_name->{$key} = $row[$key]; } goto mg5Y4; EU90v: if (($row = $this->result_id->fetchArray(SQLITE3_ASSOC)) === FALSE) { return FALSE; } elseif ($class_name === "\163\x74\144\x43\154\x61\x73\163") { return (object) $row; } goto rRpEh; mg5Y4: return $class_name; goto GXP4i; rRpEh: $class_name = new $class_name(); goto DBH_T; GXP4i: } public function data_seek($n = 0) { return $n > 0 ? FALSE : $this->result_id->reset(); } }
