<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\123\x45\x50\101\x54\x48") or exit("\x4e\x6f\40\x64\151\162\x65\143\164\40\x73\x63\x72\x69\160\x74\x20\x61\x63\143\x65\x73\163\x20\x61\154\154\157\x77\x65\x64"); class CI_DB_mysql_utility extends CI_DB_utility { protected $_list_databases = "\123\x48\x4f\x57\40\x44\x41\x54\101\102\x41\123\x45\x53"; protected $_optimize_table = "\117\120\x54\111\x4d\111\x5a\x45\x20\x54\x41\102\x4c\105\x20\x25\163"; protected $_repair_table = "\x52\105\120\x41\111\x52\x20\x54\101\x42\x4c\105\40\x25\163"; protected function _backup($params = array()) { goto gfr9a; gfr9a: if (count($params) === 0) { return FALSE; } goto YgGLe; urQ8m: if ($foreign_key_checks === FALSE) { $output .= "\123\105\x54\x20\x66\x6f\x72\145\151\x67\x6e\137\x6b\145\171\x5f\143\150\145\x63\153\163\x20\x3d\40\x30\73" . $newline; } goto f8grl; UIMX0: return $output; goto tByOh; YgGLe: extract($params); goto y5h4v; f8grl: foreach ((array) $tables as $table) { goto NE1Nv; qhDAE: while ($field = mysql_fetch_field($query->result_id)) { $is_int[$i] = in_array(strtolower(mysql_field_type($query->result_id, $i)), array("\x74\x69\x6e\x79\x69\156\x74", "\163\x6d\141\154\x6c\151\156\x74", "\155\x65\144\151\x75\155\151\x6e\x74", "\151\156\164", "\142\151\x67\151\x6e\x74"), TRUE); $field_str .= $this->db->escape_identifiers($field->name) . "\x2c\40"; $i++; } goto CQ25u; e1iON: $i = 0; goto T9PZb; T9PZb: $result = $query->result_array(); goto PnaKC; IYpCJ: $is_int = array(); goto qhDAE; w6fgV: if ($add_drop === TRUE) { $output .= "\104\122\117\120\40\124\101\x42\x4c\x45\x20\111\106\40\105\x58\111\x53\124\x53\x20" . $this->db->protect_identifiers($table) . "\73" . $newline . $newline; } goto e1iON; zfiRs: $query = $this->db->query("\x53\x48\117\127\40\x43\x52\x45\101\x54\x45\40\124\x41\102\114\105\x20" . $this->db->escape_identifiers($this->db->database . "\x2e" . $table)); goto F0_7o; TPjKC: $i = 0; goto d9ynu; F0_7o: if ($query === FALSE) { continue; } goto qXLzI; qXLzI: $output .= "\x23" . $newline . "\43\x20\124\101\102\114\105\40\123\124\x52\x55\103\x54\125\x52\x45\40\106\x4f\122\x3a\x20" . $table . $newline . "\43" . $newline . $newline; goto w6fgV; BU9Y7: foreach ($query->result_array() as $row) { goto OSc3K; wr7rq: $i = 0; goto iqBFg; wWBqo: $val_str = preg_replace("\57\54\x20\x24\x2f", '', $val_str); goto DEyj7; OSc3K: $val_str = ''; goto wr7rq; iqBFg: foreach ($row as $v) { goto gIdCj; gIdCj: if ($v === NULL) { $val_str .= "\116\x55\114\x4c"; } else { $val_str .= $is_int[$i] === FALSE ? $this->db->escape($v) : $v; } goto PNnjW; RAJ3A: $i++; goto JH48g; PNnjW: $val_str .= "\54\x20"; goto RAJ3A; JH48g: } goto wWBqo; DEyj7: $output .= "\111\x4e\123\x45\x52\124\x20\111\x4e\124\x4f\40" . $this->db->protect_identifiers($table) . "\40\50" . $field_str . "\51\40\126\x41\x4c\x55\x45\x53\40\x28" . $val_str . "\x29\x3b" . $newline; goto szKVs; szKVs: } goto DAGr7; dNSDl: $query = $this->db->query("\123\105\x4c\105\x43\124\40\x2a\x20\106\x52\117\x4d\40" . $this->db->protect_identifiers($table)); goto XdY3Z; NE1Nv: if (in_array($table, (array) $ignore, TRUE)) { continue; } goto zfiRs; d9ynu: $field_str = ''; goto IYpCJ; uK2VM: if ($add_insert === FALSE) { continue; } goto dNSDl; DAGr7: $output .= $newline . $newline; goto N8kd_; XdY3Z: if ($query->num_rows() === 0) { continue; } goto TPjKC; CQ25u: $field_str = preg_replace("\57\54\x20\x24\x2f", '', $field_str); goto BU9Y7; PnaKC: foreach ($result[0] as $val) { if ($i++ % 2) { $output .= $val . "\x3b" . $newline . $newline; } } goto uK2VM; N8kd_: } goto P3SEX; P3SEX: if ($foreign_key_checks === FALSE) { $output .= "\x53\105\x54\40\x66\157\162\145\x69\147\x6e\x5f\x6b\145\171\x5f\143\150\x65\143\x6b\x73\x20\x3d\40\61\x3b" . $newline; } goto UIMX0; y5h4v: $output = ''; goto urQ8m; tByOh: } }
