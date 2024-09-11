<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 abstract class PHPExcel_CachedObjectStorage_CacheBase { protected $parent; protected $currentObject = null; protected $currentObjectID = null; protected $currentCellIsDirty = true; protected $cellCache = array(); public function __construct(PHPExcel_Worksheet $parent) { $this->parent = $parent; } public function getParent() { return $this->parent; } public function isDataSet($pCoord) { if ($pCoord === $this->currentObjectID) { return true; } return isset($this->cellCache[$pCoord]); } public function moveCell($fromAddress, $toAddress) { goto C6bhQ; qJ__g: $this->currentCellIsDirty = true; goto v_B15; v_B15: if (isset($this->cellCache[$fromAddress])) { $this->cellCache[$toAddress] =& $this->cellCache[$fromAddress]; unset($this->cellCache[$fromAddress]); } goto qG21h; C6bhQ: if ($fromAddress === $this->currentObjectID) { $this->currentObjectID = $toAddress; } goto qJ__g; qG21h: return true; goto ykHDY; ykHDY: } public function updateCacheData(PHPExcel_Cell $cell) { return $this->addCacheData($cell->getCoordinate(), $cell); } public function deleteCacheData($pCoord) { goto sXo_q; GAyug: if (is_object($this->cellCache[$pCoord])) { $this->cellCache[$pCoord]->detach(); unset($this->cellCache[$pCoord]); } goto EeX5C; EeX5C: $this->currentCellIsDirty = false; goto xkgQS; sXo_q: if ($pCoord === $this->currentObjectID && !is_null($this->currentObject)) { $this->currentObject->detach(); $this->currentObjectID = $this->currentObject = null; } goto GAyug; xkgQS: } public function getCellList() { return array_keys($this->cellCache); } public function getSortedCellList() { goto Z5RyT; Z5RyT: $sortKeys = array(); goto nsmCu; OFOCU: ksort($sortKeys); goto tjhiL; tjhiL: return array_values($sortKeys); goto auKOB; nsmCu: foreach ($this->getCellList() as $coord) { sscanf($coord, "\x25\133\x41\55\x5a\135\x25\144", $column, $row); $sortKeys[sprintf("\45\x30\71\x64\45\x33\x73", $row, $column)] = $coord; } goto OFOCU; auKOB: } public function getHighestRowAndColumn() { goto WIXOZ; D1ZPo: if (!empty($row)) { $highestRow = max($row); $highestColumn = substr(max($col), 1); } goto RWkfC; t5znW: $row = array(1); goto cB3Fi; RWkfC: return array("\162\157\x77" => $highestRow, "\143\157\154\165\x6d\156" => $highestColumn); goto Liq0s; WIXOZ: $col = array("\101" => "\x31\x41"); goto t5znW; cB3Fi: foreach ($this->getCellList() as $coord) { goto vqPu5; eHkly: $col[$c] = strlen($c) . $c; goto Jmbr8; Pk3XH: $row[$r] = $r; goto eHkly; vqPu5: sscanf($coord, "\45\x5b\101\x2d\x5a\135\x25\144", $c, $r); goto Pk3XH; Jmbr8: } goto D1ZPo; Liq0s: } public function getCurrentAddress() { return $this->currentObjectID; } public function getCurrentColumn() { sscanf($this->currentObjectID, "\x25\x5b\x41\x2d\x5a\x5d\45\144", $column, $row); return $column; } public function getCurrentRow() { sscanf($this->currentObjectID, "\45\133\101\55\x5a\x5d\x25\x64", $column, $row); return (int) $row; } public function getHighestColumn($row = null) { goto YpI1i; not2y: foreach ($this->getCellList() as $coord) { goto Q0Uph; Q0Uph: sscanf($coord, "\x25\x5b\x41\x2d\132\x5d\45\144", $c, $r); goto uMiL5; IiSoH: $columnList[] = PHPExcel_Cell::columnIndexFromString($c); goto ksOzc; uMiL5: if ($r != $row) { continue; } goto IiSoH; ksOzc: } goto b7wGA; Rw7Ru: $columnList = array(1); goto not2y; b7wGA: return PHPExcel_Cell::stringFromColumnIndex(max($columnList) - 1); goto UAW2r; YpI1i: if ($row == null) { $colRow = $this->getHighestRowAndColumn(); return $colRow["\143\157\x6c\165\x6d\x6e"]; } goto Rw7Ru; UAW2r: } public function getHighestRow($column = null) { goto D0g1N; IH9dM: $rowList = array(0); goto OmwXx; OmwXx: foreach ($this->getCellList() as $coord) { goto ev5aM; vorfs: if ($c != $column) { continue; } goto Y18Eg; Y18Eg: $rowList[] = $r; goto SuIRb; ev5aM: sscanf($coord, "\45\x5b\x41\x2d\x5a\x5d\45\x64", $c, $r); goto vorfs; SuIRb: } goto BmEgs; D0g1N: if ($column == null) { $colRow = $this->getHighestRowAndColumn(); return $colRow["\x72\157\167"]; } goto IH9dM; BmEgs: return max($rowList); goto oWTKI; oWTKI: } protected function getUniqueID() { if (function_exists("\x70\x6f\x73\x69\x78\137\147\x65\164\160\x69\144")) { $baseUnique = posix_getpid(); } else { $baseUnique = mt_rand(); } return uniqid($baseUnique, true); } public function copyCellCollection(PHPExcel_Worksheet $parent) { goto hpMQa; r6imU: $this->parent = $parent; goto ueGG0; Ow6pf: $this->storeData(); goto r6imU; ueGG0: if ($this->currentObject !== null && is_object($this->currentObject)) { $this->currentObject->attach($this); } goto JRQiB; hpMQa: $this->currentCellIsDirty; goto Ow6pf; JRQiB: } public function removeRow($row) { foreach ($this->getCellList() as $coord) { sscanf($coord, "\x25\133\101\55\x5a\x5d\45\x64", $c, $r); if ($r == $row) { $this->deleteCacheData($coord); } } } public function removeColumn($column) { foreach ($this->getCellList() as $coord) { sscanf($coord, "\x25\133\x41\55\132\x5d\45\x64", $c, $r); if ($c == $column) { $this->deleteCacheData($coord); } } } public static function cacheMethodIsAvailable() { return true; } }
