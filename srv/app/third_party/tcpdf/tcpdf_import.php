<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto LhM2R; MLEuR: require_once dirname(__FILE__) . "\57\164\143\x70\x64\146\x5f\160\141\162\x73\x65\x72\56\x70\x68\160"; goto XihC8; LhM2R: require_once dirname(__FILE__) . "\57\164\143\160\144\x66\x2e\x70\150\x70"; goto MLEuR; XihC8: class TCPDF_IMPORT extends TCPDF { public function importPDF($filename) { goto yQhrt; Ixozf: print_r($data); goto Yq2nc; jft75: try { $pdf = new TCPDF_PARSER($rawdata, $cfg); } catch (Exception $e) { die($e->getMessage()); } goto gWtpb; yQhrt: $rawdata = file_get_contents($filename); goto DeIP3; NvEQ7: unset($rawdata); goto Ixozf; Yq2nc: unset($pdf); goto QyepP; DeIP3: if ($rawdata === false) { $this->Error("\x55\156\x61\142\x6c\x65\40\164\x6f\x20\147\145\164\x20\164\x68\145\x20\143\x6f\x6e\164\x65\x6e\x74\40\157\x66\x20\x74\x68\145\40\x66\x69\154\145\x3a\40" . $filename); } goto gXwhr; gWtpb: $data = $pdf->getParsedData(); goto NvEQ7; gXwhr: $cfg = array("\x64\151\145\x5f\x66\x6f\162\x5f\145\162\x72\157\162\163" => false, "\x69\147\x6e\157\x72\x65\137\146\151\154\164\145\x72\137\144\x65\143\x6f\144\151\x6e\147\x5f\x65\x72\x72\x6f\162\x73" => true, "\x69\147\x6e\157\x72\145\137\x6d\151\x73\x73\151\156\x67\137\146\x69\x6c\164\145\162\137\x64\x65\143\157\144\145\x72\x73" => true); goto jft75; QyepP: } }
