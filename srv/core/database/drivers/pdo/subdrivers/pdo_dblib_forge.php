<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\105\x50\x41\x54\110") or exit("\x4e\x6f\40\144\151\162\145\143\x74\x20\x73\143\x72\151\160\x74\x20\x61\x63\143\x65\163\x73\x20\141\154\x6c\x6f\x77\145\x64"); class CI_DB_pdo_dblib_forge extends CI_DB_pdo_forge { protected $_create_table_if = "\111\x46\40\x4e\x4f\x54\40\x45\x58\111\x53\x54\x53\x20\50\123\105\x4c\x45\x43\124\x20\x2a\x20\106\x52\x4f\115\40\163\171\x73\x6f\x62\x6a\x65\143\164\163\40\x57\x48\x45\x52\x45\40\x49\x44\40\x3d\40\x6f\142\x6a\x65\143\164\x5f\x69\144\x28\116\47\45\163\47\51\x20\x41\116\104\x20\117\x42\x4a\x45\103\124\x50\x52\x4f\x50\x45\x52\124\x59\50\x69\144\54\40\116\47\111\x73\125\163\x65\162\x54\x61\142\154\145\47\51\x20\75\x20\x31\x29\12\103\x52\x45\101\124\x45\x20\x54\x41\x42\114\105"; protected $_drop_table_if = "\x49\106\x20\x45\130\111\x53\x54\x53\40\50\123\x45\x4c\105\103\x54\x20\52\40\106\122\x4f\x4d\x20\163\x79\x73\x6f\142\152\x65\143\x74\x73\40\127\x48\x45\122\105\x20\111\x44\40\x3d\x20\x6f\x62\152\145\143\x74\x5f\x69\x64\50\x4e\x27\45\x73\47\x29\x20\x41\116\x44\x20\x4f\102\112\105\103\x54\x50\x52\117\x50\x45\x52\124\x59\50\151\144\x2c\x20\x4e\47\x49\x73\x55\163\x65\162\124\x61\x62\154\145\x27\51\x20\75\40\x31\51\12\104\x52\117\120\40\x54\x41\x42\114\x45"; protected $_unsigned = array("\124\x49\x4e\131\x49\x4e\124" => "\x53\115\x41\114\114\x49\x4e\124", "\123\115\101\x4c\114\x49\x4e\x54" => "\111\116\124", "\x49\116\124" => "\102\x49\x47\111\x4e\124", "\122\x45\x41\114" => "\x46\114\x4f\x41\x54"); protected function _alter_table($alter_type, $table, $field) { goto wPJMf; jbjpQ: return $sqls; goto NKNeB; tTxbQ: for ($i = 0, $c = count($field); $i < $c; $i++) { $sqls[] = $sql . $this->_process_column($field[$i]); } goto jbjpQ; c30NH: $sqls = array(); goto tTxbQ; wPJMf: if (in_array($alter_type, array("\x41\x44\x44", "\104\122\117\x50"), TRUE)) { return parent::_alter_table($alter_type, $table, $field); } goto Rm367; Rm367: $sql = "\x41\114\124\x45\122\x20\x54\101\102\x4c\x45\x20" . $this->db->escape_identifiers($table) . "\x20\x41\114\124\105\122\x20\x43\117\114\125\115\x4e\x20"; goto c30NH; NKNeB: } protected function _attr_type(&$attributes) { if (isset($attributes["\103\117\116\123\x54\x52\x41\x49\116\x54"]) && strpos($attributes["\124\131\x50\x45"], "\x49\x4e\x54") !== FALSE) { unset($attributes["\103\x4f\116\123\x54\x52\x41\x49\116\124"]); } switch (strtoupper($attributes["\x54\131\120\105"])) { case "\x4d\105\104\111\x55\115\x49\116\x54": goto jnWsA; kV_KC: return; goto kE4AR; aSq71: $attributes["\x55\x4e\x53\111\107\116\x45\x44"] = FALSE; goto kV_KC; jnWsA: $attributes["\x54\131\120\105"] = "\111\x4e\124\105\x47\105\x52"; goto aSq71; kE4AR: case "\111\x4e\x54\x45\x47\x45\122": $attributes["\124\131\120\x45"] = "\111\116\x54"; return; default: return; } } protected function _attr_auto_increment(&$attributes, &$field) { if (!empty($attributes["\101\x55\x54\x4f\137\111\116\103\x52\x45\x4d\105\x4e\124"]) && $attributes["\101\125\124\x4f\x5f\111\116\x43\122\x45\x4d\105\116\124"] === TRUE && stripos($field["\x74\x79\160\145"], "\x69\x6e\x74") !== FALSE) { $field["\141\x75\164\x6f\137\151\156\x63\x72\x65\x6d\x65\x6e\x74"] = "\40\x49\104\105\116\x54\111\124\131\50\61\x2c\61\x29"; } } }
