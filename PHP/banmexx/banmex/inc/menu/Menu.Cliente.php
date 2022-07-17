<?php

function MenuCliente()
{
	echo 
	'
		<div class="panel-heading text-center"><strong>Agregar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            Nombre <br>
	            <input type="text" name="nombre" class="form-control" required> <br>
	            Domicilio <br>
	            <input type="text" name="domicilio" class="form-control" required> <br>
	            Teléfono <br>
	            <input type="number" name="telefono" class="form-control" required> <br>
	            RFC <br>
	            <input type="text" name="rfc" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cli_agregar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Eliminar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> 
	          </div>
	          <button type="submit" name="cli_eliminar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Buscar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cli_buscar" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Consultar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <button type="submit" name="cli_consultar" class="form-control">Consultar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Modificar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	          	ID a Modificar <br>
	          	<input type="number" name="id" class="form-control" required> <br>
	            Nombre <br>
	            <input type="text" name="nombre" class="form-control" required> <br>
	            Domicilio <br>
	            <input type="text" name="domicilio" class="form-control" required> <br>
	            Teléfono <br>
	            <input type="text" name="telefono" class="form-control" required> <br>
	            RFC <br>
	            <input type="text" name="rfc" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cli_modificar" class="form-control">Enviar</button>
	        </form>
      	</div>

	';
}

?>