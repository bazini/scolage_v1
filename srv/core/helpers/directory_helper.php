<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:17              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\101\123\x45\x50\x41\x54\110") or exit("\x4e\157\40\x64\x69\x72\145\x63\x74\40\x73\x63\x72\151\160\x74\40\x61\143\x63\x65\x73\x73\x20\x61\154\x6c\x6f\167\x65\144"); if (!function_exists("\x64\x69\x72\145\x63\164\x6f\x72\x79\x5f\155\141\160")) { function directory_map($source_dir, $directory_depth = 0, $hidden = FALSE) { if ($fp = @opendir($source_dir)) { goto sy2fW; A9ZP2: $source_dir = rtrim($source_dir, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR; goto s4Jtu; S0njN: return $filedata; goto wfAqD; s4Jtu: while (FALSE !== ($file = readdir($fp))) { if ($file === "\x2e" or $file === "\x2e\56" or $hidden === FALSE && $file[0] === "\56") { continue; } is_dir($source_dir . $file) && ($file .= DIRECTORY_SEPARATOR); if (($directory_depth < 1 or $new_depth > 0) && is_dir($source_dir . $file)) { $filedata[$file] = directory_map($source_dir . $file, $new_depth, $hidden); } else { $filedata[] = $file; } } goto uFr6a; sy2fW: $filedata = array(); goto oczV2; oczV2: $new_depth = $directory_depth - 1; goto A9ZP2; uFr6a: closedir($fp); goto S0njN; wfAqD: } return FALSE; } }
