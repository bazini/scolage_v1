<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Shared_PasswordHasher { public static function hashPassword($pPassword = '') { goto nY2P6; BKEoX: return strtoupper(dechex($password)); goto aAXrr; nY2P6: $password = 0x0; goto SBKt8; jTuQG: $password ^= strlen($pPassword); goto z98D0; au7_O: foreach ($chars as $char) { goto na0rM; wuBWt: $rotated_bits = $value >> 15; goto oXmb5; na0rM: $value = ord($char) << $charPos++; goto wuBWt; pZy5q: $password ^= $value | $rotated_bits; goto PrUJg; oXmb5: $value &= 0x7fff; goto pZy5q; PrUJg: } goto jTuQG; SBKt8: $charPos = 1; goto yBw2n; z98D0: $password ^= 0xce4b; goto BKEoX; yBw2n: $chars = preg_split("\x2f\x2f", $pPassword, -1, PREG_SPLIT_NO_EMPTY); goto au7_O; aAXrr: } }
