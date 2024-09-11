<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class QRsplit { public $dataStr = ''; public $input; public $modeHint; public function __construct($dataStr, $input, $modeHint) { goto yhsy2; yhsy2: $this->dataStr = $dataStr; goto x1Jl2; h3Cv0: $this->modeHint = $modeHint; goto G40gU; x1Jl2: $this->input = $input; goto h3Cv0; G40gU: } public static function isdigitat($str, $pos) { if ($pos >= strlen($str)) { return false; } return ord($str[$pos]) >= ord("\60") && ord($str[$pos]) <= ord("\x39"); } public static function isalnumat($str, $pos) { if ($pos >= strlen($str)) { return false; } return QRinput::lookAnTable(ord($str[$pos])) >= 0; } public function identifyMode($pos) { goto DBAIp; DBAIp: if ($pos >= strlen($this->dataStr)) { return QR_MODE_NUL; } goto P7Nvz; P7Nvz: $c = $this->dataStr[$pos]; goto AUu1g; R3UfM: return QR_MODE_8; goto prNr6; AUu1g: if (self::isdigitat($this->dataStr, $pos)) { return QR_MODE_NUM; } else { if (self::isalnumat($this->dataStr, $pos)) { return QR_MODE_AN; } else { if ($this->modeHint == QR_MODE_KANJI) { if ($pos + 1 < strlen($this->dataStr)) { goto J1lZX; F3KAM: $word = ord($c) << 8 | ord($d); goto vNYSQ; J1lZX: $d = $this->dataStr[$pos + 1]; goto F3KAM; vNYSQ: if ($word >= 0x8140 && $word <= 0x9ffc || $word >= 0xe040 && $word <= 0xebbf) { return QR_MODE_KANJI; } goto RAE2e; RAE2e: } } } } goto R3UfM; prNr6: } public function eatNum() { goto AuTb2; WhcDq: if ($mode == QR_MODE_8) { $dif = QRinput::estimateBitsModeNum($run) + 4 + $ln + QRinput::estimateBitsMode8(1) - QRinput::estimateBitsMode8($run + 1); if ($dif > 0) { return $this->eat8(); } } goto Po_f_; FkWuO: $p = 0; goto bJZJ8; k1ZRc: $run = $p; goto JgJqR; AuTb2: $ln = QRspec::lengthIndicator(QR_MODE_NUM, $this->input->getVersion()); goto FkWuO; bJZJ8: while (self::isdigitat($this->dataStr, $p)) { $p++; } goto k1ZRc; Eotwv: if ($ret < 0) { return -1; } goto vLfU6; JgJqR: $mode = $this->identifyMode($p); goto WhcDq; Po_f_: if ($mode == QR_MODE_AN) { $dif = QRinput::estimateBitsModeNum($run) + 4 + $ln + QRinput::estimateBitsModeAn(1) - QRinput::estimateBitsModeAn($run + 1); if ($dif > 0) { return $this->eatAn(); } } goto suBzA; vLfU6: return $run; goto bfI6d; suBzA: $ret = $this->input->append(QR_MODE_NUM, $run, str_split($this->dataStr)); goto Eotwv; bfI6d: } public function eatAn() { goto GNWc5; WZZ25: $run = $p; goto pP9M8; GNWc5: $la = QRspec::lengthIndicator(QR_MODE_AN, $this->input->getVersion()); goto Tp3WF; OmH1X: if ($ret < 0) { return -1; } goto YWVWq; YWVWq: return $run; goto W_PKj; xpXal: $p = 0; goto m4j4R; IO5pb: $ret = $this->input->append(QR_MODE_AN, $run, str_split($this->dataStr)); goto OmH1X; pP9M8: if (!self::isalnumat($this->dataStr, $p)) { $dif = QRinput::estimateBitsModeAn($run) + 4 + $la + QRinput::estimateBitsMode8(1) - QRinput::estimateBitsMode8($run + 1); if ($dif > 0) { return $this->eat8(); } } goto IO5pb; m4j4R: while (self::isalnumat($this->dataStr, $p)) { if (self::isdigitat($this->dataStr, $p)) { goto tHeJV; q1Xz3: while (self::isdigitat($this->dataStr, $q)) { $q++; } goto kllfk; kllfk: $dif = QRinput::estimateBitsModeAn($p) + QRinput::estimateBitsModeNum($q - $p) + 4 + $ln - QRinput::estimateBitsModeAn($q); goto vHKJe; tHeJV: $q = $p; goto q1Xz3; vHKJe: if ($dif < 0) { break; } else { $p = $q; } goto i7sld; i7sld: } else { $p++; } } goto WZZ25; Tp3WF: $ln = QRspec::lengthIndicator(QR_MODE_NUM, $this->input->getVersion()); goto xpXal; W_PKj: } public function eatKanji() { goto eYvV9; DkLc3: return $run; goto QN0Z0; eYvV9: $p = 0; goto Jt_SL; LCsEe: $ret = $this->input->append(QR_MODE_KANJI, $p, str_split($this->dataStr)); goto ZmTwE; ZmTwE: if ($ret < 0) { return -1; } goto DkLc3; Jt_SL: while ($this->identifyMode($p) == QR_MODE_KANJI) { $p += 2; } goto LCsEe; QN0Z0: } public function eat8() { goto PRJAz; BE5aF: $run = $p; goto dDZXi; CZko2: return $run; goto a142i; QHVSC: $dataStrLen = strlen($this->dataStr); goto JMnsG; JjG7Y: if ($ret < 0) { return -1; } goto CZko2; dDZXi: $ret = $this->input->append(QR_MODE_8, $run, str_split($this->dataStr)); goto JjG7Y; JMnsG: while ($p < $dataStrLen) { $mode = $this->identifyMode($p); if ($mode == QR_MODE_KANJI) { break; } if ($mode == QR_MODE_NUM) { goto H7HiP; QuQIk: $dif = QRinput::estimateBitsMode8($p) + QRinput::estimateBitsModeNum($q - $p) + 4 + $ln - QRinput::estimateBitsMode8($q); goto CkT2g; PkUb0: while (self::isdigitat($this->dataStr, $q)) { $q++; } goto QuQIk; H7HiP: $q = $p; goto PkUb0; CkT2g: if ($dif < 0) { break; } else { $p = $q; } goto auK6S; auK6S: } else { if ($mode == QR_MODE_AN) { goto y89qZ; WEcsj: $dif = QRinput::estimateBitsMode8($p) + QRinput::estimateBitsModeAn($q - $p) + 4 + $la - QRinput::estimateBitsMode8($q); goto J2_vy; iaymO: while (self::isalnumat($this->dataStr, $q)) { $q++; } goto WEcsj; J2_vy: if ($dif < 0) { break; } else { $p = $q; } goto NGMzX; y89qZ: $q = $p; goto iaymO; NGMzX: } else { $p++; } } } goto BE5aF; MfPKQ: $p = 1; goto QHVSC; PRJAz: $la = QRspec::lengthIndicator(QR_MODE_AN, $this->input->getVersion()); goto WaEUu; WaEUu: $ln = QRspec::lengthIndicator(QR_MODE_NUM, $this->input->getVersion()); goto MfPKQ; a142i: } public function splitString() { while (strlen($this->dataStr) > 0) { if ($this->dataStr == '') { return 0; } $mode = $this->identifyMode(0); switch ($mode) { case QR_MODE_NUM: $length = $this->eatNum(); break; case QR_MODE_AN: $length = $this->eatAn(); break; case QR_MODE_KANJI: if ($hint == QR_MODE_KANJI) { $length = $this->eatKanji(); } else { $length = $this->eat8(); } break; default: $length = $this->eat8(); break; } if ($length == 0) { return 0; } if ($length < 0) { return -1; } $this->dataStr = substr($this->dataStr, $length); } } public function toUpper() { goto DjzKy; DjzKy: $stringLen = strlen($this->dataStr); goto xIpqq; xIpqq: $p = 0; goto ANT8I; oKtlM: return $this->dataStr; goto xGb5X; ANT8I: while ($p < $stringLen) { $mode = self::identifyMode(substr($this->dataStr, $p), $this->modeHint); if ($mode == QR_MODE_KANJI) { $p += 2; } else { if (ord($this->dataStr[$p]) >= ord("\141") && ord($this->dataStr[$p]) <= ord("\x7a")) { $this->dataStr[$p] = chr(ord($this->dataStr[$p]) - 32); } $p++; } } goto oKtlM; xGb5X: } public static function splitStringToQRinput($string, QRinput $input, $modeHint, $casesensitive = true) { goto gCtNa; IKQoE: if (!$casesensitive) { $split->toUpper(); } goto YHy0_; YHy0_: return $split->splitString(); goto KIK3d; gCtNa: if (is_null($string) || $string == "\x5c\60" || $string == '') { throw new Exception("\145\155\x70\164\x79\40\x73\164\162\x69\156\x67\x21\41\x21"); } goto JHlWw; JHlWw: $split = new QRsplit($string, $input, $modeHint); goto IKQoE; KIK3d: } }
