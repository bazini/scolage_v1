<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Writer_Excel2007_RelsVBA extends PHPExcel_Writer_Excel2007_WriterPart { public function writeVBARelationships(PHPExcel $pPHPExcel = null) { goto B_zc6; qdy4V: $objWriter->startElement("\x52\145\x6c\x61\164\151\x6f\x6e\x73\150\x69\x70\163"); goto L04qD; LiO6M: return $objWriter->getData(); goto vU8S4; B_zc6: $objWriter = null; goto CmFWB; xnnlz: $objWriter->writeAttribute("\x54\x61\162\x67\x65\x74", "\x76\x62\141\120\x72\157\x6a\x65\143\164\123\151\147\156\141\164\x75\162\145\x2e\142\x69\156"); goto M0iyA; M0iyA: $objWriter->endElement(); goto gAGaR; nHLiC: $objWriter->writeAttribute("\124\x79\x70\145", "\150\x74\x74\x70\x3a\x2f\57\x73\143\x68\x65\155\141\x73\56\155\x69\x63\162\157\163\157\146\164\x2e\x63\157\x6d\x2f\x6f\146\x66\x69\x63\x65\x2f\x32\x30\x30\66\x2f\x72\145\154\141\164\151\x6f\156\x73\150\151\160\x73\x2f\166\142\141\120\x72\x6f\152\x65\143\x74\123\151\147\x6e\x61\164\x75\162\145"); goto xnnlz; CmFWB: if ($this->getParentWriter()->getUseDiskCaching()) { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_DISK, $this->getParentWriter()->getDiskCachingDirectory()); } else { $objWriter = new PHPExcel_Shared_XMLWriter(PHPExcel_Shared_XMLWriter::STORAGE_MEMORY); } goto t0EaJ; LLWKm: $objWriter->writeAttribute("\111\144", "\162\111\144\61"); goto nHLiC; gAGaR: $objWriter->endElement(); goto LiO6M; t0EaJ: $objWriter->startDocument("\x31\56\x30", "\125\x54\106\x2d\70", "\x79\145\163"); goto qdy4V; L04qD: $objWriter->writeAttribute("\170\155\x6c\x6e\x73", "\x68\164\164\x70\x3a\57\x2f\163\143\x68\x65\x6d\x61\x73\x2e\157\160\145\x6e\170\x6d\x6c\146\x6f\x72\155\x61\164\163\56\x6f\x72\x67\x2f\x70\x61\x63\x6b\141\147\145\x2f\x32\x30\x30\66\57\x72\x65\x6c\141\x74\151\157\x6e\x73\150\x69\160\163"); goto sbahp; sbahp: $objWriter->startElement("\x52\145\x6c\141\x74\151\x6f\x6e\163\150\151\160"); goto LLWKm; vU8S4: } }
