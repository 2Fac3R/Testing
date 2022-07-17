<?php

class Cuenta
{
	private $_dbh, $_tarjeta, $_estadoCuenta, $_table, $_tableEstado, $_tableTarjeta, $_id, $_idEstado, $_idTarjeta, 
			$idCuenta, $idCliente, $tipoCuenta, $tipoSaldo, $saldo, $fechaCorte;
	const TABLE_NAME = 'Cuenta';
	const TABLE_NAME_ESTADO = 'Estado_Cuenta';
	const TABLE_NAME_TARJETA = 'Tarjeta';
	const ID = 'id_cuenta';
	const ID_ESTADO = 'id_estado_cuenta';
	const ID_TARJETA = 'id_plastico';

	/*
			Cuenta
		+-------------+-------------+------+-----+---------+----------------+
		| Field       | Type        | Null | Key | Default | Extra          |
		+-------------+-------------+------+-----+---------+----------------+
		| id_cuenta   | int(11)     | NO   | PRI | NULL    | auto_increment |
		| id_cliente  | int(11)     | NO   |     | NULL    |                |
		| tipo_cuenta | varchar(50) | NO   |     | NULL    |                |
		| tipo_saldo  | varchar(50) | NO   |     | NULL    |                |
		| fecha_corte | date        | NO   |     | NULL    |                |
		| saldo       | int(11)     | NO   |     | NULL    |                |
		+-------------+-------------+------+-----+---------+----------------+

			Estado_Cuenta
		+------------------+-------------+------+-----+---------+----------------+
		| Field            | Type        | Null | Key | Default | Extra          |
		+------------------+-------------+------+-----+---------+----------------+
		| id_estado_cuenta | int(11)     | NO   | PRI | NULL    | auto_increment |
		| id_cliente       | int(11)     | NO   | MUL | NULL    |                |
		| id_cuenta        | int(11)     | NO   | MUL | NULL    |                |
		| estado           | varchar(20) | NO   |     | NULL    |                |
		+------------------+-------------+------+-----+---------+----------------+
		
			Tarjeta
		+-------------------+------------+------+-----+---------+----------------+
		| Field             | Type       | Null | Key | Default | Extra          |
		+-------------------+------------+------+-----+---------+----------------+
		| id_plastico       | int(11)    | NO   | PRI | NULL    | auto_increment |
		| id_cuenta         | int(11)    | NO   |     | NULL    |                |
		| nip               | int(4)     | NO   |     | NULL    |                |
		| fecha_vencimiento | varchar(5) | YES  |     | NULL    |                |
		+-------------------+------------+------+-----+---------+----------------+

	*/

	function __construct()
	{
		$this->_dbh = DB::getInstance();
		$this->idCuenta = 0;
		$this->idCliente = 0;
		$this->tipoCuenta = "";
		$this->tipoSaldo = "";
		$this->fechaCorte = "";
		$this->saldo = 0.0;
	}

	public function Alta($idCli,$tCuenta,$tSaldo,$sal,$fCorte)
	{
		$this->idCliente = $idCli;
		$this->tipoCuenta = $tCuenta;
		$this->tipoSaldo = $tSaldo;
		$this->saldo = $sal;
		$this->fechaCorte = $fCorte;

		if($this->_dbh->insert(
			self::TABLE_NAME,
			['id_cliente'=>$this->idCliente, 'tipo_cuenta'=>$this->tipoCuenta, 'tipo_saldo'=>$this->tipoSaldo, 'fecha_corte'=>$this->fechaCorte
			, 'saldo'=>$this->saldo]
			))
		{
			return true;
		}
		return false;
	}

	public function Baja($id)
	{
		if($this->_dbh->deleteById(self::ID,$id,self::TABLE_NAME))
		{
			return true;
		}
		return false;
	}

	public function Consultar()
	{
		$data = $this->_dbh->findAll(self::TABLE_NAME);
		return $data->results();
	}

	public function Buscar($id)
	{
		$data = $this->_dbh->findById(self::ID,$id,self::TABLE_NAME);
		return $data->first();
	}

	public function Modificar($reg,$regValue,$idValue)
	{
		$this->_table = self::TABLE_NAME;
		$this->_id = self::ID;

		$query = "UPDATE {$this->_table} SET {$reg}='{$regValue}' WHERE {$this->_id}={$idValue}";
		
		if($this->_dbh->query2($query))
		{
			return true;
		}
		return false;		
	}

