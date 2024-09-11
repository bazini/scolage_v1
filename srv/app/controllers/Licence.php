<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\x53\x45\x50\101\124\110") or exit("\116\x6f\x20\x64\151\x72\145\x63\x74\40\163\x63\x72\151\x70\x74\x20\141\143\x63\x65\x73\163\x20\141\154\x6c\x6f\167\x65\144"); class Licence extends CI_Controller { public function __construct() { parent::__construct(); $this->layout->set_theme("\x6c\x69\143\145\x6e\x63\x65"); } public function index() { goto xM3YP; V_0vQ: if (isset($_FILES["\154\151\143\x65\x6e\143\145"]) && $_FILES["\154\x69\x63\x65\x6e\x63\x65"]["\x65\162\x72\x6f\162"] == 0) { goto q7wfO; eeOnM: $passe = decrypt($content); goto DRk73; DRk73: $pass = $this->auth->get_sys_var("\160\141\163\x73\145"); goto PDqbC; PDqbC: if ($pass == $passe) { $data = $this->checklic->setlic(); if (!empty($data)) { redirect(); } } else { $this->fmsg->warning("\x4c\x65\40\155\157\x74\40\144\145\40\160\141\163\163\145\40\x6e\x27\145\163\164\40\160\141\x73\40\x63\157\x72\162\x65\x63\164"); } goto t2JuE; q7wfO: $content = file_get_contents($_FILES["\154\x69\143\x65\156\143\x65"]["\164\155\x70\x5f\x6e\x61\x6d\x65"]); goto eeOnM; t2JuE: } goto DZwvy; xM3YP: $this->layout->set_titre("\126\303\xa9\162\x69\146\151\x65\172\x20\166\157\164\x72\145\40\x6c\x69\x63\x65\x6e\143\145"); goto V_0vQ; DZwvy: $this->layout->view("\154\x69\x63\x65\156\x63\145\57\x69\156\144\x65\x78"); goto qrNrv; qrNrv: } }
