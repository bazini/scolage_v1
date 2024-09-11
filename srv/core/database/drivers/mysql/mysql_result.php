<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\x53\105\120\101\124\110") or exit("\116\x6f\40\144\x69\162\x65\x63\x74\x20\x73\x63\x72\x69\160\x74\40\141\x63\143\x65\163\163\40\x61\154\154\x6f\x77\145\x64"); class CI_DB_mysql_result extends CI_DB_result { public function __construct(&$driver_object) { parent::__construct($driver_object); $this->num_rows = mysql_num_rows($this->result_id); } public function num_rows() { return $this->num_rows; } public function num_fields() { return mysql_num_fields($this->result_id); } public function list_fields() { goto g29Ls; rjL9Z: mysql_field_seek($this->result_id, 0); goto AM9rS; AM9rS: while ($field = mysql_fetch_field($this->result_id)) { $field_names[] = $field->name; } goto tGaui; tGaui: return $field_names; goto WBsyb; g29Ls: $field_names = array(); goto rjL9Z; WBsyb: } public function field_data() { goto TEogU; ge_L3: return $retval; goto nbzrW; TEogU: $retval = array(); goto HjjrY; HjjrY: for ($i = 0, $c = $this->num_fields(); $i < $c; $i++) { $retval[$i] = new stdClass(); $retval[$i]->name = mysql_field_name($this->result_id, $i); $retval[$i]->type = mysql_field_type($this->result_id, $i); $retval[$i]->max_length = mysql_field_len($this->result_id, $i); $retval[$i]->primary_key = (int) (strpos(mysql_field_flags($this->result_id, $i), "\160\x72\x69\155\x61\162\x79\137\x6b\x65\x79") !== FALSE); } goto ge_L3; nbzrW: } public function free_result() { if (is_resource($this->result_id)) { mysql_free_result($this->result_id); $this->result_id = FALSE; } } public function data_seek($n = 0) { return $this->num_rows ? mysql_data_seek($this->result_id, $n) : FALSE; } protected function _fetch_assoc() { return mysql_fetch_assoc($this->result_id); } protected function _fetch_object($class_name = "\163\x74\144\103\x6c\x61\163\x73") { return mysql_fetch_object($this->result_id, $class_name); } }
