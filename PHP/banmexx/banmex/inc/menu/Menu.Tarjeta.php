<?php

function MenuTarjetas()
{
	echo 
	'
		<div class="panel-heading text-center"><strong>Agregar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID Cuenta <br>
	            <input type="number" name="id_cuenta" class="form-control" required> <br>
	            NIP <br>
	            <input type="number" name="nip" class="form-control" required> <br>
	            Fecha de vencimiento <br>
	            <input type="text" name="fecha" class="form-control" value="mm/yy" required> <br>
	          </div>
	          <button type="submit" name="tar_agregar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Eliminar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> 
	          </div>
	          <button type="submit" name="tar_eliminar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Buscar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="tar_buscar" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Consultar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <button type="submit" name="tar_consultar" class="form-control">Consultar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Modificar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	          	ID a Modificar <br>
	          	<input type="number" name="id" class="form-control" required> <br>
	            ID Cuenta <br>
	            <input type="number" name="id_cuenta" class="form-control" required> <br>
	            NIP <br>
	            <input type="number" name="nip" class="form-control" required> <br>
	            Fecha de Vencimiento <br>
	            <input type="text" name="fecha" class="form-control" value="mm/yy" required> <br>
	          </div>
	          <button type="submit" name="tar_modificar" class="form-control">Enviar</button>
	        </form>
      	</div>

	';

}

?>