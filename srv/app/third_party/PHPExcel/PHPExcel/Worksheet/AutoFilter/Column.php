<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Worksheet_AutoFilter_Column { const AUTOFILTER_FILTERTYPE_FILTER = "\146\x69\x6c\x74\x65\x72\x73"; const AUTOFILTER_FILTERTYPE_CUSTOMFILTER = "\x63\x75\x73\x74\157\155\x46\151\154\x74\145\162\x73"; const AUTOFILTER_FILTERTYPE_DYNAMICFILTER = "\144\171\x6e\141\x6d\151\x63\x46\x69\154\x74\x65\162"; const AUTOFILTER_FILTERTYPE_TOPTENFILTER = "\164\157\160\x31\x30"; private static $filterTypes = array(self::AUTOFILTER_FILTERTYPE_FILTER, self::AUTOFILTER_FILTERTYPE_CUSTOMFILTER, self::AUTOFILTER_FILTERTYPE_DYNAMICFILTER, self::AUTOFILTER_FILTERTYPE_TOPTENFILTER); const AUTOFILTER_COLUMN_JOIN_AND = "\141\x6e\x64"; const AUTOFILTER_COLUMN_JOIN_OR = "\157\x72"; private static $ruleJoins = array(self::AUTOFILTER_COLUMN_JOIN_AND, self::AUTOFILTER_COLUMN_JOIN_OR); private $parent; private $columnIndex = ''; private $filterType = self::AUTOFILTER_FILTERTYPE_FILTER; private $join = self::AUTOFILTER_COLUMN_JOIN_OR; private $ruleset = array(); private $attributes = array(); public function __construct($pColumn, PHPExcel_Worksheet_AutoFilter $pParent = null) { $this->columnIndex = $pColumn; $this->parent = $pParent; } public function getColumnIndex() { return $this->columnIndex; } public function setColumnIndex($pColumn) { goto Kqf_G; uspBC: if ($this->parent !== null) { $this->parent->testColumnInRange($pColumn); } goto nd_OM; Kqf_G: $pColumn = strtoupper($pColumn); goto uspBC; nd_OM: $this->columnIndex = $pColumn; goto s0VZf; s0VZf: return $this; goto V2Isw; V2Isw: } public function getParent() { return $this->parent; } public function setParent(PHPExcel_Worksheet_AutoFilter $pParent = null) { $this->parent = $pParent; return $this; } public function getFilterType() { return $this->filterType; } public function setFilterType($pFilterType = self::AUTOFILTER_FILTERTYPE_FILTER) { goto m65o0; ukzds: $this->filterType = $pFilterType; goto dv563; m65o0: if (!in_array($pFilterType, self::$filterTypes)) { throw new PHPExcel_Exception("\111\156\x76\x61\x6c\x69\x64\x20\146\x69\154\x74\x65\x72\x20\164\171\x70\x65\40\146\x6f\162\40\143\157\154\x75\155\x6e\x20\101\x75\x74\157\x46\x69\154\164\x65\162\56"); } goto ukzds; dv563: return $this; goto onmp8; onmp8: } public function getJoin() { return $this->join; } public function setJoin($pJoin = self::AUTOFILTER_COLUMN_JOIN_OR) { goto kk1dK; nTbMk: return $this; goto RRQG2; H3zjJ: $this->join = $pJoin; goto nTbMk; kk1dK: $pJoin = strtolower($pJoin); goto GNULw; GNULw: if (!in_array($pJoin, self::$ruleJoins)) { throw new PHPExcel_Exception("\111\156\166\x61\x6c\x69\144\x20\162\x75\x6c\145\40\143\x6f\x6e\156\145\x63\x74\151\157\156\40\146\157\162\x20\x63\x6f\154\x75\155\156\40\x41\x75\164\157\106\151\x6c\x74\145\x72\x2e"); } goto H3zjJ; RRQG2: } public function setAttributes($pAttributes = array()) { $this->attributes = $pAttributes; return $this; } public function setAttribute($pName, $pValue) { $this->attributes[$pName] = $pValue; return $this; } public function getAttributes() { return $this->attributes; } public function getAttribute($pName) { if (isset($this->attributes[$pName])) { return $this->attributes[$pName]; } return null; } public function getRules() { return $this->ruleset; } public function getRule($pIndex) { if (!isset($this->ruleset[$pIndex])) { $this->ruleset[$pIndex] = new PHPExcel_Worksheet_AutoFilter_Column_Rule($this); } return $this->ruleset[$pIndex]; } public function createRule() { $this->ruleset[] = new PHPExcel_Worksheet_AutoFilter_Column_Rule($this); return end($this->ruleset); } public function addRule(PHPExcel_Worksheet_AutoFilter_Column_Rule $pRule, $returnRule = true) { goto y0i4C; kMI38: return $returnRule ? $pRule : $this; goto fkOZn; y0i4C: $pRule->setParent($this); goto uXn5f; uXn5f: $this->ruleset[] = $pRule; goto kMI38; fkOZn: } public function deleteRule($pIndex) { if (isset($this->ruleset[$pIndex])) { unset($this->ruleset[$pIndex]); if (count($this->ruleset) <= 1) { $this->setJoin(self::AUTOFILTER_COLUMN_JOIN_OR); } } return $this; } public function clearRules() { goto uhFYK; uhFYK: $this->ruleset = array(); goto WUYSE; KM2U_: return $this; goto mVJnK; WUYSE: $this->setJoin(self::AUTOFILTER_COLUMN_JOIN_OR); goto KM2U_; mVJnK: } public function __clone() { $vars = get_object_vars($this); foreach ($vars as $key => $value) { if (is_object($value)) { if ($key == "\x70\x61\162\x65\x6e\164") { $this->{$key} = null; } else { $this->{$key} = clone $value; } } elseif (is_array($value) && $key == "\x72\x75\x6c\145\163\145\164") { $this->{$key} = array(); foreach ($value as $k => $v) { $this->{$key}[$k] = clone $v; $this->{$key}[$k]->setParent($this); } } else { $this->{$key} = $value; } } } }
