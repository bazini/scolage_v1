<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\x45\120\x41\124\110") or exit("\x4e\157\x20\x64\x69\x72\145\143\x74\40\163\143\162\151\x70\164\x20\141\143\143\145\163\163\40\x61\x6c\154\157\167\x65\x64"); class Password extends CI_Controller { public function __construct() { goto s9Lia; s9Lia: parent::__construct(); goto aZUg_; aZUg_: if (!$this->auth->is_loggedin()) { redirect("\141\x63\x63\x6f\x75\x6e\164"); } goto Jqkaz; Jqkaz: $this->form_validation->set_error_delimiters("\x3c\144\151\x76\40\143\x6c\x61\x73\x73\x3d\42\141\x6c\x65\162\x74\x20\141\x6c\x65\162\164\55\x64\x61\x6e\147\145\162\x22\76\74\x62\165\164\164\x6f\156\40\x74\x79\160\x65\75\42\142\165\164\164\x6f\156\42\40\143\154\141\163\163\75\x22\x63\x6c\157\163\145\42\40\144\x61\x74\x61\x2d\144\x69\x73\155\x69\163\163\x3d\x22\x61\x6c\x65\162\x74\x22\x20\x61\162\x69\x61\55\150\151\144\144\x65\x6e\75\42\x74\x72\165\x65\42\x3e\46\164\x69\155\x65\163\73\x3c\x2f\x62\165\164\164\157\x6e\x3e\x3c\163\x70\141\156\x20\143\154\141\163\x73\75\x22\147\154\x79\160\150\x69\143\x6f\x6e\x20\x67\154\171\x70\150\x69\143\x6f\156\55\x77\141\162\x6e\151\156\147\x2d\163\x69\x67\156\42\76\74\57\x73\160\x61\x6e\76\x20", "\74\57\144\x69\166\x3e"); goto jnElk; jnElk: } public function index() { goto IuWoP; xMOCL: $data["\x64\145\x73\x74"] = $dest; goto beEMI; yCvsx: $this->form_validation->set_rules("\160\x61\x73\163", "\x22\x4d\157\164\40\144\145\x20\x70\141\163\x73\145\x22", "\x74\x72\x69\x6d\174\162\x65\x71\165\151\x72\x65\x64"); goto BUC4l; fmCus: $this->layout->set_titre($title); goto NPsKO; j0nIF: if (!isset($encours, $submenu, $dest, $retour)) { redirect(); } goto UHsae; NPsKO: $data["\x74\151\164\x6c\145"] = $title; goto ZBXGE; Seuoi: $data["\146\157\162\155\141\164\x5f\x72\x65\x74\x6f\x75\x72"] = format_pass_params($retour); goto yCvsx; UHsae: $title = "\x4d\x6f\164\40\x64\145\40\x70\141\x73\163\x65\40\144\x65\40\155\157\144\151\x66\151\x63\x61\164\151\x6f\x6e"; goto fmCus; BUC4l: if ($this->form_validation->run()) { goto sj4KN; qi2Ri: $passe = decrypt($this->control->get_deletion_password()); goto W5wOZ; sj4KN: extract($_POST); goto qi2Ri; W5wOZ: if ($pass == $passe) { goto XB5Z4; D8J42: redirect($dest_url); goto xsCJc; zoEFw: $dest_url = format_pass_params($dest); goto D8J42; XB5Z4: setcookie("\141\144\155\151\156\x5f\160\141\163\x73", $passe, time() + 60 * 5, "\57"); goto zoEFw; xsCJc: } else { $this->fmsg->warning("\115\x6f\164\40\x64\145\x20\x70\x61\x73\x73\145\40\151\x6e\x63\x6f\x72\162\x65\143\x74"); } goto FpdH0; FpdH0: } goto iiGgJ; cvZtL: $data["\163\165\142\x6d\145\x6e\165"] = $submenu; goto xMOCL; IuWoP: extract($_GET); goto j0nIF; iiGgJ: $this->layout->view("\x70\141\163\x73\167\x6f\162\144", $data); goto ovUBj; beEMI: $data["\x72\145\x74\157\x75\x72"] = $retour; goto Seuoi; ZBXGE: $data["\x65\156\x63\x6f\x75\162\x73"] = $encours; goto cvZtL; ovUBj: } }
