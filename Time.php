<?php
$s = strtotime(Carbon\Carbon::now()) - strtotime($user->last_login_time);
$i = floor($s/60);
$h = floor($i/60);
$d = floor($h/24);
$m = floor($d/30);
$y = floor($m/12);
if ($y > 0) 
$dro = "" . $y . " წელი";
elseif ($m > 0)
$dro = "" . $m . " თვე";
elseif ($d > 0)
$dro = "" . $d . " დღე";
elseif ($h > 0)
$dro = "" . $h . " სთ";
elseif ($i > 0)
$dro = "" . $i . " წთ";
elseif ($s > 0)
$dro = "" . $s . " წმ";
else
$dro = "'.'";
?>
