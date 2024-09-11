<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\102\x41\x53\105\x50\101\x54\110") or exit("\116\157\40\144\151\x72\145\x63\x74\40\x73\143\x72\151\x70\x74\x20\141\143\143\145\x73\163\x20\x61\x6c\154\157\x77\145\144"); class Photo extends CI_Controller { public function __construct() { parent::__construct(); } public function index() { extract($_GET); $this->load->view("\163\164\x75\144\145\x6e\x74\163\x2f\x70\150\x6f\164\157"); } public function crop() { goto mPU80; yluh6: $data["\x69\155\147"] = img2base64($id . "\x2e\160\156\x67"); goto KzQhn; KzQhn: $this->load->view("\163\164\165\144\x65\156\x74\163\x2f\143\x72\157\160\x2d\160\150\157\164\157", $data); goto dyLLV; mPU80: extract($_GET); goto yluh6; dyLLV: } public function camera() { goto ITzV2; Tf3p_: $this->load->view("\160\150\157\164\x6f\x2f\x69\156\144\145\x78", $data); goto Hafse; ITzV2: extract($_GET); goto Jw0rs; Jw0rs: $data["\x74\x65\163\164"] = ''; goto Tf3p_; Hafse: } }
