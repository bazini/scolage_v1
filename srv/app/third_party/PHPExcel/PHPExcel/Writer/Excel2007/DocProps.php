<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Writer_Excel2007_DocProps extends PHPExcel_Writer_Excel2007_WriterPart { public function writeDocPropsApp(PHPExcel $pPHPExcel = null) { goto qNHGy; G0VcJ: $objWriter->writeElement("\115\x61\x6e\141\147\145\162", $pPHPExcel->getProperties()->getManager()); goto RdeV1; gxbOg: $objWriter->endElement(); goto nCAst; qNHGy: $objWriter = null; goto YB9cx; fCS7n: $objWriter->startElement("\x48\145\141\144\151\x6e\147\120\x61\151\x72\x73"); goto DJrVN; NJXA4: $objWriter->writeElement("\110\171\160\145\x72\x6c\151\156\x6b\x73\x43\x68\141\x6e\147\145\144", "\x66\141\x6c\163\x65"); goto HlZso; w21F1: $objWriter->endElement(); goto KZprn; LwjLg: $objWriter->endElement(); goto CVL7k; YB9cx: if ($this->getParentWriter()->getUseDiskCaching()) { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_DISK, $this->getParentWriter()->getDiskCachingDirectory()); } else { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_MEMORY); } goto ofIOf; Lgb4p: $objWriter->endElement(); goto LwjLg; ga1Cn: $objWriter->writeAttribute("\x62\x61\x73\145\x54\x79\160\x65", "\x76\141\x72\x69\141\x6e\x74"); goto KV1tt; oskGj: $objWriter->writeElement("\166\x74\72\154\x70\x73\x74\162", "\127\x6f\162\x6b\x73\150\145\x65\x74\x73"); goto eB9_1; ofIOf: $objWriter->startDocument("\x31\x2e\60", "\x55\124\106\x2d\70", "\x79\x65\163"); goto qqNA3; Q5okC: $objWriter->writeElement("\123\150\141\162\145\144\x44\157\x63", "\146\x61\154\163\145"); goto NJXA4; ugdhU: $objWriter->writeAttribute("\x73\151\172\x65", "\62"); goto ga1Cn; nCAst: return $objWriter->getData(); goto Xgtde; qqNA3: $objWriter->startElement("\120\x72\157\x70\x65\x72\x74\151\x65\x73"); goto qR8ji; GoT2d: $objWriter->writeElement("\104\x6f\x63\x53\x65\143\165\162\151\164\x79", "\60"); goto qO13w; DJrVN: $objWriter->startElement("\x76\x74\x3a\166\145\x63\164\157\x72"); goto ugdhU; vEFcy: $objWriter->startElement("\124\x69\164\154\x65\163\x4f\x66\x50\x61\162\x74\163"); goto WW1jv; WLgM0: $objWriter->writeAttribute("\x73\151\172\145", $pPHPExcel->getSheetCount()); goto HalPa; FgyWj: $objWriter->startElement("\166\x74\72\166\x61\x72\x69\141\156\x74"); goto jw3OB; o__x4: $objWriter->writeElement("\101\160\160\x6c\151\143\x61\x74\151\157\156", "\115\x69\143\162\157\x73\x6f\146\164\40\x45\170\143\145\154"); goto GoT2d; HalPa: $objWriter->writeAttribute("\142\141\x73\x65\x54\x79\160\145", "\x6c\x70\x73\x74\162"); goto VfjlI; CVL7k: $objWriter->endElement(); goto vEFcy; VfjlI: $sheetCount = $pPHPExcel->getSheetCount(); goto T0FcG; WW1jv: $objWriter->startElement("\x76\164\72\x76\x65\143\164\x6f\x72"); goto WLgM0; eB9_1: $objWriter->endElement(); goto FgyWj; Y5Kjz: $objWriter->endElement(); goto w21F1; T0FcG: for ($i = 0; $i < $sheetCount; ++$i) { $objWriter->writeElement("\x76\x74\x3a\x6c\160\x73\x74\162", $pPHPExcel->getSheet($i)->getTitle()); } goto Y5Kjz; RdeV1: $objWriter->writeElement("\114\x69\x6e\153\163\x55\160\x54\157\x44\141\x74\145", "\146\x61\154\163\x65"); goto Q5okC; qO13w: $objWriter->writeElement("\123\x63\x61\x6c\145\103\x72\157\x70", "\x66\141\154\x73\145"); goto fCS7n; qR8ji: $objWriter->writeAttribute("\170\155\154\156\163", "\x68\164\x74\x70\x3a\57\x2f\163\143\x68\x65\x6d\x61\163\56\157\160\145\x6e\x78\155\154\146\x6f\x72\x6d\141\164\163\56\x6f\x72\147\57\157\x66\x66\x69\143\x65\x44\157\x63\x75\x6d\x65\x6e\164\x2f\62\x30\x30\x36\57\145\170\x74\x65\x6e\x64\145\144\55\160\162\x6f\160\145\162\164\151\x65\163"); goto TR0Cx; KV1tt: $objWriter->startElement("\x76\164\x3a\166\141\162\151\141\x6e\164"); goto oskGj; KZprn: $objWriter->writeElement("\x43\157\155\x70\141\156\171", $pPHPExcel->getProperties()->getCompany()); goto G0VcJ; HlZso: $objWriter->writeElement("\101\160\160\x56\x65\x72\163\x69\x6f\x6e", "\61\x32\x2e\x30\60\60\x30"); goto gxbOg; TR0Cx: $objWriter->writeAttribute("\x78\155\154\156\x73\x3a\166\x74", "\150\164\164\x70\x3a\x2f\x2f\x73\x63\x68\145\x6d\x61\163\56\157\160\x65\156\170\155\x6c\x66\157\162\155\x61\x74\x73\x2e\x6f\162\147\x2f\157\x66\146\151\143\145\x44\157\143\x75\x6d\x65\x6e\x74\57\62\60\x30\x36\57\x64\x6f\x63\x50\162\157\x70\x73\x56\124\171\160\145\163"); goto o__x4; jw3OB: $objWriter->writeElement("\x76\x74\72\151\64", $pPHPExcel->getSheetCount()); goto Lgb4p; Xgtde: } public function writeDocPropsCore(PHPExcel $pPHPExcel = null) { goto luuWA; Vtlw1: $objWriter->writeAttribute("\170\163\151\72\x74\x79\160\x65", "\x64\143\164\145\162\155\163\72\127\63\103\104\x54\x46"); goto iL1lt; leAho: $objWriter->writeElement("\x64\x63\72\144\x65\163\143\162\151\160\164\151\157\x6e", $pPHPExcel->getProperties()->getDescription()); goto AnBPr; csqbP: $objWriter->writeElement("\x64\x63\72\164\151\164\x6c\145", $pPHPExcel->getProperties()->getTitle()); goto leAho; CSg7P: $objWriter->writeRawData(date(DATE_W3C, $pPHPExcel->getProperties()->getModified())); goto oK107; iL1lt: $objWriter->writeRawData(date(DATE_W3C, $pPHPExcel->getProperties()->getCreated())); goto LbmQ1; RxaCv: $objWriter->writeElement("\x63\160\x3a\154\x61\x73\x74\115\x6f\x64\151\146\151\x65\144\x42\x79", $pPHPExcel->getProperties()->getLastModifiedBy()); goto dD7Sf; AnBPr: $objWriter->writeElement("\x64\x63\72\x73\165\x62\x6a\x65\143\x74", $pPHPExcel->getProperties()->getSubject()); goto TEKlN; UXJWi: $objWriter->writeAttribute("\x78\x6d\154\156\x73\72\x64\x63\x6d\151\x74\171\x70\x65", "\150\164\x74\x70\x3a\57\x2f\x70\165\x72\x6c\56\157\162\x67\57\144\x63\x2f\x64\143\x6d\x69\164\x79\160\145\57"); goto XUd2D; luuWA: $objWriter = null; goto GEfMR; oK107: $objWriter->endElement(); goto csqbP; JATJf: $objWriter->startElement("\x64\143\x74\145\x72\x6d\163\x3a\155\157\144\151\146\x69\x65\x64"); goto svCTm; kxtQB: $objWriter->writeAttribute("\170\x6d\154\156\163\72\143\160", "\x68\164\x74\x70\x3a\57\x2f\163\143\150\x65\155\x61\163\x2e\157\160\x65\x6e\170\x6d\154\x66\x6f\162\x6d\x61\164\x73\x2e\157\162\x67\x2f\x70\141\143\x6b\141\x67\x65\x2f\x32\60\x30\x36\57\x6d\x65\164\141\x64\x61\x74\x61\x2f\143\x6f\162\145\x2d\x70\162\x6f\160\145\x72\164\151\145\163"); goto a9S5n; W6bKL: $objWriter->startDocument("\x31\x2e\60", "\125\124\106\55\x38", "\171\145\163"); goto l1oBj; GEfMR: if ($this->getParentWriter()->getUseDiskCaching()) { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_DISK, $this->getParentWriter()->getDiskCachingDirectory()); } else { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_MEMORY); } goto W6bKL; LbmQ1: $objWriter->endElement(); goto JATJf; TEKlN: $objWriter->writeElement("\143\160\72\x6b\145\171\167\x6f\x72\144\163", $pPHPExcel->getProperties()->getKeywords()); goto gxfob; jFgRk: return $objWriter->getData(); goto hFIFv; mCd6O: $objWriter->writeAttribute("\170\155\x6c\156\163\x3a\x64\x63\164\145\x72\x6d\x73", "\150\164\x74\x70\x3a\x2f\57\x70\165\x72\x6c\x2e\157\x72\147\57\144\x63\x2f\x74\145\162\155\x73\57"); goto UXJWi; a9S5n: $objWriter->writeAttribute("\x78\x6d\x6c\x6e\x73\x3a\144\x63", "\150\164\164\160\72\x2f\x2f\x70\x75\x72\x6c\x2e\x6f\162\147\57\x64\143\57\x65\154\145\x6d\x65\156\164\x73\x2f\61\x2e\x31\x2f"); goto mCd6O; dD7Sf: $objWriter->startElement("\x64\143\164\145\162\x6d\x73\72\143\x72\x65\141\x74\145\x64"); goto Vtlw1; l1oBj: $objWriter->startElement("\143\160\x3a\x63\157\x72\145\120\x72\157\160\x65\162\164\151\x65\163"); goto kxtQB; vetS0: $objWriter->endElement(); goto jFgRk; gxfob: $objWriter->writeElement("\x63\160\72\x63\141\164\145\147\157\162\171", $pPHPExcel->getProperties()->getCategory()); goto vetS0; CTkcJ: $objWriter->writeElement("\x64\x63\x3a\x63\162\x65\x61\x74\157\162", $pPHPExcel->getProperties()->getCreator()); goto RxaCv; svCTm: $objWriter->writeAttribute("\x78\163\x69\72\x74\171\x70\x65", "\x64\x63\x74\145\162\155\x73\72\x57\63\103\x44\x54\x46"); goto CSg7P; XUd2D: $objWriter->writeAttribute("\170\x6d\x6c\x6e\x73\x3a\x78\x73\x69", "\150\164\164\x70\x3a\x2f\57\167\x77\167\56\x77\x33\x2e\157\x72\147\57\x32\60\x30\x31\x2f\130\115\x4c\x53\x63\x68\x65\x6d\141\x2d\x69\x6e\163\164\141\x6e\x63\x65"); goto CTkcJ; hFIFv: } public function writeDocPropsCustom(PHPExcel $pPHPExcel = null) { goto Vu4I4; Xx_h4: foreach ($customPropertyList as $key => $customProperty) { goto xnotj; q3bmX: $objWriter->writeAttribute("\156\x61\155\145", $customProperty); goto xnp3r; xnp3r: switch ($propertyType) { case "\151": $objWriter->writeElement("\x76\x74\72\151\x34", $propertyValue); break; case "\x66": $objWriter->writeElement("\166\x74\72\162\x38", $propertyValue); break; case "\142": $objWriter->writeElement("\x76\164\x3a\x62\x6f\157\x6c", $propertyValue ? "\164\x72\x75\x65" : "\x66\141\154\x73\x65"); break; case "\x64": goto FO1wL; PekGf: $objWriter->endElement(); goto P0Epx; P0Epx: break; goto mjh0P; FO1wL: $objWriter->startElement("\x76\x74\x3a\x66\x69\x6c\x65\x74\x69\155\x65"); goto Z040c; Z040c: $objWriter->writeRawData(date(DATE_W3C, $propertyValue)); goto PekGf; mjh0P: default: $objWriter->writeElement("\x76\164\x3a\154\x70\167\x73\x74\162", $propertyValue); break; } goto vM3lZ; TVarL: $objWriter->startElement("\160\x72\157\x70\x65\x72\164\171"); goto BtNyV; vM3lZ: $objWriter->endElement(); goto mxclw; xnotj: $propertyValue = $pPHPExcel->getProperties()->getCustomPropertyValue($customProperty); goto uQIh7; uQIh7: $propertyType = $pPHPExcel->getProperties()->getCustomPropertyType($customProperty); goto TVarL; LCYAM: $objWriter->writeAttribute("\x70\x69\x64", $key + 2); goto q3bmX; BtNyV: $objWriter->writeAttribute("\x66\155\164\151\144", "\x7b\x44\x35\103\104\104\65\60\x35\x2d\x32\105\x39\x43\x2d\61\60\x31\x42\55\x39\63\71\x37\55\60\x38\60\x30\x32\x42\62\x43\106\x39\x41\x45\175"); goto LCYAM; mxclw: } goto pC34u; Vu4I4: $customPropertyList = $pPHPExcel->getProperties()->getCustomProperties(); goto N0LMy; VF6Ek: $objWriter->writeAttribute("\x78\x6d\154\156\163", "\x68\x74\164\160\x3a\57\x2f\163\143\x68\x65\155\x61\163\56\157\160\x65\x6e\170\155\x6c\x66\157\162\155\141\x74\x73\x2e\x6f\162\x67\x2f\157\x66\146\151\143\x65\x44\157\143\165\x6d\145\x6e\164\57\x32\x30\60\x36\57\143\165\163\164\x6f\155\x2d\x70\162\x6f\160\145\162\164\x69\145\163"); goto obNCk; obNCk: $objWriter->writeAttribute("\x78\x6d\x6c\156\163\x3a\x76\164", "\150\164\164\x70\72\x2f\x2f\x73\143\150\145\155\x61\x73\56\157\x70\145\x6e\x78\x6d\154\x66\x6f\162\x6d\x61\x74\x73\56\x6f\x72\x67\x2f\157\x66\146\x69\x63\x65\x44\x6f\x63\165\x6d\145\156\x74\x2f\x32\x30\60\66\57\144\157\x63\x50\x72\157\x70\163\x56\124\x79\x70\145\x73"); goto Xx_h4; WXwOV: if ($this->getParentWriter()->getUseDiskCaching()) { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_DISK, $this->getParentWriter()->getDiskCachingDirectory()); } else { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_MEMORY); } goto mQKae; N0LMy: if (empty($customPropertyList)) { return; } goto Kpf_j; lwq3l: return $objWriter->getData(); goto lrSVH; mQKae: $objWriter->startDocument("\61\x2e\60", "\125\x54\106\55\70", "\171\x65\163"); goto OG5nL; Kpf_j: $objWriter = null; goto WXwOV; pC34u: $objWriter->endElement(); goto lwq3l; OG5nL: $objWriter->startElement("\120\x72\157\x70\145\162\x74\x69\145\x73"); goto VF6Ek; lrSVH: } }
