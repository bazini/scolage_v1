<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 class PHPExcel_Shared_JAMA_QRDecomposition { const MATRIX_RANK_EXCEPTION = "\103\x61\156\40\157\156\154\171\40\x70\x65\x72\x66\x6f\x72\x6d\x20\x6f\160\145\x72\x61\x74\x69\x6f\156\40\x6f\x6e\x20\x66\165\154\x6c\x2d\162\x61\x6e\x6b\x20\x6d\141\164\x72\151\x78\56"; private $QR = array(); private $m; private $n; private $Rdiag = array(); public function __construct($A) { if ($A instanceof PHPExcel_Shared_JAMA_Matrix) { goto RKOlC; RKOlC: $this->QR = $A->getArrayCopy(); goto fe0Pr; uObvS: $this->n = $A->getColumnDimension(); goto mg1N4; fe0Pr: $this->m = $A->getRowDimension(); goto uObvS; mg1N4: for ($k = 0; $k < $this->n; ++$k) { $nrm = 0.0; for ($i = $k; $i < $this->m; ++$i) { $nrm = hypo($nrm, $this->QR[$i][$k]); } if ($nrm != 0.0) { goto staZ6; staZ6: if ($this->QR[$k][$k] < 0) { $nrm = -$nrm; } goto jz2Lc; Sqpf4: for ($j = $k + 1; $j < $this->n; ++$j) { $s = 0.0; for ($i = $k; $i < $this->m; ++$i) { $s += $this->QR[$i][$k] * $this->QR[$i][$j]; } $s = -$s / $this->QR[$k][$k]; for ($i = $k; $i < $this->m; ++$i) { $this->QR[$i][$j] += $s * $this->QR[$i][$k]; } } goto S2ZzJ; oULKr: $this->QR[$k][$k] += 1.0; goto Sqpf4; jz2Lc: for ($i = $k; $i < $this->m; ++$i) { $this->QR[$i][$k] /= $nrm; } goto oULKr; S2ZzJ: } $this->Rdiag[$k] = -$nrm; } goto UcPL0; UcPL0: } else { throw new PHPExcel_Calculation_Exception(PHPExcel_Shared_JAMA_Matrix::ARGUMENT_TYPE_EXCEPTION); } } public function isFullRank() { for ($j = 0; $j < $this->n; ++$j) { if ($this->Rdiag[$j] == 0) { return false; } } return true; } public function getH() { for ($i = 0; $i < $this->m; ++$i) { for ($j = 0; $j < $this->n; ++$j) { if ($i >= $j) { $H[$i][$j] = $this->QR[$i][$j]; } else { $H[$i][$j] = 0.0; } } } return new PHPExcel_Shared_JAMA_Matrix($H); } public function getR() { for ($i = 0; $i < $this->n; ++$i) { for ($j = 0; $j < $this->n; ++$j) { if ($i < $j) { $R[$i][$j] = $this->QR[$i][$j]; } elseif ($i == $j) { $R[$i][$j] = $this->Rdiag[$i]; } else { $R[$i][$j] = 0.0; } } } return new PHPExcel_Shared_JAMA_Matrix($R); } public function getQ() { for ($k = $this->n - 1; $k >= 0; --$k) { for ($i = 0; $i < $this->m; ++$i) { $Q[$i][$k] = 0.0; } $Q[$k][$k] = 1.0; for ($j = $k; $j < $this->n; ++$j) { if ($this->QR[$k][$k] != 0) { goto pHxvd; Mz7Fz: $s = -$s / $this->QR[$k][$k]; goto HOR9t; pHxvd: $s = 0.0; goto A6NCl; HOR9t: for ($i = $k; $i < $this->m; ++$i) { $Q[$i][$j] += $s * $this->QR[$i][$k]; } goto yC_HA; A6NCl: for ($i = $k; $i < $this->m; ++$i) { $s += $this->QR[$i][$k] * $Q[$i][$j]; } goto Mz7Fz; yC_HA: } } } return new PHPExcel_Shared_JAMA_Matrix($Q); } public function solve($B) { if ($B->getRowDimension() == $this->m) { if ($this->isFullRank()) { goto Jwhbi; asFe_: return $X->getMatrix(0, $this->n - 1, 0, $nx); goto NeXJW; Jwhbi: $nx = $B->getColumnDimension(); goto zdtey; zdtey: $X = $B->getArrayCopy(); goto uVEyL; c5f77: $X = new PHPExcel_Shared_JAMA_Matrix($X); goto asFe_; TJfg2: for ($k = $this->n - 1; $k >= 0; --$k) { for ($j = 0; $j < $nx; ++$j) { $X[$k][$j] /= $this->Rdiag[$k]; } for ($i = 0; $i < $k; ++$i) { for ($j = 0; $j < $nx; ++$j) { $X[$i][$j] -= $X[$k][$j] * $this->QR[$i][$k]; } } } goto c5f77; uVEyL: for ($k = 0; $k < $this->n; ++$k) { for ($j = 0; $j < $nx; ++$j) { $s = 0.0; for ($i = $k; $i < $this->m; ++$i) { $s += $this->QR[$i][$k] * $X[$i][$j]; } $s = -$s / $this->QR[$k][$k]; for ($i = $k; $i < $this->m; ++$i) { $X[$i][$j] += $s * $this->QR[$i][$k]; } } } goto TJfg2; NeXJW: } else { throw new PHPExcel_Calculation_Exception(self::MATRIX_RANK_EXCEPTION); } } else { throw new PHPExcel_Calculation_Exception(PHPExcel_Shared_JAMA_Matrix::MATRIX_DIMENSION_EXCEPTION); } } }
