<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_CachedObjectStorage_MemoryGZip extends PHPExcel_CachedObjectStorage_CacheBase implements PHPExcel_CachedObjectStorage_ICache { protected function storeData() { if ($this->currentCellIsDirty && !empty($this->currentObjectID)) { goto NotGN; e3iap: $this->cellCache[$this->currentObjectID] = gzdeflate(serialize($this->currentObject)); goto fRCjC; NotGN: $this->currentObject->detach(); goto e3iap; fRCjC: $this->currentCellIsDirty = false; goto fUXHJ; fUXHJ: } $this->currentObjectID = $this->currentObject = null; } public function addCacheData($pCoord, PHPExcel_Cell $cell) { goto iGYPt; r97jA: $this->currentObjectID = $pCoord; goto lmT67; rf_rD: $this->currentCellIsDirty = true; goto vQ2YP; vQ2YP: return $cell; goto RNbF4; lmT67: $this->currentObject = $cell; goto rf_rD; iGYPt: if ($pCoord !== $this->currentObjectID && $this->currentObjectID !== null) { $this->storeData(); } goto r97jA; RNbF4: } public function getCacheData($pCoord) { goto J3Cbc; vD3yx: if (!isset($this->cellCache[$pCoord])) { return null; } goto nikT3; UAuch: $this->currentObject->attach($this); goto xIIhC; Le2d_: $this->storeData(); goto vD3yx; ukyBp: $this->currentObject = unserialize(gzinflate($this->cellCache[$pCoord])); goto UAuch; J3Cbc: if ($pCoord === $this->currentObjectID) { return $this->currentObject; } goto Le2d_; xIIhC: return $this->currentObject; goto VzkN3; nikT3: $this->currentObjectID = $pCoord; goto ukyBp; VzkN3: } public function getCellList() { if ($this->currentObjectID !== null) { $this->storeData(); } return parent::getCellList(); } public function unsetWorksheetCells() { goto C9Psu; Zs5bP: $this->parent = null; goto HvxHe; C9Psu: if (!is_null($this->currentObject)) { $this->currentObject->detach(); $this->currentObject = $this->currentObjectID = null; } goto E0uWa; E0uWa: $this->cellCache = array(); goto Zs5bP; HvxHe: } }
