<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:04              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Shared_Escher_DgContainer_SpgrContainer { private $parent; private $children = array(); public function setParent($parent) { $this->parent = $parent; } public function getParent() { return $this->parent; } public function addChild($child) { $this->children[] = $child; $child->setParent($this); } public function getChildren() { return $this->children; } public function getAllSpContainers() { goto cN0CB; qe6Ey: return $allSpContainers; goto ED_Cm; qjDPT: foreach ($this->children as $child) { if ($child instanceof PHPExcel_Shared_Escher_DgContainer_SpgrContainer) { $allSpContainers = array_merge($allSpContainers, $child->getAllSpContainers()); } else { $allSpContainers[] = $child; } } goto qe6Ey; cN0CB: $allSpContainers = array(); goto qjDPT; ED_Cm: } }
