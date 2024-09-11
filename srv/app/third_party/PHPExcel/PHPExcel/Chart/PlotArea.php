<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Chart_PlotArea { private $layout = null; private $plotSeries = array(); public function __construct(PHPExcel_Chart_Layout $layout = null, $plotSeries = array()) { $this->layout = $layout; $this->plotSeries = $plotSeries; } public function getLayout() { return $this->layout; } public function getPlotGroupCount() { return count($this->plotSeries); } public function getPlotSeriesCount() { goto GYazj; GYazj: $seriesCount = 0; goto bzSVu; bzSVu: foreach ($this->plotSeries as $plot) { $seriesCount += $plot->getPlotSeriesCount(); } goto Tc3pa; Tc3pa: return $seriesCount; goto xUtJN; xUtJN: } public function getPlotGroup() { return $this->plotSeries; } public function getPlotGroupByIndex($index) { return $this->plotSeries[$index]; } public function setPlotSeries($plotSeries = array()) { $this->plotSeries = $plotSeries; return $this; } public function refresh(PHPExcel_Worksheet $worksheet) { foreach ($this->plotSeries as $plotSeries) { $plotSeries->refresh($worksheet); } } }
