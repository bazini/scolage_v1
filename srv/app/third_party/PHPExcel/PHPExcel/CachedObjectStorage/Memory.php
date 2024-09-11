<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_CachedObjectStorage_Memory extends PHPExcel_CachedObjectStorage_CacheBase implements PHPExcel_CachedObjectStorage_ICache { protected function storeData() { } public function addCacheData($pCoord, PHPExcel_Cell $cell) { goto L543d; S3hmQ: return $cell; goto WMYoD; L543d: $this->cellCache[$pCoord] = $cell; goto D5OTV; D5OTV: $this->currentObjectID = $pCoord; goto S3hmQ; WMYoD: } public function getCacheData($pCoord) { goto hnx9m; hnx9m: if (!isset($this->cellCache[$pCoord])) { $this->currentObjectID = null; return null; } goto UqrvN; UqrvN: $this->currentObjectID = $pCoord; goto a1HFI; a1HFI: return $this->cellCache[$pCoord]; goto iOxRx; iOxRx: } public function copyCellCollection(PHPExcel_Worksheet $parent) { goto EEL_3; EEL_3: parent::copyCellCollection($parent); goto L632n; L632n: $newCollection = array(); goto PoTzX; PoTzX: foreach ($this->cellCache as $k => &$cell) { $newCollection[$k] = clone $cell; $newCollection[$k]->attach($this); } goto RpiYZ; RpiYZ: $this->cellCache = $newCollection; goto JaVRk; JaVRk: } public function unsetWorksheetCells() { goto ZN1Fh; bvegt: $this->cellCache = array(); goto jaoV4; jaoV4: $this->parent = null; goto Jvakb; ZN1Fh: foreach ($this->cellCache as $k => &$cell) { $cell->detach(); $this->cellCache[$k] = null; } goto M1Q2g; M1Q2g: unset($cell); goto bvegt; Jvakb: } }
