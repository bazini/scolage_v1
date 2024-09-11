<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\105\120\x41\x54\110") or exit("\116\157\x20\144\x69\162\x65\x63\164\x20\x73\x63\x72\x69\160\164\x20\141\143\143\145\163\163\x20\x61\x6c\154\x6f\x77\x65\144"); abstract class CI_Session_driver implements SessionHandlerInterface { protected $_config; protected $_fingerprint; protected $_lock = FALSE; protected $_session_id; protected $_success, $_failure; public function __construct(&$params) { $this->_config =& $params; if (is_php("\67")) { $this->_success = TRUE; $this->_failure = FALSE; } else { $this->_success = 0; $this->_failure = -1; } } public function php5_validate_id() { if (isset($_COOKIE[$this->_config["\x63\x6f\157\153\151\x65\x5f\156\141\155\x65"]]) && !$this->validateSessionId($_COOKIE[$this->_config["\x63\x6f\x6f\153\151\145\x5f\x6e\141\x6d\x65"]])) { unset($_COOKIE[$this->_config["\x63\157\157\x6b\151\145\137\x6e\x61\155\x65"]]); } } protected function _cookie_destroy() { return setcookie($this->_config["\143\x6f\157\x6b\151\145\x5f\x6e\x61\x6d\145"], NULL, 1, $this->_config["\x63\157\x6f\153\x69\x65\x5f\x70\x61\164\x68"], $this->_config["\x63\x6f\157\153\151\x65\137\144\157\155\x61\151\156"], $this->_config["\143\x6f\x6f\153\x69\x65\x5f\163\x65\x63\165\162\x65"], TRUE); } protected function _get_lock($session_id) { $this->_lock = TRUE; return TRUE; } protected function _release_lock() { if ($this->_lock) { $this->_lock = FALSE; } return TRUE; } }
