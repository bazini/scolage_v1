<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:11:18              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 defined("\x42\x41\x53\105\x50\x41\x54\110") or exit("\116\157\40\x64\151\162\145\x63\164\x20\x73\x63\162\151\x70\x74\40\x61\143\x63\145\163\163\x20\x61\x6c\x6c\x6f\167\145\x64"); class Dps { protected $CI; private $table; private $mydb; private $utils; private $mdate; private $id; public function __construct() { goto rxc9p; lmcr2: $this->mydb =& $this->CI->mydb; goto Gaqat; rVDzh: $this->table = "\x64\x65\160\145\156\163\145"; goto axC_O; axC_O: $this->id = $this->CI->session->userdata("\x69\144"); goto BrDeX; riNAp: $this->mdate = gmdate("\131\x2d\x6d\x2d\144\x20\110\x3a\x69\72\x73"); goto rVDzh; Gaqat: $this->utils =& $this->CI->utilitaire; goto riNAp; rxc9p: $this->CI =& get_instance(); goto lmcr2; BrDeX: } public function index() { goto QB6rm; QB6rm: $d = 0; goto sg61Y; XLpOB: if (!empty($an)) { $mont = $this->mydb->get($this->table, array(array("\123\x55\x4d\50\x6d\x6f\156\x74\141\x6e\164\x29" => "\x6d\x6f\x6e\x74\141\x6e\x74")), array("\141\156" => $an->id, "\x73\x74\141\x74\x75\x73" => 0)); if (!empty($mont)) { $d = $mont->montant; } } goto z9O_C; z9O_C: return $d; goto RhCFr; sg61Y: $an = $this->utils->get_an(); goto XLpOB; RhCFr: } public function gets() { goto k9JyT; q9xR1: return $d; goto E72In; k9JyT: $d = array(); goto tcdT2; tcdT2: $an = $this->utils->get_an(); goto qDFD2; qDFD2: if (!empty($an)) { goto tvyJT; K10K3: $count = $this->mydb->count($this->table, $where, $join); goto EidpW; tvyJT: $where = array("\144\x65\x70\145\156\163\145\x2e\x61\156" => $an->id, "\x64\145\160\x65\156\163\145\56\163\x74\141\164\165\163" => 0); goto STwFm; m6j1n: $d["\x63\x75\x72\x72\145\x6e\164"] = $page->current; goto sno7e; V_H9G: $req = array(array("\144\x65\x70\x65\156\x73\145\56\151\x64" => "\x69\x64"), array("\x64\x65\160\x65\156\163\x65\x2e\156\x61\164\x75\x72\145" => "\156\x61\164\x75\162\145"), array("\144\145\x70\x65\156\163\x65\x2e\155\157\156\164\141\x6e\164" => "\155\x6f\x6e\x74\x61\156\164"), array("\144\145\160\145\x6e\163\x65\x2e\155\157\144\151\146\x69\x65\144" => "\144\x61\x74\145"), array("\143\141\x74\x65\147\x6f\162\x79\x2e\x6e\157\155" => "\143\x61\x74\145\147\x6f\162\x79")); goto PCGzB; QPMoC: $d["\x65\160\x70"] = $page->epp; goto jvBGO; sno7e: $d["\x74\157\x74\x61\154"] = $count; goto QPMoC; EidpW: $page = pager($count); goto z_jGD; snph5: $limit = array($page->start, $page->epp); goto V_H9G; jvBGO: $orderby = array("\144\x65\x70\x65\x6e\x73\145\56\151\x64" => "\x44\105\123\103"); goto snph5; STwFm: $join = array("\x63\141\164\x65\x67\157\162\171" => array("\151\x6e\156\x65\162" => array("\x63\141\164\x65\x67\x6f\x72\171", "\x69\144"))); goto K10K3; z_jGD: $d["\156\142\160\x61\x67\x65\163"] = $page->nbpages; goto m6j1n; PCGzB: $d["\x64\x65\160\145\x6e\163\145\163"] = $this->mydb->gets($this->table, $req, $where, $join, $orderby, $limit); goto Hnosl; Hnosl: } goto q9xR1; E72In: } public function get($id) { goto gPLA1; pvrvO: if (!empty($dep)) { $d = $dep; } goto eVEpH; eVEpH: return $d; goto Pduyd; DnpLY: $dep = $this->mydb->get($this->table, '', array("\151\x64" => $id)); goto pvrvO; gPLA1: $d = false; goto DnpLY; Pduyd: } public function set($cat, $nature, $montant, $edit) { goto Oisxe; Oisxe: $d["\x65\162\162\x6f\162"] = true; goto vj2Dp; Hwo40: if (!empty($an)) { goto ybPos; mAOIH: if ($edit == false) { $done = $this->mydb->set($this->table, $req); if ($done) { $id = $done; } } else { $done = $this->mydb->update($this->table, $req, array("\151\x64" => $edit)); if ($done) { $id = $edit; } } goto H0DsM; ybPos: $req = array("\165\x73\145\x72" => $this->id, "\141\156" => $an->id, "\143\x61\164\145\x67\x6f\x72\x79" => $cat, "\x6e\x61\164\165\162\145" => $nature, "\x6d\157\156\x74\141\x6e\164" => $montant, "\x6d\x6f\x64\151\x66\151\x65\x64" => $this->mdate); goto mAOIH; H0DsM: if (isset($id)) { $d["\145\162\x72\x6f\162"] = false; $d["\x64\141\164\x61"] = $id; } else { $d["\x65\x72\155\x73\147"] = common_sql_error(); } goto oDNZ3; oDNZ3: } else { $d["\x65\x72\x6d\163\147"] = "\x4c\47\141\x6e\156\xc3\xa9\x65\x20\x73\x63\157\154\x61\151\x72\x65\40\156\x27\x65\x73\x74\x20\x70\x61\x73\40\x64\303\xa9\146\151\x6e\x69\x65"; } goto gI2Kw; vj2Dp: $an = $this->utils->get_an(); goto Hwo40; gI2Kw: return $d; goto U_JiA; U_JiA: } public function delete($id) { $d = $this->mydb->delete($this->table, array("\x69\x64" => $id)); return $d; } }
