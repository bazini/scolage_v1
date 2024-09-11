<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:06              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Writer_OpenDocument_Cell_Comment { public static function write(PHPExcel_Shared_XMLWriter $objWriter, PHPExcel_Cell $cell) { goto Ef6V9; Ffx1B: $objWriter->startElement("\x6f\x66\146\151\x63\x65\x3a\x61\x6e\156\x6f\164\141\x74\151\x6f\156"); goto Tcpns; Vcvfv: $objWriter->writeElement("\x74\x65\x78\x74\72\160", $comment->getText()->getPlainText()); goto whddz; CzCKR: if (!isset($comments[$cell->getCoordinate()])) { return; } goto IlWpl; Ef6V9: $comments = $cell->getWorksheet()->getComments(); goto CzCKR; EwSJ0: $objWriter->writeAttribute("\163\x76\147\x3a\x79", $comment->getMarginTop()); goto DQHtz; DJsnX: $objWriter->writeAttribute("\163\x76\147\72\x68\145\151\147\150\164", $comment->getHeight()); goto cSLlN; IlWpl: $comment = $comments[$cell->getCoordinate()]; goto Ffx1B; DQHtz: $objWriter->writeElement("\x64\x63\x3a\x63\162\x65\x61\x74\157\x72", $comment->getAuthor()); goto Vcvfv; Tcpns: $objWriter->writeAttribute("\163\x76\147\72\167\151\x64\164\x68", $comment->getWidth()); goto DJsnX; cSLlN: $objWriter->writeAttribute("\x73\166\x67\x3a\170", $comment->getMarginLeft()); goto EwSJ0; whddz: $objWriter->endElement(); goto RHCnm; RHCnm: } }
