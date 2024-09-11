<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:09              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto O6Q1G; xtBjQ: class QRcode { public $version; public $width; public $data; public function encodeMask(QRinput $input, $mask) { goto Tjml_; ps62s: $j = QRspec::getRemainder($version); goto rlhex; iITvN: $width = QRspec::getWidth($version); goto Jb32m; r96Sl: if (is_null($filler)) { return NULL; } goto C_jy6; cw5ac: if ($masked == NULL) { return NULL; } goto ar1wK; ar1wK: QRtools::markTime("\141\x66\164\145\x72\x5f\155\141\x73\153"); goto yMwGT; FSWmY: $maskObj = new QRmask(); goto kXtBU; yMwGT: $this->version = $version; goto zE8in; yQGAo: QRtools::markTime("\141\146\164\145\162\137\x72\141\x77"); goto GTtl6; Shh3x: unset($filler); goto FSWmY; Jb32m: $frame = QRspec::newFrame($version); goto mVpg2; Tjml_: if ($input->getVersion() < 0 || $input->getVersion() > QRSPEC_VERSION_MAX) { throw new Exception("\x77\x72\x6f\156\x67\40\166\x65\x72\163\x69\157\x6e"); } goto S2xu8; zE8in: $this->width = $width; goto SkB16; kXtBU: if ($mask < 0) { if (QR_FIND_BEST_MASK) { $masked = $maskObj->mask($width, $frame, $input->getErrorCorrectionLevel()); } else { $masked = $maskObj->makeMask($width, $frame, intval(QR_DEFAULT_MASK) % 8, $input->getErrorCorrectionLevel()); } } else { $masked = $maskObj->makeMask($width, $frame, $mask, $input->getErrorCorrectionLevel()); } goto cw5ac; r7qx0: QRtools::markTime("\141\x66\164\x65\162\137\146\151\154\x6c\145\162"); goto L94yi; mVpg2: $filler = new FrameFiller($width, $frame); goto r96Sl; L94yi: unset($raw); goto ps62s; J2TvH: $frame = $filler->frame; goto Shh3x; SkB16: $this->data = $masked; goto eR9C7; rlhex: for ($i = 0; $i < $j; $i++) { $addr = $filler->next(); $filler->setFrameAt($addr, 0x2); } goto J2TvH; eR9C7: return $this; goto h9kiZ; iLEKF: $raw = new QRrawcode($input); goto yQGAo; S2xu8: if ($input->getErrorCorrectionLevel() > QR_ECLEVEL_H) { throw new Exception("\167\162\x6f\x6e\147\40\154\x65\166\145\154"); } goto iLEKF; GTtl6: $version = $raw->version; goto iITvN; C_jy6: for ($i = 0; $i < $raw->dataLength + $raw->eccLength; $i++) { $code = $raw->getCode(); $bit = 0x80; for ($j = 0; $j < 8; $j++) { $addr = $filler->next(); $filler->setFrameAt($addr, 0x2 | ($bit & $code) != 0); $bit = $bit >> 1; } } goto r7qx0; h9kiZ: } public function encodeInput(QRinput $input) { return $this->encodeMask($input, -1); } public function encodeString8bit($string, $version, $level) { goto e65lY; e65lY: if (string == NULL) { throw new Exception("\x65\x6d\x70\164\171\40\163\x74\x72\x69\x6e\147\41"); return NULL; } goto HI2M5; B606p: $ret = $input->append($input, QR_MODE_8, strlen($string), str_split($string)); goto Slevm; HI2M5: $input = new QRinput($version, $level); goto q5hyW; GP0Fa: return $this->encodeInput($input); goto nD2nR; Slevm: if ($ret < 0) { unset($input); return NULL; } goto GP0Fa; q5hyW: if ($input == NULL) { return NULL; } goto B606p; nD2nR: } public function encodeString($string, $version, $level, $hint, $casesensitive) { goto lnSSa; P0cp7: return $this->encodeInput($input); goto oKd_Z; lnSSa: if ($hint != QR_MODE_8 && $hint != QR_MODE_KANJI) { throw new Exception("\x62\141\144\40\x68\x69\156\164"); return NULL; } goto c9bzC; LU8Vw: if ($input == NULL) { return NULL; } goto d1xu9; d1xu9: $ret = QRsplit::splitStringToQRinput($string, $input, $hint, $casesensitive); goto pCx3E; c9bzC: $input = new QRinput($version, $level); goto LU8Vw; pCx3E: if ($ret < 0) { return NULL; } goto P0cp7; oKd_Z: } public static function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint = false) { $enc = QRencode::factory($level, $size, $margin); return $enc->encodePNG($text, $outfile, $saveandprint = false); } public static function text($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4) { $enc = QRencode::factory($level, $size, $margin); return $enc->encode($text, $outfile); } public static function raw($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 3, $margin = 4) { $enc = QRencode::factory($level, $size, $margin); return $enc->encodeRAW($text, $outfile); } } goto Y4Hub; nMFOu: class QRrawcode { public $version; public $datacode = array(); public $ecccode = array(); public $blocks; public $rsblocks = array(); public $count; public $dataLength; public $eccLength; public $b1; public function __construct(QRinput $input) { goto eSGD3; eSGD3: $spec = array(0, 0, 0, 0, 0); goto AHGuK; AHGuK: $this->datacode = $input->getByteStream(); goto vfF2Y; vfF2Y: if (is_null($this->datacode)) { throw new Exception("\156\x75\154\154\40\151\x6d\160\165\164\x20\x73\164\162\x69\x6e\x67"); } goto oYMJQ; dxs7o: $this->dataLength = QRspec::rsDataLength($spec); goto P3Fnj; z1nQ3: $this->count = 0; goto z2_4m; tBrWr: $this->b1 = QRspec::rsBlockNum1($spec); goto dxs7o; dEXxp: if ($ret < 0) { throw new Exception("\x62\154\157\x63\x6b\40\141\x6c\154\x6f\143\40\145\x72\162\x6f\x72"); return null; } goto z1nQ3; VAYsY: $this->version = $input->getVersion(); goto tBrWr; B6dxm: $ret = $this->init($spec); goto dEXxp; P3Fnj: $this->eccLength = QRspec::rsEccLength($spec); goto zVsNY; oYMJQ: QRspec::getEccSpec($input->getVersion(), $input->getErrorCorrectionLevel(), $spec); goto VAYsY; rQ1H3: $this->blocks = QRspec::rsBlockNum($spec); goto B6dxm; zVsNY: $this->ecccode = array_fill(0, $this->eccLength, 0); goto rQ1H3; z2_4m: } public function init(array $spec) { goto S1u4e; OTGID: $rs = QRrs::init_rs(8, 0x11d, 0, 1, $el, 255 - $dl - $el); goto T2DSE; qKHcG: return 0; goto f5DHX; iDiVY: $eccPos = 0; goto B6V87; DIzWK: $el = QRspec::rsEccCodes2($spec); goto v2eT9; RFeIn: $dl = QRspec::rsDataCodes2($spec); goto DIzWK; B1Niq: $dataPos = 0; goto iDiVY; S1u4e: $dl = QRspec::rsDataCodes1($spec); goto Btwd8; v2eT9: $rs = QRrs::init_rs(8, 0x11d, 0, 1, $el, 255 - $dl - $el); goto ECF3X; Btwd8: $el = QRspec::rsEccCodes1($spec); goto OTGID; KQy9W: for ($i = 0; $i < QRspec::rsBlockNum2($spec); $i++) { $ecc = array_slice($this->ecccode, $eccPos); $this->rsblocks[$blockNo] = new QRrsblock($dl, array_slice($this->datacode, $dataPos), $el, $ecc, $rs); $this->ecccode = array_merge(array_slice($this->ecccode, 0, $eccPos), $ecc); $dataPos += $dl; $eccPos += $el; $blockNo++; } goto qKHcG; B6V87: for ($i = 0; $i < QRspec::rsBlockNum1($spec); $i++) { $ecc = array_slice($this->ecccode, $eccPos); $this->rsblocks[$blockNo] = new QRrsblock($dl, array_slice($this->datacode, $dataPos), $el, $ecc, $rs); $this->ecccode = array_merge(array_slice($this->ecccode, 0, $eccPos), $ecc); $dataPos += $dl; $eccPos += $el; $blockNo++; } goto JZDCr; ECF3X: if ($rs == NULL) { return -1; } goto KQy9W; JZDCr: if (QRspec::rsBlockNum2($spec) == 0) { return 0; } goto RFeIn; T2DSE: $blockNo = 0; goto B1Niq; f5DHX: } public function getCode() { goto tONSL; Iwjzl: $this->count++; goto FL65r; FL65r: return $ret; goto l9y7B; tONSL: $ret; goto YOing; YOing: if ($this->count < $this->dataLength) { goto NWmqU; rqrmq: $col = $this->count / $this->blocks; goto RHbsF; NWmqU: $row = $this->count % $this->blocks; goto rqrmq; RHbsF: if ($col >= $this->rsblocks[0]->dataLength) { $row += $this->b1; } goto mk2h3; mk2h3: $ret = $this->rsblocks[$row]->data[$col]; goto G09PF; G09PF: } else { if ($this->count < $this->dataLength + $this->eccLength) { goto BHBJs; hwxe0: $ret = $this->rsblocks[$row]->ecc[$col]; goto iy4W_; v2IYO: $col = ($this->count - $this->dataLength) / $this->blocks; goto hwxe0; BHBJs: $row = ($this->count - $this->dataLength) % $this->blocks; goto v2IYO; iy4W_: } else { return 0; } } goto Iwjzl; l9y7B: } } goto xtBjQ; O6Q1G: class QRrsblock { public $dataLength; public $data = array(); public $eccLength; public $ecc = array(); public function __construct($dl, $data, $el, &$ecc, QRrsItem $rs) { goto KopU0; hurSl: $this->ecc = $ecc; goto JqDqp; KopU0: $rs->encode_rs_char($data, $ecc); goto NEpgA; bv70j: $this->data = $data; goto FTVDV; FTVDV: $this->eccLength = $el; goto hurSl; NEpgA: $this->dataLength = $dl; goto bv70j; JqDqp: } } goto nMFOu; Y4Hub: class FrameFiller { public $width; public $frame; public $x; public $y; public $dir; public $bit; public function __construct($width, &$frame) { goto xyfN3; kC_XO: $this->y = $width - 1; goto OjVHn; Jmfi_: $this->bit = -1; goto I5yaY; xyfN3: $this->width = $width; goto pdx_s; h0ISV: $this->x = $width - 1; goto kC_XO; OjVHn: $this->dir = -1; goto Jmfi_; pdx_s: $this->frame = $frame; goto h0ISV; I5yaY: } public function setFrameAt($at, $val) { $this->frame[$at["\x79"]][$at["\170"]] = chr($val); } public function getFrameAt($at) { return ord($this->frame[$at["\x79"]][$at["\x78"]]); } public function next() { do { if ($this->bit == -1) { $this->bit = 0; return array("\170" => $this->x, "\171" => $this->y); } $x = $this->x; $y = $this->y; $w = $this->width; if ($this->bit == 0) { $x--; $this->bit++; } else { goto eSjBQ; qhuog: $y += $this->dir; goto r9OB4; r9OB4: $this->bit--; goto RJS3Q; eSjBQ: $x++; goto qhuog; RJS3Q: } if ($this->dir < 0) { if ($y < 0) { goto jhNJs; qKiN5: if ($x == 6) { $x--; $y = 9; } goto fmzUL; S4r08: $this->dir = 1; goto qKiN5; jhNJs: $y = 0; goto NOrKF; NOrKF: $x -= 2; goto S4r08; fmzUL: } } else { if ($y == $w) { goto aO9pR; aKh7I: if ($x == 6) { $x--; $y -= 8; } goto CrKsu; M1ZAY: $this->dir = -1; goto aKh7I; aO9pR: $y = $w - 1; goto WL9OE; WL9OE: $x -= 2; goto M1ZAY; CrKsu: } } if ($x < 0 || $y < 0) { return null; } $this->x = $x; $this->y = $y; } while (ord($this->frame[$y][$x]) & 0x80); return array("\x78" => $x, "\171" => $y); } } goto QsJ5k; QsJ5k: class QRencode { public $casesensitive = true; public $eightbit = false; public $version = 0; public $size = 3; public $margin = 4; public $structured = 0; public $level = QR_ECLEVEL_L; public $hint = QR_MODE_8; public static function factory($level = QR_ECLEVEL_L, $size = 3, $margin = 4) { goto xKZlo; jhTJx: switch ($level . '') { case "\60": case "\61": case "\62": case "\63": $enc->level = $level; break; case "\x6c": case "\x4c": $enc->level = QR_ECLEVEL_L; break; case "\155": case "\x4d": $enc->level = QR_ECLEVEL_M; break; case "\161": case "\x51": $enc->level = QR_ECLEVEL_Q; break; case "\x68": case "\x48": $enc->level = QR_ECLEVEL_H; break; } goto TaHPy; TaHPy: return $enc; goto GCGnu; uNceU: $enc->size = $size; goto ZiEPz; xKZlo: $enc = new QRencode(); goto uNceU; ZiEPz: $enc->margin = $margin; goto jhTJx; GCGnu: } public function encodeRAW($intext, $outfile = false) { goto uhC_l; PmEGJ: if ($this->eightbit) { $code->encodeString8bit($intext, $this->version, $this->level); } else { $code->encodeString($intext, $this->version, $this->level, $this->hint, $this->casesensitive); } goto ARCYY; uhC_l: $code = new QRcode(); goto PmEGJ; ARCYY: return $code->data; goto JMEXY; JMEXY: } public function encode($intext, $outfile = false) { goto gkmWW; Os7HQ: if ($this->eightbit) { $code->encodeString8bit($intext, $this->version, $this->level); } else { $code->encodeString($intext, $this->version, $this->level, $this->hint, $this->casesensitive); } goto es2AQ; es2AQ: QRtools::markTime("\x61\x66\x74\145\x72\137\145\156\143\157\144\x65"); goto Uxc0B; gkmWW: $code = new QRcode(); goto Os7HQ; Uxc0B: if ($outfile !== false) { file_put_contents($outfile, join("\xa", QRtools::binarize($code->data))); } else { return QRtools::binarize($code->data); } goto Nxmj_; Nxmj_: } public function encodePNG($intext, $outfile = false, $saveandprint = false) { try { goto cx1UJ; jmwYl: QRimage::png($tab, $outfile, min(max(1, $this->size), $maxSize), $this->margin, $saveandprint); goto wqj2Z; g7Ati: $tab = $this->encode($intext); goto ED5uX; NQAvr: if ($err != '') { QRtools::log($outfile, $err); } goto y8MuA; cx1UJ: ob_start(); goto g7Ati; y8MuA: $maxSize = (int) (QR_PNG_MAXIMUM_SIZE / (count($tab) + 2 * $this->margin)); goto jmwYl; ED5uX: $err = ob_get_contents(); goto V4HuR; V4HuR: ob_end_clean(); goto NQAvr; wqj2Z: } catch (Exception $e) { QRtools::log($outfile, $e->getMessage()); } } }
