<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto pRNEY; kUvgm: $preferences = array("\110\x69\144\145\x54\x6f\157\154\142\x61\162" => true, "\110\x69\x64\x65\x4d\x65\156\165\142\x61\x72" => true, "\110\x69\144\x65\x57\151\156\x64\x6f\167\125\111" => true, "\106\x69\164\127\151\156\144\157\x77" => true, "\103\x65\156\x74\x65\162\x57\x69\x6e\x64\157\x77" => true, "\x44\151\x73\160\154\141\171\104\157\x63\x54\151\164\x6c\145" => true, "\116\157\x6e\106\x75\154\154\x53\143\162\x65\x65\x6e\x50\x61\147\x65\x4d\x6f\x64\145" => "\125\163\145\116\157\156\x65", "\126\x69\145\x77\101\162\145\141" => "\x43\x72\157\x70\102\x6f\170", "\x56\151\x65\x77\x43\x6c\151\160" => "\103\162\157\x70\x42\157\x78", "\x50\162\151\x6e\x74\101\162\145\x61" => "\x43\x72\157\x70\102\x6f\x78", "\120\x72\x69\x6e\x74\x43\x6c\x69\x70" => "\x43\162\157\160\102\157\170", "\120\x72\x69\x6e\164\x53\x63\141\154\151\x6e\x67" => "\101\160\160\104\145\x66\141\165\154\x74", "\x44\x75\x70\154\x65\x78" => "\x44\x75\x70\x6c\x65\x78\106\154\151\x70\x4c\x6f\x6e\147\105\144\x67\145", "\x50\x69\x63\x6b\x54\162\x61\x79\x42\x79\120\x44\x46\x53\x69\x7a\145" => true, "\120\162\x69\x6e\x74\120\141\x67\x65\122\x61\156\147\145" => array(1, 1, 2, 3), "\x4e\x75\155\x43\157\x70\151\145\163" => 2); goto Y2G33; GIhJb: $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); goto aInEU; la3nW: $pdf->Ln(5); goto GGpdv; XnhRy: $pdf->SetFont("\164\151\155\x65\x73", '', 14); goto g3dQM; lMoYX: $pdf->SetKeywords("\124\103\120\x44\x46\x2c\x20\120\x44\106\x2c\40\x65\x78\x61\x6d\x70\154\x65\54\40\164\145\x73\164\54\x20\x67\x75\151\x64\145"); goto HrEhA; gW4dm: $pdf->SetCreator(PDF_CREATOR); goto wZ9g4; Lwrrp: $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); goto Eix3K; GuzpT: $pdf->SetTitle("\x54\x43\x50\x44\106\40\x45\x78\x61\155\160\x6c\x65\x20\x30\x32\71"); goto MUqrj; pRNEY: require_once "\164\143\160\x64\x66\137\151\x6e\143\x6c\x75\x64\145\56\160\150\160"; goto hXQkZ; tQ58s: $pdf->Cell(0, 12, "\104\x49\123\x50\114\x41\x59\40\120\x52\x45\106\x45\x52\105\x4e\103\105\123\x20\x2d\40\120\x41\x47\x45\x20\x32", 0, 0, "\103"); goto mTjSf; YJjsm: $pdf->Cell(0, 12, "\x44\111\x53\x50\x4c\101\131\x20\120\x52\x45\106\x45\x52\x45\x4e\103\x45\123\40\55\40\120\x41\x47\x45\40\x33", 0, 0, "\x43"); goto UfNbX; Eix3K: if (@file_exists(dirname(__FILE__) . "\x2f\x6c\x61\x6e\x67\57\145\x6e\147\56\x70\x68\x70")) { require_once dirname(__FILE__) . "\57\x6c\x61\x6e\x67\57\x65\x6e\x67\x2e\160\150\160"; $pdf->setLanguageArray($l); } goto kUvgm; jyLdZ: $pdf->AddPage(); goto tQ58s; MUqrj: $pdf->SetSubject("\x54\x43\120\x44\x46\40\x54\165\164\157\162\x69\x61\154"); goto lMoYX; hXQkZ: $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, "\125\x54\106\55\70", false); goto gW4dm; GGpdv: $pdf->Write(0, "\131\157\165\x20\x63\x61\x6e\40\165\x73\145\40\x74\150\x65\40\x73\x65\x74\126\x69\145\167\x65\162\x50\x72\145\x66\x65\x72\145\156\143\145\x73\50\51\x20\155\145\x74\150\x6f\144\x20\164\157\x20\143\150\x61\x6e\x67\x65\40\x76\151\145\x77\x65\162\x20\x70\x72\145\x66\x65\162\145\x6e\x63\x65\163\x2e", '', 0, "\x4c", true, 0, false, false, 0); goto jyLdZ; wZ9g4: $pdf->SetAuthor("\116\x69\143\x6f\154\141\x20\x41\x73\x75\156\151"); goto GuzpT; KLQsu: $pdf->SetHeaderMargin(PDF_MARGIN_HEADER); goto TxU2i; TxU2i: $pdf->SetFooterMargin(PDF_MARGIN_FOOTER); goto nVRgv; mTjSf: $pdf->AddPage(); goto YJjsm; aInEU: $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); goto KLQsu; HrEhA: $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . "\40\60\x32\x39", PDF_HEADER_STRING); goto Shl8M; nVRgv: $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); goto Lwrrp; ixqHf: $pdf->Cell(0, 12, "\104\111\x53\x50\x4c\101\x59\x20\x50\x52\105\106\105\x52\105\116\103\105\x53\x20\x2d\x20\120\x41\x47\x45\x20\x31", 1, 1, "\103"); goto la3nW; P_KvP: $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); goto GIhJb; Shl8M: $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN)); goto P_KvP; Y2G33: $pdf->setViewerPreferences($preferences); goto XnhRy; g3dQM: $pdf->AddPage(); goto ixqHf; UfNbX: $pdf->Output("\145\170\141\x6d\x70\154\x65\x5f\60\x32\71\56\160\144\x66", "\x44");
