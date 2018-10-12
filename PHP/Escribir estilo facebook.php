<?php
/*
    Escritura estilo facebook automatizado xDD
        By 2Fac3R
*/

$abc = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$replace = array('4','8','c','d','3','f','6','h','1','j','k','l','m','n','0','p','q','r','5','t','u','v','w','x','2');
$msj = 'Probando escritura estilo facebook'; // Tu mensaje aquí

echo str_replace($abc, $replace, $msj);

?>
