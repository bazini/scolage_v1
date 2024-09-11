<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Reader_Excel5_RC4 { protected $s = array(); protected $i = 0; protected $j = 0; public function __construct($key) { goto QBChT; LMA3C: $this->i = $this->j = 0; goto zv225; HX7vx: $this->j = 0; goto bJVW0; TED59: for ($this->i = 0; $this->i < 256; $this->i++) { $this->s[$this->i] = $this->i; } goto HX7vx; QBChT: $len = strlen($key); goto TED59; bJVW0: for ($this->i = 0; $this->i < 256; $this->i++) { $this->j = ($this->j + $this->s[$this->i] + ord($key[$this->i % $len])) % 256; $t = $this->s[$this->i]; $this->s[$this->i] = $this->s[$this->j]; $this->s[$this->j] = $t; } goto LMA3C; zv225: } public function RC4($data) { goto NT8rB; XbPDY: return $data; goto U0x7W; NT8rB: $len = strlen($data); goto Vg_pu; Vg_pu: for ($c = 0; $c < $len; $c++) { $this->i = ($this->i + 1) % 256; $this->j = ($this->j + $this->s[$this->i]) % 256; $t = $this->s[$this->i]; $this->s[$this->i] = $this->s[$this->j]; $this->s[$this->j] = $t; $t = ($this->s[$this->i] + $this->s[$this->j]) % 256; $data[$c] = chr(ord($data[$c]) ^ $this->s[$t]); } goto XbPDY; U0x7W: } }
