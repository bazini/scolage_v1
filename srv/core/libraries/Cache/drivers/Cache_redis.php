<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\x53\105\x50\x41\124\110") or exit("\x4e\x6f\40\144\151\162\145\x63\x74\40\x73\143\162\x69\160\164\x20\x61\143\x63\x65\x73\x73\40\141\154\154\157\x77\145\144"); class CI_Cache_redis extends CI_Driver { protected static $_default_config = array("\163\157\x63\153\145\164\x5f\164\x79\x70\145" => "\164\143\160", "\150\157\163\x74" => "\x31\62\67\56\60\56\x30\x2e\x31", "\x70\141\163\x73\x77\157\x72\x64" => NULL, "\x70\x6f\x72\x74" => 6379, "\x74\x69\155\x65\157\165\164" => 0); protected $_redis; protected $_serialized = array(); protected static $_delete_name; public function __construct() { goto qIvCb; qIvCb: if (!$this->is_supported()) { log_message("\145\x72\x72\157\162", "\103\x61\143\x68\x65\x3a\x20\106\141\x69\154\x65\144\x20\164\x6f\x20\x63\162\145\x61\x74\x65\40\x52\145\144\x69\x73\40\x6f\x62\152\145\x63\164\73\40\145\x78\x74\x65\156\163\151\x6f\156\x20\x6e\157\164\40\154\157\x61\x64\x65\x64\x3f"); return; } goto N1EBX; Bf0nD: $this->_redis = new Redis(); goto ODRtv; LFSQy: $CI =& get_instance(); goto a_Hpq; a_Hpq: if ($CI->config->load("\x72\145\x64\x69\x73", TRUE, TRUE)) { $config = array_merge(self::$_default_config, $CI->config->item("\x72\x65\144\151\x73")); } else { $config = self::$_default_config; } goto Bf0nD; N1EBX: isset(static::$_delete_name) or static::$_delete_name = version_compare(phpversion("\160\x68\160\162\x65\144\x69\163"), "\x35", "\x3e\x3d") ? "\144\x65\x6c" : "\x64\x65\x6c\x65\x74\145"; goto LFSQy; ODRtv: try { goto OJ1oF; Pq_OL: if (!$success) { log_message("\145\x72\162\157\162", "\103\x61\143\x68\x65\72\x20\122\x65\144\151\163\40\143\157\x6e\x6e\x65\x63\164\151\x6f\156\40\146\x61\x69\154\x65\x64\x2e\40\103\x68\145\143\x6b\40\x79\157\165\162\x20\143\x6f\x6e\146\151\147\x75\x72\x61\x74\x69\x6f\x6e\x2e"); } goto nNxpF; OJ1oF: if ($config["\163\157\x63\153\145\164\x5f\164\171\160\145"] === "\165\156\151\170") { $success = $this->_redis->connect($config["\163\157\143\x6b\145\164"]); } else { $success = $this->_redis->connect($config["\x68\157\163\164"], $config["\x70\x6f\162\x74"], $config["\164\151\x6d\145\x6f\165\164"]); } goto Pq_OL; nNxpF: if (isset($config["\160\141\163\163\167\157\x72\144"]) && !$this->_redis->auth($config["\x70\141\163\x73\x77\x6f\162\x64"])) { log_message("\x65\162\162\157\162", "\103\x61\143\150\x65\72\x20\122\145\144\151\163\40\141\165\164\150\145\x6e\x74\151\143\141\164\x69\x6f\156\x20\x66\141\151\154\145\144\x2e"); } goto N0b1T; N0b1T: } catch (RedisException $e) { log_message("\x65\162\x72\157\162", "\103\141\x63\x68\145\72\40\122\145\x64\x69\x73\x20\143\x6f\x6e\156\x65\143\164\x69\x6f\156\x20\x72\145\x66\x75\163\145\144\x20\x28" . $e->getMessage() . "\51"); } goto Du0ph; Du0ph: } public function get($key) { goto UTPKs; eP9Ac: return $value; goto jZ5Mc; UTPKs: $value = $this->_redis->get($key); goto gp3H6; gp3H6: if ($value !== FALSE && $this->_redis->sIsMember("\x5f\143\151\137\x72\x65\x64\151\163\137\x73\145\162\x69\x61\x6c\151\x7a\145\144", $key)) { return unserialize($value); } goto eP9Ac; jZ5Mc: } public function save($id, $data, $ttl = 60, $raw = FALSE) { if (is_array($data) or is_object($data)) { goto Wjbfl; Wjbfl: if (!$this->_redis->sIsMember("\x5f\143\x69\137\x72\145\x64\x69\x73\137\163\145\x72\x69\141\154\151\x7a\145\144", $id) && !$this->_redis->sAdd("\137\x63\x69\x5f\162\145\144\151\163\x5f\163\145\162\151\x61\x6c\151\x7a\145\x64", $id)) { return FALSE; } goto hldJ5; hldJ5: isset($this->_serialized[$id]) or $this->_serialized[$id] = TRUE; goto DSPE2; DSPE2: $data = serialize($data); goto Xn3Dd; Xn3Dd: } else { $this->_redis->sRemove("\137\143\151\x5f\162\145\x64\x69\x73\x5f\163\x65\x72\x69\x61\154\x69\172\x65\x64", $id); } return $this->_redis->set($id, $data, $ttl); } public function delete($key) { goto UlwWM; K65cD: $this->_redis->sRemove("\x5f\143\151\x5f\x72\x65\x64\151\x73\x5f\x73\145\162\151\x61\x6c\151\x7a\145\x64", $key); goto SCtIt; UlwWM: if ($this->_redis->{static::$_delete_name}($key) !== 1) { return FALSE; } goto K65cD; SCtIt: return TRUE; goto nhl5U; nhl5U: } public function increment($id, $offset = 1) { return $this->_redis->incrBy($id, $offset); } public function decrement($id, $offset = 1) { return $this->_redis->decrBy($id, $offset); } public function clean() { return $this->_redis->flushDB(); } public function cache_info($type = NULL) { return $this->_redis->info(); } public function get_metadata($key) { goto Y8F2N; WYPs4: return FALSE; goto OW_Fz; RLMTC: if ($value !== FALSE) { return array("\145\x78\x70\151\x72\x65" => time() + $this->_redis->ttl($key), "\144\141\x74\x61" => $value); } goto WYPs4; Y8F2N: $value = $this->get($key); goto RLMTC; OW_Fz: } public function is_supported() { return extension_loaded("\162\x65\144\151\163"); } public function __destruct() { if ($this->_redis) { $this->_redis->close(); } } }
