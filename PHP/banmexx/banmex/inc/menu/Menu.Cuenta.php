<?php

function MenuCuentas()
{
	echo 
	'
		<div class="panel-heading text-center"><strong>Agregar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID Cliente <br>
	            <input type="number" name="id_cliente" class="form-control" required> <br>
	            Tipo de Cuenta <br>
	            <select name="tipo_cuenta" class="form-control" required>
		            <option value="DEBITO">DÉBITO
		            <option value="CREDITO">CRÉDITO
	            </select> <br>
	            <select name="tipo_saldo" class="form-control" required>
		            <option value="EFECTIVO">EFECTIVO
		            <option value="CREDITO">CRÉDITO
	            </select> <br>
	            Fecha Corte <br>
	            <input type="date" name="fecha" class="form-control" required> <br>
	            Saldo <br>
	            <input type="number" name="saldo" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cue_agregar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Eliminar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> 
	          </div>
	          <button type="submit" name="cue_eliminar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Buscar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cue_buscar" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Consultar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <button type="submit" name="cue_consultar" class="form-control">Consultar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Modificar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	          	ID a Modificar <br>
	          	<input type="number" name="id" class="form-control" required> <br>
	          	ID Cliente <br>
	            <input type="number" name="id_cliente" class="form-control" required> <br>
	            Tipo de Cuenta <br>
	            <select name="tipo_cuenta" class="form-control" required>
		            <option value="DEBITO">DÉBITO
		            <option value="CREDITO">CRÉDITO
	            </select> <br>
	            <select name="tipo_saldo" class="form-control" required>
		            <option value="EFECTIVO">EFECTIVO
		            <option value="CREDITO">CRÉDITO
	            </select> <br>
	            Fecha Corte <br>
	            <input type="date" name="fecha" class="form-control" required> <br>
	            Saldo <br>
	            <input type="number" name="saldo" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cue_modificar" class="form-control">Enviar</button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Estado de Cuenta</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID <br>
	            <input type="number" name="id" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cue_estado" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Depositar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID de Cuenta<br>
	            <input type="number" name="id" class="form-control" required> <br>
	            Monto<br>
	            <input type="number" name="monto" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cue_depositar" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

      	<div class="panel-heading text-center"><strong>Transferir</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID de Cuenta Origen<br>
	            <input type="number" name="id_origen" class="form-control" required> <br>
	            ID de Cuenta Destino<br>
	            <input type="number" name="id_destino" class="form-control" required> <br>
	          	</div>
	          	Monto<br>
	            <input type="number" name="monto" class="form-control" required> <br>
	          <button type="submit" name="cue_transferir" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

      <div class="panel-heading text-center"><strong>Retirar</strong></div>
	      <div class="panel-body">
	        <form action="" method="post">
	          <div class="form-group">
	            ID de Cuenta<br>
	            <input type="number" name="id" class="form-control" required> <br>
	            Monto<br>
	            <input type="number" name="monto" class="form-control" required> <br>
	          </div>
	          <button type="submit" name="cue_retirar" class="form-control">Enviar<i class="glyphicon glyphicon-search"></i></button>
	        </form>
      	</div>

	';

}

?>