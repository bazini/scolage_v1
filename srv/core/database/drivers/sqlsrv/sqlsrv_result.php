<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\x53\105\120\101\x54\110") or exit("\116\157\40\144\x69\x72\x65\x63\x74\x20\x73\x63\162\x69\x70\x74\x20\141\x63\143\x65\163\163\x20\141\x6c\x6c\157\x77\145\x64"); class CI_DB_sqlsrv_result extends CI_DB_result { public $scrollable; public function __construct(&$driver_object) { parent::__construct($driver_object); $this->scrollable = $driver_object->scrollable; } public function num_rows() { if (!in_array($this->scrollable, array(FALSE, SQLSRV_CURSOR_FORWARD, SQLSRV_CURSOR_DYNAMIC), TRUE)) { return parent::num_rows(); } return is_int($this->num_rows) ? $this->num_rows : ($this->num_rows = sqlsrv_num_rows($this->result_id)); } public function num_fields() { return @sqlsrv_num_fields($this->result_id); } public function list_fields() { goto yO7Al; gtXeJ: return $field_names; goto wLtnG; yO7Al: $field_names = array(); goto G77zi; G77zi: foreach (sqlsrv_field_metadata($this->result_id) as $offset => $field) { $field_names[] = $field["\116\141\x6d\x65"]; } goto gtXeJ; wLtnG: } public function field_data() { goto KrjWg; IWN2N: foreach (sqlsrv_field_metadata($this->result_id) as $i => $field) { goto B1rkW; jxZ0n: $retval[$i]->type = $field["\124\x79\160\x65"]; goto xqN8t; B1rkW: $retval[$i] = new stdClass(); goto GWFAo; GWFAo: $retval[$i]->name = $field["\x4e\x61\155\x65"]; goto jxZ0n; xqN8t: $retval[$i]->max_length = $field["\123\151\x7a\145"]; goto g7Gyx; g7Gyx: } goto GCDQg; GCDQg: return $retval; goto NgvkL; KrjWg: $retval = array(); goto IWN2N; NgvkL: } public function free_result() { if (is_resource($this->result_id)) { sqlsrv_free_stmt($this->result_id); $this->result_id = FALSE; } } protected function _fetch_assoc() { return sqlsrv_fetch_array($this->result_id, SQLSRV_FETCH_ASSOC); } protected function _fetch_object($class_name = "\163\x74\x64\x43\x6c\x61\x73\163") { return sqlsrv_fetch_object($this->result_id, $class_name); } }
