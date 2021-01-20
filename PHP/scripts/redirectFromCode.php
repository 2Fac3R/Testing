<?php

/*
  * Redirecciona al sitio correspondiente al codigo ingresado
  * por medio de sus rangos minimo y maximo asignados.
  */
function redirectFromCode($list, $code) {

    foreach ($list as $item) {
        // Verifica el rango de valores 'min' y 'max'
        if( $code >= $item['min'] && $code <= $item['max'] ) {
            // Redirecciona al sitio correspondiente
            header("Location: $item[url]");
        }
    }

    return false;
}