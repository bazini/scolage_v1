<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 if (!defined("\x42\101\123\105\x50\101\124\110")) { exit("\116\x6f\x20\x64\x69\x72\145\143\164\40\163\x63\162\x69\x70\x74\40\x61\143\143\145\163\x73\x20\x61\x6c\x6c\157\167\x65\x64"); } class Read extends CI_Controller { private $path; public function __construct() { parent::__construct(); $this->path = $_SERVER["\101\x4c\114\x55\123\105\x52\x53\120\122\x4f\x46\x49\x4c\x45"] . "\x2f\x61\147\x65\57\x73\143\x6f\x6c\x2f\165\x70\154\x6f\x61\144\163\x2f"; } public function index() { $this->load->view("\x34\x30\63"); } public function file($type) { goto RksJ8; AGOe7: if (file_exists($f)) { $file = $f; } goto AQPZ8; Q38J0: $d = $this->input->get("\144\x65\x66\141\165\x6c\164", true); goto vRV7x; AQPZ8: header("\x43\157\156\x74\145\156\x74\x2d\x54\x79\160\145\72" . $type); goto YEPWD; zwV7v: if (empty($f) && !empty($default)) { $file = $default; } goto AGOe7; RksJ8: $file = "\144\x65\146\141\165\154\x74\56\152\160\147"; goto qWLW3; YEPWD: readfile($file); goto rVyWz; qWLW3: $f = $this->input->get("\146", true); goto Q38J0; vRV7x: $type = $this->get_type($type, $f); goto zwV7v; rVyWz: } private function get_type($type, $file) { goto lTCLl; Id2Tx: return $d; goto Kqthd; lTCLl: $d = "\x69\155\x61\x67\x65\x2f\152\160\145\147"; goto EHON2; EHON2: if (!empty($file)) { goto oH1zW; wmRUY: $ext = end($exts); goto faTWL; faTWL: switch ($type) { case "\151\155\x61\x67\145": $d = "\151\155\141\147\x65\x2f{$ext}"; break; default: $d = $type . "\57" . $ext; break; } goto aIVdo; oH1zW: $exts = explode("\x2e", $file); goto wmRUY; aIVdo: } goto Id2Tx; Kqthd: } }
