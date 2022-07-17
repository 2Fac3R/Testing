<?php


require_once 'inc/config/DB.php';
require_once 'inc/classes/Class.Usuario.php';

$user = new Usuario;

$user->logout();

?>