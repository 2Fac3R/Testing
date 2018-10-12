<?php
/*
    Código de ejemplo sobre comentarios
    Taller de PHP v2
    By 2Fac3R
    2018
*/

# Remplaza por tus datos
$year = ;
$month = ;
$day = ;

$born = mktime(0, 0, 0, $month, $day, $year);
$today = time();
$res = $today - $born;
$total = round( $res / 86400 );


echo "Tienes $total d&iacute;as de vida";

?>
