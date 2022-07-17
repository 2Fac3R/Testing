<?php

// Información de Bases de Datos

// DRIVER:USER,PWD,DBNAME
// MYSQL:root,,usercake <> POSTGRES:postgres,1234,pruebas

$db_host = "localhost"; //Host address
$db_name = ""; //Name of Database
$db_drivers = array( "MYSQL" => 'mysql', "POSTGRES" => 'pgsql'); // MYSQL -> db_drivers["MYSQL"], POSTGRES -> db_drivers["POSTGRES"]


$GLOBALS['db_user'] = ""; //Name of database user 
$GLOBALS['db_pass'] = ""; //Password for database user
$GLOBALS['dsn'] = "{$db_drivers['MYSQL']}:host={$db_host};dbname={$db_name}";

?>
