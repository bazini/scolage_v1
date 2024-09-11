<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 function hypo($a, $b) { if (abs($a) > abs($b)) { $r = $b / $a; $r = abs($a) * sqrt(1 + $r * $r); } elseif ($b != 0) { $r = $a / $b; $r = abs($b) * sqrt(1 + $r * $r); } else { $r = 0.0; } return $r; }
