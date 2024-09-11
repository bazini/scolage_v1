<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:08              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 require_once PHPExcel_Settings::getChartRendererPath() . "\57\152\160\147\162\x61\x70\150\x2e\160\150\160"; class PHPExcel_Chart_Renderer_jpgraph { private static $width = 640; private static $height = 480; private static $colourSet = array("\155\145\x64\151\x75\155\160\x75\x72\160\154\145\61", "\x70\141\x6c\x65\x67\x72\x65\145\x6e\x33", "\x67\157\154\144\61", "\x63\x61\x64\145\x74\142\x6c\165\x65\61", "\x64\141\162\x6b\x6d\141\x67\x65\156\164\x61", "\x63\x6f\x72\141\x6c", "\x64\x6f\144\x67\145\x72\x62\x6c\165\x65\63", "\x65\x67\x67\160\x6c\141\x6e\x74", "\155\145\x64\x69\x75\155\142\x6c\x75\x65", "\155\x61\147\145\156\x74\x61", "\x73\141\x6e\x64\x79\142\x72\x6f\167\156", "\x63\x79\141\x6e", "\146\x69\x72\x65\142\162\151\143\153\61", "\146\157\162\145\x73\164\x67\162\x65\x65\x6e", "\144\x65\145\x70\x70\x69\156\153\x34", "\144\x61\162\153\157\x6c\151\166\145\147\x72\x65\x65\x6e", "\x67\157\154\x64\x65\x6e\162\x6f\x64\x32"); private static $markSet = array("\x64\x69\141\x6d\x6f\156\144" => MARK_DIAMOND, "\163\x71\165\x61\162\x65" => MARK_SQUARE, "\164\x72\151\141\156\147\154\145" => MARK_UTRIANGLE, "\x78" => MARK_X, "\x73\x74\x61\x72" => MARK_STAR, "\x64\157\x74" => MARK_FILLEDCIRCLE, "\x64\x61\x73\150" => MARK_DTRIANGLE, "\x63\151\162\x63\154\x65" => MARK_CIRCLE, "\160\154\165\x73" => MARK_CROSS); private $chart; private $graph; private static $plotColour = 0; private static $plotMark = 0; private function formatPointMarker($seriesPlot, $markerID) { goto bfG4z; fszTH: if (is_null($markerID)) { self::$plotMark %= count(self::$markSet); $seriesPlot->mark->SetType(self::$markSet[$plotMarkKeys[self::$plotMark++]]); } elseif ($markerID !== "\156\157\x6e\x65") { if (isset(self::$markSet[$markerID])) { $seriesPlot->mark->SetType(self::$markSet[$markerID]); } else { self::$plotMark %= count(self::$markSet); $seriesPlot->mark->SetType(self::$markSet[$plotMarkKeys[self::$plotMark++]]); } } else { $seriesPlot->mark->Hide(); } goto LuXQ4; bfG4z: $plotMarkKeys = array_keys(self::$markSet); goto fszTH; IM64I: $seriesPlot->SetColor(self::$colourSet[self::$plotColour++]); goto A3FJI; LuXQ4: $seriesPlot->mark->SetColor(self::$colourSet[self::$plotColour]); goto OI9MD; OI9MD: $seriesPlot->mark->SetFillColor(self::$colourSet[self::$plotColour]); goto IM64I; A3FJI: return $seriesPlot; goto D2JrF; D2JrF: } private function formatDataSetLabels($groupID, $datasetLabels, $labelCount, $rotation = '') { goto IFNRa; kxqCZ: foreach ($datasetLabels as $i => $datasetLabel) { if (is_array($datasetLabel)) { if ($rotation == "\142\141\x72") { $datasetLabels[$i] = implode("\x20", $datasetLabel); } else { $datasetLabel = array_reverse($datasetLabel); $datasetLabels[$i] = implode("\12", $datasetLabel); } } else { if (!is_null($datasetLabelFormatCode)) { $datasetLabels[$i] = PHPExcel_Style_NumberFormat::toFormattedString($datasetLabel, $datasetLabelFormatCode); } } ++$testCurrentIndex; } goto OJBEp; OJBEp: return $datasetLabels; goto kBA9n; PJhiC: if (!is_null($datasetLabelFormatCode)) { $datasetLabelFormatCode = stripslashes($datasetLabelFormatCode); } goto rtsou; IFNRa: $datasetLabelFormatCode = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex(0)->getFormatCode(); goto PJhiC; rtsou: $testCurrentIndex = 0; goto kxqCZ; kBA9n: } private function percentageSumCalculation($groupID, $seriesCount) { for ($i = 0; $i < $seriesCount; ++$i) { if ($i == 0) { $sumValues = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getDataValues(); } else { $nextValues = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getDataValues(); foreach ($nextValues as $k => $value) { if (isset($sumValues[$k])) { $sumValues[$k] += $value; } else { $sumValues[$k] = $value; } } } } return $sumValues; } private function percentageAdjustValues($dataValues, $sumValues) { foreach ($dataValues as $k => $dataValue) { $dataValues[$k] = $dataValue / $sumValues[$k] * 100; } return $dataValues; } private function getCaption($captionElement) { goto YSjMt; YSjMt: $caption = !is_null($captionElement) ? $captionElement->getCaption() : null; goto TfnJ9; TfnJ9: if (!is_null($caption)) { if (is_array($caption)) { $caption = implode('', $caption); } } goto hpQ4T; hpQ4T: return $caption; goto tqUXj; tqUXj: } private function renderTitle() { $title = $this->getCaption($this->chart->getTitle()); if (!is_null($title)) { $this->graph->title->Set($title); } } private function renderLegend() { $legend = $this->chart->getLegend(); if (!is_null($legend)) { goto m1z2h; q1_ku: $legendOverlay = $legend->getOverlay(); goto yja0k; m1z2h: $legendPosition = $legend->getPosition(); goto q1_ku; yja0k: switch ($legendPosition) { case "\162": goto ybPtL; zAbnl: break; goto C9sXL; wYXoD: $this->graph->legend->SetColumns(1); goto zAbnl; ybPtL: $this->graph->legend->SetPos(0.01, 0.5, "\x72\151\x67\150\x74", "\143\x65\x6e\164\x65\x72"); goto wYXoD; C9sXL: case "\154": goto m4C8g; m4C8g: $this->graph->legend->SetPos(0.01, 0.5, "\154\x65\x66\164", "\x63\145\x6e\x74\145\x72"); goto zdkJX; iPJE5: break; goto Y3rmy; zdkJX: $this->graph->legend->SetColumns(1); goto iPJE5; Y3rmy: case "\164": $this->graph->legend->SetPos(0.5, 0.01, "\x63\145\156\164\145\162", "\164\157\160"); break; case "\142": $this->graph->legend->SetPos(0.5, 0.99, "\x63\145\x6e\164\x65\x72", "\142\x6f\x74\164\157\x6d"); break; default: goto JtPmW; qGhT4: $this->graph->legend->SetColumns(1); goto pQWNS; pQWNS: break; goto a0wJv; JtPmW: $this->graph->legend->SetPos(0.01, 0.01, "\162\x69\147\x68\164", "\164\157\x70"); goto qGhT4; a0wJv: } goto iR0Yz; iR0Yz: } else { $this->graph->legend->Hide(); } } private function renderCartesianPlotArea($type = "\164\x65\170\164\154\151\156") { goto q2s50; q2s50: $this->graph = new Graph(self::$width, self::$height); goto g25WZ; g25WZ: $this->graph->SetScale($type); goto Vjx7S; Vjx7S: $this->renderTitle(); goto mYOFR; mYOFR: $rotation = $this->chart->getPlotArea()->getPlotGroupByIndex(0)->getPlotDirection(); goto UatIc; u8LUF: if (!is_null($xAxisLabel)) { $title = $this->getCaption($xAxisLabel); if (!is_null($title)) { goto mBxdu; mBxdu: $this->graph->xaxis->SetTitle($title, "\x63\145\156\164\x65\x72"); goto ln6iB; ln6iB: $this->graph->xaxis->title->SetMargin(35); goto LQmTV; LQmTV: if ($reverse) { $this->graph->xaxis->title->SetAngle(90); $this->graph->xaxis->title->SetMargin(90); } goto dscQe; dscQe: } } goto bMeyY; boL6C: if (!is_null($yAxisLabel)) { $title = $this->getCaption($yAxisLabel); if (!is_null($title)) { $this->graph->yaxis->SetTitle($title, "\x63\145\156\x74\x65\162"); if ($reverse) { $this->graph->yaxis->title->SetAngle(0); $this->graph->yaxis->title->SetMargin(-55); } } } goto osmEH; paCXI: $xAxisLabel = $this->chart->getXAxisLabel(); goto u8LUF; bMeyY: $yAxisLabel = $this->chart->getYAxisLabel(); goto boL6C; UatIc: $reverse = $rotation == "\142\x61\162" ? true : false; goto paCXI; osmEH: } private function renderPiePlotArea($doughnut = false) { $this->graph = new PieGraph(self::$width, self::$height); $this->renderTitle(); } private function renderRadarPlotArea() { goto KQp1f; KQp1f: $this->graph = new RadarGraph(self::$width, self::$height); goto tawex; tawex: $this->graph->SetScale("\x6c\x69\156"); goto aUCNk; aUCNk: $this->renderTitle(); goto HSxtm; HSxtm: } private function renderPlotLine($groupID, $filled = false, $combination = false, $dimensions = "\62\144") { goto COoll; dvGPg: if ($grouping == "\160\x65\162\143\x65\x6e\164\x53\164\141\143\153\x65\144") { $sumValues = $this->percentageSumCalculation($groupID, $seriesCount); } goto b27iq; TRQBZ: $this->graph->Add($groupPlot); goto tGF5_; b27iq: for ($i = 0; $i < $seriesCount; ++$i) { $dataValues = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getDataValues(); $marker = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getPointMarker(); if ($grouping == "\x70\x65\x72\143\145\x6e\164\123\x74\x61\x63\153\145\x64") { $dataValues = $this->percentageAdjustValues($dataValues, $sumValues); } $testCurrentIndex = 0; foreach ($dataValues as $k => $dataValue) { while ($k != $testCurrentIndex) { $dataValues[$testCurrentIndex] = null; ++$testCurrentIndex; } ++$testCurrentIndex; } $seriesPlot = new LinePlot($dataValues); if ($combination) { $seriesPlot->SetBarCenter(); } if ($filled) { goto SmEjM; iTeDq: $seriesPlot->SetFillColor(self::$colourSet[self::$plotColour++]); goto k8Ilc; SmEjM: $seriesPlot->SetFilled(true); goto fwgbp; fwgbp: $seriesPlot->SetColor("\142\154\141\x63\153"); goto iTeDq; k8Ilc: } else { $this->formatPointMarker($seriesPlot, $marker); } $dataLabel = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotLabelByIndex($i)->getDataValue(); $seriesPlot->SetLegend($dataLabel); $seriesPlots[] = $seriesPlot; } goto t2c9w; b1IWF: if ($labelCount > 0) { goto RZslc; RZslc: $datasetLabels = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex(0)->getDataValues(); goto km3Rv; OKAj4: $this->graph->xaxis->SetTickLabels($datasetLabels); goto pZ5fu; km3Rv: $datasetLabels = $this->formatDataSetLabels($groupID, $datasetLabels, $labelCount); goto OKAj4; pZ5fu: } goto pt6nz; llxwr: $labelCount = count($this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex(0)->getPointCount()); goto b1IWF; pt6nz: $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); goto nR4Sz; nR4Sz: $seriesPlots = array(); goto dvGPg; t2c9w: if ($grouping == "\163\164\141\x6e\144\141\x72\x64") { $groupPlot = $seriesPlots; } else { $groupPlot = new AccLinePlot($seriesPlots); } goto TRQBZ; COoll: $grouping = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotGrouping(); goto llxwr; tGF5_: } private function renderPlotBar($groupID, $dimensions = "\x32\x64") { goto heIbg; Kn_5E: if ($rotation == "\142\x61\162" && !($grouping == "\x70\x65\x72\143\145\x6e\x74\123\x74\x61\143\153\145\144")) { $seriesPlots = array_reverse($seriesPlots); } goto w6_UF; qJjZB: if ($labelCount > 0) { goto L5J6f; JNo0D: if ($rotation == "\142\x61\x72") { goto sR8iy; XKnCL: $this->graph->yaxis->SetLabelAlign("\143\x65\x6e\x74\x65\162", "\164\x6f\160"); goto pxnVV; sR8iy: $datasetLabels = array_reverse($datasetLabels); goto SfiYD; SfiYD: $this->graph->yaxis->SetPos("\x6d\x61\x78"); goto XKnCL; pxnVV: $this->graph->yaxis->SetLabelSide(SIDE_RIGHT); goto lHxoz; lHxoz: } goto KROzJ; leHME: $datasetLabels = $this->formatDataSetLabels($groupID, $datasetLabels, $labelCount, $rotation); goto JNo0D; KROzJ: $this->graph->xaxis->SetTickLabels($datasetLabels); goto vxeDx; L5J6f: $datasetLabels = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex(0)->getDataValues(); goto leHME; vxeDx: } goto RVSLQ; JjyE2: $this->graph->Add($groupPlot); goto L1sJO; w6_UF: if ($grouping == "\143\154\x75\163\164\145\162\x65\x64") { $groupPlot = new GroupBarPlot($seriesPlots); } elseif ($grouping == "\163\x74\x61\156\144\x61\162\144") { $groupPlot = new GroupBarPlot($seriesPlots); } else { $groupPlot = new AccBarPlot($seriesPlots); if ($dimensions == "\x33\144") { $groupPlot->SetShadow(); } } goto JjyE2; i09uR: if ($grouping == "\160\145\x72\143\x65\156\x74\123\164\x61\143\x6b\x65\144") { $sumValues = $this->percentageSumCalculation($groupID, $seriesCount); } goto kQDtT; oIX2d: if ($groupID == 0 && $rotation == "\x62\141\x72") { $this->graph->Set90AndMargin(); } goto mAK3W; kQDtT: for ($j = 0; $j < $seriesCount; ++$j) { $dataValues = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($j)->getDataValues(); if ($grouping == "\x70\145\x72\143\145\156\x74\x53\x74\x61\143\153\145\144") { $dataValues = $this->percentageAdjustValues($dataValues, $sumValues); } $testCurrentIndex = 0; foreach ($dataValues as $k => $dataValue) { while ($k != $testCurrentIndex) { $dataValues[$testCurrentIndex] = null; ++$testCurrentIndex; } ++$testCurrentIndex; } if ($rotation == "\142\141\x72") { $dataValues = array_reverse($dataValues); } $seriesPlot = new BarPlot($dataValues); $seriesPlot->SetColor("\x62\x6c\x61\x63\x6b"); $seriesPlot->SetFillColor(self::$colourSet[self::$plotColour++]); if ($dimensions == "\x33\144") { $seriesPlot->SetShadow(); } if (!$this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotLabelByIndex($j)) { $dataLabel = ''; } else { $dataLabel = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotLabelByIndex($j)->getDataValue(); } $seriesPlot->SetLegend($dataLabel); $seriesPlots[] = $seriesPlot; } goto Kn_5E; FEZAp: $labelCount = count($this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex(0)->getPointCount()); goto qJjZB; mAK3W: $grouping = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotGrouping(); goto FEZAp; RVSLQ: $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); goto Qt6BV; Qt6BV: $seriesPlots = array(); goto i09uR; heIbg: $rotation = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotDirection(); goto oIX2d; L1sJO: } private function renderPlotScatter($groupID, $bubble) { goto pRv12; WV2Vk: for ($i = 0; $i < $seriesCount; ++$i) { $dataValuesY = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex($i)->getDataValues(); $dataValuesX = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getDataValues(); foreach ($dataValuesY as $k => $dataValueY) { $dataValuesY[$k] = $k; } $seriesPlot = new ScatterPlot($dataValuesX, $dataValuesY); if ($scatterStyle == "\154\x69\156\145\115\141\x72\x6b\145\162") { $seriesPlot->SetLinkPoints(); $seriesPlot->link->SetColor(self::$colourSet[self::$plotColour]); } elseif ($scatterStyle == "\x73\155\157\157\164\x68\115\141\x72\153\145\x72") { goto hAxVq; JQ0Kd: list($splineDataY, $splineDataX) = $spline->Get(count($dataValuesX) * self::$width / 20); goto ZOfch; V5Ake: $this->graph->Add($lplot); goto AvGEH; hAxVq: $spline = new Spline($dataValuesY, $dataValuesX); goto JQ0Kd; ZOfch: $lplot = new LinePlot($splineDataX, $splineDataY); goto vZmXv; vZmXv: $lplot->SetColor(self::$colourSet[self::$plotColour]); goto V5Ake; AvGEH: } if ($bubble) { goto i7GPU; i7GPU: $this->formatPointMarker($seriesPlot, "\x64\x6f\x74"); goto eHnM2; zZQKe: $seriesPlot->mark->SetSize($bubbleSize); goto L6fCo; eHnM2: $seriesPlot->mark->SetColor("\x62\x6c\x61\143\153"); goto zZQKe; L6fCo: } else { $marker = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getPointMarker(); $this->formatPointMarker($seriesPlot, $marker); } $dataLabel = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotLabelByIndex($i)->getDataValue(); $seriesPlot->SetLegend($dataLabel); $this->graph->Add($seriesPlot); } goto nmrTk; nZS1P: $seriesPlots = array(); goto WV2Vk; pRv12: $grouping = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotGrouping(); goto rrrZl; rrrZl: $scatterStyle = $bubbleSize = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotStyle(); goto QHuV7; QHuV7: $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); goto nZS1P; nmrTk: } private function renderPlotRadar($groupID) { goto n1zor; n1zor: $radarStyle = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotStyle(); goto LAqZJ; t2Vf0: for ($i = 0; $i < $seriesCount; ++$i) { $dataValuesY = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex($i)->getDataValues(); $dataValuesX = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getDataValues(); $marker = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getPointMarker(); $dataValues = array(); foreach ($dataValuesY as $k => $dataValueY) { $dataValues[$k] = implode("\x20", array_reverse($dataValueY)); } $tmp = array_shift($dataValues); $dataValues[] = $tmp; $tmp = array_shift($dataValuesX); $dataValuesX[] = $tmp; $this->graph->SetTitles(array_reverse($dataValues)); $seriesPlot = new RadarPlot(array_reverse($dataValuesX)); $dataLabel = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotLabelByIndex($i)->getDataValue(); $seriesPlot->SetColor(self::$colourSet[self::$plotColour++]); if ($radarStyle == "\146\x69\154\x6c\x65\144") { $seriesPlot->SetFillColor(self::$colourSet[self::$plotColour]); } $this->formatPointMarker($seriesPlot, $marker); $seriesPlot->SetLegend($dataLabel); $this->graph->Add($seriesPlot); } goto v0_uY; LAqZJ: $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); goto RtXWq; RtXWq: $seriesPlots = array(); goto t2Vf0; v0_uY: } private function renderPlotContour($groupID) { goto u4Ke7; jvrPd: $seriesPlot = new ContourPlot($dataValues); goto uvgn5; uvgn5: $this->graph->Add($seriesPlot); goto Vh_y5; u4Ke7: $contourStyle = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotStyle(); goto W7aKq; UCzvY: $dataValues = array(); goto LdF0e; wpSMJ: $seriesPlots = array(); goto UCzvY; W7aKq: $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); goto wpSMJ; LdF0e: for ($i = 0; $i < $seriesCount; ++$i) { $dataValuesY = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex($i)->getDataValues(); $dataValuesX = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($i)->getDataValues(); $dataValues[$i] = $dataValuesX; } goto jvrPd; Vh_y5: } private function renderPlotStock($groupID) { goto RxKjd; lvksd: $labelCount = count($this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex(0)->getPointCount()); goto CkoZ3; sp2dW: $seriesPlot = new StockPlot($dataValuesPlot); goto W3QKS; AXNsH: if (empty($dataValues)) { return; } goto tuQvE; Is24d: for ($j = 0; $j < count($dataValues[0]); ++$j) { for ($i = 0; $i < $seriesCount; ++$i) { $dataValuesPlot[] = $dataValues[$i][$j]; } } goto lvksd; QPpDP: $dataValues = array(); goto AkBUr; tuQvE: $dataValuesPlot = array(); goto Is24d; yKKHJ: $plotOrder = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotOrder(); goto QPpDP; CkoZ3: if ($labelCount > 0) { goto XwbSh; uiPBE: $datasetLabels = $this->formatDataSetLabels($groupID, $datasetLabels, $labelCount); goto ReS9f; ReS9f: $this->graph->xaxis->SetTickLabels($datasetLabels); goto NbYsy; XwbSh: $datasetLabels = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex(0)->getDataValues(); goto uiPBE; NbYsy: } goto sp2dW; oskCJ: $this->graph->Add($seriesPlot); goto lDZXZ; RxKjd: $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); goto yKKHJ; AkBUr: foreach ($plotOrder as $i => $v) { $dataValuesX = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($v)->getDataValues(); foreach ($dataValuesX as $j => $dataValueX) { $dataValues[$plotOrder[$i]][$j] = $dataValueX; } } goto AXNsH; W3QKS: $seriesPlot->SetWidth(20); goto oskCJ; lDZXZ: } private function renderAreaChart($groupCount, $dimensions = "\62\x64") { goto RFcIP; mJfND: $this->renderCartesianPlotArea(); goto TQnJ4; RFcIP: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\x72\x61\160\150\137\154\151\156\x65\56\160\x68\x70"; goto mJfND; TQnJ4: for ($i = 0; $i < $groupCount; ++$i) { $this->renderPlotLine($i, true, false, $dimensions); } goto WuAo4; WuAo4: } private function renderLineChart($groupCount, $dimensions = "\62\144") { goto hXnWs; JWcVG: $this->renderCartesianPlotArea(); goto r_EFV; hXnWs: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\162\141\160\x68\137\154\x69\x6e\145\56\x70\150\160"; goto JWcVG; r_EFV: for ($i = 0; $i < $groupCount; ++$i) { $this->renderPlotLine($i, false, false, $dimensions); } goto bMw_i; bMw_i: } private function renderBarChart($groupCount, $dimensions = "\62\144") { goto KXBjD; qWLyO: for ($i = 0; $i < $groupCount; ++$i) { $this->renderPlotBar($i, $dimensions); } goto uoSH3; DKNHs: $this->renderCartesianPlotArea(); goto qWLyO; KXBjD: require_once PHPExcel_Settings::getChartRendererPath() . "\152\160\x67\x72\141\160\x68\x5f\142\x61\x72\x2e\160\x68\x70"; goto DKNHs; uoSH3: } private function renderScatterChart($groupCount) { goto XUBVq; XUBVq: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\x72\x61\x70\x68\x5f\163\143\x61\164\x74\145\x72\56\x70\x68\x70"; goto xhXKA; NCynQ: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\x72\141\x70\150\x5f\x6c\x69\x6e\x65\x2e\x70\150\x70"; goto Gl9dl; xhXKA: require_once PHPExcel_Settings::getChartRendererPath() . "\152\x70\147\162\141\x70\150\x5f\162\x65\x67\163\164\141\164\56\160\x68\160"; goto NCynQ; uFMjH: for ($i = 0; $i < $groupCount; ++$i) { $this->renderPlotScatter($i, false); } goto fwS8q; Gl9dl: $this->renderCartesianPlotArea("\154\151\156\154\x69\156"); goto uFMjH; fwS8q: } private function renderBubbleChart($groupCount) { goto tIfwT; L_R4D: for ($i = 0; $i < $groupCount; ++$i) { $this->renderPlotScatter($i, true); } goto QzTE2; tIfwT: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\x72\x61\x70\150\137\163\143\x61\164\x74\145\162\x2e\x70\x68\160"; goto JBmNP; JBmNP: $this->renderCartesianPlotArea("\x6c\x69\x6e\x6c\x69\x6e"); goto L_R4D; QzTE2: } private function renderPieChart($groupCount, $dimensions = "\62\x64", $doughnut = false, $multiplePlots = false) { goto qBnOi; qBnOi: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\x70\147\x72\141\x70\x68\137\x70\x69\x65\56\x70\x68\160"; goto i8mWB; WuIlP: $this->renderPiePlotArea($doughnut); goto r5lV_; i8mWB: if ($dimensions == "\x33\x64") { require_once PHPExcel_Settings::getChartRendererPath() . "\152\160\147\162\x61\160\150\137\160\x69\145\63\144\x2e\x70\x68\160"; } goto WuIlP; r5lV_: $iLimit = $multiplePlots ? $groupCount : 1; goto SCLzE; SCLzE: for ($groupID = 0; $groupID < $iLimit; ++$groupID) { $grouping = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotGrouping(); $exploded = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotStyle(); if ($groupID == 0) { $labelCount = count($this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex(0)->getPointCount()); if ($labelCount > 0) { $datasetLabels = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotCategoryByIndex(0)->getDataValues(); $datasetLabels = $this->formatDataSetLabels($groupID, $datasetLabels, $labelCount); } } $seriesCount = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotSeriesCount(); $seriesPlots = array(); $jLimit = $multiplePlots ? $seriesCount : 1; for ($j = 0; $j < $jLimit; ++$j) { $dataValues = $this->chart->getPlotArea()->getPlotGroupByIndex($groupID)->getPlotValuesByIndex($j)->getDataValues(); $testCurrentIndex = 0; foreach ($dataValues as $k => $dataValue) { while ($k != $testCurrentIndex) { $dataValues[$testCurrentIndex] = null; ++$testCurrentIndex; } ++$testCurrentIndex; } if ($dimensions == "\x33\144") { $seriesPlot = new PiePlot3D($dataValues); } else { if ($doughnut) { $seriesPlot = new PiePlotC($dataValues); } else { $seriesPlot = new PiePlot($dataValues); } } if ($multiplePlots) { $seriesPlot->SetSize(($jLimit - $j) / ($jLimit * 4)); } if ($doughnut) { $seriesPlot->SetMidColor("\x77\150\x69\164\x65"); } $seriesPlot->SetColor(self::$colourSet[self::$plotColour++]); if (count($datasetLabels) > 0) { $seriesPlot->SetLabels(array_fill(0, count($datasetLabels), '')); } if ($dimensions != "\x33\x64") { $seriesPlot->SetGuideLines(false); } if ($j == 0) { if ($exploded) { $seriesPlot->ExplodeAll(); } $seriesPlot->SetLegends($datasetLabels); } $this->graph->Add($seriesPlot); } } goto n12MH; n12MH: } private function renderRadarChart($groupCount) { goto xIppZ; y85e7: for ($groupID = 0; $groupID < $groupCount; ++$groupID) { $this->renderPlotRadar($groupID); } goto ixcjw; ThSh4: $this->renderRadarPlotArea(); goto y85e7; xIppZ: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\x70\147\162\141\x70\150\137\162\x61\144\x61\x72\x2e\x70\x68\x70"; goto ThSh4; ixcjw: } private function renderStockChart($groupCount) { goto f3L4M; z4LZe: $this->renderCartesianPlotArea("\x69\x6e\x74\151\x6e\x74"); goto X49m9; f3L4M: require_once PHPExcel_Settings::getChartRendererPath() . "\152\x70\x67\x72\x61\160\x68\137\x73\164\x6f\x63\x6b\56\160\x68\x70"; goto z4LZe; X49m9: for ($groupID = 0; $groupID < $groupCount; ++$groupID) { $this->renderPlotStock($groupID); } goto WyBdP; WyBdP: } private function renderContourChart($groupCount, $dimensions) { goto EajzX; dyL5m: $this->renderCartesianPlotArea("\x69\x6e\164\151\x6e\164"); goto g69ko; g69ko: for ($i = 0; $i < $groupCount; ++$i) { $this->renderPlotContour($i); } goto AWArX; EajzX: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\x72\141\160\x68\137\143\157\x6e\x74\157\x75\x72\x2e\160\x68\160"; goto dyL5m; AWArX: } private function renderCombinationChart($groupCount, $dimensions, $outputDestination) { goto g8IjO; eIWHq: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\x70\147\162\x61\160\150\x5f\x73\143\141\164\x74\145\x72\56\x70\x68\x70"; goto wGwRj; LDaKQ: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\160\147\x72\141\160\x68\x5f\x6c\x69\156\145\56\x70\x68\160"; goto WfeZX; e417S: for ($i = 0; $i < $groupCount; ++$i) { $dimensions = null; $chartType = $this->chart->getPlotArea()->getPlotGroupByIndex($i)->getPlotType(); switch ($chartType) { case "\x61\x72\x65\141\x33\x44\103\150\x61\162\164": $dimensions = "\x33\144"; case "\141\x72\x65\141\103\x68\141\162\164": $this->renderPlotLine($i, true, true, $dimensions); break; case "\x62\x61\162\x33\x44\x43\150\x61\162\x74": $dimensions = "\x33\x64"; case "\x62\x61\162\x43\150\141\x72\x74": $this->renderPlotBar($i, $dimensions); break; case "\154\151\156\145\63\104\x43\x68\141\x72\x74": $dimensions = "\x33\144"; case "\154\151\x6e\145\x43\x68\141\x72\x74": $this->renderPlotLine($i, false, true, $dimensions); break; case "\163\x63\x61\164\x74\x65\x72\103\x68\141\x72\x74": $this->renderPlotScatter($i, false); break; case "\142\165\142\142\154\145\x43\150\141\162\164": $this->renderPlotScatter($i, true); break; default: $this->graph = null; return false; } } goto kyrhI; Nv8Y_: $this->graph->Stroke($outputDestination); goto lC6Vj; g8IjO: require_once PHPExcel_Settings::getChartRendererPath() . "\152\160\x67\x72\141\160\150\137\154\151\156\x65\x2e\x70\x68\160"; goto pdCP5; pdCP5: require_once PHPExcel_Settings::getChartRendererPath() . "\x6a\x70\147\162\x61\x70\x68\137\x62\x61\x72\56\160\150\x70"; goto eIWHq; wGwRj: require_once PHPExcel_Settings::getChartRendererPath() . "\152\x70\147\162\x61\160\x68\137\x72\145\x67\x73\x74\x61\x74\x2e\x70\x68\160"; goto LDaKQ; lC6Vj: return true; goto E3sU_; WfeZX: $this->renderCartesianPlotArea(); goto e417S; kyrhI: $this->renderLegend(); goto Nv8Y_; E3sU_: } public function render($outputDestination) { goto lYKon; lYKon: self::$plotColour = 0; goto TAGbm; MnRgt: $this->renderLegend(); goto zXotB; zXotB: $this->graph->Stroke($outputDestination); goto iuKDD; Owtd7: if ($groupCount == 1) { $chartType = $this->chart->getPlotArea()->getPlotGroupByIndex(0)->getPlotType(); } else { goto F3OJU; RwikO: if (count($chartTypes) == 1) { $chartType = array_pop($chartTypes); } elseif (count($chartTypes) == 0) { echo "\x43\x68\141\162\x74\x20\151\x73\x20\x6e\x6f\x74\40\x79\x65\x74\40\x69\155\x70\x6c\145\x6d\145\x6e\x74\145\144\74\x62\x72\40\57\x3e"; return false; } else { return $this->renderCombinationChart($groupCount, $dimensions, $outputDestination); } goto VgGcK; F3OJU: $chartTypes = array(); goto rOf7X; I3bXO: $chartTypes = array_unique($chartTypes); goto RwikO; rOf7X: for ($i = 0; $i < $groupCount; ++$i) { $chartTypes[] = $this->chart->getPlotArea()->getPlotGroupByIndex($i)->getPlotType(); } goto I3bXO; VgGcK: } goto UM4zO; TAGbm: $groupCount = $this->chart->getPlotArea()->getPlotGroupCount(); goto N8VuM; iuKDD: return true; goto V1H1k; UM4zO: switch ($chartType) { case "\x61\x72\145\x61\x33\x44\103\x68\141\162\x74": $dimensions = "\63\x64"; case "\141\x72\x65\141\x43\x68\141\x72\164": $this->renderAreaChart($groupCount, $dimensions); break; case "\142\141\x72\63\104\103\150\x61\x72\164": $dimensions = "\63\x64"; case "\x62\x61\162\103\x68\141\x72\164": $this->renderBarChart($groupCount, $dimensions); break; case "\154\x69\156\x65\x33\x44\x43\x68\x61\162\x74": $dimensions = "\63\144"; case "\x6c\x69\156\145\103\x68\141\162\164": $this->renderLineChart($groupCount, $dimensions); break; case "\x70\x69\x65\x33\x44\103\x68\x61\162\164": $dimensions = "\63\x64"; case "\160\151\145\103\150\141\x72\164": $this->renderPieChart($groupCount, $dimensions, false, false); break; case "\144\157\165\x67\x68\156\x75\164\x33\x44\x43\150\141\162\164": $dimensions = "\x33\x64"; case "\144\157\165\147\x68\156\x75\164\103\x68\141\162\164": $this->renderPieChart($groupCount, $dimensions, true, true); break; case "\163\143\141\x74\x74\x65\162\103\x68\141\162\x74": $this->renderScatterChart($groupCount); break; case "\142\x75\x62\x62\154\145\x43\x68\x61\162\x74": $this->renderBubbleChart($groupCount); break; case "\162\x61\144\x61\162\x43\150\141\162\x74": $this->renderRadarChart($groupCount); break; case "\x73\165\162\146\141\x63\145\63\x44\103\150\141\162\x74": $dimensions = "\63\144"; case "\163\165\x72\146\x61\x63\145\x43\150\141\x72\x74": $this->renderContourChart($groupCount, $dimensions); break; case "\163\x74\157\143\x6b\103\150\x61\162\x74": $this->renderStockChart($groupCount, $dimensions); break; default: echo $chartType . "\x20\x69\163\x20\156\157\164\x20\x79\x65\x74\40\151\x6d\160\x6c\145\155\145\156\164\x65\144\74\x62\162\x20\57\x3e"; return false; } goto MnRgt; N8VuM: $dimensions = null; goto Owtd7; V1H1k: } public function __construct(PHPExcel_Chart $chart) { $this->graph = null; $this->chart = $chart; } }
