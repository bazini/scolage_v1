<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:02              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto DRTBT; hM0mO: $pdf->writeHTML($html, true, false, true, false, ''); goto NANiL; NANiL: $pdf->lastPage(); goto gqmMy; oJ7cG: $pdf->AddPage(); goto Z1vNa; UACFR: $pdf->setFooterFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA)); goto GTvXP; bU3Ol: $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT); goto ALymF; cnvOa: $pdf->SetTitle("\x54\103\120\x44\x46\x20\x45\170\x61\155\160\154\145\40\60\66\61"); goto h5ijZ; wuwzh: $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, "\125\124\106\55\70", false); goto kOWGv; DRTBT: require_once "\x74\143\160\144\x66\x5f\x69\156\x63\154\x75\144\x65\x2e\x70\150\160"; goto wuwzh; kOWGv: $pdf->SetCreator(PDF_CREATOR); goto VNdcz; CWnhF: $pdf->SetFont("\x68\145\154\x76\x65\x74\x69\143\x61", '', 10); goto oJ7cG; K7Dy6: $pdf->SetKeywords("\124\x43\120\x44\106\54\40\120\104\106\54\x20\145\170\x61\x6d\160\x6c\x65\x2c\40\x74\x65\x73\x74\54\40\x67\165\x69\144\x65"); goto v76lW; ZqRN4: $pdf->AddPage(); goto pVTep; ALymF: $pdf->SetHeaderMargin(PDF_MARGIN_HEADER); goto svzhn; u57rz: if (@file_exists(dirname(__FILE__) . "\x2f\x6c\x61\156\x67\57\x65\x6e\x67\x2e\160\150\160")) { require_once dirname(__FILE__) . "\x2f\x6c\x61\x6e\147\57\145\x6e\x67\56\x70\x68\160"; $pdf->setLanguageArray($l); } goto CWnhF; cAjyG: $pdf->writeHTML($html, true, false, true, false, ''); goto ZqRN4; zz5YN: $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); goto ys4YW; GTvXP: $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); goto bU3Ol; h5ijZ: $pdf->SetSubject("\124\x43\120\104\106\x20\124\x75\164\x6f\162\151\x61\x6c"); goto K7Dy6; ys4YW: $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO); goto u57rz; pVTep: $html = "\xa\x3c\x68\61\76\110\x54\x4d\114\x20\124\x49\120\x53\40\46\40\124\x52\x49\103\x4b\x53\74\57\x68\61\x3e\12\12\x3c\150\63\x3e\x52\x45\115\x4f\x56\x45\x20\x43\105\x4c\x4c\40\120\101\104\x44\x49\116\x47\x3c\57\x68\x33\x3e\12\74\x70\x72\x65\76\44\160\144\x66\x2d\x3e\x53\145\x74\103\145\x6c\x6c\120\141\144\144\x69\156\x67\x28\x30\51\x3b\x3c\x2f\160\162\x65\x3e\xa\x54\150\x69\163\40\x69\163\40\x75\163\145\x64\x20\164\x6f\40\x72\145\155\x6f\x76\x65\x20\141\x6e\171\40\141\x64\144\151\x74\x69\157\156\x61\x6c\40\x76\x65\x72\164\151\x63\x61\154\40\x73\x70\x61\143\145\x20\x69\x6e\163\151\144\x65\40\141\x20\163\x69\x6e\x67\154\145\x20\x63\145\x6c\x6c\x20\157\146\40\164\145\170\x74\x2e\12\xa\x3c\150\63\x3e\122\105\115\x4f\x56\105\x20\124\101\x47\x20\124\117\120\x20\x41\x4e\x44\x20\102\117\124\x54\117\115\40\x4d\101\122\107\x49\116\x53\74\x2f\150\x33\x3e\xa\x3c\160\162\145\x3e\x24\164\141\147\x76\163\40\x3d\x20\141\x72\x72\141\171\50\x27\160\47\x20\75\76\x20\141\162\x72\141\x79\x28\60\x20\x3d\76\x20\x61\x72\162\x61\x79\x28\47\x68\x27\x20\75\76\x20\x30\54\x20\47\156\x27\x20\x3d\76\40\60\51\54\x20\61\x20\x3d\76\40\141\162\x72\x61\171\x28\x27\150\47\40\x3d\x3e\40\x30\x2c\40\x27\156\47\x20\x3d\x3e\40\60\x29\51\x29\x3b\12\x24\x70\x64\146\x2d\76\163\145\x74\x48\x74\x6d\154\x56\123\x70\141\143\145\x28\44\164\141\x67\x76\163\x29\x3b\x3c\57\160\x72\145\76\xa\x53\151\156\143\x65\40\164\150\145\40\103\123\x53\40\x6d\141\162\x67\x69\156\x20\143\157\x6d\155\x61\x6e\144\x20\151\x73\40\x6e\x6f\x74\40\x79\145\164\x20\151\155\160\154\145\x6d\x65\x6e\164\145\144\x20\157\156\x20\x54\x43\x50\x44\106\54\x20\x79\157\x75\x20\156\145\x65\x64\x20\x74\x6f\x20\163\x65\164\x20\164\x68\145\x20\x73\160\141\143\x69\x6e\x67\40\157\x66\40\x62\154\157\x63\153\x20\164\141\147\x73\x20\x75\x73\151\x6e\147\40\164\150\x65\40\146\157\154\154\157\x77\x69\x6e\x67\40\x6d\x65\x74\150\157\x64\56\12\xa\74\150\63\76\x53\x45\x54\40\x4c\111\116\x45\40\x48\x45\x49\x47\x48\124\x3c\57\x68\63\x3e\12\x3c\160\x72\x65\76\44\160\x64\x66\55\76\x73\x65\164\103\145\154\x6c\x48\x65\151\x67\x68\164\x52\141\x74\x69\157\50\61\56\x32\65\x29\x3b\74\57\160\x72\145\x3e\12\x59\x6f\x75\40\x63\x61\156\40\x75\163\145\40\x74\x68\x65\x20\x66\157\154\x6c\x6f\167\151\156\147\40\x6d\145\164\x68\157\x64\40\x74\157\40\x66\151\156\x65\40\x74\x75\156\x65\x20\164\x68\145\x20\x6c\x69\156\x65\40\150\x65\151\x67\150\164\x20\x28\x74\150\145\x20\x6e\165\x6d\142\145\162\40\x69\x73\x20\141\40\x70\145\x72\x63\x65\x6e\164\x61\x67\145\x20\x72\x65\x6c\141\x74\151\166\x65\x20\x74\x6f\x20\x66\157\156\x74\x20\x68\x65\151\x67\150\164\x29\56\xa\xa\74\x68\63\x3e\x43\x48\101\116\x47\x45\40\124\x48\105\40\120\x49\130\105\x4c\x20\x43\117\116\x56\x45\x52\123\x49\x4f\116\40\122\x41\x54\x49\x4f\74\x2f\x68\x33\x3e\xa\x3c\x70\x72\145\x3e\x24\x70\144\x66\55\x3e\x73\145\x74\111\155\141\147\x65\x53\143\x61\x6c\145\50\x30\56\64\x37\x29\x3b\74\x2f\x70\162\x65\76\12\x54\x68\151\x73\40\x69\163\x20\x75\163\145\144\40\164\157\x20\141\x64\x6a\x75\x73\164\40\x74\150\145\40\143\157\x6e\166\145\x72\163\x69\157\156\x20\x72\x61\164\151\x6f\x20\142\145\x74\167\x65\145\x6e\x20\x70\151\170\x65\x6c\x73\40\x61\x6e\144\40\144\x6f\x63\x75\155\x65\x6e\x74\40\165\156\x69\x74\163\56\40\111\156\x63\x72\x65\x61\163\x65\x20\x74\150\x65\x20\166\x61\x6c\x75\145\40\x74\157\40\x67\x65\x74\40\x73\x6d\141\x6c\154\145\x72\40\157\142\152\145\143\x74\163\56\x3c\142\162\x20\x2f\x3e\12\123\x69\x6e\143\145\40\171\157\165\x20\141\162\145\40\165\163\x69\156\147\x20\160\x69\170\145\x6c\40\165\156\x69\x74\x2c\x20\x74\x68\151\x73\x20\x6d\145\164\x68\x6f\144\x20\x69\163\40\x69\x6d\160\157\162\x74\x61\x6e\164\x20\x74\x6f\x20\x73\145\x74\40\164\150\x65\162\151\147\150\164\x20\172\x6f\157\155\40\146\x61\x63\164\157\162\56\x3c\x62\162\40\57\x3e\74\x62\162\x20\57\76\12\x53\x75\160\160\157\163\x65\x20\x74\x68\x61\164\x20\171\x6f\x75\40\167\141\x6e\x74\x20\x74\157\40\x70\162\151\x6e\x74\40\x61\x20\167\x65\142\40\160\141\147\x65\x20\x6c\141\162\147\145\162\x20\61\60\x32\x34\40\160\151\x78\145\x6c\x73\x20\164\157\40\146\151\154\154\x20\141\154\154\40\164\x68\145\40\x61\166\141\151\154\x61\142\x6c\x65\40\160\141\147\x65\40\167\x69\x64\x74\x68\56\74\x62\x72\40\57\x3e\xa\101\156\40\101\64\40\x70\141\147\145\40\151\x73\40\154\x61\x72\x67\x65\162\x20\x32\x31\60\155\x6d\x20\145\161\x75\151\x76\x61\154\x65\156\164\40\x74\x6f\x20\x38\56\62\x36\x38\40\x69\x6e\143\x68\x65\163\54\40\x69\x66\40\x79\157\x75\40\163\x75\x62\x74\x72\141\x63\164\40\61\x33\x6d\155\40\x28\x30\x2e\65\x31\62\42\51\x20\157\146\x20\x6d\141\162\147\x69\156\x73\40\146\x6f\x72\x20\145\x61\x63\150\x20\x73\x69\x64\145\54\x20\x74\x68\x65\40\x72\x65\x6d\x61\x69\x6e\x69\x6e\x67\x20\163\x70\141\143\145\x20\x69\x73\x20\x31\x38\64\x6d\x6d\x20\x28\67\x2e\62\64\64\40\x69\156\x63\150\145\x73\51\x2e\x3c\x62\x72\40\57\76\xa\x54\x68\145\x20\x64\x65\146\141\x75\154\164\40\x72\x65\163\x6f\x6c\x75\164\151\x6f\156\40\146\157\x72\40\x61\x20\120\x44\106\x20\x64\x6f\143\165\x6d\x65\156\164\x20\151\163\40\63\60\60\40\x44\120\x49\x20\50\x64\157\164\x73\x20\160\x65\162\x20\151\x6e\x63\x68\x29\x2c\x20\x73\x6f\40\x79\x6f\165\x20\x68\x61\x76\x65\40\x37\56\62\x34\x34\x20\x2a\x20\x33\x30\60\40\75\40\x32\x31\67\x33\56\62\40\144\x6f\x74\x73\40\50\164\x68\x69\163\40\x69\x73\x20\164\x68\x65\40\155\141\x78\x69\155\165\155\40\156\165\155\142\x65\x72\x20\x6f\x66\x20\x70\157\x69\x6e\x74\163\x20\171\157\x75\40\x63\x61\x6e\40\160\x72\151\x6e\x74\40\141\164\40\63\x30\60\x20\104\x50\x49\x20\x66\157\x72\x20\x74\150\x65\40\147\x69\166\145\x6e\x20\167\x69\144\x74\150\51\56\x3c\x62\x72\40\57\x3e\12\x54\150\145\x20\x63\157\156\x76\x65\162\x73\x69\157\156\x20\162\x61\164\151\157\40\151\163\x20\x61\160\160\x72\x6f\170\151\x6d\x61\x74\x69\x76\145\x6c\x79\40\61\60\62\64\x20\x2f\40\62\61\x37\63\x2e\62\40\x3d\40\x30\56\x34\67\x20\x70\170\57\x64\x6f\164\x73\74\142\x72\x20\x2f\76\xa\x49\146\x20\x74\150\x65\40\167\145\142\40\160\141\147\145\40\x69\x73\40\154\x61\162\147\145\162\x20\x31\62\x38\60\40\160\x69\x78\145\154\x73\54\x20\157\x6e\x20\164\150\145\40\163\x61\155\x65\x20\101\64\40\x70\141\x67\145\40\x74\150\145\40\143\157\156\x76\145\x72\x73\151\157\156\x20\162\141\164\x69\157\x20\x74\x6f\x20\x75\163\x65\x20\151\163\x20\61\62\70\x30\x20\57\40\62\61\x37\63\x2e\62\x20\75\x20\x30\56\x35\71\40\x70\151\x78\145\154\x73\57\144\157\x74\x73"; goto hM0mO; svzhn: $pdf->SetFooterMargin(PDF_MARGIN_FOOTER); goto zz5YN; Z1vNa: $html = "\x3c\x21\55\55\40\105\x58\x41\x4d\120\x4c\105\40\117\x46\40\x43\x53\x53\x20\x53\124\131\x4c\105\x20\55\x2d\76\xa\x3c\163\x74\x79\154\145\x3e\12\11\150\x31\x20\173\12\11\11\143\x6f\x6c\x6f\162\72\x20\x6e\141\x76\171\73\xa\11\11\x66\x6f\x6e\164\x2d\x66\141\x6d\151\x6c\x79\72\x20\x74\151\x6d\145\x73\73\xa\x9\11\x66\157\156\x74\x2d\163\151\172\145\72\40\62\64\160\x74\73\xa\x9\x9\x74\x65\170\x74\55\x64\145\143\157\162\x61\164\x69\x6f\x6e\x3a\x20\x75\156\x64\145\x72\x6c\151\x6e\145\x3b\12\11\175\xa\x9\160\56\146\x69\162\163\164\x20\173\xa\x9\11\x63\x6f\x6c\157\162\72\40\43\60\x30\63\x33\x30\60\x3b\xa\x9\x9\146\x6f\156\164\x2d\x66\x61\155\x69\154\x79\x3a\40\x68\145\154\x76\x65\164\151\x63\x61\x3b\12\x9\11\146\x6f\156\164\55\x73\x69\x7a\145\72\40\x31\x32\160\164\x3b\xa\x9\175\xa\x9\160\x2e\146\151\x72\x73\x74\40\163\x70\x61\x6e\40\x7b\12\x9\11\143\157\x6c\x6f\x72\72\40\43\x30\60\x36\66\60\60\73\12\11\x9\x66\157\156\x74\x2d\163\x74\x79\x6c\145\x3a\40\x69\164\141\154\x69\143\x3b\xa\x9\175\xa\11\x70\43\x73\x65\143\x6f\x6e\x64\x20\x7b\12\11\11\x63\x6f\154\x6f\x72\x3a\40\x72\x67\142\50\x30\x30\x2c\x36\63\54\61\62\x37\x29\x3b\12\11\x9\146\157\x6e\164\55\146\141\155\x69\x6c\x79\72\x20\164\x69\x6d\x65\163\x3b\xa\x9\x9\146\x6f\156\164\x2d\163\x69\x7a\145\72\x20\61\x32\x70\x74\73\12\11\11\164\x65\x78\164\55\x61\154\x69\x67\156\72\x20\152\165\163\x74\x69\146\171\73\xa\11\x7d\12\11\160\x23\163\x65\143\157\156\144\40\76\40\x73\160\141\x6e\x20\x7b\12\x9\11\x62\141\x63\x6b\147\162\157\165\x6e\x64\55\143\x6f\x6c\157\x72\x3a\x20\x23\x46\x46\x46\106\x41\101\73\xa\11\x7d\xa\x9\x74\x61\142\154\145\56\146\x69\162\163\164\40\x7b\xa\11\11\143\157\154\157\162\72\40\43\60\x30\63\x33\x30\x30\x3b\xa\x9\11\146\x6f\156\x74\55\146\x61\155\151\154\171\72\x20\x68\145\x6c\166\145\x74\151\x63\141\x3b\xa\11\11\x66\x6f\156\164\55\163\151\x7a\x65\x3a\x20\70\x70\164\x3b\xa\x9\11\x62\x6f\162\x64\145\x72\55\154\145\x66\x74\72\x20\63\160\170\40\163\157\154\151\144\x20\x72\145\x64\73\12\x9\11\142\157\x72\144\145\162\x2d\162\x69\x67\150\x74\72\x20\x33\160\x78\x20\163\x6f\154\x69\144\40\43\106\x46\60\x30\106\106\x3b\xa\x9\11\142\x6f\162\x64\145\x72\x2d\x74\x6f\x70\72\x20\63\x70\x78\40\163\x6f\154\151\144\x20\147\x72\x65\145\156\x3b\xa\x9\11\142\157\x72\x64\145\162\x2d\x62\x6f\164\x74\157\155\72\x20\x33\160\x78\40\163\x6f\x6c\x69\144\x20\142\154\x75\x65\73\12\x9\11\142\141\143\x6b\x67\x72\157\165\x6e\x64\x2d\143\157\x6c\x6f\162\x3a\x20\43\x63\143\146\146\x63\x63\x3b\12\x9\175\xa\x9\164\144\x20\173\xa\11\11\142\x6f\162\x64\145\x72\x3a\x20\x32\160\170\40\163\157\154\151\144\x20\142\x6c\165\x65\73\12\11\11\x62\x61\x63\153\x67\x72\x6f\165\x6e\144\x2d\143\157\x6c\x6f\x72\72\40\43\x66\146\x66\146\145\145\73\xa\11\175\xa\11\164\x64\56\x73\x65\x63\157\x6e\144\40\x7b\12\x9\x9\142\x6f\x72\x64\145\x72\72\40\62\x70\170\40\x64\x61\x73\150\x65\144\40\x67\x72\145\145\x6e\73\12\x9\175\xa\x9\144\x69\166\x2e\164\145\163\164\x20\173\12\11\11\x63\157\x6c\x6f\162\72\x20\43\103\103\x30\x30\x30\x30\73\xa\x9\11\142\141\x63\153\147\x72\157\165\156\x64\55\143\x6f\154\157\x72\72\x20\x23\x46\106\106\106\x36\x36\73\12\x9\x9\146\x6f\x6e\164\55\x66\x61\155\x69\154\171\72\x20\150\145\x6c\x76\x65\x74\x69\143\141\x3b\12\11\11\146\157\x6e\x74\x2d\163\151\x7a\145\72\40\x31\60\x70\x74\73\12\x9\11\x62\x6f\x72\144\145\x72\x2d\163\164\171\154\x65\x3a\x20\x73\157\154\151\144\40\163\x6f\154\151\144\x20\x73\x6f\154\x69\x64\40\x73\157\154\151\144\x3b\12\11\x9\142\157\162\144\x65\162\55\167\x69\x64\x74\150\x3a\40\62\160\170\x20\x32\160\x78\x20\62\160\170\x20\62\160\170\73\12\x9\x9\x62\x6f\162\144\x65\162\x2d\143\157\154\x6f\162\72\40\x67\162\145\145\x6e\x20\43\x46\106\x30\x30\x46\x46\40\x62\154\x75\145\40\x72\145\x64\73\xa\x9\11\164\145\170\x74\x2d\x61\x6c\151\147\x6e\x3a\x20\x63\x65\x6e\x74\x65\162\73\xa\11\x7d\12\x9\x2e\x6c\157\x77\145\x72\x63\141\x73\x65\40\x7b\xa\11\11\x74\x65\x78\164\55\x74\x72\141\x6e\163\x66\157\162\155\72\40\x6c\x6f\167\145\162\143\x61\x73\145\73\xa\11\x7d\xa\x9\x2e\165\160\x70\x65\162\x63\141\163\145\40\173\xa\x9\11\164\145\x78\164\x2d\x74\x72\x61\x6e\x73\146\157\x72\x6d\72\40\x75\x70\x70\145\x72\x63\x61\x73\x65\x3b\12\11\175\12\x9\x2e\143\141\x70\151\x74\x61\154\151\x7a\145\40\x7b\xa\x9\x9\164\145\x78\164\55\164\x72\141\156\163\x66\157\x72\155\72\40\x63\141\160\151\164\141\x6c\x69\172\145\73\xa\11\x7d\12\74\x2f\163\x74\171\154\145\x3e\12\12\74\150\61\40\143\154\x61\x73\163\75\x22\x74\x69\164\x6c\x65\42\76\105\170\x61\x6d\160\x6c\x65\40\157\x66\x20\74\151\40\x73\164\x79\154\145\x3d\x22\143\x6f\x6c\157\162\72\43\x39\x39\60\60\x30\x30\42\76\x58\x48\124\115\114\40\x2b\x20\103\123\x53\x3c\x2f\x69\76\x3c\x2f\150\x31\x3e\12\12\74\160\40\143\x6c\x61\x73\x73\x3d\x22\146\x69\x72\163\164\42\76\x45\170\141\x6d\x70\x6c\x65\40\157\146\40\160\141\162\141\147\x72\141\160\x68\40\167\151\x74\x68\40\x63\x6c\141\x73\163\x20\x73\x65\154\x65\x63\x74\x6f\x72\x2e\40\74\163\160\x61\156\x3e\114\157\x72\x65\x6d\x20\151\x70\x73\x75\x6d\x20\x64\157\x6c\x6f\162\40\163\x69\x74\x20\141\155\x65\x74\54\x20\143\x6f\x6e\163\145\143\164\145\164\165\x72\40\x61\144\x69\x70\x69\163\143\x69\x6e\147\40\145\x6c\151\164\56\40\x49\x6e\x20\163\x65\x64\x20\151\155\160\x65\162\144\x69\x65\x74\x20\154\x65\x63\164\165\163\56\40\120\150\141\x73\x65\x6c\154\165\163\40\x71\165\151\163\x20\x76\145\154\x69\x74\x20\x76\145\154\151\164\54\40\x6e\157\x6e\x20\x63\157\156\x64\151\x6d\145\x6e\164\x75\155\40\161\165\x61\x6d\56\40\123\145\144\40\x6e\145\161\165\145\x20\x75\162\156\141\x2c\40\x75\x6c\164\x72\151\143\x65\x73\x20\x61\x63\40\166\x6f\x6c\x75\164\x70\141\164\40\x76\x65\x6c\54\40\x6c\x61\x6f\162\x65\145\x74\x20\x76\x69\164\x61\145\x20\x61\x75\x67\x75\x65\x2e\x20\x53\x65\x64\40\x76\145\154\40\x76\x65\x6c\151\x74\40\145\x72\141\x74\x2e\x20\x43\154\x61\x73\163\x20\x61\x70\164\x65\x6e\x74\40\x74\141\x63\151\x74\151\40\x73\157\143\151\x6f\x73\161\165\40\141\144\40\154\x69\x74\157\x72\141\x20\164\157\162\161\x75\145\x6e\x74\40\x70\x65\162\40\x63\157\x6e\165\x62\x69\x61\x20\x6e\x6f\163\x74\162\x61\54\40\x70\145\162\40\151\x6e\x63\x65\160\164\x6f\x73\x20\150\151\155\145\156\x61\145\157\x73\56\x20\103\x72\x61\163\40\x65\x67\x65\x74\40\166\145\154\151\x74\40\156\165\154\x6c\141\54\x20\145\165\x20\x73\141\147\151\x74\164\x69\163\40\x65\154\x69\x74\x2e\x20\116\165\156\x63\40\141\x63\x20\x61\162\x63\165\40\x65\x73\164\54\40\151\156\x20\x6c\x6f\x62\157\x72\164\x69\x73\40\164\145\x6c\154\165\x73\56\40\120\162\x61\x65\163\145\x6e\x74\40\143\157\x6e\x64\151\x6d\x65\x6e\x74\165\x6d\x20\162\x68\157\x6e\143\x75\163\x20\163\x6f\144\141\154\x65\163\56\40\111\156\x20\x68\x61\x63\x20\150\x61\142\x69\164\141\x73\163\x65\40\x70\154\x61\x74\x65\141\x20\x64\x69\x63\164\x75\x6d\163\x74\x2e\40\x50\x72\x6f\151\156\40\160\157\x72\164\x61\x20\145\162\157\x73\x20\x70\150\141\x72\x65\164\162\141\40\x65\156\151\155\40\164\x69\156\143\x69\144\x75\156\x74\40\144\151\x67\156\x69\x73\163\151\155\x20\x6e\145\x63\x20\x76\145\x6c\x20\144\x6f\x6c\157\162\x2e\x20\x43\162\x61\163\x20\163\141\160\x69\145\156\x20\x65\154\151\164\54\x20\x6f\162\x6e\x61\162\145\40\141\143\x20\x64\151\x67\x6e\151\x73\163\151\x6d\x20\145\x75\54\x20\x75\x6c\x74\162\x69\143\x69\145\x73\40\x61\143\40\145\162\157\163\56\x20\115\141\145\143\x65\156\x61\x73\x20\141\165\x67\x75\x65\40\155\141\x67\156\141\x2c\x20\x75\x6c\x74\162\x69\x63\x65\163\40\x61\40\143\157\156\x67\x75\x65\40\x69\156\x2c\x20\x6d\157\x6c\x6c\151\163\40\x65\165\x20\x6e\x75\154\x6c\141\56\x20\x4e\x75\156\x63\x20\166\145\156\x65\156\141\164\x69\163\40\155\141\x73\163\141\40\141\x74\x20\x65\163\164\40\145\x6c\145\x69\146\x65\156\x64\40\146\141\165\x63\151\142\x75\163\x2e\40\126\151\166\x61\x6d\x75\163\x20\x73\x65\x64\40\x72\x69\x73\165\163\40\x6c\x65\143\x74\165\x73\54\x20\x6e\145\x63\40\151\156\164\x65\x72\144\165\155\x20\x6e\x75\156\143\56\74\x2f\163\x70\141\x6e\x3e\74\x2f\x70\x3e\12\12\74\x70\x20\151\144\x3d\42\163\x65\143\x6f\156\144\42\x3e\105\170\141\x6d\x70\154\x65\x20\157\x66\40\160\x61\162\x61\147\162\x61\x70\150\40\167\x69\164\x68\40\x49\104\40\x73\145\x6c\145\x63\x74\157\162\56\40\x3c\163\x70\141\x6e\76\106\x75\163\143\145\x20\x65\164\40\x66\145\154\151\x73\40\x76\151\x74\x61\x65\40\x64\151\141\x6d\40\154\157\142\157\x72\x74\151\163\x20\x73\x6f\x6c\x6c\x69\x63\x69\x74\165\144\151\x6e\x2e\x20\101\145\156\x65\x61\156\x20\164\x69\x6e\143\151\x64\165\x6e\x74\40\x61\x63\143\165\x6d\x73\x61\156\x20\156\x69\x73\x69\x2c\x20\151\x64\x20\x76\x65\150\x69\x63\165\154\x61\40\x71\x75\141\155\x20\154\141\x6f\162\145\145\x74\40\145\x6c\x65\x6d\x65\156\x74\x75\155\x2e\x20\120\x68\x61\x73\x65\154\154\165\163\x20\x65\147\x65\x73\164\141\x73\40\x69\x6e\x74\x65\x72\144\165\155\x20\x65\162\141\164\54\40\x65\x74\x20\166\x69\x76\145\x72\162\141\x20\151\x70\163\x75\x6d\x20\165\154\164\162\151\x63\x69\145\163\x20\141\x63\56\40\120\x72\x61\145\163\145\156\x74\x20\x73\x61\x67\x69\164\164\151\x73\x20\x61\x75\147\x75\x65\x20\x61\x74\40\141\x75\147\165\x65\40\166\157\x6c\x75\164\160\x61\164\40\145\x6c\x65\x69\146\x65\156\x64\56\x20\103\x72\141\163\x20\156\145\x63\x20\x6f\162\143\x69\40\x6e\145\x71\165\x65\x2e\40\x4d\x61\165\x72\x69\163\40\x62\151\142\145\156\144\x75\x6d\40\160\157\163\x75\x65\162\x65\40\142\154\141\156\x64\x69\x74\x2e\x20\104\x6f\x6e\145\143\40\146\145\x75\147\151\x61\x74\40\x6d\157\154\x6c\151\163\x20\x64\x75\151\x20\x73\x69\x74\40\x61\x6d\145\x74\40\160\x65\154\154\x65\x6e\164\x65\163\161\165\x65\56\x20\x53\145\x64\x20\x61\40\x65\x6e\x69\x6d\x20\152\x75\163\164\x6f\56\x20\104\x6f\156\x65\x63\40\x74\x69\x6e\143\151\144\x75\x6e\164\54\x20\156\x69\163\x6c\40\145\x67\145\164\x20\x65\x6c\145\155\x65\156\x74\x75\x6d\40\141\154\x69\x71\x75\141\x6d\x2c\x20\x6f\144\151\157\40\151\x70\163\165\x6d\x20\x75\154\164\162\151\x63\x65\x73\40\161\165\141\155\54\x20\145\x75\x20\x70\157\x72\x74\164\x69\x74\x6f\162\40\x6c\151\x67\165\154\x61\x20\x75\162\156\141\x20\141\x74\x20\x6c\157\x72\145\155\56\40\x44\x6f\x6e\145\143\x20\166\x61\162\x69\x75\x73\54\40\x65\162\x6f\163\x20\x65\164\40\143\157\x6e\166\141\x6c\x6c\151\163\40\154\141\157\162\x65\x65\164\x2c\x20\x6c\x69\147\165\154\x61\x20\164\x65\x6c\x6c\x75\x73\40\x63\x6f\156\163\145\161\165\x61\164\40\146\x65\154\151\163\x2c\x20\x75\164\x20\x6f\162\156\141\x72\x65\40\155\145\164\165\x73\x20\164\145\154\154\x75\x73\x20\163\157\144\x61\154\145\163\40\166\145\x6c\x69\164\x2e\x20\104\165\x69\x73\x20\x73\x65\x64\x20\144\x69\141\x6d\40\x61\156\x74\x65\56\x20\125\x74\x20\x72\x75\x74\162\165\155\x20\155\141\154\x65\163\165\141\144\x61\40\x6d\141\x73\x73\x61\54\40\x76\x69\x74\141\145\40\x63\x6f\x6e\x73\x65\x63\x74\x65\x74\x75\x72\x20\x69\x70\x73\165\155\40\x72\x68\157\156\x63\165\x73\x20\x73\145\144\x2e\40\x53\165\163\x70\x65\x6e\x64\151\163\x73\145\x20\160\x6f\x74\145\x6e\164\151\56\x20\120\145\154\x6c\145\x6e\x74\145\x73\x71\x75\145\x20\x61\x20\143\157\156\147\x75\x65\40\155\x61\163\163\141\x2e\x3c\57\x73\160\141\x6e\x3e\74\57\160\x3e\xa\xa\74\x64\x69\x76\x20\x63\x6c\141\163\163\x3d\x22\x74\145\x73\164\x22\76\145\x78\x61\x6d\x70\154\x65\40\x6f\x66\40\x44\x49\126\40\167\x69\164\x68\x20\x62\157\162\x64\x65\162\40\141\156\x64\40\x66\x69\x6c\154\56\12\74\x62\162\40\x2f\76\x4c\157\162\145\x6d\x20\151\x70\x73\165\x6d\x20\x64\157\x6c\x6f\162\x20\163\151\164\x20\141\155\145\x74\x2c\x20\x63\157\156\x73\x65\x63\164\x65\164\x75\162\x20\x61\x64\151\160\151\x73\x63\x69\x6e\147\40\x65\x6c\151\164\x2e\12\x3c\x62\x72\40\57\x3e\74\x73\x70\141\156\x20\x63\x6c\141\163\x73\75\x22\x6c\x6f\x77\145\x72\143\x61\163\145\x22\76\164\x65\170\164\x2d\164\162\141\156\163\x66\x6f\x72\155\40\74\142\76\114\x4f\127\105\x52\x43\101\123\x45\74\x2f\142\x3e\x20\x4c\x6f\x72\x65\155\40\x69\x70\x73\165\x6d\40\x64\157\154\x6f\x72\x20\163\151\x74\x20\x61\155\145\x74\x2c\40\143\157\x6e\x73\x65\143\164\145\164\x75\162\x20\x61\144\x69\160\x69\x73\x63\x69\x6e\x67\40\145\154\x69\x74\x2e\74\x2f\x73\x70\141\x6e\76\xa\x3c\x62\162\40\57\x3e\74\x73\x70\x61\156\x20\143\154\141\x73\x73\x3d\x22\165\160\x70\x65\162\143\141\163\145\x22\x3e\x74\145\170\164\x2d\164\162\141\156\163\146\x6f\x72\x6d\40\74\x62\76\165\160\160\x65\x72\x63\x61\x73\145\74\57\x62\x3e\x20\x4c\157\162\x65\155\x20\x69\160\163\x75\155\x20\x64\x6f\x6c\157\162\x20\x73\x69\164\40\141\x6d\x65\x74\54\40\x63\x6f\156\x73\x65\x63\164\145\x74\165\162\x20\x61\x64\x69\160\151\163\143\151\156\147\x20\x65\x6c\151\164\x2e\x3c\57\x73\160\141\156\x3e\12\74\x62\x72\x20\x2f\76\x3c\x73\x70\141\x6e\x20\143\154\x61\x73\x73\x3d\x22\143\x61\x70\151\x74\141\154\x69\x7a\145\42\76\x74\x65\x78\x74\55\164\x72\141\x6e\x73\x66\157\162\155\x20\74\x62\x3e\143\x41\x50\111\x54\x41\114\x49\x5a\105\74\57\142\76\x20\x4c\x6f\162\x65\155\x20\151\x70\163\x75\155\40\x64\x6f\154\157\162\40\163\151\x74\40\141\x6d\145\164\x2c\x20\x63\x6f\x6e\x73\145\143\x74\x65\x74\165\162\x20\141\x64\x69\x70\x69\163\143\151\x6e\x67\x20\145\x6c\x69\164\56\x3c\x2f\x73\160\141\x6e\x3e\12\x3c\x2f\x64\x69\x76\x3e\12\xa\x3c\142\x72\40\57\x3e\xa\12\x3c\164\x61\x62\154\145\x20\143\154\x61\x73\163\x3d\x22\x66\151\x72\x73\x74\42\40\x63\145\x6c\154\160\141\144\144\151\x6e\147\x3d\42\64\x22\40\x63\145\154\x6c\x73\x70\x61\x63\x69\156\x67\75\42\66\x22\76\12\40\x3c\164\x72\x3e\12\40\x20\74\164\144\40\x77\x69\144\164\150\75\x22\x33\60\42\x20\141\154\151\x67\156\75\42\143\145\156\164\x65\x72\x22\76\74\142\x3e\116\157\56\x3c\x2f\x62\x3e\x3c\57\164\144\x3e\xa\40\x20\x3c\164\x64\40\x77\x69\144\x74\150\75\42\61\64\60\x22\x20\141\154\x69\x67\156\75\42\x63\145\156\x74\145\162\42\x20\x62\147\x63\157\x6c\x6f\x72\75\42\x23\106\x46\106\x46\60\60\x22\x3e\x3c\142\x3e\x58\x58\130\130\x3c\57\x62\x3e\x3c\x2f\164\144\76\xa\40\40\x3c\x74\x64\40\167\151\144\x74\x68\75\x22\61\64\x30\42\40\141\x6c\151\x67\156\x3d\x22\x63\x65\156\x74\145\x72\42\x3e\x3c\142\76\x58\x58\130\x58\x3c\57\x62\76\74\57\x74\x64\76\12\x20\x20\74\x74\144\40\x77\151\144\164\150\75\42\x38\60\42\40\x61\154\151\147\x6e\x3d\x22\x63\x65\156\x74\145\162\42\x3e\x20\74\142\x3e\130\x58\130\x58\x3c\57\142\76\x3c\57\164\144\76\xa\x20\40\x3c\x74\144\40\x77\x69\144\164\150\75\x22\x38\60\42\40\141\154\x69\147\156\x3d\42\143\x65\x6e\164\x65\x72\x22\x3e\x3c\x62\76\x58\130\x58\x58\x3c\57\142\76\74\57\x74\x64\x3e\12\40\40\x3c\x74\144\40\167\151\x64\x74\x68\75\x22\64\65\42\40\141\154\151\147\x6e\x3d\42\143\x65\156\x74\x65\162\42\76\x3c\142\76\130\130\130\x58\x3c\x2f\142\76\x3c\57\x74\x64\76\12\x20\74\57\164\x72\x3e\12\x20\74\x74\162\76\12\40\40\74\164\144\40\167\151\144\x74\x68\x3d\x22\63\60\42\40\x61\154\151\147\x6e\75\x22\143\x65\x6e\164\x65\x72\42\x3e\x31\x2e\74\57\164\x64\76\xa\x20\40\74\164\144\x20\167\x69\144\x74\x68\75\x22\61\64\60\42\40\162\x6f\x77\x73\x70\141\x6e\75\x22\x36\x22\x20\x63\154\141\163\163\x3d\x22\x73\x65\x63\x6f\156\144\42\76\130\x58\130\x58\x3c\142\162\x20\57\76\x58\x58\x58\x58\x3c\142\x72\x20\57\76\x58\x58\130\x58\x3c\x62\x72\x20\x2f\x3e\x58\x58\130\130\x3c\x62\162\x20\x2f\x3e\130\130\130\x58\x3c\142\162\40\x2f\x3e\x58\x58\130\130\74\x62\x72\40\x2f\x3e\130\130\130\130\x3c\x62\x72\x20\x2f\76\130\x58\x58\130\x3c\x2f\x74\x64\x3e\xa\x20\40\x3c\164\x64\x20\x77\x69\x64\164\150\x3d\42\x31\64\60\x22\76\130\x58\x58\x58\x3c\x62\x72\x20\x2f\x3e\130\130\130\130\x3c\57\164\x64\76\12\x20\x20\74\x74\x64\x20\x77\151\144\164\150\x3d\x22\70\x30\x22\x3e\130\130\130\130\74\142\162\x20\x2f\76\130\x58\130\130\x3c\x2f\164\x64\x3e\xa\40\40\74\x74\x64\40\167\x69\144\x74\150\75\42\70\60\42\x3e\130\130\130\130\74\57\164\x64\76\12\40\x20\x3c\164\144\40\141\154\x69\147\x6e\x3d\42\143\145\x6e\x74\x65\x72\42\x20\167\x69\x64\164\x68\75\42\x34\65\42\76\x58\130\130\x58\x3c\x62\162\40\57\x3e\130\130\130\x58\74\57\164\144\76\xa\40\x3c\x2f\x74\x72\76\xa\40\74\164\x72\76\12\x20\40\74\x74\x64\40\x77\151\x64\x74\150\x3d\42\63\60\42\40\x61\154\151\x67\x6e\75\x22\143\145\x6e\164\145\x72\42\40\162\x6f\167\163\x70\x61\x6e\75\x22\x33\42\76\62\x2e\74\x2f\x74\x64\76\xa\40\x20\x3c\164\x64\40\x77\151\144\164\150\x3d\42\x31\x34\x30\x22\40\162\157\x77\163\160\141\156\x3d\x22\x33\x22\76\x58\x58\130\x58\x3c\x62\162\x20\57\76\130\130\130\x58\74\x2f\x74\x64\76\12\40\40\x3c\x74\x64\40\x77\x69\144\164\150\75\42\x38\x30\x22\x3e\x58\x58\x58\x58\x3c\142\162\x20\57\76\130\x58\x58\130\x3c\x2f\164\144\76\12\x20\x20\x3c\164\x64\x20\167\151\144\x74\x68\x3d\x22\x38\60\x22\76\130\130\x58\130\74\142\162\40\x2f\76\130\130\x58\x58\x3c\57\164\x64\x3e\12\x20\x20\x3c\x74\x64\40\141\x6c\151\147\x6e\x3d\x22\143\145\156\164\x65\x72\x22\x20\x77\x69\144\x74\150\75\42\64\65\x22\x3e\130\130\x58\130\74\142\162\x20\57\76\130\x58\x58\130\74\x2f\x74\x64\76\12\x20\74\57\x74\162\76\12\x20\74\164\162\x3e\12\x20\40\x3c\x74\x64\x20\167\151\144\164\150\x3d\x22\x38\60\42\76\130\x58\x58\130\74\142\x72\40\x2f\x3e\130\130\x58\130\x3c\142\162\40\x2f\76\130\130\x58\x58\74\142\x72\40\x2f\76\130\130\x58\130\74\x2f\x74\x64\x3e\xa\x20\x20\74\164\144\40\167\151\144\164\x68\x3d\x22\x38\x30\42\x3e\x58\x58\130\130\74\x62\162\x20\57\x3e\x58\x58\x58\130\74\57\164\x64\76\12\x20\40\74\164\144\x20\141\x6c\151\147\x6e\x3d\42\x63\145\x6e\164\145\x72\x22\40\x77\151\x64\x74\150\x3d\x22\x34\x35\42\x3e\x58\130\x58\130\x3c\x62\162\40\57\x3e\130\x58\x58\x58\x3c\57\164\x64\76\xa\x20\x3c\x2f\164\x72\x3e\xa\x20\74\164\162\x3e\xa\x20\40\x3c\x74\144\40\167\x69\144\x74\x68\x3d\x22\70\x30\x22\x20\162\x6f\167\x73\x70\x61\156\75\42\x32\42\40\76\130\x58\x58\x58\x3c\x62\x72\40\x2f\76\x58\x58\130\130\74\142\162\40\x2f\76\130\130\x58\x58\x3c\x62\x72\40\x2f\76\x58\x58\x58\x58\74\x62\162\40\x2f\x3e\130\x58\130\130\x3c\142\x72\x20\57\76\x58\x58\130\130\74\142\162\40\57\76\x58\x58\x58\x58\74\x62\162\x20\57\76\x58\x58\130\x58\74\57\x74\x64\x3e\xa\40\40\x3c\x74\144\40\x77\151\144\164\x68\75\42\70\x30\42\76\130\130\130\x58\74\x62\x72\x20\x2f\x3e\x58\x58\130\130\74\57\x74\x64\76\12\40\x20\74\x74\x64\40\x61\x6c\151\x67\156\75\x22\x63\145\x6e\164\x65\x72\42\x20\167\151\x64\164\150\75\x22\64\x35\x22\x3e\130\130\130\x58\x3c\142\162\x20\57\x3e\130\x58\x58\x58\74\x2f\x74\144\76\12\40\74\57\164\162\x3e\12\x20\x3c\x74\x72\x3e\xa\40\x20\x3c\164\144\x20\x77\151\144\164\150\75\42\x33\x30\42\40\141\x6c\151\x67\156\75\x22\143\145\156\164\x65\x72\42\76\x33\56\74\57\164\144\x3e\xa\40\x20\x3c\x74\x64\40\x77\151\144\164\150\75\x22\61\x34\60\x22\76\130\130\x58\130\x3c\x62\162\x20\x2f\x3e\x58\x58\130\x58\74\x2f\164\144\x3e\xa\40\x20\x3c\164\x64\x20\x77\x69\x64\x74\150\75\42\70\60\42\x3e\130\x58\x58\x58\x3c\x62\x72\40\57\76\x58\x58\x58\130\x3c\57\164\x64\x3e\12\x20\x20\x3c\x74\144\40\141\x6c\x69\x67\156\75\x22\x63\145\x6e\x74\x65\162\x22\x20\167\x69\144\x74\150\75\x22\64\65\x22\x3e\x58\130\130\x58\74\142\162\x20\x2f\76\x58\130\x58\130\x3c\57\164\x64\x3e\xa\40\74\x2f\164\x72\x3e\12\x20\x3c\164\x72\40\x62\147\143\x6f\x6c\x6f\162\x3d\x22\x23\106\106\x46\106\x38\60\42\76\xa\40\40\74\164\x64\40\167\151\144\164\150\75\x22\63\60\x22\40\x61\154\x69\x67\x6e\x3d\x22\143\145\156\164\145\x72\42\x3e\x34\x2e\x3c\x2f\x74\x64\76\12\40\40\x3c\164\144\x20\167\151\144\x74\150\75\42\x31\x34\x30\42\x20\142\147\143\x6f\x6c\x6f\162\75\42\x23\x30\60\x43\x43\60\x30\x22\x20\x63\x6f\154\157\x72\75\42\x23\106\106\106\106\x30\x30\x22\76\130\130\x58\130\74\142\162\x20\57\x3e\130\130\x58\x58\74\57\164\144\x3e\xa\x20\40\x3c\x74\x64\40\x77\x69\144\x74\x68\75\42\70\60\x22\x3e\x58\x58\x58\x58\74\142\x72\x20\57\76\x58\130\x58\130\74\57\164\144\x3e\xa\x20\x20\74\164\x64\40\x77\x69\144\164\x68\75\42\x38\x30\x22\x3e\130\x58\x58\x58\x3c\x62\162\40\57\76\130\x58\x58\130\74\57\x74\144\x3e\12\x20\x20\74\x74\144\40\x61\154\x69\147\156\x3d\42\143\x65\x6e\x74\145\x72\x22\x20\167\151\144\x74\150\x3d\x22\64\65\42\x3e\130\x58\130\x58\74\x62\162\40\x2f\x3e\x58\x58\130\x58\x3c\57\x74\144\x3e\12\x20\74\57\164\162\76\12\74\57\164\141\x62\154\x65\76"; goto cAjyG; v76lW: $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . "\40\x30\x36\61", PDF_HEADER_STRING); goto nYtVi; nYtVi: $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN)); goto UACFR; VNdcz: $pdf->SetAuthor("\116\151\143\157\x6c\x61\x20\x41\x73\x75\x6e\151"); goto cnvOa; gqmMy: $pdf->Output("\145\x78\x61\x6d\160\x6c\145\x5f\x30\66\61\x2e\x70\x64\146", "\111");
