<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\105\x50\x41\x54\110") or exit("\x4e\157\40\x64\x69\x72\x65\143\x74\40\163\x63\162\x69\x70\164\40\x61\143\143\x65\163\163\40\141\x6c\154\x6f\167\x65\144"); class CI_DB_pdo_ibm_forge extends CI_DB_pdo_forge { protected $_rename_table = "\122\105\116\x41\115\105\x20\x54\x41\102\114\x45\x20\45\x73\40\124\x4f\x20\45\x73"; protected $_unsigned = array("\123\115\x41\114\x4c\111\116\124" => "\111\x4e\x54\105\x47\x45\x52", "\111\116\124" => "\102\111\107\x49\116\124", "\111\116\x54\x45\x47\x45\122" => "\102\x49\107\111\116\x54"); protected $_default = FALSE; protected function _alter_table($alter_type, $table, $field) { if ($alter_type === "\x43\x48\101\x4e\107\105") { $alter_type = "\115\117\x44\111\x46\x59"; } return parent::_alter_table($alter_type, $table, $field); } protected function _attr_type(&$attributes) { switch (strtoupper($attributes["\x54\x59\120\105"])) { case "\124\x49\116\x59\x49\x4e\x54": goto Qpeyr; TrzEY: $attributes["\125\x4e\x53\x49\x47\x4e\x45\104"] = FALSE; goto QQpy4; QQpy4: return; goto xvehr; Qpeyr: $attributes["\x54\x59\120\x45"] = "\123\115\x41\x4c\114\x49\x4e\x54"; goto TrzEY; xvehr: case "\x4d\105\104\x49\125\115\x49\116\124": goto xA1H2; p3qPU: return; goto XR6QX; tTfQT: $attributes["\x55\x4e\123\111\107\x4e\105\x44"] = FALSE; goto p3qPU; xA1H2: $attributes["\124\131\120\105"] = "\111\116\124\x45\107\x45\x52"; goto tTfQT; XR6QX: default: return; } } protected function _attr_unique(&$attributes, &$field) { if (!empty($attributes["\x55\x4e\111\x51\x55\x45"]) && $attributes["\125\116\x49\121\125\x45"] === TRUE) { $field["\x75\x6e\x69\x71\x75\145"] = "\40\125\x4e\x49\121\125\105"; $field["\x6e\x75\154\x6c"] = "\x20\116\x4f\x54\40\x4e\125\x4c\x4c"; } } protected function _attr_auto_increment(&$attributes, &$field) { } }
