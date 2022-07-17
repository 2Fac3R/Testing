<?php
ob_start();
session_start();
error_reporting(0);

require_once 'inc/menu/Menu.Empleado.php';
require_once 'inc/menu/Menu.Cliente.php';
require_once 'inc/menu/Menu.Cuenta.php';
require_once 'inc/menu/Menu.Tarjeta.php';
//print_r($_SESSION); // testing...
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BanMex</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

     <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
      
      body {
        background-image: url("images/bgimage.png");
        background-size:100% auto;
    }
    </style>

</head>
<body>
<?php 

  require_once 'inc/menu/nav.php';

  if(!empty($_GET['login_result']))
  {
    if($_GET['login_result'] == 'success')
    {
      echo 
      '
        <div class="alert alert-success">
          <strong>Correcto!</strong> 
          Has iniciado sesión correctamente.
        </div>
      ';

    }elseif ($_GET['login_result'] == 'fail') {
      echo 
      '
        <div class="alert alert-danger">
          <strong>Error!</strong> 
          Usuario y/o Contraseña incorrectos.
        </div>
      ';
    }
    elseif ($_GET['login_result'] == 'logout') {
      echo 
      '
        <div class="alert alert-info">
          <strong>Aviso!</strong> 
          Ha cerrado sesión correctamente.
        </div>
      ';
    }
  }
  

  if(isset($_GET['page']))
  {
    switch($_GET['page'])
    {
      case 'login':
        require_once 'login.html';
        break;
      case 'logout':
        require_once 'logout.php';
        break;
    }
  }
  else
  {
    require_once 'index.php';
  }

?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php ob_end_flush(); ?>