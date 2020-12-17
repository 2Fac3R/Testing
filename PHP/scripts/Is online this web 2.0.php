<!DOCTYPE html>
<meta charset="UTF-8" />
<title> Is online? 2.1 By 2Fac3R</title>
<style type="text/css">
    body,
    html {
        background-color: #000000;
        color: #00FF00;
    }

    #ok {
        font-weight: bold;
    }

    #bad {
        font-weight: bold;
        color: #FF0000;
    }

    ._contenido {
        text-align: center;
    }

    a {
        color: #FFFFFF;
    }

</style>
<div class="_contenido">
    <pre>
.___         ________         .__  .__            _________ 
|   | ______ \_____  \   ____ |  | |__| ____   ___\_____   \
|   |/  ___/  /   |   \ /    \|  | |  |/    \_/ __ \ /   __/
|   |\___ \  /    |    \   |  \  |_|  |   |  \  ___/|   |   
|___/____  > \_______  /___|  /____/__|___|  /\___  >___|   
         \/          \/     \/             \/     \/<___>   
        </pre>

    <?php

define('MAX',67); // Maximo numero de caracteres permitidos en un dominio
function validar($page){
        
        if(
        
        (strlen($page) <= MAX) and (
                (substr(strtolower((string)$page), 0, 7) === 'http://') or
        (substr(strtolower((string)$page), 0, 8) === 'https://') or
        (substr(strtolower((string)$page), 0, 6) === 'ftp://')
        )){
        verificar($page);
        }else{
        echo 'Url no válida!';
        }
}
 
function verificar($url){
        if(filter_var($url,FILTER_VALIDATE_URL)){
                echo @fopen($url,'r') ? "$url <div id='ok'>Online</div>" : "$url <div id='bad'>Offline</div>";
        }else{
                echo 'Ha ocurrido un error!';
        }
}
 
 
if(!empty($_POST['page'])){
        validar($_POST['page']);
}
?>
        <form action="" method="POST">
            URL: <input type="text" name="page" placeholder="http://example.com">
            <input type="submit" value="Comprobar!">
        </form>

        <br> <i>By 2Fac3R</i> <br> <br>

        <br><b>Gr33tz to:</b> <br> <br> xt3mp, arcangel_nigth, ANTRAX, 11Sep, Kr34t0r, GAMARRA, SkippyCreammy, v1c0_h4ck <br> w4rning, Snifer, arthusu, Kodeinfect, [Q]3rV[0], WilyXem, m3x1c0h4ck, WHK, etc, etc, etc ... <br> <br>
        <a href="http://www.underc0de.org"><b>Underc0de.Org</b></a>
</div>
