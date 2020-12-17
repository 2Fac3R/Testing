<title> Conversor de textos By 2Fac3R v4.0</title>
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
<input type="submit" name="enviado" value="Convertir!"> </form>
<?php
/*
* Conversor de textos
* .- Underc0de.org -.
*         v4.0 2015
* Autor: 2Fac3R
* 
* Gr33tz to:
* 
* xt3mp, arcangel_nigth, EddyW, ANTRAX, 11Sep, Kr34t0r, GAMARRA, SkippyCreammy, v1c0_h4ck, w4rning, Snifer, 
* arthusu, Kodeinfect, [Q]3rV[0], WilyXem, m3x1c0h4ck, etc, etc...
* 
* */


function convertir($a, $string) { // a : eleccion, string:texto
  
  switch( $a ){
    case 'bin2hex':
      $res = bin2hex($string);
      break;
    case 'encode':
      $res = urlencode($string);
      break;
    case 'gzinflate':
      $res = gzinflate($string);
      break;
    case 'decode':
      $res = htmlentities(urldecode($string));
      break;
    case 'utf-7':
      $res = mb_convert_encoding($string, 'UTF-7');
      break;
    case 'ASCII':
      for($i=0; $i < strlen($string); $i++){
        $obt = ord($string[$i]);
        $ascii = $obt.',';
      }
      $res = $ascii;
      break;
    case 'MD5':
      $res = md5($string);
      break;
    case 'SHA1':
      $res = sha1($string);
      break;
    case 'Base64_encode':
      $res = base64_encode($string);
      break;
    case 'Base64_decode':
      $res = base64_decode($string);
      break;
    case 'bindec':
      $res = bindec($string);
      break;
    case 'mcrypt':
      $res = crypt($string);
      break;
    default:
      die("Ha habido un error <a href=''> Regresar! </a>");
      break;
  }
  return $res;
}

if( !empty($_POST['enviado']) && isset($_POST['str']) ) {
  echo '<b>Original:</b> '.htmlentities($_POST['str']).' </br></br>';
  echo '<textarea rows=4 cols=50>'.convertir($_POST['convertir'], $_POST['str']).'</textarea>';
}
  
?>