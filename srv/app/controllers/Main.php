<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\123\105\120\101\124\110") or exit("\x4e\x6f\40\x64\x69\x72\x65\143\x74\x20\163\143\x72\x69\160\164\40\141\x63\x63\x65\x73\163\40\x61\154\x6c\157\x77\145\144"); class Main extends CI_Controller { public function __construct() { parent::__construct(); if (!$this->auth->is_loggedin()) { redirect("\x61\x63\143\157\x75\156\164"); } } public function index() { goto xDKWf; x15F9: $data["\x6e\x62\x63\154\x73"] = $this->appstat->get_nb_classe(); goto w_v9H; EFMaD: $data["\x74\x69\164\x6c\145"] = "\124\141\x62\154\145\141\x75\40\x64\145\40\x62\157\x72\144"; goto udYHL; Jg5gA: $data["\162\x65\143\145\x6e\164\x5f\162\x65\x67\151\x73\164\x65\x72"] = $this->home->get_recent_register(); goto eqPlb; eqPlb: $data["\162\145\x63\x65\156\164\137\166\145\156\x74\x65\x5f\x61\x72\164\x69\x63\154\x65"] = $this->home->get_recent_ventes(); goto IBAuX; sXAJ_: $data["\x6e\142\160\x65\x72\163\157"] = $this->appstat->get_nb_perso(); goto RrDyO; Y723V: $this->layout->ajouter_js("\x68\x6f\x6d\x65"); goto EFMaD; IBAuX: $data["\162\x65\143\x65\156\x74\x5f\144\145\x70\145\x6e\163\145"] = $this->home->get_recent_deps(); goto zl_FV; w_v9H: $data["\164\141\x66\163"] = $this->home->get_tafs(); goto UL5Np; UL5Np: $data["\x72\145\x63\145\156\164\x5f\x70\x61\x79\163"] = $this->home->get_excerpt_pay(); goto Jg5gA; RrDyO: $data["\x6e\x62\141\x72\164"] = $this->appstat->get_nb_article(); goto x15F9; xDKWf: $this->layout->set_titre("\x41\x63\x63\x75\145\151\x6c"); goto Y723V; udYHL: $data["\156\142\x73\164\144"] = $this->appstat->get_nb_eleve(); goto sXAJ_; zl_FV: $this->layout->view("\151\x6e\x64\x65\x78", $data); goto HE2a0; HE2a0: } }
