<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto nsW_j; vmKtu: $pdf->AddPage(); goto ZthoT; L_31K: $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . "\40\x30\64\x30", PDF_HEADER_STRING); goto Bh5iT; a9vrg: $pdf->Write(0, "\105\170\141\x6d\160\x6c\145\x20\x6f\146\40\142\x6f\x6f\x6b\154\145\x74\40\x6d\157\144\145", '', 0, "\x4c", true, 0, false, false, 0); goto XC6Oz; eZvBA: if (@file_exists(dirname(__FILE__) . "\57\x6c\141\x6e\x67\x2f\145\156\x67\x2e\x70\150\x70")) { require_once dirname(__FILE__) . "\x2f\x6c\x61\x6e\147\57\145\x6e\147\x2e\160\150\x70"; $pdf->setLanguageArray($l); } goto qgV3Y; VfUjk: $pdf->SetCreator(PDF_CREATOR); goto K45PV; KwSsz: $pdf->SetHeaderMargin(PDF_MARGIN_HEADER); goto mtprf; c6dd6: $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); goto DIN0z; jUk1X: $pdf->SetFont("\x68\x65\x6c\166\x65\164\x69\x63\141", '', 18); goto nAMT0; p7xa0: $pdf->SetTitle("\x54\103\x50\x44\x46\x20\x45\170\141\155\x70\154\x65\40\x30\64\x30"); goto KaOOm; ZGHv0: $pdf->Cell(0, 0, "\x50\101\107\x45\40\x32", 1, 1, "\x43"); goto vmKtu; kdiIL: $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); goto QFVCA; yUXRX: $pdf->AddPage(); goto TuEii; mtprf: $pdf->SetFooterMargin(PDF_MARGIN_FOOTER); goto c6dd6; K45PV: $pdf->SetAuthor("\116\x69\x63\x6f\x6c\141\x20\x41\163\x75\156\151"); goto p7xa0; nsW_j: require_once "\164\143\160\144\146\x5f\x69\156\143\154\165\x64\145\x2e\x70\150\x70"; goto WfhqH; DLWPN: $pdf->setViewerPreferences(array("\104\165\160\x6c\x65\x78" => "\104\165\x70\154\x65\170\x46\154\151\160\x4c\x6f\x6e\147\105\x64\x67\145")); goto Oah_X; Bh5iT: $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN)); goto rMjAB; WfhqH: $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, "\x55\x54\x46\55\x38", false); goto VfUjk; TuEii: $pdf->Cell(0, 0, "\x50\101\107\x45\x20\64", 1, 1, "\x43"); goto xvxPw; qgV3Y: $pdf->SetDisplayMode($zoom = "\x66\165\x6c\154\x70\x61\x67\145", $layout = "\124\167\157\x43\157\154\x75\155\x6e\122\x69\x67\x68\x74", $mode = "\x55\x73\145\x4e\157\x6e\x65"); goto DLWPN; pasdj: $pdf->SetKeywords("\124\103\x50\104\x46\54\40\120\104\x46\x2c\x20\145\170\x61\155\x70\x6c\x65\x2c\x20\164\145\x73\x74\x2c\x20\147\165\151\x64\145"); goto L_31K; rMjAB: $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); goto kdiIL; nAMT0: $pdf->AddPage(); goto a9vrg; Xx0FI: $pdf->AddPage(); goto ZGHv0; DIN0z: $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); goto eZvBA; XC6Oz: $pdf->Cell(0, 0, "\120\101\107\x45\x20\61", 1, 1, "\x43"); goto Xx0FI; Oah_X: $pdf->SetBooklet(true, 10, 30); goto jUk1X; QFVCA: $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); goto KwSsz; ZthoT: $pdf->Cell(0, 0, "\120\x41\107\x45\x20\63", 1, 1, "\x43"); goto yUXRX; KaOOm: $pdf->SetSubject("\124\103\120\x44\106\x20\124\165\164\157\x72\151\x61\154"); goto pasdj; xvxPw: $pdf->Output("\x65\170\x61\155\x70\154\145\137\x30\x34\60\56\x70\144\146", "\111");
