<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\105\x50\101\124\x48") or exit("\x4e\x6f\40\144\x69\x72\145\x63\x74\40\x73\143\162\x69\x70\x74\x20\141\x63\143\x65\x73\x73\40\x61\x6c\154\x6f\x77\x65\x64"); interface SessionHandlerInterface { public function open($save_path, $name); public function close(); public function read($session_id); public function write($session_id, $session_data); public function destroy($session_id); public function gc($maxlifetime); }
