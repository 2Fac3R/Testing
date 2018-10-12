<!DOCTYPE html>
<title> Is online? v3.0 By 2Fac3R</title>
<style>
    body,
    html {
        background-color: black;
        color: green;
    }

    #ok {
        font-weight: bold;
    }

    #bad {
        font-weight: bold;
        color: red;
    }

</style>
<center>
    <pre>
.___         ________         .__  .__            _________ 
|   | ______ \_____  \   ____ |  | |__| ____   ___\_____   \
|   |/  ___/  /   |   \ /    \|  | |  |/    \_/ __ \ /   __/
|   |\___ \  /    |    \   |  \  |_|  |   |  \  ___/|   |   
|___/____  > \_______  /___|  /____/__|___|  /\___  >___|   
         \/          \/     \/             \/     \/<___>   
        </pre>

    <form action="" method="POST">
        URL: <input type="text" name="page" value="http://">
        <input type="submit" name="send" value="Comprobar!">
    </form> <br> <i>By 2Fac3R</i> <br> <br>


    <?php
error_reporting(0);
/*
        ¿Is online? 3.0 By 2Fac3R
    Verificar si un servidor web esta online
*/
 
function verificar($url)
{
        $url = htmlentities($url);
        if(filter_var($url, FILTER_VALIDATE_URL) or filter_var($url, FILTER_VALIDATE_IP)) {
                echo fopen($url, 'r') ? "$url <div id='ok'>Online</div>" : "$url <div id='bad'>Offline</div>";
        } else {
                echo '<script>alert("URL/IP no valida!");window.location=""</script>';
        }
}
 
 
if(!empty($_POST['page'])){
     verificar($_POST['page']);
}
?>

        <br><b>Gr33tz to:</b> <br> <br> xt3mp, arcangel_nigth, ANTRAX, 11Sep, Kr34t0r, GAMARRA, SkippyCreammy, v1c0_h4ck <br> w4rning, Snifer, arthusu, Kodeinfect, [Q]3rV[0], WilyXem, m3x1c0h4ck, etc, etc, etc ... <br> <br>
        <a href="http://www.underc0de.org"><b>Underc0de.Org</b></a>
</center>
