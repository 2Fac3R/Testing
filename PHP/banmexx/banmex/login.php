<?php
session_start();

require_once 'inc/config/DB.php';
require_once 'inc/classes/Class.Usuario.php';


if(!empty($_POST))
{

	$mail = $_POST['inputEmail'];
	$pwd = $_POST['inputPassword'];


	$user = new Usuario;

	if ($user->login($mail, trim($pwd))) 
	{
		header("Location: index.php?login_result=success");
    }
    else
    {
        header("Location: index.php?login_result=fail");
 	}


}


?>