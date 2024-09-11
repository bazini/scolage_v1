<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:16              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\123\x45\x50\x41\124\110") or exit("\116\157\40\144\x69\x72\145\143\x74\40\x73\x63\x72\x69\x70\164\40\x61\x63\x63\x65\x73\163\40\141\x6c\154\x6f\167\145\x64"); class CI_Controller { private static $instance; public $load; public function __construct() { goto KvuKu; kXICG: log_message("\151\156\146\x6f", "\103\x6f\x6e\164\162\x6f\x6c\154\x65\162\40\x43\154\x61\163\163\40\x49\x6e\x69\164\x69\141\154\x69\172\x65\144"); goto I9q3P; lNhjn: $this->load->initialize(); goto kXICG; VDqfe: foreach (is_loaded() as $var => $class) { $this->{$var} =& load_class($class); } goto ZJBup; KvuKu: self::$instance =& $this; goto VDqfe; ZJBup: $this->load =& load_class("\114\x6f\x61\144\x65\162", "\143\157\162\x65"); goto lNhjn; I9q3P: } public static function &get_instance() { return self::$instance; } }