	public function AltaTarjeta($idCuenta,$nip,$fecha)
	{
		if($this->_dbh->insert(
			self::TABLE_NAME_TARJETA,
			['id_cuenta'=>$idCuenta, 'nip'=>$nip, 'fecha_vencimiento'=>$fecha]
			))
		{
			return true;
		}
		return false;
	}

	public function BajaTarjeta($id)
	{
		if($this->_dbh->deleteById(self::ID_TARJETA,$id,self::TABLE_NAME_TARJETA))
		{
			return true;
		}
		return false;
		
	}

	public function ConsultarTarjeta($id)
	{
		$data = $this->_dbh->findById(self::ID_TARJETA,$id,self::TABLE_NAME_TARJETA);
		return $data->first();
		
	}

	public function MostrarTarjetas()
	{
		$data = $this->_dbh->findAll(self::TABLE_NAME_TARJETA);
		return $data->results();

	}

	public function ModificarTarjeta($reg,$regValue,$idValue)
	{
		$this->_table = self::TABLE_NAME_TARJETA;
		$this->_id = self::ID_TARJETA;

		$query = "UPDATE {$this->_table} SET {$reg}='{$regValue}' WHERE {$this->_id}={$idValue}";
		
		if($this->_dbh->query2($query))
		{
			return true;
		}
		return false;	
	}

	public function EstadoCuenta($id)
	{
		$data = $this->_dbh->findById(self::ID_ESTADO,$id,self::TABLE_NAME_ESTADO);
		return $data->first();
	}

	public function ObtenerSaldo($id)
	{
		$data = $this->_dbh->findById(self::ID,$id,self::TABLE_NAME);
		return $data->first()['saldo'];
	}

	public function ValidarTransferencia($idCuenta, $monto)
	{
		$saldo = $this->ObtenerSaldo($idCuenta);

		if($saldo <= 0) // Si no hay saldo en la cuenta
			return false;

		if($saldo < $monto) // Si el saldo es menor al monto (No hay saldo suficiente)
			return false;

		if($monto <= 0) // El monto tiene que ser mayor a 0
			return false;

		return true;
	}

	public function ValidarDeposito($monto)
	{
		return ($monto > 0) ? true : false ;
	}

	public function Depositar($idCuenta, $monto)
	{
		$this->_table = self::TABLE_NAME;
		$this->_id = self::ID;

		if(!$this->ValidarDeposito($monto))
		{
			return false;
		}
		else
		{
			$saldo = $this->ObtenerSaldo($idCuenta) + $monto;

			$query = "UPDATE {$this->_table} SET saldo = {$saldo} WHERE {$this->_id}={$idCuenta}";

			if($this->_dbh->query2($query))
			{
				return true;
			}
			return false;
		}
	}

	public function Transferir($idCuentaOrigen, $idCuentaDestino, $monto)
	{
		$this->_table = self::TABLE_NAME;
		$this->_id = self::ID;

		if(!$this->ValidarTransferencia($idCuentaOrigen,$monto))
		{
			return false;
		}
		else
		{
			$saldo1 = $this->ObtenerSaldo($idCuentaOrigen) - $monto;
			$saldo2 = $this->ObtenerSaldo($idCuentaDestino) + $monto;

			$query = "UPDATE {$this->_table} SET saldo = {$saldo1} WHERE {$this->_id}={$idCuentaOrigen}";
			$query2 = "UPDATE {$this->_table} SET saldo = {$saldo2} WHERE {$this->_id}={$idCuentaDestino}";

			if($this->_dbh->query2($query) && $this->_dbh->query2($query2))
			{
				return true;
			}
			return false;
		}			

	}

	public function Retirar($idCuenta, $monto)
	{
		$this->_table = self::TABLE_NAME;
		$this->_id = self::ID;

		if(!$this->ValidarTransferencia($idCuenta,$monto))
		{
			return false;
		}
		else
		{
			$saldo = $this->ObtenerSaldo($idCuenta) - $monto;

			$query = "UPDATE {$this->_table} SET saldo = {$saldo} WHERE {$this->_id}={$idCuenta}";

			if($this->_dbh->query2($query))
			{
				return true;
			}
			return false;
		}
	}
}

?>