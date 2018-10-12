<title> Is online this web? 1.0 By 2Fac3R</title>
<?php
/*
                ¿Is online? 1.0 By 2Fac3R
 Verificar si un servidor web esta online
                                                                                         */
$page = htmlentities($_POST['page']);
$send = $_POST['send'];
if(isset($page) && !empty($page)){
function verificar($url){
    if(preg_match("/^(ftp|http|https):\/\/(.*)\.(.*)$/i", $url)){
        echo fopen($url,'r') ? "<b>$url</b> is <font color='green'>Online</font>" : "<b>$url</b> is <font color='red'>Offline</font>";
    }else{
        echo '<u>       URL no valida!  </u><br>';
        echo '
        El formato de una URL valida es:        <br>
        <b>     
        http://www.paginaweb.com        <br>
        http://pagina.es        <br>
        ftp://cuenta.ftp        </b>
        ';
    }
}
verificar($page);
}else{
    if(isset($send)){
        ?>
    <script>
        alert("Debes ingresar una URL!");
        window.location = ""

    </script>
    <noscript>
        <?die("Debes ingresar una URL! <a href=''><b> Regresar! </b> </a>")?>
        </noscript>
    <?
    }
?>
        <form action="" method="POST">
            URL: <input type="text" name="page" value="http://">
            <input type="submit" name="send" value="Comprobar!">
        </form>
        <?}?>
