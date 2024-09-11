<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:05              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Reader_Excel5_Escher { const DGGCONTAINER = 0xf000; const BSTORECONTAINER = 0xf001; const DGCONTAINER = 0xf002; const SPGRCONTAINER = 0xf003; const SPCONTAINER = 0xf004; const DGG = 0xf006; const BSE = 0xf007; const DG = 0xf008; const SPGR = 0xf009; const SP = 0xf00a; const OPT = 0xf00b; const CLIENTTEXTBOX = 0xf00d; const CLIENTANCHOR = 0xf010; const CLIENTDATA = 0xf011; const BLIPJPEG = 0xf01d; const BLIPPNG = 0xf01e; const SPLITMENUCOLORS = 0xf11e; const TERTIARYOPT = 0xf122; private $data; private $dataSize; private $pos; private $object; public function __construct($object) { $this->object = $object; } public function load($data) { goto AqBg1; Tw5pr: $this->dataSize = strlen($this->data); goto vg6VM; vg6VM: $this->pos = 0; goto BxDVF; DLyEn: return $this->object; goto CpIUg; AqBg1: $this->data = $data; goto Tw5pr; BxDVF: while ($this->pos < $this->dataSize) { $fbt = PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos + 2); switch ($fbt) { case self::DGGCONTAINER: $this->readDggContainer(); break; case self::DGG: $this->readDgg(); break; case self::BSTORECONTAINER: $this->readBstoreContainer(); break; case self::BSE: $this->readBSE(); break; case self::BLIPJPEG: $this->readBlipJPEG(); break; case self::BLIPPNG: $this->readBlipPNG(); break; case self::OPT: $this->readOPT(); break; case self::TERTIARYOPT: $this->readTertiaryOPT(); break; case self::SPLITMENUCOLORS: $this->readSplitMenuColors(); break; case self::DGCONTAINER: $this->readDgContainer(); break; case self::DG: $this->readDg(); break; case self::SPGRCONTAINER: $this->readSpgrContainer(); break; case self::SPCONTAINER: $this->readSpContainer(); break; case self::SPGR: $this->readSpgr(); break; case self::SP: $this->readSp(); break; case self::CLIENTTEXTBOX: $this->readClientTextbox(); break; case self::CLIENTANCHOR: $this->readClientAnchor(); break; case self::CLIENTDATA: $this->readClientData(); break; default: $this->readDefault(); break; } } goto DLyEn; CpIUg: } private function readDefault() { goto x2evD; Txt3G: $recVer = (0xf & $verInstance) >> 0; goto MaFNp; x2evD: $verInstance = PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos); goto ED065; ED065: $fbt = PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos + 2); goto Txt3G; MaFNp: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto bjouz; bjouz: $recordData = substr($this->data, $this->pos + 8, $length); goto Cnab3; Cnab3: $this->pos += 8 + $length; goto kvSNy; kvSNy: } private function readDggContainer() { goto nwLnY; wS3S3: $reader->load($recordData); goto LAQo7; k7nMr: $reader = new PHPExcel_Reader_Excel5_Escher($dggContainer); goto wS3S3; Yw059: $this->object->setDggContainer($dggContainer); goto k7nMr; nwLnY: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto KPHSD; W0ZwJ: $this->pos += 8 + $length; goto B6vbN; B6vbN: $dggContainer = new PHPExcel_Shared_Escher_DggContainer(); goto Yw059; KPHSD: $recordData = substr($this->data, $this->pos + 8, $length); goto W0ZwJ; LAQo7: } private function readDgg() { goto gA6rH; PnVld: $recordData = substr($this->data, $this->pos + 8, $length); goto Lagis; Lagis: $this->pos += 8 + $length; goto xMpRl; gA6rH: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto PnVld; xMpRl: } private function readBstoreContainer() { goto gN17f; nC6Z9: $recordData = substr($this->data, $this->pos + 8, $length); goto sjKVK; m3xD9: $reader->load($recordData); goto hqzmL; maha0: $reader = new PHPExcel_Reader_Excel5_Escher($bstoreContainer); goto m3xD9; Tm9nW: $this->object->setBstoreContainer($bstoreContainer); goto maha0; sjKVK: $this->pos += 8 + $length; goto yJEb5; yJEb5: $bstoreContainer = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer(); goto Tm9nW; gN17f: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto nC6Z9; hqzmL: } private function readBSE() { goto XSBKQ; B9rRn: $cRef = PHPExcel_Reader_Excel5::getInt4d($recordData, 24); goto UXNmb; xwa3h: $cbName = ord($recordData[33]); goto mJcQM; gazaY: $this->object->addBSE($BSE); goto z5lf_; M4HVw: $tag = PHPExcel_Reader_Excel5::getInt2d($recordData, 18); goto oRbk6; z5lf_: $BSE->setBLIPType($recInstance); goto kdBzO; e9oHZ: $unused3 = ord($recordData[35]); goto grmPB; K_KY7: $unused1 = ord($recordData[32]); goto xwa3h; UXNmb: $foDelay = PHPExcel_Reader_Excel5::getInt4d($recordData, 28); goto K_KY7; HljjD: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto Qltae; Dn95o: $blipData = substr($recordData, 36 + $cbName); goto fiHnh; FsDH_: $this->pos += 8 + $length; goto NABU3; kdBzO: $btWin32 = ord($recordData[0]); goto eOQq9; Qltae: $recordData = substr($this->data, $this->pos + 8, $length); goto FsDH_; fiHnh: $reader = new PHPExcel_Reader_Excel5_Escher($BSE); goto n3Dq4; oRbk6: $size = PHPExcel_Reader_Excel5::getInt4d($recordData, 20); goto B9rRn; mJcQM: $unused2 = ord($recordData[34]); goto e9oHZ; NABU3: $BSE = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE(); goto gazaY; JfFJu: $rgbUid = substr($recordData, 2, 16); goto M4HVw; grmPB: $nameData = substr($recordData, 36, $cbName); goto Dn95o; eOQq9: $btMacOS = ord($recordData[1]); goto JfFJu; n3Dq4: $reader->load($blipData); goto yFkh6; XSBKQ: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto HljjD; yFkh6: } private function readBlipJPEG() { goto WUumE; XgMgU: $pos += 1; goto AQ941; B_cmJ: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto qHLjr; dvA5u: $blip = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE_Blip(); goto B9KvR; j8WHh: if (in_array($recInstance, array(0x46b, 0x6e3))) { $rgbUid2 = substr($recordData, 16, 16); $pos += 16; } goto NLvz0; Q5Isr: $pos += 16; goto j8WHh; B9KvR: $blip->setData($data); goto qIG10; jp_OM: $rgbUid1 = substr($recordData, 0, 16); goto Q5Isr; NLvz0: $tag = ord($recordData[$pos]); goto XgMgU; AQ941: $data = substr($recordData, $pos); goto dvA5u; Wu9J4: $pos = 0; goto jp_OM; YSXo3: $this->pos += 8 + $length; goto Wu9J4; qHLjr: $recordData = substr($this->data, $this->pos + 8, $length); goto YSXo3; WUumE: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto B_cmJ; qIG10: $this->object->setBlip($blip); goto Mmec3; Mmec3: } private function readBlipPNG() { goto MmdCz; IFThY: $pos += 16; goto sYpis; hM650: $tag = ord($recordData[$pos]); goto llw0z; Zvf5D: $this->object->setBlip($blip); goto QULlp; m2LeZ: $blip = new PHPExcel_Shared_Escher_DggContainer_BstoreContainer_BSE_Blip(); goto lD4CE; H39SM: $this->pos += 8 + $length; goto KOdN4; sYpis: if ($recInstance == 0x6e1) { $rgbUid2 = substr($recordData, 16, 16); $pos += 16; } goto hM650; lD4CE: $blip->setData($data); goto Zvf5D; llw0z: $pos += 1; goto ImBr6; mdMd2: $recordData = substr($this->data, $this->pos + 8, $length); goto H39SM; ImBr6: $data = substr($recordData, $pos); goto m2LeZ; VE8Mn: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto mdMd2; bOBio: $rgbUid1 = substr($recordData, 0, 16); goto IFThY; KOdN4: $pos = 0; goto bOBio; MmdCz: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto VE8Mn; QULlp: } private function readOPT() { goto HBFEi; eiHaE: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto P6jq8; P6jq8: $recordData = substr($this->data, $this->pos + 8, $length); goto G_QJv; HBFEi: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto eiHaE; mueTi: $this->readOfficeArtRGFOPTE($recordData, $recInstance); goto HZNoc; G_QJv: $this->pos += 8 + $length; goto mueTi; HZNoc: } private function readTertiaryOPT() { goto PEaOX; orAbS: $this->pos += 8 + $length; goto mRMQO; vDaP0: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto EJopX; PEaOX: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto vDaP0; EJopX: $recordData = substr($this->data, $this->pos + 8, $length); goto orAbS; mRMQO: } private function readSplitMenuColors() { goto Q8osL; Y80z7: $this->pos += 8 + $length; goto dXmZX; Q8osL: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto RsyFM; RsyFM: $recordData = substr($this->data, $this->pos + 8, $length); goto Y80z7; dXmZX: } private function readDgContainer() { goto cxQ4B; yKkVo: $this->pos += 8 + $length; goto ay_AK; ThBhr: $reader = new PHPExcel_Reader_Excel5_Escher($dgContainer); goto ZDIBp; fFRSS: $this->object->setDgContainer($dgContainer); goto ThBhr; ay_AK: $dgContainer = new PHPExcel_Shared_Escher_DgContainer(); goto fFRSS; WWmn8: $recordData = substr($this->data, $this->pos + 8, $length); goto yKkVo; ZDIBp: $escher = $reader->load($recordData); goto IbtxV; cxQ4B: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto WWmn8; IbtxV: } private function readDg() { goto cLz4D; wyYH0: $this->pos += 8 + $length; goto XD1rG; cLz4D: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto gu22l; gu22l: $recordData = substr($this->data, $this->pos + 8, $length); goto wyYH0; XD1rG: } private function readSpgrContainer() { goto zRqr4; TV036: $reader = new PHPExcel_Reader_Excel5_Escher($spgrContainer); goto ENL9A; zRqr4: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto C4e22; ENL9A: $escher = $reader->load($recordData); goto IpRSL; kXVfX: $this->pos += 8 + $length; goto XDAn6; C4e22: $recordData = substr($this->data, $this->pos + 8, $length); goto kXVfX; G7fbn: if ($this->object instanceof PHPExcel_Shared_Escher_DgContainer) { $this->object->setSpgrContainer($spgrContainer); } else { $this->object->addChild($spgrContainer); } goto TV036; XDAn6: $spgrContainer = new PHPExcel_Shared_Escher_DgContainer_SpgrContainer(); goto G7fbn; IpRSL: } private function readSpContainer() { goto ssO0_; xZ70A: $this->pos += 8 + $length; goto d8CUD; d8CUD: $reader = new PHPExcel_Reader_Excel5_Escher($spContainer); goto gogGV; RZAt2: $this->object->addChild($spContainer); goto xZ70A; ssO0_: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto je2KC; je2KC: $recordData = substr($this->data, $this->pos + 8, $length); goto uYj70; gogGV: $escher = $reader->load($recordData); goto dqWjc; uYj70: $spContainer = new PHPExcel_Shared_Escher_DgContainer_SpgrContainer_SpContainer(); goto RZAt2; dqWjc: } private function readSpgr() { goto gWsHe; ldmuO: $recordData = substr($this->data, $this->pos + 8, $length); goto VYap9; gWsHe: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto ldmuO; VYap9: $this->pos += 8 + $length; goto KhY5g; KhY5g: } private function readSp() { goto AOibT; nvpXv: $recordData = substr($this->data, $this->pos + 8, $length); goto raSRM; raSRM: $this->pos += 8 + $length; goto LYpgN; FjqY6: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto nvpXv; AOibT: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto FjqY6; LYpgN: } private function readClientTextbox() { goto SbQlq; OyYvU: $this->pos += 8 + $length; goto oU9Zq; SbQlq: $recInstance = (0xfff0 & PHPExcel_Reader_Excel5::getInt2d($this->data, $this->pos)) >> 4; goto QOHYl; QOHYl: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto quEeu; quEeu: $recordData = substr($this->data, $this->pos + 8, $length); goto OyYvU; oU9Zq: } private function readClientAnchor() { goto qxhzV; n72u0: $this->object->setStartOffsetY($startOffsetY); goto Lsh_P; C78uu: $r1 = PHPExcel_Reader_Excel5::getInt2d($recordData, 6); goto IlipW; Ro3sC: $this->pos += 8 + $length; goto nsfD9; xzDil: $this->object->setStartOffsetX($startOffsetX); goto n72u0; BbFC3: $startOffsetX = PHPExcel_Reader_Excel5::getInt2d($recordData, 4); goto C78uu; f3Q8n: $c2 = PHPExcel_Reader_Excel5::getInt2d($recordData, 10); goto yLhGO; zxnXk: $this->object->setStartCoordinates(PHPExcel_Cell::stringFromColumnIndex($c1) . ($r1 + 1)); goto xzDil; c0lS5: $endOffsetY = PHPExcel_Reader_Excel5::getInt2d($recordData, 16); goto zxnXk; yLhGO: $endOffsetX = PHPExcel_Reader_Excel5::getInt2d($recordData, 12); goto vEr00; nsfD9: $c1 = PHPExcel_Reader_Excel5::getInt2d($recordData, 2); goto BbFC3; qxhzV: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto Mvp2k; t5RPU: $this->object->setEndOffsetY($endOffsetY); goto dzMsl; IlipW: $startOffsetY = PHPExcel_Reader_Excel5::getInt2d($recordData, 8); goto f3Q8n; EqlsL: $this->object->setEndOffsetX($endOffsetX); goto t5RPU; Lsh_P: $this->object->setEndCoordinates(PHPExcel_Cell::stringFromColumnIndex($c2) . ($r2 + 1)); goto EqlsL; Mvp2k: $recordData = substr($this->data, $this->pos + 8, $length); goto Ro3sC; vEr00: $r2 = PHPExcel_Reader_Excel5::getInt2d($recordData, 14); goto c0lS5; dzMsl: } private function readClientData() { goto vF720; vF720: $length = PHPExcel_Reader_Excel5::getInt4d($this->data, $this->pos + 4); goto cpyM4; cpyM4: $recordData = substr($this->data, $this->pos + 8, $length); goto s6V51; s6V51: $this->pos += 8 + $length; goto bF4Xx; bF4Xx: } private function readOfficeArtRGFOPTE($data, $n) { $splicedComplexData = substr($data, 6 * $n); for ($i = 0; $i < $n; ++$i) { $fopte = substr($data, 6 * $i, 6); $opid = PHPExcel_Reader_Excel5::getInt2d($fopte, 0); $opidOpid = (0x3fff & $opid) >> 0; $opidFBid = (0x4000 & $opid) >> 14; $opidFComplex = (0x8000 & $opid) >> 15; $op = PHPExcel_Reader_Excel5::getInt4d($fopte, 2); if ($opidFComplex) { goto QeUch; EXfuv: $splicedComplexData = substr($splicedComplexData, $op); goto fNMC1; fNMC1: $value = $complexData; goto KXHNi; QeUch: $complexData = substr($splicedComplexData, 0, $op); goto EXfuv; KXHNi: } else { $value = $op; } $this->object->setOPT($opidOpid, $value); } } }
