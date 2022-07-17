<?php
session_start();
error_reporting(0);

require_once 'inc/config/DB.php';
require_once 'inc/classes/Class.Usuario.php';
require_once 'inc/classes/Class.Empleado.php';
require_once 'inc/classes/Class.Cliente.php';
require_once 'inc/classes/Class.Cuenta.php';
require_once 'inc/menu/Menu.Empleado.php';
require_once 'inc/menu/Menu.Cliente.php';
require_once 'inc/menu/Menu.Cuenta.php';
require_once 'inc/menu/Menu.Tarjeta.php';

$usuario = new Usuario;
$empleado = new Empleado;
$cliente = new Cliente;
$cuenta = new Cuenta;
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
</head>
<body>

<?php
require_once 'inc/menu/nav.php';

if(!empty($_SESSION['logged']) && $_SESSION['level'] != '1')
{
	header("Location: index.php?page=login");
}

if(!empty($_GET['result']))
  {
    if($_GET['result'] == 'success')
    {
      echo 
      '
        <div class="alert alert-success">
          <strong>Correcto!</strong> 
          Operación ejecutada correctamente.
        </div>
      ';

    }elseif ($_GET['result'] == 'fail') {
      echo 
      '
        <div class="alert alert-danger">
          <strong>Error!</strong> 
          Ha habido un error, intente de nuevo. 
        </div>
      ';
    }
  }

