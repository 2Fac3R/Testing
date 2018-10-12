<style type="text/css" media="all">
    * {
        color: green;
        text-align: center;
    }

    .contenido {
        text-align: justify;
    }

</style>

<?php

$texto = $_POST['texto'];
$c_text = $_POST['ciphertext'];
$cifrar = $_POST['cifrar'];
$descifrar = $_POST['descifrar'];
$abc = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
$cada = $_POST['cada'];

function cifrar($abc,$cada,$texto,$opc){

    $partes = explode(' ', $texto);
        foreach($partes as $parte){
            for($i=0 ; $i < count($texto) ; $i++) {
                $x = 0;
                while($x < strlen($parte)){
                    $found = strpos($abc, $parte{$x++});
                    echo $abc{$found + $cada};
                }
            echo " ";
            }
        }
}

function descifrar($abc,$cada,$c_text){
    $partes = explode(' ', $c_text);
        foreach($partes as $parte){
            for($i=0; $i < count($c_text); $i++){
                $x = 0;
                while($x < strlen($parte)){
                    $found = strpos($abc, $parte{$x++});
                    echo $abc{$found - $cada};
                }
            echo " ";
            }
        }
}

?>
    <h1> Caesar cipher By 2Fac3R </h1>
    <a href="http://es.wikipedia.org/wiki/Cifrado_C%C3%A9sar">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Caesar3.svg/220px-Caesar3.svg.png" alt="cifrado caesar">
</img></a>
    <br><br>
    <form action="" method="POST">
        <textarea name="texto" cols="80" rows="5" class="contenido"><?

        echo isset($descifrar)&&($cada) ? descifrar($abc,$cada,$c_text) : 'Encrypt';

    ?></textarea> <br>
        <button type="submit" name="cifrar"> Cifrar </button>
        <button type="submit" name="descifrar"> Descifrar </button> <br>
        <textarea name="ciphertext" cols="80" rows="5" class="contenido"><?

        echo isset($cifrar)&&($cada) ? cifrar($abc,$cada,$texto,1) : 'Decrypt';

    ?></textarea> <br> Salto :<input type="number" name="cada" size="1" maxlength="2" value="2">
        <!-- 2 por defecto -->
    </form>
    El <i>cifrado C&eacute;sar</i> mueve cada letra un determinado n&uacute;mero de espacios en el alfabeto. Por ejemplo, con un desplazamiento de 3, la <b>A</b> seria sustituida por la <b>D</b> (situada 3 lugares a la derecha de la A ), la <b>B</b> seria reemplazada por la <b>E</b>, etc.<br>
    <a style="color:blue" href="http://es.wikipedia.org/wiki/Cifrado_C%C3%A9sar">Mas info!.</a>
