<?php
/* 
    Resolver funciones matemáticas By 2Fac3R
*/

$valor = (int)$_POST['valor'];  // Valor de X
$limite = (int)$_POST['res'];    // Numero de veces a mostrar resultados
$send = $_POST['send']; // Variable del envio

if(isset($send) && !empty($valor) && ($limite)){ // Comprobamos que se hayan ingresado datos
        echo '
            <table border="1">
            <th>X</th><th>Y</th>
            ';
        for($i=0; $i < $limite; $i++){ // Creando la tabla...
            $func = $valor * 13; // Aqui iría la funcion
            $valor = $valor + 0.1; // Le sumamos 0.1 en cada iteraccion
            echo '<tr><td>'.$valor.'</td><td>'.$func.'</td></tr>
            ';
        }
            echo '</table><br>';
 
} else { // Sino que muestre el formulario
?>
    <form action="" method="POST">
        Ingresa el valor de X: <input type="text" name="valor" size="4" maxlength="5" title="Maximo 5 caracteres"> <br> Cuantos resultados deseas mostrar? <input type="text" name="res" size="5" maxlength="5" title="Maximo 99999 resultados"> <br>
        <input type="submit" name="send" value="Test!">
    </form>
    <?}?>
