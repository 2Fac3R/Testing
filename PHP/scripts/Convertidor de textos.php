<title> Convertidor By 2Fac3R v1.0 </title>
<?php
/*
http://breaksecurity.blogspot.com/
 Convertidor de textos By 2Fac3R v1.0
                                                                        */
$string = $_POST['palabra'];
$send = $_POST['send'];
$choose = $_POST['convertir'];
$res = '<br> Normal: <b>'.htmlentities($string).'<b> <br>';
$res .= '<a href="">Regresar</a>';      
if($choose=='hex'){ 
 echo "Resultado:\t0x".bin2hex($string);
 echo $res;     
}else if($choose=='encode'){
    echo "Resultado:\t".urlencode($string);
    echo $res;
}else if($choose=='decode'){
    echo "Resultado: \t".htmlentities(urldecode($string));
    echo $res;
}else if($choose=='utf-7'){
    echo "Resultado: \t".htmlentities(mb_convert_encoding($string,'UTF-7'));
    echo $res;
}else if($choose=='ASCII'){
    echo "El ASCII es: <b>";
    for($i=0;$i<strlen($string);$i++){
    $ascii=ord($string[$i]);
    $cambiar=$ascii.',';
    echo $cambiar;
    }
    echo '</b>'.$res;
}else if($choose=='MD5'){
    echo "Resultado: \t".md5($string);
    echo $res;
}else if($choose=='SHA1'){
    echo "Resultado: \t".sha1($string);
    echo $res;
}else if($choose=='Base64_encode'){
    echo "Resultado: \t".base64_encode($string);
    echo $res;
}else if($choose=='Base64_decode'){
    echo "Resultado: \t".base64_decode($string);
    echo $res;
}else if($choose=='bindec'){
    echo "Resultado: \t".bindec($string);
    echo $res;
}else{
?>
    <!-- Codded By 2Fac3R -->
    <form action="" method="POST">
        <select name="convertir">
    <option value="hex">        To Hex  </option>
    <option value="encode">     Encode </option>
    <option value="decode">     Decode </option>
    <option value="utf-7"> Encode UTF-7</option>
    <option value="ASCII"> ASCII </option>
    <option value="MD5"> MD5 </option>
    <option value="SHA1"> SHA1 </option>
    <option value="Base64_encode"> Base64 encode</option>
    <option value="Base64_decode"> Base64 decode</option>
    <option value="bindec"> Binario To Decimal</option> 
</select>
        <input type="text" name="palabra">
        <input type="submit" name="send" value="Convertir!">
    </form>
    <?}?>
