<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.14  |
    |              on 2024-09-11 13:12:03              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
/*

*/
 goto v3E4c; hUUVQ: function PDO_FetchAll($query, $params = null) { goto thV0p; s54Oz: return $stmt->fetchAll(PDO::FETCH_CLASS); goto lHXmj; thV0p: global $PDO; goto hlfyB; hlfyB: if (isset($params)) { $stmt = $PDO->prepare($query); $stmt->execute($params); } else { $stmt = $PDO->query($query); } goto s54Oz; lHXmj: } goto MS3BS; c10Ki: function PDO_FetchRow($query, $params = null) { goto BaYTU; qLNoV: return $stmt->fetch(PDO::FETCH_CLASS); goto HZxPa; fzfov: if (isset($params)) { $stmt = $PDO->prepare($query); $stmt->execute($params); } else { $stmt = $PDO->query($query); } goto qLNoV; BaYTU: global $PDO; goto fzfov; HZxPa: } goto hUUVQ; MS3BS: function PDO_FetchAssoc($query, $params = null) { goto QaABv; zkoPD: if (isset($params)) { $stmt = $PDO->prepare($query); $stmt->execute($params); } else { $stmt = $PDO->query($query); } goto vv30r; vv30r: $rows = $stmt->fetchAll(PDO::FETCH_NUM); goto AjAH0; PK8LD: return $assoc; goto KwP2H; A0Rcw: foreach ($rows as $row) { $assoc[$row[0]] = $row[1]; } goto PK8LD; QaABv: global $PDO; goto zkoPD; AjAH0: $assoc = array(); goto A0Rcw; KwP2H: } goto JaC3n; JaC3n: function PDO_Execute($query, $params = null) { global $PDO; if (isset($params)) { goto ePaMh; N6Uwx: return $stmt; goto eRQjs; ePaMh: $stmt = $PDO->prepare($query); goto Q0chO; Q0chO: $stmt->execute($params); goto N6Uwx; eRQjs: } else { return $PDO->query($query); } } goto y4ay6; v3E4c: function PDO_Connect($dsn, $user = '', $password = '') { goto WHO8s; WHO8s: global $PDO; goto nOslJ; nOslJ: $PDO = new PDO($dsn, $user, $password); goto LoYPH; LoYPH: $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); goto u4VzI; u4VzI: } goto y4zy7; y4zy7: function PDO_FetchOne($query, $params = null) { goto iGN_u; AR6Bf: if ($row) { return $row[0]; } else { return false; } goto R2r2w; iGN_u: global $PDO; goto Qwjr8; Qwjr8: if (isset($params)) { $stmt = $PDO->prepare($query); $stmt->execute($params); } else { $stmt = $PDO->query($query); } goto flAva; flAva: $row = $stmt->fetch(PDO::FETCH_NUM); goto AR6Bf; R2r2w: } goto c10Ki; y4ay6: function PDO_LastInsertId() { global $PDO; return $PDO->lastInsertId(); } goto D7ezQ; D7ezQ: function PDO_ErrorInfo() { global $PDO; return $PDO->errorInfo(); }
