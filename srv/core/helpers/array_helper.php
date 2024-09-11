<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto qo7oJ; kSccl: if (!function_exists("\162\x61\156\x64\157\155\137\x65\154\145\x6d\145\x6e\x74")) { function random_element($array) { return is_array($array) ? $array[array_rand($array)] : $array; } } goto LZMWX; qo7oJ: defined("\102\x41\x53\105\120\101\124\x48") or exit("\x4e\157\x20\144\x69\x72\145\x63\x74\40\163\x63\162\x69\x70\164\x20\141\x63\x63\x65\163\163\x20\x61\154\154\x6f\x77\145\144"); goto CX9XO; CX9XO: if (!function_exists("\x65\x6c\x65\155\x65\156\x74")) { function element($item, array $array, $default = NULL) { return array_key_exists($item, $array) ? $array[$item] : $default; } } goto kSccl; LZMWX: if (!function_exists("\x65\x6c\145\x6d\145\156\x74\x73")) { function elements($items, array $array, $default = NULL) { goto nnM2L; nErT4: return $return; goto tlYqx; nnM2L: $return = array(); goto O1yk8; yn4NO: foreach ($items as $item) { $return[$item] = array_key_exists($item, $array) ? $array[$item] : $default; } goto nErT4; O1yk8: is_array($items) or $items = array($items); goto yn4NO; tlYqx: } }
