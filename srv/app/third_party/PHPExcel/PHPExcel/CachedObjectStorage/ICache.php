<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 interface PHPExcel_CachedObjectStorage_ICache { public function addCacheData($pCoord, PHPExcel_Cell $cell); public function updateCacheData(PHPExcel_Cell $cell); public function getCacheData($pCoord); public function deleteCacheData($pCoord); public function isDataSet($pCoord); public function getCellList(); public function getSortedCellList(); public function copyCellCollection(PHPExcel_Worksheet $parent); public static function cacheMethodIsAvailable(); }
