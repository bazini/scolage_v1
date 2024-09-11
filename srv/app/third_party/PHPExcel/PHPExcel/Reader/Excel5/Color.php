<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Reader_Excel5_Color { public static function map($color, $palette, $version) { if ($color <= 0x7 || $color >= 0x40) { return PHPExcel_Reader_Excel5_Color_BuiltIn::lookup($color); } elseif (isset($palette) && isset($palette[$color - 8])) { return $palette[$color - 8]; } else { if ($version == PHPExcel_Reader_Excel5::XLS_BIFF8) { return PHPExcel_Reader_Excel5_Color_BIFF8::lookup($color); } else { return PHPExcel_Reader_Excel5_Color_BIFF5::lookup($color); } } return $color; } }
