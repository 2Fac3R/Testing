<?php

function esPalindromo($input) {
    $trimmed = str_replace(' ','', $input);
    $reversed = strrev($trimmed);

    if(strcmp( $trimmed, $reversed ) === 0) {
        return true;
    }

    return false;
}

$str = "anita lava la tina";

echo esPalindromo($str) ? "Es palindromo" : "No es palindromo";