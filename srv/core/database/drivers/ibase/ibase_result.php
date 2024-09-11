<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\x45\x50\x41\124\110") or exit("\x4e\157\x20\x64\151\162\145\143\164\x20\163\x63\162\x69\160\164\x20\x61\143\143\x65\163\x73\x20\141\154\154\x6f\167\x65\144"); class CI_DB_ibase_result extends CI_DB_result { public function num_fields() { return ibase_num_fields($this->result_id); } public function list_fields() { goto LL5a0; UV_JA: return $field_names; goto ic5fe; ZMVSE: for ($i = 0, $num_fields = $this->num_fields(); $i < $num_fields; $i++) { $info = ibase_field_info($this->result_id, $i); $field_names[] = $info["\x6e\141\x6d\145"]; } goto UV_JA; LL5a0: $field_names = array(); goto ZMVSE; ic5fe: } public function field_data() { goto DjXDT; PxMwG: return $retval; goto e21RP; DjXDT: $retval = array(); goto P6J9K; P6J9K: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $info = ibase_field_info($this->result_id, $i); $retval[$i] = new stdClass(); $retval[$i]->name = $info["\x6e\141\x6d\x65"]; $retval[$i]->type = $info["\x74\x79\x70\145"]; $retval[$i]->max_length = $info["\x6c\145\156\x67\164\x68"]; } goto PxMwG; e21RP: } public function free_result() { ibase_free_result($this->result_id); } protected function _fetch_assoc() { return ibase_fetch_assoc($this->result_id, IBASE_FETCH_BLOBS); } protected function _fetch_object($class_name = "\x73\164\144\x43\154\x61\x73\163") { goto yiLwm; jYoB0: if ($class_name === "\163\x74\x64\x43\154\141\x73\163" or !$row) { return $row; } goto ChSwf; BWnDs: foreach ($row as $key => $value) { $class_name->{$key} = $value; } goto DjK00; yiLwm: $row = ibase_fetch_object($this->result_id, IBASE_FETCH_BLOBS); goto jYoB0; DjK00: return $class_name; goto wpVoF; ChSwf: $class_name = new $class_name(); goto BWnDs; wpVoF: } }
