<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\101\123\x45\x50\101\x54\x48") or exit("\x4e\x6f\x20\144\x69\x72\x65\143\164\40\163\143\x72\151\160\x74\x20\x61\143\x63\145\x73\x73\40\141\x6c\x6c\x6f\x77\x65\x64"); class Checklic { protected $CI; private $id; private $cha; private $uuid; private $proc; private $lic; private $code; public function __construct() { goto QFc5f; lFPNC: $this->proc = get_proc_info(); goto idV1e; idV1e: $this->code = encrypt($this->lic . $this->uuid . $this->proc); goto qcLlC; PTJd2: $this->cha = 1; goto LOzH4; oPK0T: $this->id = 4; goto PTJd2; a0e1H: $this->auth =& $this->CI->auth; goto oPK0T; cG7_j: $this->uuid = get_uuid(); goto lFPNC; LOzH4: $this->lic = "\66\x32\x61\x39\145\144\x33\144\x2d\63\64\x36\x32\x2d\64\143\x61\x35\55\71\x38\67\x31\x2d\x34\63\66\141\61\67\62\x35\70\x39\60\x35"; goto cG7_j; QFc5f: $this->CI =& get_instance(); goto a0e1H; qcLlC: } public function check() { goto Tl5K4; HSOYS: $var = $this->auth->get_sys_var("\154\151\x63"); goto zny5u; Tl5K4: $d = false; goto HSOYS; IArhA: return $d; goto R0xpo; zny5u: if (!empty($var)) { goto Gf1PJ; xQAwL: $nv = $this->lic . $this->uuid . $this->proc; goto UIOXx; Gf1PJ: $av = decrypt($var); goto xQAwL; UIOXx: if ($av == $nv) { $d = true; } goto xErN6; xErN6: } goto IArhA; R0xpo: } public function getlic() { return array("\x61\x70\160" => $this->id, "\x63\150\141" => $this->cha, "\154\151\143" => $this->lic, "\x75\x75\151\x64" => $this->uuid, "\x70\x72\157\x63" => $this->proc); } public function setlic() { $this->auth->set_sys_var("\154\151\143", $this->code); return $this->code; } }