if(!empty($_POST))
{

	/*  	*-EMPLEADO-* 	*/

	if(isset($_POST['emp_agregar']))
	{
		if($empleado->Alta($_POST['nombre'], $_POST['domicilio'], $_POST['telefono'], $_POST['celular']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['emp_eliminar']))
	{
		if($empleado->Baja($_POST['id']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['emp_buscar']))
	{
		$data = $empleado->Buscar($_POST['id']);
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>Nombre</th>
			        <th>Domicilio</th>
			        <th>Teléfono</th>
			        <th>Celular</th>
			      </tr>
		      </thead>

		      <tbody>
			<tr>
		      		<td>".$data['id_empleado']."</td>
		      		<td>".$data['nombre']."</td>
		      		<td>".$data['domicilio']."</td>
		      		<td>".$data['tel_casa']."</td>
		      		<td>".$data['celular']."</td>
		    </tr>

		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['emp_consultar']))
	{
		$data = $empleado->Consultar();
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>Nombre</th>
			        <th>Domicilio</th>
			        <th>Teléfono</th>
			        <th>Celular</th>
			      </tr>
		      </thead>

		      <tbody>
			
			";
				foreach ($data as $key => $value) {
					echo 
					"
					<tr>
						<td>".$value['id_empleado']."</td>
						<td>".$value['nombre']."</td>
			      		<td>".$value['domicilio']."</td>
			      		<td>".$value['tel_casa']."</td>
			      		<td>".$value['celular']."</td>
					 </tr>
					";
				}
		    echo 
		    "
		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['emp_modificar']))
	{
		if(
			$empleado->Modificar('nombre',$_POST['nombre'],$_POST['id']) &&
			$empleado->Modificar('domicilio',$_POST['domicilio'],$_POST['id']) &&
			$empleado->Modificar('tel_casa',$_POST['telefono'],$_POST['id']) &&
			$empleado->Modificar('celular',$_POST['celular'],$_POST['id'])
		  )
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}


	/* 		*-CLIENTE-* 		*/

	if(isset($_POST['cli_agregar']))
	{
		if($cliente->Alta($_POST['nombre'], $_POST['domicilio'], $_POST['telefono'], $_POST['rfc']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cli_eliminar']))
	{
		if($cliente->Baja($_POST['id']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cli_buscar']))
	{
		$data = $cliente->Buscar($_POST['id']);
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>Nombre</th>
			        <th>Domicilio</th>
			        <th>Teléfono</th>
			        <th>RFC</th>
			      </tr>
		      </thead>

		      <tbody>
			<tr>
		      		<td>".$data['id_cliente']."</td>
		      		<td>".$data['nombre']."</td>
		      		<td>".$data['domicilio']."</td>
		      		<td>".$data['telefono']."</td>
		      		<td>".$data['rfc']."</td>
		    </tr>

		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['cli_consultar']))
	{
		$data = $cliente->Consultar();
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>Nombre</th>
			        <th>Domicilio</th>
			        <th>Teléfono</th>
			        <th>RFC</th>
			      </tr>
		      </thead>

		      <tbody>
			
			";
				foreach ($data as $key => $value) {
					echo 
					"
					<tr>
						<td>".$value['id_cliente']."</td>
						<td>".$value['nombre']."</td>
			      		<td>".$value['domicilio']."</td>
			      		<td>".$value['telefono']."</td>
			      		<td>".$value['rfc']."</td>
					 </tr>
					";
				}
		    echo 
		    "
		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['cli_modificar']))
	{
		if(
			$cliente->Modificar('nombre',$_POST['nombre'],$_POST['id']) &&
			$cliente->Modificar('domicilio',$_POST['domicilio'],$_POST['id']) &&
			$cliente->Modificar('telefono',$_POST['telefono'],$_POST['id']) &&
			$cliente->Modificar('rfc',$_POST['rfc'],$_POST['id'])
		  )
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}


	/* 		*- TARJETAS -* 		*/

	if(isset($_POST['tar_agregar']))
	{
		if($cuenta->AltaTarjeta($_POST['id_cuenta'], $_POST['nip'], $_POST['fecha']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['tar_eliminar']))
	{
		if($cuenta->BajaTarjeta($_POST['id']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['tar_buscar']))
	{
		$data = $cuenta->ConsultarTarjeta($_POST['id']);
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>ID Cuenta</th>
			        <th>NIP</th>
			        <th>Fecha de Vencimiento</th>
			      </tr>
		      </thead>

		      <tbody>
			<tr>
		      		<td>".$data['id_plastico']."</td>
		      		<td>".$data['id_cuenta']."</td>
		      		<td>".$data['nip']."</td>
		      		<td>".$data['fecha_vencimiento']."</td>
		    </tr>

		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['tar_consultar']))
	{
		$data = $cuenta->MostrarTarjetas();
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>ID Cuenta</th>
			        <th>NIP</th>
			        <th>Fecha de Vencimiento</th>
			      </tr>
		      </thead>

		      <tbody>
			
			";
				foreach ($data as $key => $value) {
					echo 
					"
					<tr>
						<td>".$value['id_plastico']."</td>
			      		<td>".$value['id_cuenta']."</td>
			      		<td>".$value['nip']."</td>
			      		<td>".$value['fecha_vencimiento']."</td>
					 </tr>
					";
				}
		    echo 
		    "
		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['tar_modificar']))
	{
		if(
			$cuenta->ModificarTarjeta('id_cuenta',$_POST['id_cuenta'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('nip',$_POST['nip'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('fecha_vencimiento',$_POST['fecha'],$_POST['id'])
		  )
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}


	/* 		*- CUENTA -*  	*/
	if(isset($_POST['cue_agregar']))
	{
		if($cuenta->Alta($_POST['id_cliente'], $_POST['tipo_cuenta'], $_POST['tipo_saldo'], $_POST['saldo'], $_POST['fecha']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cue_eliminar']))
	{
		if($cuenta->Baja($_POST['id']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cue_buscar']))
	{
		$data = $cuenta->Buscar($_POST['id']);
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>ID Cliente</th>
			        <th>Tipo de Cuenta</th>
			        <th>Tipo de Saldo</th>
			        <th>Fecha Corte</th>
			        <th>Saldo</th>
			      </tr>
		      </thead>

		      <tbody>
			<tr>
		      		<td>".$data['id_cuenta']."</td>
		      		<td>".$data['id_cliente']."</td>
		      		<td>".$data['tipo_cuenta']."</td>
		      		<td>".$data['tipo_saldo']."</td>
		      		<td>".$data['fecha_corte']."</td>
		      		<td>".$data['saldo']."</td>
		    </tr>

		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['cue_consultar']))
	{
		$data = $cuenta->Consultar();
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>ID Cliente</th>
			        <th>Tipo de Cuenta</th>
			        <th>Tipo de Saldo</th>
			        <th>Fecha Corte</th>
			        <th>Saldo</th>
			      </tr>
		      </thead>

		      <tbody>
			
			";
				foreach ($data as $key => $value) {
					echo 
					"
					<tr>
						<td>".$value['id_cuenta']."</td>
			      		<td>".$value['id_cliente']."</td>
			      		<td>".$value['tipo_cuenta']."</td>
			      		<td>".$value['tipo_saldo']."</td>
			      		<td>".$value['fecha_corte']."</td>
			      		<td>".$value['saldo']."</td>
					 </tr>
					";
				}
		    echo 
		    "
		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['cue_modificar']))
	{
		if(
			$cuenta->ModificarTarjeta('id_cuenta',$_POST['id_cuenta'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('id_cliente',$_POST['id_cliente'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('tipo_cuenta',$_POST['tipo_cuenta'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('tipo_saldo',$_POST['tipo_saldo'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('fecha_corte',$_POST['fecha'],$_POST['id']) &&
			$cuenta->ModificarTarjeta('saldo',$_POST['saldo'],$_POST['id'])
		  )
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cue_estado']))
	{
		$data = $cuenta->estadoCuenta($_POST['id']);
		echo 
		"
		<div class='table-responsive'>
		  <table class='table table-hover'>
			  <thead>
			      <tr>
			        <th>ID</th>
			        <th>ID Cliente</th>
			        <th>ID Cuenta</th>
			        <th>Estado</th>
			      </tr>
		      </thead>

		      <tbody>
			<tr>
					<td>".$data['id_estado_cuenta']."</td>
					<td>".$data['id_cliente']."</td>
		      		<td>".$data['id_cuenta']."</td>
		      		<td>".$data['estado']."</td>
		    </tr>

		      </tbody>   
		  </table>
		</div>
		";
	}

	if(isset($_POST['cue_depositar']))
	{
		if($cuenta->Depositar($_POST['id'], $_POST['monto']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cue_transferir']))
	{
		if($cuenta->Transferir($_POST['id_origen'], $_POST['id_destino'], $_POST['monto']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}

	if(isset($_POST['cue_retirar']))
	{
		if($cuenta->Retirar($_POST['id'], $_POST['monto']))
			header("Location: accion.php?result=success");
		else
			header("Location: accion.php?result=fail");
	}
}

?>

<style>
	.huge {
    	font-size: 50px;
	}
</style>

<div class="container"> <!-- -fluid -->

<h1 class="text-center">PANEL DE ADMINISTRACIÓN BANMEX</h1>

<div class="row">

	<div class="col-xs-6 col-md-3">
	<div class="panel panel-default">
	<div class="panel-heading text-center"><strong>Empleados</strong></div>
	<div class="panel-body text-center"><div class="huge"> <i class='glyphicon glyphicon-user'></i></div></div>
	<div class="panel-footer">
	<span class="pull-left">Administrar</span>
	<span class="pull-right"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="clearfix"></div>
	</div> <!-- /panel-footer -->
	</div><!-- /panel -->
	</div><!-- /col -->

	<div class="col-xs-6 col-md-3">
	<div class="panel panel-default">
	<div class="panel-heading text-center"><strong>Clientes</strong></div>
	<div class="panel-body text-center"><div class="huge"> <i class='glyphicon glyphicon-user'></i></div></div>
	<div class="panel-footer">
	<span class="pull-left">Administrar</span>
	<span class="pull-right"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="clearfix"></div>
	</div> <!-- /panel-footer -->
	</div><!-- /panel -->
	</div><!-- /col -->

	<!-- Permissions Panel -->
	<div class="col-xs-6 col-md-3">
	<div class="panel panel-default">
	<div class="panel-heading text-center"><strong>Cuentas</strong></div>
	<div class="panel-body text-center"><div class="huge"><i class='glyphicon glyphicon-briefcase'></i></div></div>
	<div class="panel-footer">
	<span class="pull-left">Administrar</span>
	<span class="pull-right"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="clearfix"></div>
	</div> <!-- /panel-footer -->
	</div><!-- /panel -->
	</div> <!-- /.col -->

	<!-- Pages Panel -->
	<div class="col-xs-6 col-md-3">
	<div class="panel panel-default">
	<div class="panel-heading text-center"><strong>Tarjetas</strong></div>
	<div class="panel-body  text-center"><div class="huge"> <i class='glyphicon glyphicon-credit-card'></i></div></div>
	<div class="panel-footer">
	<span class="pull-left">Administrar</span>
	<span class="pull-right"><i class="glyphicon glyphicon-cog"></i></span>
	<div class="clearfix"></div>
	</div> <!-- /panel-footer -->
	</div><!-- /panel -->
	</div><!-- /col -->

</div> <!-- /.row -->
</div>

<div class="container">
    <div class="row">
      <div class="col-xs-6 col-md-3">
      <div class="panel panel-primary">
      <?php
      MenuEmpleado();
      ?>
      <div class="clearfix"></div>
      </div><!-- /panel -->
      </div><!-- /col -->

      <div class="col-xs-6 col-md-3">
      <div class="panel panel-primary">
      <?php
      MenuCliente();
      ?>
      <div class="clearfix"></div>
      </div><!-- /panel -->
      </div><!-- /col -->

      <div class="col-xs-6 col-md-3">
      <div class="panel panel-primary">
      <?php
      MenuCuentas();
      ?>
      <div class="clearfix"></div>
      </div><!-- /panel -->
      </div><!-- /col -->

      <div class="col-xs-6 col-md-3">
      <div class="panel panel-primary">
      <?php
      MenuTarjetas();
      ?>
      <div class="clearfix"></div>
      </div><!-- /panel -->
      </div><!-- /col -->
      
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
