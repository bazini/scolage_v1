<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Reader_Excel5_Color_BuiltIn { protected static $map = array(0x0 => "\x30\60\x30\60\x30\x30", 0x1 => "\106\106\x46\106\x46\x46", 0x2 => "\106\x46\x30\x30\x30\60", 0x3 => "\60\x30\x46\106\60\60", 0x4 => "\60\60\60\60\x46\x46", 0x5 => "\x46\106\x46\x46\x30\x30", 0x6 => "\106\x46\x30\x30\106\106", 0x7 => "\x30\60\106\x46\x46\x46", 0x40 => "\x30\x30\60\x30\60\x30", 0x41 => "\106\106\x46\106\106\x46"); public static function lookup($color) { if (isset(self::$map[$color])) { return array("\162\x67\x62" => self::$map[$color]); } return array("\162\147\x62" => "\60\60\x30\x30\x30\60"); } }
