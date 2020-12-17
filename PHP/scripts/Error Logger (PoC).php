<?php

function ErrorLog(){
    error_log(mysql_error()."\t IN: ".__FILE__."\n\n",3,'/var/www/error.txt');
}

?>
