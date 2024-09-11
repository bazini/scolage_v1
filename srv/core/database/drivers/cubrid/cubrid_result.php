<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\105\120\x41\124\x48") or exit("\116\x6f\40\x64\x69\162\145\x63\x74\x20\x73\x63\x72\151\x70\x74\x20\x61\x63\x63\145\163\x73\40\x61\154\x6c\157\x77\145\x64"); class CI_DB_cubrid_result extends CI_DB_result { public function num_rows() { return is_int($this->num_rows) ? $this->num_rows : ($this->num_rows = cubrid_num_rows($this->result_id)); } public function num_fields() { return cubrid_num_fields($this->result_id); } public function list_fields() { return cubrid_column_names($this->result_id); } public function field_data() { goto F7DsB; JGENc: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $retval[$i] = new stdClass(); $retval[$i]->name = cubrid_field_name($this->result_id, $i); $retval[$i]->type = cubrid_field_type($this->result_id, $i); $retval[$i]->max_length = cubrid_field_len($this->result_id, $i); $retval[$i]->primary_key = (int) (strpos(cubrid_field_flags($this->result_id, $i), "\160\x72\151\155\x61\x72\x79\137\153\145\171") !== FALSE); } goto qEd42; F7DsB: $retval = array(); goto JGENc; qEd42: return $retval; goto kfbJi; kfbJi: } public function free_result() { if (is_resource($this->result_id) or get_resource_type($this->result_id) === "\125\x6e\153\x6e\157\167\156" && preg_match("\x2f\122\145\x73\157\x75\162\143\x65\40\151\144\x20\x23\x2f", strval($this->result_id))) { cubrid_close_request($this->result_id); $this->result_id = FALSE; } } public function data_seek($n = 0) { return cubrid_data_seek($this->result_id, $n); } protected function _fetch_assoc() { return cubrid_fetch_assoc($this->result_id); } protected function _fetch_object($class_name = "\163\164\x64\x43\154\x61\x73\163") { return cubrid_fetch_object($this->result_id, $class_name); } }
