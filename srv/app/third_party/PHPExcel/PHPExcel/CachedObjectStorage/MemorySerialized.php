<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_CachedObjectStorage_MemorySerialized extends PHPExcel_CachedObjectStorage_CacheBase implements PHPExcel_CachedObjectStorage_ICache { protected function storeData() { if ($this->currentCellIsDirty && !empty($this->currentObjectID)) { goto gs0Mb; gs0Mb: $this->currentObject->detach(); goto STd1Z; STd1Z: $this->cellCache[$this->currentObjectID] = serialize($this->currentObject); goto YUPdS; YUPdS: $this->currentCellIsDirty = false; goto E6LI2; E6LI2: } $this->currentObjectID = $this->currentObject = null; } public function addCacheData($pCoord, PHPExcel_Cell $cell) { goto A_sPj; fBcM1: $this->currentCellIsDirty = true; goto aQNYa; Ts6Dq: $this->currentObjectID = $pCoord; goto DzKSV; aQNYa: return $cell; goto cvtIj; DzKSV: $this->currentObject = $cell; goto fBcM1; A_sPj: if ($pCoord !== $this->currentObjectID && $this->currentObjectID !== null) { $this->storeData(); } goto Ts6Dq; cvtIj: } public function getCacheData($pCoord) { goto mJ4PA; RTihP: return $this->currentObject; goto qjcg0; Giut5: $this->currentObject->attach($this); goto RTihP; IQkj2: $this->currentObject = unserialize($this->cellCache[$pCoord]); goto Giut5; oYAWt: $this->storeData(); goto yHAO1; mJ4PA: if ($pCoord === $this->currentObjectID) { return $this->currentObject; } goto oYAWt; yHAO1: if (!isset($this->cellCache[$pCoord])) { return null; } goto tUVyu; tUVyu: $this->currentObjectID = $pCoord; goto IQkj2; qjcg0: } public function getCellList() { if ($this->currentObjectID !== null) { $this->storeData(); } return parent::getCellList(); } public function unsetWorksheetCells() { goto gxhk_; gMucb: $this->parent = null; goto d2KN4; VPO5h: $this->cellCache = array(); goto gMucb; gxhk_: if (!is_null($this->currentObject)) { $this->currentObject->detach(); $this->currentObject = $this->currentObjectID = null; } goto VPO5h; d2KN4: } }
