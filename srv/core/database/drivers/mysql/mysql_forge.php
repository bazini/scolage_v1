<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\x53\x45\120\x41\124\110") or exit("\x4e\x6f\40\144\151\162\x65\143\x74\40\163\x63\162\151\160\164\40\141\143\x63\x65\163\x73\40\x61\154\154\x6f\167\x65\x64"); class CI_DB_mysql_forge extends CI_DB_forge { protected $_create_database = "\103\x52\x45\x41\x54\x45\x20\x44\101\124\x41\102\101\x53\x45\x20\45\x73\x20\103\x48\101\122\x41\103\x54\x45\122\x20\x53\105\x54\40\x25\163\x20\103\x4f\114\114\101\x54\x45\x20\x25\163"; protected $_create_table_keys = TRUE; protected $_unsigned = array("\x54\x49\x4e\131\x49\x4e\124", "\123\x4d\101\114\x4c\x49\116\x54", "\x4d\x45\x44\x49\x55\115\x49\x4e\x54", "\x49\116\124", "\x49\x4e\x54\x45\107\x45\122", "\102\x49\x47\111\116\124", "\122\105\101\x4c", "\104\x4f\x55\x42\x4c\x45", "\x44\x4f\x55\x42\114\x45\40\120\x52\105\103\x49\123\x49\117\x4e", "\x46\114\117\101\x54", "\104\105\x43\111\x4d\101\x4c", "\x4e\125\x4d\105\x52\x49\103"); protected $_null = "\x4e\125\x4c\114"; protected function _create_table_attr($attributes) { goto x7gQ2; EEmil: if (!empty($this->db->char_set) && !strpos($sql, "\x43\110\x41\x52\x41\103\x54\105\122\40\x53\x45\124") && !strpos($sql, "\103\110\x41\122\123\105\124")) { $sql .= "\40\x44\x45\106\101\125\x4c\x54\x20\x43\110\101\x52\x41\x43\x54\x45\122\x20\123\x45\x54\x20\x3d\x20" . $this->db->char_set; } goto YlXpm; YlXpm: if (!empty($this->db->dbcollat) && !strpos($sql, "\x43\117\x4c\114\101\124\x45")) { $sql .= "\x20\103\117\114\114\x41\124\x45\40\75\40" . $this->db->dbcollat; } goto aeDxJ; x7gQ2: $sql = ''; goto xLt0F; aeDxJ: return $sql; goto FXT2j; xLt0F: foreach (array_keys($attributes) as $key) { if (is_string($key)) { $sql .= "\x20" . strtoupper($key) . "\x20\x3d\40" . $attributes[$key]; } } goto EEmil; FXT2j: } protected function _alter_table($alter_type, $table, $field) { goto d58P8; d58P8: if ($alter_type === "\104\122\x4f\x50") { return parent::_alter_table($alter_type, $table, $field); } goto ja6s_; A8MC1: return array($sql . implode("\x2c", $field)); goto fQh3E; DW5Wt: for ($i = 0, $c = count($field); $i < $c; $i++) { if ($field[$i]["\x5f\x6c\x69\x74\145\x72\141\x6c"] !== FALSE) { $field[$i] = $alter_type === "\101\x44\x44" ? "\xa\11\x41\x44\104\x20" . $field[$i]["\x5f\x6c\151\x74\x65\162\141\154"] : "\xa\x9\115\x4f\104\x49\106\x59\x20" . $field[$i]["\137\x6c\x69\164\x65\x72\141\x6c"]; } else { if ($alter_type === "\x41\104\104") { $field[$i]["\137\154\x69\164\x65\x72\141\154"] = "\12\x9\101\104\x44\40"; } else { $field[$i]["\x5f\154\151\x74\x65\x72\x61\154"] = empty($field[$i]["\x6e\145\x77\x5f\x6e\x61\x6d\x65"]) ? "\12\11\115\x4f\x44\x49\x46\x59\40" : "\xa\x9\103\110\101\116\107\x45\x20"; } $field[$i] = $field[$i]["\x5f\154\x69\x74\145\x72\141\154"] . $this->_process_column($field[$i]); } } goto A8MC1; ja6s_: $sql = "\x41\x4c\124\105\x52\x20\124\x41\x42\x4c\x45\40" . $this->db->escape_identifiers($table); goto DW5Wt; fQh3E: } protected function _process_column($field) { goto zhr2e; Is8V6: if (empty($extra_clause) && isset($field["\x66\x69\x72\x73\164"]) && $field["\x66\x69\162\163\164"] === TRUE) { $extra_clause = "\40\x46\x49\x52\123\x54"; } goto o5j16; o5j16: return $this->db->escape_identifiers($field["\156\141\x6d\x65"]) . (empty($field["\x6e\x65\x77\137\156\x61\x6d\145"]) ? '' : "\x20" . $this->db->escape_identifiers($field["\x6e\145\x77\x5f\156\141\x6d\x65"])) . "\x20" . $field["\x74\171\x70\145"] . $field["\x6c\145\156\147\164\x68"] . $field["\165\156\x73\x69\x67\x6e\145\144"] . $field["\156\x75\x6c\154"] . $field["\144\145\x66\141\165\154\x74"] . $field["\x61\x75\x74\x6f\x5f\x69\156\143\162\145\x6d\x65\156\164"] . $field["\165\156\x69\161\165\x65"] . (empty($field["\143\x6f\155\155\145\156\x74"]) ? '' : "\40\103\x4f\115\115\x45\x4e\x54\40" . $field["\x63\157\155\155\145\x6e\x74"]) . $extra_clause; goto ym3mp; zhr2e: $extra_clause = isset($field["\141\x66\x74\x65\x72"]) ? "\40\x41\106\x54\105\x52\40" . $this->db->escape_identifiers($field["\x61\x66\164\145\162"]) : ''; goto Is8V6; ym3mp: } protected function _process_indexes($table) { goto IHLGT; HJVS5: for ($i = 0, $c = count($this->keys); $i < $c; $i++) { if (is_array($this->keys[$i])) { for ($i2 = 0, $c2 = count($this->keys[$i]); $i2 < $c2; $i2++) { if (!isset($this->fields[$this->keys[$i][$i2]])) { unset($this->keys[$i][$i2]); continue; } } } elseif (!isset($this->fields[$this->keys[$i]])) { unset($this->keys[$i]); continue; } is_array($this->keys[$i]) or $this->keys[$i] = array($this->keys[$i]); $sql .= "\54\xa\x9\113\105\131\x20" . $this->db->escape_identifiers(implode("\x5f", $this->keys[$i])) . "\x20\50" . implode("\x2c\x20", $this->db->escape_identifiers($this->keys[$i])) . "\x29"; } goto av2Qg; IHLGT: $sql = ''; goto HJVS5; ZOzhM: return $sql; goto DoBQN; av2Qg: $this->keys = array(); goto ZOzhM; DoBQN: } }
