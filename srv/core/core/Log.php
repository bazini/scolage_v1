<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\x53\105\x50\101\x54\x48") or exit("\116\157\40\144\151\x72\x65\x63\x74\x20\x73\143\x72\x69\160\x74\40\141\x63\143\145\x73\163\x20\x61\x6c\154\157\x77\145\x64"); class CI_Log { protected $_log_path; protected $_file_permissions = 0644; protected $_threshold = 1; protected $_threshold_array = array(); protected $_date_fmt = "\x59\55\x6d\x2d\144\x20\x48\72\151\x3a\163"; protected $_file_ext; protected $_enabled = TRUE; protected $_levels = array("\x45\122\x52\117\x52" => 1, "\104\105\102\125\x47" => 2, "\x49\x4e\x46\117" => 3, "\101\x4c\x4c" => 4); protected static $func_overload; public function __construct() { goto kbKte; YVMTA: if (is_numeric($config["\x6c\157\147\137\164\x68\162\145\163\x68\157\x6c\144"])) { $this->_threshold = (int) $config["\154\157\x67\x5f\164\150\x72\145\163\x68\157\x6c\x64"]; } elseif (is_array($config["\154\157\147\x5f\x74\150\162\145\x73\x68\x6f\x6c\x64"])) { $this->_threshold = 0; $this->_threshold_array = array_flip($config["\154\157\147\137\164\x68\162\x65\x73\x68\157\154\144"]); } goto kwAIG; FtH3k: file_exists($this->_log_path) or mkdir($this->_log_path, 0755, TRUE); goto OKwo8; GPJIa: $this->_file_ext = isset($config["\154\x6f\147\137\x66\151\154\x65\137\x65\170\164\x65\156\x73\x69\157\156"]) && $config["\154\x6f\147\137\x66\151\x6c\x65\137\x65\x78\164\145\x6e\x73\x69\157\x6e"] !== '' ? ltrim($config["\x6c\x6f\147\137\146\151\x6c\145\x5f\145\x78\164\x65\x6e\163\151\x6f\156"], "\x2e") : "\160\x68\x70"; goto FtH3k; kbKte: $config =& get_config(); goto h1g34; np_Sl: $this->_log_path = $config["\154\x6f\147\x5f\160\141\x74\x68"] !== '' ? $config["\154\x6f\x67\137\x70\141\x74\150"] : APPPATH . "\154\x6f\147\x73\57"; goto GPJIa; OKwo8: if (!is_dir($this->_log_path) or !is_really_writable($this->_log_path)) { $this->_enabled = FALSE; } goto YVMTA; hLRDB: if (!empty($config["\154\157\147\x5f\x66\x69\x6c\x65\x5f\160\145\x72\x6d\151\163\163\x69\157\x6e\x73"]) && is_int($config["\x6c\157\x67\137\x66\151\x6c\145\137\x70\x65\162\x6d\151\x73\x73\151\157\x6e\x73"])) { $this->_file_permissions = $config["\154\x6f\147\x5f\x66\x69\x6c\x65\137\160\145\x72\x6d\151\x73\163\x69\x6f\x6e\x73"]; } goto tuT0i; h1g34: isset(self::$func_overload) or self::$func_overload = extension_loaded("\155\x62\x73\x74\x72\151\x6e\x67") && ini_get("\x6d\x62\x73\x74\162\x69\x6e\147\56\x66\165\x6e\x63\x5f\x6f\166\145\162\x6c\x6f\x61\x64"); goto np_Sl; kwAIG: if (!empty($config["\x6c\x6f\x67\137\x64\141\164\x65\x5f\146\x6f\162\x6d\141\164"])) { $this->_date_fmt = $config["\154\157\147\137\x64\141\164\145\137\146\157\x72\155\x61\164"]; } goto hLRDB; tuT0i: } public function write_log($level, $msg) { goto FtOm0; psymH: fclose($fp); goto cTXiB; ZjAZY: return is_int($result); goto XHlh1; FtOm0: if ($this->_enabled === FALSE) { return FALSE; } goto b6Liw; c6jPs: flock($fp, LOCK_EX); goto l_pf2; hDBvM: flock($fp, LOCK_UN); goto psymH; b6Liw: $level = strtoupper($level); goto qH5qp; l_pf2: if (strpos($this->_date_fmt, "\x75") !== FALSE) { goto kOqpb; H7abj: $microtime_short = sprintf("\x25\60\x36\x64", ($microtime_full - floor($microtime_full)) * 1000000); goto aGFrK; aGFrK: $date = new DateTime(date("\x59\x2d\x6d\x2d\x64\x20\110\72\151\x3a\163\x2e" . $microtime_short, $microtime_full)); goto R02N3; R02N3: $date = $date->format($this->_date_fmt); goto sdEjr; kOqpb: $microtime_full = microtime(TRUE); goto H7abj; sdEjr: } else { $date = date($this->_date_fmt); } goto vSNIt; qH5qp: if ((!isset($this->_levels[$level]) or $this->_levels[$level] > $this->_threshold) && !isset($this->_threshold_array[$this->_levels[$level]])) { return FALSE; } goto cK74E; vSNIt: $message .= $this->_format_line($level, $date, $msg); goto wBDqW; ubc9r: if (!($fp = @fopen($filepath, "\141\x62"))) { return FALSE; } goto c6jPs; rA3fC: $message = ''; goto YhIve; cK74E: $filepath = $this->_log_path . "\154\157\147\x2d" . date("\131\x2d\x6d\x2d\144") . "\56" . $this->_file_ext; goto rA3fC; wBDqW: for ($written = 0, $length = self::strlen($message); $written < $length; $written += $result) { if (($result = fwrite($fp, self::substr($message, $written))) === FALSE) { break; } } goto hDBvM; cTXiB: if (isset($newfile) && $newfile === TRUE) { chmod($filepath, $this->_file_permissions); } goto ZjAZY; YhIve: if (!file_exists($filepath)) { $newfile = TRUE; if ($this->_file_ext === "\x70\x68\160") { $message .= "\74\x3f\x70\150\x70\x20\144\145\x66\x69\x6e\x65\x64\x28\x27\102\x41\x53\105\x50\x41\124\110\x27\x29\40\x4f\x52\40\x65\x78\x69\x74\50\47\116\x6f\x20\x64\x69\x72\x65\x63\x74\x20\163\143\x72\151\160\x74\40\x61\143\x63\x65\163\x73\x20\x61\x6c\154\157\167\x65\144\47\51\73\x20\x3f\x3e\xa\xa"; } } goto ubc9r; XHlh1: } protected function _format_line($level, $date, $message) { return $level . "\40\55\x20" . $date . "\x20\55\x2d\76\40" . $message . PHP_EOL; } protected static function strlen($str) { return self::$func_overload ? mb_strlen($str, "\x38\142\151\x74") : strlen($str); } protected static function substr($str, $start, $length = NULL) { if (self::$func_overload) { isset($length) or $length = $start >= 0 ? self::strlen($str) - $start : -$start; return mb_substr($str, $start, $length, "\70\142\x69\164"); } return isset($length) ? substr($str, $start, $length) : substr($str, $start); } }
