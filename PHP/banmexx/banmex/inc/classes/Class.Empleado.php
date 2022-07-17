<?php

class Empleado
{
	private $_dbh, $_table, $_id, $idEmpleado, $nombre, $domicilio, $telCasa, $telCelular;
	const TABLE_NAME = 'Empleado';
	const ID = 'id_empleado';
	/*
		+-------------+-------------+------+-----+---------+----------------+
		| Field       | Type        | Null | Key | Default | Extra          |
		+-------------+-------------+------+-----+---------+----------------+
		| id_empleado | int(11)     | NO   | PRI | NULL    | auto_increment |
		| nombre      | varchar(50) | NO   |     | NULL    |                |
		| domicilio   | varchar(50) | NO   |     | NULL    |                |
		| tel_casa    | int(20)     | YES  |     | NULL    |                |
		| celular     | int(10)     | YES  |     | NULL    |                |
		+-------------+-------------+------+-----+---------+----------------+
	*/

	function __construct()
	{
		$this->_dbh = DB::getInstance();
		$this->idEmpleado = 0;
		$this->nombre = "";
		$this->domicilio = "";
		$this->telCasa = "";
		$this->telCelular = "";

	}

	public function Alta($name,$email,$tel1,$tel2)
	{
		$this->nombre = $name;
		$this->domicilio = $email;
		$this->telCasa = $tel1;
		$this->telCelular = $tel2;

		if($this->_dbh->insert(
			self::TABLE_NAME,
			['nombre'=>$this->nombre, 'domicilio'=>$this->domicilio, 'tel_casa'=>$this->telCasa, 'celular'=>$this->telCelular]
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