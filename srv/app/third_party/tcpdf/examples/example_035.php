<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto k6UZA; PsjCx: $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . "\x20\60\63\65", PDF_HEADER_STRING); goto T30nG; BEHba: $pdf->MultiCell(60, 4, $text, "\124\102", "\x43", 1, 0); goto Wmdf5; tiYUx: $pdf->SetTextColor(0, 0, 255); goto GPQWQ; AsiU9: $pdf->SetTitle("\x54\x43\120\104\x46\x20\105\x78\141\155\x70\x6c\x65\40\60\x33\65"); goto YAemP; gp9S1: $pdf->SetLineStyle(array("\167\151\144\164\x68" => 0.5, "\143\x61\160" => "\x62\x75\x74\164", "\x6a\157\x69\156" => "\155\151\x74\145\162", "\144\141\163\x68" => 0, "\143\x6f\154\x6f\x72" => array(0, 0, 255))); goto TvSBA; IIa4e: $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); goto xHs72; GPQWQ: $pdf->MultiCell(60, 4, $text, 1, "\103", 1, 0); goto X7tUT; WMwx3: $pdf->SetTextColor(255, 0, 255); goto nDf1c; k6UZA: require_once "\x74\x63\160\144\146\137\x69\156\x63\x6c\165\x64\145\56\160\x68\160"; goto XSfig; Ww2GN: $text = "\104\x55\x4d\x4d\131"; goto MrSf2; TYRL1: $pdf->SetFillColor(0, 0, 255); goto URZnq; kCbGK: $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); goto MkUlN; Seicn: $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); goto kCbGK; YAemP: $pdf->SetSubject("\124\103\x50\104\x46\40\x54\165\x74\x6f\x72\x69\141\x6c"); goto X4efk; MkUlN: if (@file_exists(dirname(__FILE__) . "\x2f\x6c\141\156\x67\57\x65\156\x67\x2e\x70\x68\160")) { require_once dirname(__FILE__) . "\57\154\141\x6e\147\x2f\145\x6e\147\56\160\x68\x70"; $pdf->setLanguageArray($l); } goto el6ue; dX5iu: $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); goto IIa4e; X4efk: $pdf->SetKeywords("\124\x43\120\x44\x46\54\x20\x50\x44\x46\54\40\x65\170\x61\155\x70\x6c\x65\54\x20\164\145\x73\164\x2c\x20\147\x75\151\x64\x65"); goto PsjCx; nDf1c: $pdf->MultiCell(60, 4, $text, 1, "\x43", 1, 1); goto n2IBm; URZnq: $pdf->SetTextColor(255, 255, 0); goto BEHba; MrSf2: $pdf->Cell(0, 0, $text, 1, 1, "\114", 1, 0); goto prk25; WcCH2: $pdf->SetAuthor("\116\151\x63\157\x6c\141\x20\x41\163\165\156\x69"); goto AsiU9; KOHCp: $pdf->SetFooterMargin(PDF_MARGIN_FOOTER); goto Seicn; X7tUT: $pdf->SetLineStyle(array("\167\151\144\x74\150" => 0.5, "\143\x61\x70" => "\142\x75\164\164", "\x6a\x6f\x69\x6e" => "\x6d\x69\164\145\162", "\144\x61\x73\150" => 0, "\143\x6f\x6c\x6f\162" => array(255, 255, 0))); goto TYRL1; UG4uk: $pdf->SetLineStyle(array("\167\151\144\x74\x68" => 0.5, "\x63\141\x70" => "\x62\x75\x74\164", "\x6a\x6f\151\156" => "\x6d\x69\x74\x65\162", "\x64\141\x73\150" => 4, "\x63\x6f\x6c\157\162" => array(255, 0, 0))); goto Utb27; eejjR: $pdf->Write(0, "\105\170\141\155\160\x6c\x65\40\157\146\40\123\x65\164\x4c\x69\x6e\x65\x53\164\171\154\x65\50\51\40\x6d\145\x74\150\x6f\144", '', 0, "\114", true, 0, false, false, 0); goto jD8U6; XSfig: $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, "\x55\124\x46\55\70", false); goto U1OWN; sFfxd: $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); goto dX5iu; Utb27: $pdf->SetFillColor(255, 255, 128); goto Sx4pg; prk25: $pdf->Ln(); goto gp9S1; U1OWN: $pdf->SetCreator(PDF_CREATOR); goto WcCH2; VVD3t: $pdf->AddPage(); goto eejjR; Sx4pg: $pdf->SetTextColor(0, 0, 128); goto Ww2GN; Wmdf5: $pdf->SetLineStyle(array("\x77\x69\x64\164\150" => 0.5, "\x63\141\160" => "\142\x75\x74\x74", "\152\x6f\151\156" => "\155\x69\164\145\x72", "\144\x61\x73\x68" => 0, "\143\157\x6c\x6f\162" => array(255, 0, 255))); goto H7Ch5; TvSBA: $pdf->SetFillColor(255, 255, 0); goto tiYUx; H7Ch5: $pdf->SetFillColor(0, 255, 0); goto WMwx3; T30nG: $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN)); goto sFfxd; el6ue: $pdf->SetFont("\x74\151\x6d\145\163", "\102\x49", 16); goto VVD3t; jD8U6: $pdf->Ln(); goto UG4uk; xHs72: $pdf->SetHeaderMargin(PDF_MARGIN_HEADER); goto KOHCp; n2IBm: $pdf->Output("\x65\x78\141\155\160\x6c\145\137\x30\x33\65\56\160\x64\146", "\x49");
