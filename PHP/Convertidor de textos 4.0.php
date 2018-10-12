<title> Conversor de string By 2Fac3R v2.2 </title>
<?php
/*
        Conversor de string By 2Fac3R v2.2
 
                                                                                */
$string = $_POST['str'];
$conv = $_POST['convertir'];
$send = $_POST['send'];
function res($func){
        global $string;
        echo "Resultado: <br> <textarea cols='80' rows='5'>$func</textarea><br>";
        echo "Normal: <b>".htmlentities($string,ENT_QUOTES)."</b> <br>";
        echo "<a href=''> Regresar! </a>";
}
if(!empty($string)){
switch($conv){
        case 'bin2hex':
                res(bin2hex($string));
                break;
        case 'encode':
                res(urlencode($string));
                break;
        case 'gzinflate':
                res(gzinflate($string));
        case 'decode':
                res(htmlentities(urldecode($string)));
                break;
        case 'utf-7':
                res(mb_convert_encoding($string,'UTF-7'));
                break;
        case 'ASCII':
        echo "Resultado: <br><textarea>";
                for($i=0;$i<strlen($string);$i++){
                        $obt=ord($string[$i]);
                        $ascii=$obt.',';
                        echo $ascii;
                }
        echo "</textarea><br> Normal: <b>".htmlentities($string)."</b><br><a href=''> Regresar! </a>";
        break;
        case 'MD5':
                res(md5($string));
                break;
        case 'SHA1':
                res(sha1($string));
                break;
        case 'Base64_encode':
                res(base64_encode($string));
                break;
        case 'Base64_decode':
                res(base64_decode($string));
                break;
        case 'bindec':
                res(bindec($string));
                break;
        case 'mcrypt':
                res(crypt($string));
                break;
        default:
                die("Ha habido un error <a href=''> Regresar! </a>");
                break;
}
}else{
        if(isset($send)){?>
    <script>
        alert("Campo de texto vacio");

    </script>
    <noscript>Campo de texto vacio <br> <font color="RED"> Active el javascript para una mejor visualizaci&oacute;n </font></noscript>
    <?}?>
        <!-- Conversor de string By 2Fac3R v2.2 -->
        <form action="" method="POST">
            <select name="convertir">
                <option value="bin2hex"> BinToHex </option>
                <option value="encode"> Encode </option>
                <option value="decode"> Decode </option>
                <option value="gzinflate"> gzinflate </option>
                <option value="utf-7"> Encode UTF-7</option>
                <option value="ASCII"> ASCII </option>
                <option value="MD5"> MD5 </option>
                <option value="SHA1"> SHA1 </option>
                <option value="Base64_encode"> Base64 encode</option>
                <option value="Base64_decode"> Base64 decode</option>
                <option value="bindec"> Binario To Decimal</option>     
                <option value="mcrypt">mcrypt</option>
        </select>
            <input type="text" name="str">
            <input type="submit" name="send" value="Convertir!">
        </form>
        <?}
/*
 * .- Underc0de.org -.
 *         v2.0 2013
 * 
 * Gr33tz to:
 * 
 * xt3mp, arcangel_nigth, EddyW, ANTRAX, 11Sep, Kr34t0r, GAMARRA, SkippyCreammy, v1c0_h4ck, w4rning, Snifer, 
 * arthusu, Kodeinfect, [Q]3rV[0], WilyXem, m3x1c0h4ck, etc, etc...
 * 
 * */
?>
