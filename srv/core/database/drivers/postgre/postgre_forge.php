<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\x45\120\x41\124\110") or exit("\x4e\157\40\x64\x69\x72\145\x63\x74\x20\163\x63\x72\x69\160\x74\x20\x61\x63\143\145\x73\x73\x20\141\x6c\154\x6f\x77\x65\144"); class CI_DB_postgre_forge extends CI_DB_forge { protected $_unsigned = array("\111\116\124\x32" => "\x49\116\124\105\x47\105\x52", "\x53\115\x41\114\x4c\x49\x4e\124" => "\111\x4e\124\105\x47\x45\122", "\x49\116\x54" => "\x42\111\107\111\116\124", "\x49\x4e\124\64" => "\102\x49\x47\111\116\x54", "\x49\x4e\124\105\107\105\122" => "\x42\x49\x47\x49\116\x54", "\x49\x4e\x54\x38" => "\x4e\125\115\105\x52\111\x43", "\x42\111\107\x49\x4e\x54" => "\x4e\x55\x4d\105\x52\111\x43", "\x52\105\101\x4c" => "\x44\x4f\125\102\x4c\105\x20\x50\122\105\103\111\123\x49\x4f\x4e", "\x46\114\x4f\x41\x54" => "\x44\117\x55\102\114\105\x20\120\122\x45\103\111\123\x49\117\116"); protected $_null = "\116\125\114\x4c"; public function __construct(&$db) { parent::__construct($db); if (version_compare($this->db->version(), "\71\x2e\x30", "\x3e")) { $this->create_table_if = "\x43\122\x45\x41\x54\x45\40\x54\x41\102\114\105\40\x49\x46\40\x4e\117\x54\40\x45\x58\111\x53\124\x53"; } } protected function _alter_table($alter_type, $table, $field) { goto pZKo_; pZKo_: if (in_array($alter_type, array("\x44\122\117\x50", "\101\x44\104"), TRUE)) { return parent::_alter_table($alter_type, $table, $field); } goto j2W7_; j2W7_: $sql = "\x41\x4c\x54\105\122\40\124\x41\x42\114\105\40" . $this->db->escape_identifiers($table); goto uL5Ww; uL5Ww: $sqls = array(); goto gpDAX; MFy0z: return $sqls; goto ccjls; gpDAX: for ($i = 0, $c = count($field); $i < $c; $i++) { if ($field[$i]["\x5f\x6c\x69\x74\x65\x72\x61\154"] !== FALSE) { return FALSE; } if (version_compare($this->db->version(), "\70", "\x3e\75") && isset($field[$i]["\164\x79\160\145"])) { $sqls[] = $sql . "\40\x41\114\124\105\122\40\x43\x4f\x4c\x55\115\x4e\40" . $this->db->escape_identifiers($field[$i]["\156\141\x6d\x65"]) . "\40\124\131\x50\105\x20" . $field[$i]["\x74\x79\x70\x65"] . $field[$i]["\x6c\145\156\147\164\150"]; } if (!empty($field[$i]["\144\145\x66\141\x75\x6c\x74"])) { $sqls[] = $sql . "\x20\101\x4c\124\x45\x52\x20\103\117\x4c\125\115\x4e\x20" . $this->db->escape_identifiers($field[$i]["\156\x61\x6d\145"]) . "\x20\x53\105\x54\40" . $field[$i]["\x64\x65\x66\141\x75\x6c\164"]; } if (isset($field[$i]["\156\x75\154\x6c"])) { $sqls[] = $sql . "\x20\101\x4c\x54\105\x52\x20\x43\117\114\x55\115\116\40" . $this->db->escape_identifiers($field[$i]["\156\141\x6d\x65"]) . (trim($field[$i]["\156\165\154\x6c"]) === $this->_null ? "\40\x44\x52\x4f\x50\40\x4e\117\124\40\x4e\x55\114\x4c" : "\x20\x53\x45\124\40\x4e\x4f\x54\40\x4e\x55\114\x4c"); } if (!empty($field[$i]["\156\x65\x77\137\156\x61\155\x65"])) { $sqls[] = $sql . "\40\122\x45\x4e\x41\x4d\105\40\103\x4f\114\x55\115\x4e\x20" . $this->db->escape_identifiers($field[$i]["\156\x61\x6d\x65"]) . "\x20\x54\x4f\x20" . $this->db->escape_identifiers($field[$i]["\156\145\167\137\156\x61\155\x65"]); } if (!empty($field[$i]["\143\x6f\x6d\x6d\145\156\164"])) { $sqls[] = "\x43\117\115\115\105\x4e\124\40\117\x4e\x20\x43\x4f\114\125\115\x4e\40" . $this->db->escape_identifiers($table) . "\56" . $this->db->escape_identifiers($field[$i]["\156\x61\155\x65"]) . "\x20\111\x53\x20" . $field[$i]["\x63\157\x6d\155\x65\156\164"]; } } goto MFy0z; ccjls: } protected function _attr_type(&$attributes) { if (isset($attributes["\x43\117\x4e\x53\124\x52\101\111\x4e\x54"]) && stripos($attributes["\x54\x59\x50\105"], "\151\x6e\164") !== FALSE) { $attributes["\x43\x4f\116\123\x54\122\101\111\116\x54"] = NULL; } switch (strtoupper($attributes["\124\131\x50\x45"])) { case "\x54\x49\116\x59\x49\x4e\124": goto Obbv1; Obbv1: $attributes["\x54\131\120\105"] = "\x53\x4d\x41\114\x4c\x49\x4e\124"; goto cEEpc; XIsUK: return; goto f94fS; cEEpc: $attributes["\x55\x4e\123\111\x47\x4e\105\x44"] = FALSE; goto XIsUK; f94fS: case "\115\x45\104\x49\x55\115\x49\x4e\124": goto cSkG7; cSkG7: $attributes["\124\x59\120\105"] = "\x49\116\124\105\107\105\x52"; goto Cw0N0; Cw0N0: $attributes["\125\116\x53\111\x47\x4e\x45\x44"] = FALSE; goto RXXBj; RXXBj: return; goto gYbah; gYbah: default: return; } } protected function _attr_auto_increment(&$attributes, &$field) { if (!empty($attributes["\x41\x55\x54\x4f\137\x49\x4e\x43\x52\105\115\105\x4e\124"]) && $attributes["\x41\125\124\117\x5f\111\116\x43\122\105\115\x45\116\x54"] === TRUE) { $field["\x74\x79\x70\x65"] = $field["\164\171\160\145"] === "\116\x55\x4d\x45\122\111\103" ? "\x42\x49\x47\123\105\x52\x49\101\x4c" : "\123\x45\122\x49\x41\x4c"; } } }
