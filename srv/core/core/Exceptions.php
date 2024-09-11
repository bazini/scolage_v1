<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\x45\x50\x41\124\110") or exit("\x4e\157\40\144\151\162\x65\x63\164\40\163\143\x72\151\x70\x74\40\141\x63\143\x65\163\x73\40\141\154\x6c\157\167\145\144"); class CI_Exceptions { public $ob_level; public $levels = array(E_ERROR => "\x45\162\162\x6f\x72", E_WARNING => "\x57\141\162\156\x69\x6e\147", E_PARSE => "\120\141\x72\x73\151\156\x67\x20\x45\162\162\157\162", E_NOTICE => "\116\x6f\164\151\143\x65", E_CORE_ERROR => "\103\157\x72\x65\40\x45\x72\162\x6f\162", E_CORE_WARNING => "\x43\x6f\x72\x65\40\127\141\162\x6e\x69\x6e\x67", E_COMPILE_ERROR => "\103\157\155\160\151\x6c\145\x20\105\x72\162\157\162", E_COMPILE_WARNING => "\103\x6f\x6d\160\151\x6c\145\x20\x57\x61\162\x6e\151\156\x67", E_USER_ERROR => "\x55\x73\x65\162\x20\105\162\162\157\x72", E_USER_WARNING => "\125\163\145\x72\x20\x57\141\162\156\151\156\x67", E_USER_NOTICE => "\125\x73\x65\x72\x20\x4e\157\164\x69\143\x65", E_STRICT => "\122\165\156\164\151\155\145\x20\x4e\x6f\164\x69\143\145"); public function __construct() { $this->ob_level = ob_get_level(); } public function log_exception($severity, $message, $filepath, $line) { $severity = isset($this->levels[$severity]) ? $this->levels[$severity] : $severity; log_message("\145\162\162\x6f\x72", "\123\x65\x76\145\x72\x69\164\x79\72\40" . $severity . "\40\55\x2d\x3e\x20" . $message . "\40" . $filepath . "\x20" . $line); } public function show_404($page = '', $log_error = TRUE) { goto sl_Sx; GMK8f: echo $this->show_error($heading, $message, "\x65\162\162\x6f\x72\137\64\60\64", 404); goto ZQTVT; ZQTVT: exit(4); goto QfeDJ; aRGHM: if ($log_error) { log_message("\145\162\x72\x6f\x72", $heading . "\x3a\40" . $page); } goto GMK8f; sl_Sx: if (is_cli()) { $heading = "\x4e\x6f\x74\40\x46\x6f\165\156\x64"; $message = "\124\x68\145\40\143\157\x6e\164\x72\x6f\x6c\154\x65\162\57\x6d\x65\164\x68\157\x64\x20\x70\141\x69\162\40\x79\157\x75\x20\162\145\x71\165\145\163\164\x65\x64\x20\x77\141\x73\x20\x6e\x6f\164\40\146\157\165\156\144\x2e"; } else { $heading = "\x34\x30\64\40\x50\141\147\x65\x20\x4e\x6f\x74\40\x46\x6f\165\x6e\144"; $message = "\x54\x68\145\40\160\x61\x67\145\40\x79\157\165\x20\x72\x65\x71\x75\x65\163\164\145\144\40\167\x61\x73\x20\156\157\164\x20\146\157\165\156\144\56"; } goto aRGHM; QfeDJ: } public function show_error($heading, $message, $template = "\145\162\x72\x6f\x72\x5f\x67\145\156\145\x72\141\154", $status_code = 500) { goto jAaaA; xOXnD: if (empty($templates_path)) { $templates_path = VIEWPATH . "\x65\x72\162\x6f\x72\163" . DIRECTORY_SEPARATOR; } goto VmUoU; sFF5a: ob_end_clean(); goto n3fsd; cDmZ7: $buffer = ob_get_contents(); goto sFF5a; VmUoU: if (is_cli()) { $message = "\11" . (is_array($message) ? implode("\xa\x9", $message) : $message); $template = "\143\x6c\x69" . DIRECTORY_SEPARATOR . $template; } else { goto Casij; Casij: set_status_header($status_code); goto FhgiS; AIQNO: $template = "\150\x74\155\154" . DIRECTORY_SEPARATOR . $template; goto wcZbl; FhgiS: $message = "\74\x70\x3e" . (is_array($message) ? implode("\x3c\x2f\160\76\74\160\x3e", $message) : $message) . "\74\x2f\160\76"; goto AIQNO; wcZbl: } goto HqoMq; tZWZQ: include $templates_path . $template . "\x2e\x70\150\160"; goto cDmZ7; wCYqq: ob_start(); goto tZWZQ; HqoMq: if (ob_get_level() > $this->ob_level + 1) { ob_end_flush(); } goto wCYqq; jAaaA: $templates_path = config_item("\x65\162\162\157\x72\137\166\x69\145\x77\x73\x5f\x70\141\164\150"); goto xOXnD; n3fsd: return $buffer; goto W98Qn; W98Qn: } public function show_exception($exception) { goto AI4n1; hTniC: if (empty($templates_path)) { $templates_path = VIEWPATH . "\x65\162\x72\x6f\x72\x73" . DIRECTORY_SEPARATOR; } goto ms_Bd; AI4n1: $templates_path = config_item("\145\x72\162\x6f\x72\137\x76\x69\x65\167\x73\137\x70\x61\x74\150"); goto hTniC; GOzxv: $buffer = ob_get_contents(); goto grbqy; O8gcb: if (empty($message)) { $message = "\50\156\165\154\x6c\x29"; } goto r_7sZ; kdXlL: echo $buffer; goto YiP2g; d6kNE: include $templates_path . "\x65\x72\x72\157\162\x5f\x65\x78\x63\x65\x70\164\x69\x6f\x6e\56\160\x68\160"; goto GOzxv; MHcih: if (ob_get_level() > $this->ob_level + 1) { ob_end_flush(); } goto cRf8N; r_7sZ: if (is_cli()) { $templates_path .= "\x63\154\151" . DIRECTORY_SEPARATOR; } else { $templates_path .= "\150\164\x6d\154" . DIRECTORY_SEPARATOR; } goto MHcih; cRf8N: ob_start(); goto d6kNE; grbqy: ob_end_clean(); goto kdXlL; ms_Bd: $message = $exception->getMessage(); goto O8gcb; YiP2g: } public function show_php_error($severity, $message, $filepath, $line) { goto SS1sW; SS1sW: $templates_path = config_item("\145\162\162\157\x72\x5f\x76\151\x65\x77\x73\x5f\160\x61\x74\x68"); goto ASSz6; JycUp: include $templates_path . $template . "\x2e\160\x68\x70"; goto ff5jy; ASSz6: if (empty($templates_path)) { $templates_path = VIEWPATH . "\x65\x72\162\157\162\163" . DIRECTORY_SEPARATOR; } goto c3_ln; QDxy3: if (ob_get_level() > $this->ob_level + 1) { ob_end_flush(); } goto d6QaV; c3_ln: $severity = isset($this->levels[$severity]) ? $this->levels[$severity] : $severity; goto fqvor; d6QaV: ob_start(); goto JycUp; vgVaj: echo $buffer; goto fDvVI; ff5jy: $buffer = ob_get_contents(); goto BE9vW; BE9vW: ob_end_clean(); goto vgVaj; fqvor: if (!is_cli()) { goto w17Jz; w17Jz: $filepath = str_replace("\x5c", "\x2f", $filepath); goto vgDXl; vgDXl: if (FALSE !== strpos($filepath, "\57")) { $x = explode("\x2f", $filepath); $filepath = $x[count($x) - 2] . "\57" . end($x); } goto ViIUb; ViIUb: $template = "\x68\x74\x6d\154" . DIRECTORY_SEPARATOR . "\145\162\x72\x6f\162\x5f\160\x68\160"; goto SvX2Z; SvX2Z: } else { $template = "\x63\x6c\151" . DIRECTORY_SEPARATOR . "\145\162\x72\x6f\x72\x5f\160\x68\x70"; } goto QDxy3; fDvVI: } }
