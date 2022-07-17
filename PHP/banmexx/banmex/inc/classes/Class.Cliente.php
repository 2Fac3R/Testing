<?php

class Cliente
{
	private $_dbh, $idCliente, $nombre, $domicilio, $telCasa, $telCelular, $telOficina, $rfc;
	const TABLE_NAME = 'Cliente';
	const ID = 'id_cliente';

	/*
		+------------+-------------+------+-----+---------+----------------+
		| Field      | Type        | Null | Key | Default | Extra          |
		+------------+-------------+------+-----+---------+----------------+
		| id_cliente | int(11)     | NO   | PRI | NULL    | auto_increment |
		| nombre     | varchar(50) | NO   |     | NULL    |                |
		| domicilio  | varchar(50) | NO   |     | NULL    |                |
		| telefono   | int(20)     | YES  |     | NULL    |                |
		| rfc        | varchar(15) | YES  |     | NULL    |                |
		+------------+-------------+------+-----+---------+----------------+
	*/


	function __construct()
	{
		$this->_dbh = DB::getInstance();
		$this->idCliente = 0;
		$this->nombre = "";
		$this->domicilio = "";
		$this->telefono = "";
		$this->rfc = "";

	}

	public function Alta($name,$address,$tel1,$rfc)
	{
		$this->nombre = $name;
		$this->domicilio = $address;
		$this->telefono = $tel1;
		$this->rfc = $rfc;

		if($this->_dbh->insert(
			self::TABLE_NAME,
			['nombre'=>$this->nombre, 'domicilio'=>$this->domicilio, 'telefono'=>$this->telefono, 'rfc'=>$this->rfc]
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
}

?>