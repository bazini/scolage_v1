<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\x45\x50\101\x54\x48") or exit("\x4e\157\x20\x64\x69\x72\x65\x63\x74\40\163\x63\x72\151\x70\x74\x20\141\143\143\x65\x73\163\40\x61\x6c\154\157\x77\x65\x64"); function &DB($params = '', $query_builder_override = NULL) { goto ayDiD; YQl4a: $driver_file = BASEPATH . "\144\x61\164\141\x62\141\163\x65\x2f\144\x72\151\166\145\162\163\x2f" . $params["\144\x62\x64\162\x69\166\x65\x72"] . "\x2f" . $params["\144\142\x64\162\x69\x76\145\162"] . "\x5f\x64\x72\151\166\x65\162\56\x70\x68\x70"; goto o3rV2; mykl2: $driver = "\103\x49\137\104\x42\x5f" . $params["\x64\x62\x64\x72\x69\x76\145\x72"] . "\x5f\144\162\151\166\145\x72"; goto x1_xC; o3rV2: file_exists($driver_file) or show_error("\111\156\x76\141\154\x69\144\40\x44\102\40\144\x72\151\166\x65\x72"); goto RvByc; W0_7p: if (!empty($DB->subdriver)) { $driver_file = BASEPATH . "\x64\x61\164\x61\x62\x61\x73\x65\x2f\144\x72\151\x76\x65\162\163\57" . $DB->dbdriver . "\57\x73\165\x62\144\x72\151\166\145\x72\x73\57" . $DB->dbdriver . "\x5f" . $DB->subdriver . "\137\144\162\x69\166\145\162\x2e\x70\x68\x70"; if (file_exists($driver_file)) { goto ZwktZ; AeUEj: $driver = "\x43\x49\137\x44\102\x5f" . $DB->dbdriver . "\137" . $DB->subdriver . "\137\144\162\x69\x76\x65\x72"; goto ajT3d; ZwktZ: require_once $driver_file; goto AeUEj; ajT3d: $DB = new $driver($params); goto Neixk; Neixk: } } goto mQ2k4; Ea2Uq: if (!isset($query_builder) or $query_builder === TRUE) { require_once BASEPATH . "\144\141\164\x61\142\x61\163\145\x2f\x44\102\137\x71\165\145\x72\x79\137\142\x75\x69\154\x64\x65\162\x2e\160\x68\x70"; if (!class_exists("\x43\111\137\104\102", FALSE)) { class CI_DB extends CI_DB_query_builder { } } } elseif (!class_exists("\x43\111\137\104\x42", FALSE)) { class CI_DB extends CI_DB_driver { } } goto YQl4a; x1_xC: $DB = new $driver($params); goto W0_7p; ayDiD: if (is_string($params) && strpos($params, "\x3a\x2f\57") === FALSE) { goto BiOZi; Q3NSQ: if (!isset($db) or count($db) === 0) { show_error("\x4e\157\x20\144\141\x74\141\142\141\163\145\x20\143\x6f\x6e\156\x65\x63\x74\151\x6f\x6e\40\163\x65\x74\164\x69\156\147\x73\40\167\x65\x72\145\40\x66\x6f\x75\x6e\x64\40\x69\156\40\164\150\x65\40\144\x61\164\141\x62\x61\163\145\x20\x63\x6f\156\146\x69\x67\40\x66\x69\x6c\145\56"); } goto lIP3V; F9b5o: if (class_exists("\x43\x49\x5f\x43\x6f\x6e\x74\x72\x6f\154\x6c\x65\162", FALSE)) { foreach (get_instance()->load->get_package_paths() as $path) { if ($path !== APPPATH) { if (file_exists($file_path = $path . "\x63\x6f\x6e\x66\x69\147\x2f" . ENVIRONMENT . "\x2f\x64\x61\x74\141\142\x61\x73\x65\x2e\160\x68\x70")) { include $file_path; } elseif (file_exists($file_path = $path . "\143\x6f\156\146\x69\147\57\x64\x61\x74\141\142\x61\x73\145\56\x70\x68\x70")) { include $file_path; } } } } goto Q3NSQ; rb7Uh: if (!isset($active_group)) { show_error("\x59\157\165\40\150\x61\166\145\40\x6e\157\x74\x20\x73\160\x65\x63\x69\146\151\x65\144\x20\141\40\x64\x61\164\x61\x62\x61\x73\145\x20\x63\x6f\156\x6e\145\143\164\x69\157\x6e\40\147\162\157\165\x70\40\x76\151\141\40\44\141\x63\x74\151\x76\x65\137\x67\x72\157\x75\x70\x20\x69\156\40\171\x6f\x75\162\40\x63\157\x6e\146\x69\x67\x2f\144\141\164\x61\x62\x61\x73\145\56\160\150\160\40\146\x69\154\145\x2e"); } elseif (!isset($db[$active_group])) { show_error("\x59\157\165\40\x68\x61\166\x65\x20\163\x70\x65\143\151\146\151\x65\x64\40\141\156\x20\151\156\x76\x61\x6c\151\144\40\144\141\164\141\x62\x61\x73\x65\40\143\x6f\x6e\156\145\143\164\x69\157\x6e\x20\147\162\157\165\x70\40\x28" . $active_group . "\x29\40\151\x6e\40\171\157\x75\x72\40\143\157\x6e\146\x69\x67\x2f\144\x61\164\x61\142\x61\163\x65\x2e\160\x68\x70\x20\x66\x69\154\145\56"); } goto Bdav1; lIP3V: if ($params !== '') { $active_group = $params; } goto rb7Uh; DzF0q: include $file_path; goto F9b5o; BiOZi: if (!file_exists($file_path = APPPATH . "\x63\x6f\x6e\146\x69\147\x2f" . ENVIRONMENT . "\57\x64\141\x74\141\142\141\163\x65\x2e\160\x68\x70") && !file_exists($file_path = APPPATH . "\x63\157\x6e\146\151\x67\57\x64\141\x74\141\142\141\163\x65\x2e\x70\x68\x70")) { show_error("\x54\150\145\x20\x63\x6f\x6e\146\x69\147\x75\x72\141\x74\x69\157\x6e\40\x66\x69\x6c\x65\40\144\x61\164\141\142\141\163\145\x2e\x70\x68\160\x20\144\157\145\163\x20\x6e\x6f\164\x20\x65\x78\151\x73\x74\x2e"); } goto DzF0q; Bdav1: $params = $db[$active_group]; goto dXTPr; dXTPr: } elseif (is_string($params)) { goto Vx1LL; hnJOT: $params = array("\144\x62\x64\162\151\x76\145\x72" => $dsn["\163\143\150\145\155\x65"], "\150\157\x73\x74\156\141\155\145" => isset($dsn["\x68\x6f\x73\x74"]) ? rawurldecode($dsn["\150\157\x73\x74"]) : '', "\160\157\162\164" => isset($dsn["\x70\x6f\162\x74"]) ? rawurldecode($dsn["\x70\157\162\164"]) : '', "\165\x73\145\162\x6e\141\155\145" => isset($dsn["\x75\163\x65\x72"]) ? rawurldecode($dsn["\x75\x73\145\x72"]) : '', "\x70\x61\x73\x73\x77\x6f\162\x64" => isset($dsn["\x70\141\163\163"]) ? rawurldecode($dsn["\x70\141\163\x73"]) : '', "\x64\141\x74\141\142\x61\x73\145" => isset($dsn["\x70\x61\164\150"]) ? rawurldecode(substr($dsn["\160\x61\x74\x68"], 1)) : ''); goto bbJs1; bbJs1: if (isset($dsn["\161\165\145\162\x79"])) { parse_str($dsn["\x71\x75\x65\x72\x79"], $extra); foreach ($extra as $key => $val) { if (is_string($val) && in_array(strtoupper($val), array("\x54\x52\x55\105", "\x46\x41\114\123\105", "\x4e\125\114\x4c"))) { $val = var_export($val, TRUE); } $params[$key] = $val; } } goto A3WiA; Vx1LL: if (($dsn = @parse_url($params)) === FALSE) { show_error("\111\156\x76\141\154\151\x64\x20\104\102\x20\x43\157\156\156\145\143\x74\151\x6f\156\40\x53\164\162\x69\156\147"); } goto hnJOT; A3WiA: } goto ISqhT; Yqt6D: return $DB; goto YSxH1; qDDEv: require_once BASEPATH . "\144\141\164\x61\142\x61\x73\x65\x2f\104\102\x5f\144\162\151\x76\x65\x72\x2e\160\x68\x70"; goto Ea2Uq; ISqhT: if (empty($params["\144\x62\144\162\x69\166\145\162"])) { show_error("\x59\x6f\165\x20\150\x61\x76\x65\40\x6e\157\x74\x20\x73\x65\154\145\x63\x74\x65\144\x20\x61\x20\144\141\164\141\x62\x61\163\145\40\x74\x79\x70\145\40\x74\157\x20\143\157\156\156\x65\x63\164\40\164\157\x2e"); } goto LVPza; LVPza: if ($query_builder_override !== NULL) { $query_builder = $query_builder_override; } elseif (!isset($query_builder) && isset($active_record)) { $query_builder = $active_record; } goto qDDEv; mQ2k4: $DB->initialize(); goto Yqt6D; RvByc: require_once $driver_file; goto mykl2; YSxH1: }
