<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\x45\x50\x41\x54\x48") or exit("\x4e\x6f\40\144\x69\x72\x65\143\x74\x20\163\143\162\151\160\x74\x20\x61\x63\143\145\163\163\x20\x61\x6c\x6c\157\167\x65\144"); class CI_Encryption { protected $_cipher = "\x61\145\x73\x2d\61\x32\70"; protected $_mode = "\x63\x62\143"; protected $_handle; protected $_key; protected $_driver; protected $_drivers = array(); protected $_modes = array("\x6d\x63\162\171\x70\164" => array("\143\142\x63" => "\143\142\143", "\x65\143\x62" => "\x65\143\142", "\157\146\142" => "\156\157\146\142", "\x6f\x66\x62\70" => "\157\x66\142", "\x63\x66\142" => "\156\x63\146\x62", "\143\x66\142\x38" => "\143\x66\142", "\x63\164\x72" => "\x63\x74\x72", "\163\x74\x72\145\x61\x6d" => "\x73\164\x72\145\x61\155"), "\157\160\145\156\163\163\x6c" => array("\x63\x62\x63" => "\143\x62\143", "\145\x63\x62" => "\x65\x63\x62", "\157\x66\142" => "\157\x66\x62", "\143\x66\142" => "\143\146\x62", "\x63\x66\x62\x38" => "\x63\x66\142\x38", "\x63\x74\162" => "\x63\164\162", "\163\164\162\x65\141\x6d" => '', "\170\164\163" => "\x78\x74\x73")); protected $_digests = array("\163\150\x61\x32\x32\64" => 28, "\x73\150\141\62\65\66" => 32, "\x73\x68\x61\x33\70\x34" => 48, "\x73\150\x61\65\x31\62" => 64); protected static $func_overload; public function __construct(array $params = array()) { goto dO5qH; UrLrl: $this->initialize($params); goto KZhsW; BrIXj: isset(self::$func_overload) or self::$func_overload = extension_loaded("\155\x62\x73\x74\x72\x69\156\147") && ini_get("\155\142\x73\164\x72\151\156\147\x2e\x66\x75\156\x63\x5f\157\x76\x65\x72\x6c\x6f\141\x64"); goto UrLrl; KZhsW: if (!isset($this->_key) && self::strlen($key = config_item("\145\x6e\x63\x72\171\x70\164\151\x6f\x6e\x5f\153\145\x79")) > 0) { $this->_key = $key; } goto F1G_j; dO5qH: $this->_drivers = array("\155\x63\162\171\x70\x74" => defined("\115\103\x52\131\120\x54\x5f\104\105\x56\x5f\125\x52\x41\x4e\104\117\x4d"), "\x6f\160\145\156\x73\x73\154" => extension_loaded("\x6f\160\x65\x6e\x73\x73\x6c")); goto URDBM; URDBM: if (!$this->_drivers["\x6d\143\x72\x79\x70\164"] && !$this->_drivers["\x6f\160\145\156\x73\x73\x6c"]) { show_error("\105\x6e\143\x72\171\160\164\151\157\156\72\40\125\156\x61\x62\x6c\145\x20\x74\157\40\146\151\156\x64\x20\141\156\x20\141\x76\x61\x69\154\141\x62\154\145\x20\145\156\x63\162\x79\x70\164\x69\x6f\x6e\x20\144\162\151\166\145\162\56"); } goto BrIXj; F1G_j: log_message("\x69\156\146\x6f", "\x45\156\x63\162\x79\x70\164\151\157\x6e\40\x43\x6c\x61\163\163\40\111\156\x69\x74\151\141\154\151\x7a\145\144"); goto FImRc; FImRc: } public function initialize(array $params) { goto Rsm_u; Rsm_u: if (!empty($params["\144\x72\x69\166\x65\162"])) { if (isset($this->_drivers[$params["\x64\x72\151\x76\x65\162"]])) { if ($this->_drivers[$params["\x64\x72\151\x76\145\x72"]]) { $this->_driver = $params["\144\162\x69\x76\x65\x72"]; } else { log_message("\x65\x72\162\x6f\162", "\105\x6e\143\162\x79\x70\x74\x69\x6f\156\72\x20\x44\x72\151\166\145\162\x20\47" . $params["\144\x72\x69\166\145\162"] . "\x27\40\151\163\x20\156\x6f\164\40\141\166\x61\x69\x6c\141\x62\154\145\56"); } } else { log_message("\145\162\162\157\162", "\x45\x6e\143\162\171\160\164\151\x6f\156\x3a\x20\125\156\x6b\156\x6f\x77\x6e\x20\144\x72\x69\x76\x65\162\x20\47" . $params["\x64\x72\151\166\x65\162"] . "\x27\40\143\141\x6e\156\x6f\164\40\142\145\x20\143\x6f\156\x66\x69\147\x75\x72\145\x64\x2e"); } } goto dmQGQ; y9XU9: empty($params["\153\x65\x79"]) or $this->_key = $params["\x6b\x65\x79"]; goto Ak00l; Ak00l: $this->{"\137" . $this->_driver . "\x5f\151\x6e\151\164\x69\x61\154\x69\172\x65"}($params); goto OKT45; Ane_0: empty($params["\143\x69\160\150\145\162"]) && ($params["\x63\151\x70\x68\x65\162"] = $this->_cipher); goto y9XU9; OKT45: return $this; goto Rl0Aq; dmQGQ: if (empty($this->_driver)) { $this->_driver = $this->_drivers["\157\160\x65\x6e\x73\x73\x6c"] === TRUE ? "\157\x70\x65\x6e\163\x73\154" : "\x6d\x63\x72\x79\160\164"; log_message("\144\145\x62\165\147", "\x45\x6e\143\162\171\160\x74\x69\157\156\72\40\101\165\x74\x6f\55\x63\x6f\x6e\x66\x69\x67\x75\x72\145\x64\40\x64\x72\151\166\145\162\x20\x27" . $this->_driver . "\x27\x2e"); } goto Ane_0; Rl0Aq: } protected function _mcrypt_initialize($params) { goto rrkXT; v3GnH: if (isset($this->_cipher, $this->_mode)) { if (is_resource($this->_handle) && (strtolower(mcrypt_enc_get_algorithms_name($this->_handle)) !== $this->_cipher or strtolower(mcrypt_enc_get_modes_name($this->_handle)) !== $this->_mode)) { mcrypt_module_close($this->_handle); } if ($this->_handle = mcrypt_module_open($this->_cipher, '', $this->_mode, '')) { log_message("\151\x6e\x66\x6f", "\x45\x6e\x63\x72\171\160\164\x69\x6f\x6e\x3a\40\115\x43\162\171\160\x74\40\x63\151\160\150\145\162\x20" . strtoupper($this->_cipher) . "\40\x69\156\151\x74\151\141\x6c\151\x7a\x65\x64\x20\x69\156\x20" . strtoupper($this->_mode) . "\40\x6d\x6f\144\x65\56"); } else { log_message("\x65\x72\162\x6f\162", "\105\156\143\162\x79\160\164\151\157\156\x3a\x20\125\156\x61\142\x6c\145\40\x74\157\x20\151\156\x69\x74\151\x61\154\x69\x7a\x65\x20\115\x43\x72\x79\160\164\40\x77\x69\164\150\x20\x63\151\160\150\x65\162\x20" . strtoupper($this->_cipher) . "\40\151\x6e\40" . strtoupper($this->_mode) . "\x20\x6d\157\144\145\56"); } } goto FGIBV; rrkXT: if (!empty($params["\x63\x69\x70\150\145\x72"])) { goto YUjxR; mCud9: $this->_cipher_alias($params["\x63\x69\160\x68\145\x72"]); goto tvaa4; YUjxR: $params["\x63\151\160\x68\145\x72"] = strtolower($params["\143\151\x70\150\145\x72"]); goto mCud9; tvaa4: if (!in_array($params["\143\151\160\x68\145\162"], mcrypt_list_algorithms(), TRUE)) { log_message("\x65\x72\162\157\x72", "\105\x6e\x63\x72\171\x70\164\151\157\x6e\x3a\x20\x4d\103\162\x79\x70\x74\x20\x63\x69\x70\150\145\162\x20" . strtoupper($params["\143\x69\160\150\x65\x72"]) . "\x20\151\163\x20\156\x6f\x74\x20\141\x76\x61\151\x6c\141\142\x6c\145\x2e"); } else { $this->_cipher = $params["\x63\x69\x70\x68\x65\162"]; } goto r2L_i; r2L_i: } goto APcnq; APcnq: if (!empty($params["\155\157\144\145"])) { $params["\155\157\x64\x65"] = strtolower($params["\x6d\157\144\145"]); if (!isset($this->_modes["\155\143\162\171\x70\x74"][$params["\155\157\x64\145"]])) { log_message("\x65\x72\x72\157\162", "\105\156\x63\x72\171\x70\x74\151\157\156\72\x20\x4d\x43\162\x79\x70\164\x20\x6d\x6f\144\145\40" . strtoupper($params["\x6d\157\144\x65"]) . "\40\151\x73\40\x6e\x6f\164\x20\x61\166\x61\x69\x6c\x61\x62\154\145\56"); } else { $this->_mode = $this->_modes["\x6d\143\x72\x79\x70\164"][$params["\x6d\157\x64\x65"]]; } } goto v3GnH; FGIBV: } protected function _openssl_initialize($params) { goto vuMzX; MLWxd: if (isset($this->_cipher, $this->_mode)) { $handle = empty($this->_mode) ? $this->_cipher : $this->_cipher . "\55" . $this->_mode; if (!in_array($handle, openssl_get_cipher_methods(), TRUE)) { $this->_handle = NULL; log_message("\145\x72\162\x6f\162", "\105\x6e\x63\x72\171\x70\x74\151\x6f\156\72\40\125\x6e\141\x62\154\x65\40\x74\157\40\x69\156\x69\164\151\141\154\151\172\x65\x20\x4f\x70\x65\156\x53\x53\x4c\x20\167\151\x74\x68\x20\155\145\164\150\157\x64\40" . strtoupper($handle) . "\x2e"); } else { $this->_handle = $handle; log_message("\151\156\146\x6f", "\x45\x6e\143\162\x79\x70\x74\x69\x6f\156\72\40\x4f\160\x65\x6e\123\x53\114\x20\x69\x6e\151\x74\151\x61\x6c\151\x7a\x65\x64\x20\x77\151\164\150\x20\155\x65\x74\x68\157\144\x20" . strtoupper($handle) . "\56"); } } goto tiXhV; vuMzX: if (!empty($params["\x63\x69\x70\150\145\x72"])) { goto MhzAd; X2NGC: $this->_cipher_alias($params["\143\151\160\x68\x65\x72"]); goto V4fD0; MhzAd: $params["\x63\x69\x70\150\145\x72"] = strtolower($params["\x63\x69\160\150\x65\x72"]); goto X2NGC; V4fD0: $this->_cipher = $params["\143\x69\160\150\x65\x72"]; goto asP1e; asP1e: } goto ryNxe; ryNxe: if (!empty($params["\155\x6f\144\145"])) { $params["\x6d\157\x64\x65"] = strtolower($params["\x6d\157\x64\x65"]); if (!isset($this->_modes["\157\160\x65\156\163\x73\154"][$params["\x6d\x6f\x64\x65"]])) { log_message("\x65\162\162\x6f\x72", "\x45\156\x63\162\171\160\x74\x69\157\x6e\x3a\40\117\160\x65\156\123\123\x4c\40\x6d\x6f\x64\145\40" . strtoupper($params["\x6d\157\144\x65"]) . "\x20\x69\163\x20\156\x6f\x74\40\x61\x76\141\x69\x6c\141\142\x6c\145\x2e"); } else { $this->_mode = $this->_modes["\x6f\x70\x65\x6e\163\163\154"][$params["\155\157\x64\x65"]]; } } goto MLWxd; tiXhV: } public function create_key($length) { goto voj33; kb82I: return $is_secure === TRUE ? $key : FALSE; goto fpF4o; Tv_PH: $key = openssl_random_pseudo_bytes($length, $is_secure); goto kb82I; voj33: if (function_exists("\162\x61\156\144\157\x6d\x5f\x62\x79\164\x65\163")) { try { return random_bytes((int) $length); } catch (Exception $e) { log_message("\145\x72\x72\x6f\162", $e->getMessage()); return FALSE; } } elseif (defined("\115\103\x52\131\x50\x54\x5f\104\105\126\137\125\x52\101\116\x44\117\x4d")) { return mcrypt_create_iv($length, MCRYPT_DEV_URANDOM); } goto pXUsi; pXUsi: $is_secure = NULL; goto Tv_PH; fpF4o: } public function encrypt($data, array $params = NULL) { goto m5ke1; OBK1c: if (isset($params["\150\155\x61\x63\x5f\144\x69\147\x65\163\x74"])) { isset($params["\150\x6d\141\x63\137\x6b\x65\x79"]) or $params["\x68\155\x61\143\137\153\145\171"] = $this->hkdf($this->_key, "\163\150\x61\x35\61\x32", NULL, NULL, "\141\x75\164\150\x65\156\164\x69\x63\x61\x74\151\x6f\x6e"); return hash_hmac($params["\x68\x6d\x61\143\137\x64\151\x67\x65\x73\x74"], $data, $params["\x68\x6d\141\143\x5f\153\x65\171"], !$params["\142\x61\x73\x65\x36\64"]) . $data; } goto wXYrr; m5ke1: if (($params = $this->_get_params($params)) === FALSE) { return FALSE; } goto xzYjL; xzYjL: isset($params["\153\x65\x79"]) or $params["\x6b\145\x79"] = $this->hkdf($this->_key, "\x73\150\141\x35\x31\x32", NULL, self::strlen($this->_key), "\145\156\143\x72\x79\x70\x74\151\157\x6e"); goto ev4bA; ev4bA: if (($data = $this->{"\x5f" . $this->_driver . "\x5f\x65\156\143\x72\171\x70\x74"}($data, $params)) === FALSE) { return FALSE; } goto TaGr2; wXYrr: return $data; goto chk24; TaGr2: $params["\x62\141\x73\x65\x36\64"] && ($data = base64_encode($data)); goto OBK1c; chk24: } protected function _mcrypt_encrypt($data, $params) { goto B6Ts1; lvtcu: if (mcrypt_generic_init($params["\x68\141\156\144\x6c\x65"], $params["\153\x65\x79"], $iv) < 0) { if ($params["\x68\141\x6e\144\x6c\x65"] !== $this->_handle) { mcrypt_module_close($params["\150\x61\x6e\144\154\145"]); } return FALSE; } goto R4VIK; Iv_PD: $iv = ($iv_size = mcrypt_enc_get_iv_size($params["\x68\141\x6e\x64\x6c\145"])) > 1 ? $this->create_key($iv_size) : NULL; goto lvtcu; IbfGb: mcrypt_generic_deinit($params["\x68\141\156\x64\154\x65"]); goto Tm9kC; Tm9kC: if ($params["\x68\x61\x6e\144\154\145"] !== $this->_handle) { mcrypt_module_close($params["\150\x61\x6e\144\154\145"]); } goto bUwmo; p74io: $data = mcrypt_enc_get_modes_name($params["\150\x61\156\144\154\x65"]) !== "\x45\x43\x42" ? $iv . mcrypt_generic($params["\150\141\x6e\144\x6c\x65"], $data) : mcrypt_generic($params["\x68\x61\156\x64\x6c\x65"], $data); goto IbfGb; R4VIK: if (in_array(strtolower(mcrypt_enc_get_modes_name($params["\x68\141\x6e\144\x6c\x65"])), array("\x63\142\x63", "\x65\143\142"), TRUE)) { goto NVI4v; NVI4v: $block_size = mcrypt_enc_get_block_size($params["\x68\141\x6e\x64\x6c\x65"]); goto n42ts; O4eOu: $data .= str_repeat(chr($pad), $pad); goto pAEla; n42ts: $pad = $block_size - self::strlen($data) % $block_size; goto O4eOu; pAEla: } goto p74io; B6Ts1: if (!is_resource($params["\150\x61\156\x64\154\145"])) { return FALSE; } goto Iv_PD; bUwmo: return $data; goto Odud3; Odud3: } protected function _openssl_encrypt($data, $params) { goto oSlQP; oSlQP: if (empty($params["\150\x61\x6e\x64\154\145"])) { return FALSE; } goto WOMrp; VriXQ: $data = openssl_encrypt($data, $params["\150\141\156\x64\154\x65"], $params["\x6b\145\171"], 1, $iv); goto Uft54; Nk0Qz: return $iv . $data; goto Iw6Md; WOMrp: $iv = ($iv_size = openssl_cipher_iv_length($params["\150\x61\156\144\x6c\145"])) ? $this->create_key($iv_size) : NULL; goto VriXQ; Uft54: if ($data === FALSE) { return FALSE; } goto Nk0Qz; Iw6Md: } public function decrypt($data, array $params = NULL) { goto cLz_N; OsJxS: if ($params["\x62\x61\x73\x65\x36\x34"]) { $data = base64_decode($data); } goto LidgN; MToea: return $this->{"\137" . $this->_driver . "\x5f\144\145\x63\x72\x79\x70\164"}($data, $params); goto XM4wk; cLz_N: if (($params = $this->_get_params($params)) === FALSE) { return FALSE; } goto IT232; IT232: if (isset($params["\150\x6d\x61\143\137\x64\151\147\145\163\164"])) { goto M23wd; LA8Zz: for ($i = 0; $i < $digest_size; $i++) { $diff |= ord($hmac_input[$i]) ^ ord($hmac_check[$i]); } goto bq7qV; M23wd: $digest_size = $params["\142\x61\x73\x65\66\x34"] ? $this->_digests[$params["\150\x6d\x61\x63\137\144\151\x67\x65\163\x74"]] * 2 : $this->_digests[$params["\150\x6d\141\x63\137\x64\x69\147\x65\163\x74"]]; goto JRg6d; JRg6d: if (self::strlen($data) <= $digest_size) { return FALSE; } goto fYS0T; UpJw9: $hmac_check = hash_hmac($params["\x68\x6d\141\x63\x5f\144\x69\x67\x65\163\164"], $data, $params["\150\155\141\x63\x5f\x6b\x65\x79"], !$params["\142\x61\x73\145\66\64"]); goto WWGv6; bq7qV: if ($diff !== 0) { return FALSE; } goto idMj0; Fv1MM: isset($params["\x68\155\x61\x63\137\153\x65\x79"]) or $params["\x68\x6d\141\143\137\x6b\x65\171"] = $this->hkdf($this->_key, "\163\150\141\65\x31\62", NULL, NULL, "\x61\x75\164\x68\x65\x6e\x74\x69\x63\x61\x74\x69\157\x6e"); goto UpJw9; WWGv6: $diff = 0; goto LA8Zz; ZbDK7: $data = self::substr($data, $digest_size); goto Fv1MM; fYS0T: $hmac_input = self::substr($data, 0, $digest_size); goto ZbDK7; idMj0: } goto OsJxS; LidgN: isset($params["\153\145\171"]) or $params["\x6b\x65\x79"] = $this->hkdf($this->_key, "\163\150\x61\x35\x31\62", NULL, self::strlen($this->_key), "\145\156\x63\162\171\x70\164\x69\x6f\x6e"); goto MToea; XM4wk: } protected function _mcrypt_decrypt($data, $params) { goto tZQkp; bZ7FH: $data = mdecrypt_generic($params["\150\x61\156\144\x6c\x65"], $data); goto uwEjG; f_LfZ: if (mcrypt_generic_init($params["\150\141\x6e\144\154\x65"], $params["\x6b\x65\171"], $iv) < 0) { if ($params["\x68\141\156\x64\x6c\145"] !== $this->_handle) { mcrypt_module_close($params["\150\141\x6e\x64\154\x65"]); } return FALSE; } goto bZ7FH; wLwlY: mcrypt_generic_deinit($params["\x68\x61\156\144\x6c\145"]); goto NBuX_; tZQkp: if (!is_resource($params["\x68\x61\x6e\144\x6c\145"])) { return FALSE; } goto RP_u3; RP_u3: if (($iv_size = mcrypt_enc_get_iv_size($params["\x68\x61\156\x64\154\145"])) > 1) { if (mcrypt_enc_get_modes_name($params["\150\x61\156\x64\x6c\145"]) !== "\x45\103\x42") { $iv = self::substr($data, 0, $iv_size); $data = self::substr($data, $iv_size); } else { $iv = str_repeat("\0", $iv_size); } } else { $iv = NULL; } goto f_LfZ; NBuX_: if ($params["\x68\141\x6e\x64\154\x65"] !== $this->_handle) { mcrypt_module_close($params["\x68\141\156\x64\154\145"]); } goto Z78Y7; Z78Y7: return $data; goto uz5PX; uwEjG: if (in_array(strtolower(mcrypt_enc_get_modes_name($params["\x68\x61\x6e\x64\154\x65"])), array("\143\x62\143", "\145\143\142"), TRUE)) { $data = self::substr($data, 0, -ord($data[self::strlen($data) - 1])); } goto wLwlY; uz5PX: } protected function _openssl_decrypt($data, $params) { if ($iv_size = openssl_cipher_iv_length($params["\150\x61\156\144\x6c\145"])) { $iv = self::substr($data, 0, $iv_size); $data = self::substr($data, $iv_size); } else { $iv = NULL; } return empty($params["\x68\x61\x6e\144\x6c\145"]) ? FALSE : openssl_decrypt($data, $params["\x68\x61\156\144\154\145"], $params["\x6b\x65\171"], 1, $iv); } protected function _get_params($params) { goto Bf8KO; yslfY: if (isset($params["\x6d\157\144\x65"])) { goto qCYkC; qCYkC: $params["\x6d\157\x64\145"] = strtolower($params["\155\x6f\144\145"]); goto IhC7f; KabDi: $params["\155\x6f\x64\x65"] = $this->_modes[$this->_driver][$params["\x6d\x6f\144\x65"]]; goto vLQ6H; IhC7f: if (!isset($this->_modes[$this->_driver][$params["\x6d\x6f\x64\x65"]])) { return FALSE; } goto KabDi; vLQ6H: } goto sNBw4; Bf8KO: if (empty($params)) { return isset($this->_cipher, $this->_mode, $this->_key, $this->_handle) ? array("\x68\141\156\144\154\145" => $this->_handle, "\143\151\160\150\145\162" => $this->_cipher, "\x6d\x6f\144\145" => $this->_mode, "\153\x65\x79" => NULL, "\x62\x61\x73\x65\66\x34" => TRUE, "\x68\155\x61\x63\x5f\x64\x69\147\x65\x73\x74" => "\x73\150\x61\x35\61\x32", "\150\155\141\143\x5f\153\145\171" => NULL) : FALSE; } elseif (!isset($params["\143\x69\160\150\145\x72"], $params["\x6d\x6f\x64\145"], $params["\153\145\171"])) { return FALSE; } goto yslfY; nq84A: return $params; goto e8Mfj; QJQS4: $params["\x68\x61\x6e\x64\154\x65"] = ($params["\143\x69\x70\x68\x65\x72"] !== $this->_cipher or $params["\x6d\157\x64\x65"] !== $this->_mode) ? $this->{"\137" . $this->_driver . "\137\x67\x65\164\x5f\x68\x61\156\x64\x6c\145"}($params["\143\x69\x70\150\x65\162"], $params["\155\x6f\x64\x65"]) : $this->_handle; goto nq84A; xvYE1: $params = array("\150\x61\156\144\x6c\x65" => NULL, "\143\x69\160\150\145\x72" => $params["\143\x69\160\x68\x65\x72"], "\155\157\x64\x65" => $params["\155\x6f\x64\145"], "\153\x65\171" => $params["\153\x65\171"], "\x62\x61\163\x65\x36\64" => isset($params["\x72\x61\x77\x5f\x64\141\164\x61"]) ? !$params["\162\x61\167\137\144\x61\164\141"] : FALSE, "\150\155\x61\143\x5f\x64\x69\x67\x65\163\164" => $params["\150\x6d\x61\143\137\x64\x69\x67\x65\x73\164"], "\x68\x6d\141\x63\x5f\153\145\x79" => $params["\150\155\x61\143\137\153\x65\x79"]); goto TBVTR; sNBw4: if (isset($params["\150\155\x61\x63"]) && $params["\x68\155\141\x63"] === FALSE) { $params["\150\155\x61\143\137\x64\151\147\x65\x73\x74"] = $params["\150\155\141\x63\x5f\x6b\145\x79"] = NULL; } else { if (!isset($params["\150\155\x61\x63\x5f\x6b\x65\171"])) { return FALSE; } elseif (isset($params["\x68\155\141\143\137\x64\151\x67\145\163\x74"])) { $params["\150\155\141\143\x5f\144\151\147\x65\x73\164"] = strtolower($params["\x68\x6d\141\x63\x5f\x64\151\x67\145\x73\x74"]); if (!isset($this->_digests[$params["\x68\155\141\x63\x5f\144\151\x67\x65\163\164"]])) { return FALSE; } } else { $params["\150\x6d\141\x63\x5f\144\151\147\x65\x73\164"] = "\163\150\x61\65\x31\62"; } } goto xvYE1; TBVTR: $this->_cipher_alias($params["\143\151\x70\x68\145\x72"]); goto QJQS4; e8Mfj: } protected function _mcrypt_get_handle($cipher, $mode) { return mcrypt_module_open($cipher, '', $mode, ''); } protected function _openssl_get_handle($cipher, $mode) { return $mode === "\163\164\162\x65\x61\x6d" ? $cipher : $cipher . "\55" . $mode; } protected function _cipher_alias(&$cipher) { goto B_EBp; B_EBp: static $dictionary; goto nCPLl; nCPLl: if (empty($dictionary)) { $dictionary = array("\x6d\x63\162\x79\160\164" => array("\x61\x65\163\x2d\61\62\x38" => "\x72\151\x6a\156\144\141\x65\x6c\55\x31\x32\x38", "\141\x65\x73\x2d\x31\71\x32" => "\x72\151\x6a\x6e\x64\x61\x65\x6c\55\x31\x32\70", "\x61\145\163\x2d\62\65\66" => "\x72\x69\x6a\x6e\x64\141\145\154\x2d\x31\x32\x38", "\144\145\x73\63\x2d\x65\144\145\x33" => "\164\162\x69\x70\x6c\x65\144\x65\163", "\x62\x66" => "\142\154\157\x77\x66\151\x73\150", "\143\x61\x73\164\65" => "\143\x61\163\x74\55\61\62\x38", "\162\x63\x34" => "\141\162\143\146\x6f\165\x72", "\x72\143\64\55\64\x30" => "\141\x72\x63\x66\x6f\165\x72"), "\157\x70\145\x6e\163\163\x6c" => array("\x72\x69\152\x6e\144\x61\145\154\x2d\61\62\70" => "\x61\x65\x73\x2d\61\x32\x38", "\164\162\x69\x70\x6c\x65\144\x65\x73" => "\144\x65\x73\x2d\x65\x64\x65\63", "\142\154\x6f\167\x66\151\163\150" => "\x62\146", "\x63\141\x73\x74\x2d\61\x32\70" => "\x63\141\x73\164\x35", "\x61\162\x63\x66\x6f\165\162" => "\x72\x63\64\x2d\64\60", "\x72\x63\64" => "\x72\x63\64\55\x34\x30")); } goto EQZj_; EQZj_: if (isset($dictionary[$this->_driver][$cipher])) { $cipher = $dictionary[$this->_driver][$cipher]; } goto B7Svh; B7Svh: } public function hkdf($key, $digest = "\163\150\141\65\61\x32", $salt = NULL, $length = NULL, $info = '') { goto hkGPB; N2N4D: if (empty($length) or !is_int($length)) { $length = $this->_digests[$digest]; } elseif ($length > 255 * $this->_digests[$digest]) { return FALSE; } goto YIcz9; ZwDhV: $key = ''; goto u8ZFx; u8ZFx: for ($key_block = '', $block_index = 1; self::strlen($key) < $length; $block_index++) { $key_block = hash_hmac($digest, $key_block . $info . chr($block_index), $prk, TRUE); $key .= $key_block; } goto yT51L; hkGPB: if (!isset($this->_digests[$digest])) { return FALSE; } goto N2N4D; yT51L: return self::substr($key, 0, $length); goto SpFC7; YIcz9: self::strlen($salt) or $salt = str_repeat("\0", $this->_digests[$digest]); goto Q8fIw; Q8fIw: $prk = hash_hmac($digest, $key, $salt, TRUE); goto ZwDhV; SpFC7: } public function __get($key) { if ($key === "\155\x6f\144\145") { return array_search($this->_mode, $this->_modes[$this->_driver], TRUE); } elseif (in_array($key, array("\143\151\x70\150\145\162", "\144\x72\x69\166\145\x72", "\x64\162\x69\166\145\x72\x73", "\x64\x69\x67\145\x73\164\x73"), TRUE)) { return $this->{"\x5f" . $key}; } return NULL; } protected static function strlen($str) { return self::$func_overload ? mb_strlen($str, "\x38\142\151\164") : strlen($str); } protected static function substr($str, $start, $length = NULL) { if (self::$func_overload) { isset($length) or $length = $start >= 0 ? self::strlen($str) - $start : -$start; return mb_substr($str, $start, $length, "\70\x62\151\x74"); } return isset($length) ? substr($str, $start, $length) : substr($str, $start); } }
