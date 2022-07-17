<?php

class Usuario
{
	private $_dbh, $_data, $_idUsuario, $_correo, $_clave, $_fechaRegistro, $_ultimaVezActivo, $_numUsuarios;
	const TABLE_NAME = 'Usuario';
	const TABLE_NAME_ROL = 'Roles';
	const TABLE_NAME_MATCH = 'Match_Usuario_Rol';

	/*
		+-------------------+------------+------+-----+---------+----------------+
		| Field             | Type       | Null | Key | Default | Extra          |
		+-------------------+------------+------+-----+---------+----------------+
		| id_plastico       | int(11)    | NO   | PRI | NULL    | auto_increment |
		| id_cuenta         | int(11)    | NO   |     | NULL    |                |
		| nip               | int(4)     | NO   |     | NULL    |                |
		| fecha_vencimiento | varchar(5) | YES  |     | NULL    |                |
		+-------------------+------------+------+-----+---------+----------------+
		+----------------------+---------+------+-----+---------+----------------+
		| Field                | Type    | Null | Key | Default | Extra          |
		+----------------------+---------+------+-----+---------+----------------+
		| id_match_usuario_rol | int(11) | NO   | PRI | NULL    | auto_increment |
		| id_usuario           | int(11) | NO   | MUL | NULL    |                |
		| id_rol               | int(11) | NO   | MUL | NULL    |                |
		+----------------------+---------+------+-----+---------+----------------+
	*/
		
	public function __construct($user = null)
	{
		$this->_dbh = DB::getInstance();
		$this->_numUsuarios = $this->_dbh->findAll(self::TABLE_NAME)->count();
	}

	public function find($user = null)
	{
		$field = null;
		if ($user) 
		{
			if(is_numeric($user))
			{
				$field = 'id_usuario';
			}
			elseif(!filter_var($user, FILTER_VALIDATE_EMAIL) === false)
			{
				$field = 'correo';
			}

			$data = $this->_dbh->get(self::TABLE_NAME, array($field, '=', $user));

			if ($data->count()) 
			{
				$this->_data = $data->first();
				return true;
			}
		}
		return false;
	}

	public function getUserData($user = null)
	{
		$field = null;
		if ($user) 
		{
			if(is_numeric($user))
			{
				$field = 'id_usuario';
			}
			elseif(!filter_var($user, FILTER_VALIDATE_EMAIL) === false)
			{
				$field = 'correo';
			}

			$data = $this->_dbh->get(self::TABLE_NAME, array($field, '=', $user));

			if ($data->count()) 
			{
				return $this->_data = $data->first();
			}
		}
		return null;
	}

	public function create($level, $mail, $password, $date1, $date2)
	{
		$this->_correo = $mail;
		$this->_clave = $password;
		$this->_fechaRegistro = $date1;
		$this->_ultimaVezActivo = $date2;

		$fields = array($this->_correo, $this->_clave, $this->_fechaRegistro, $this->_ultimaVezActivo);

		if (!$this->_dbh->insert(
			self::TABLE_NAME, 
			['correo'=>$this->_correo,'clave'=> $this->_clave,'fecha_registro'=>$this->_fechaRegistro,'ultima_vez_activo'=>$this->_ultimaVezActivo])) 
		{
			return false;
		}
		else
		{
			$this->_dbh->insert("match_usuario_rol",['id_usuario'=>$this->_numUsuarios+1,'id_rol'=>$level]);
			return true;
		}
	}

	public function login($email = null, $password = null){

		if(!$this->find($email))
		{
			return false;
		}
		else
		{
			$data = $this->getUserData($email);
			$level = $this->checkPermission($data['id_usuario']);

			if($password == $data['clave'])
			{
				$_SESSION['logged'] = $data;
				$_SESSION['level'] = $level;
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	public function isLoggedIn(){
		return !empty($_SESSION['logged']);
	}

	public function logout(){
		session_unset();
		session_destroy();

		header("Location: index.php?login_result=logout");
		//echo '<script>window.location="index.php"</script>';
	}

	public function checkPermission($idUsuario)
	{
		$data = $this->_dbh->get(self::TABLE_NAME_MATCH, array('id_usuario', '=', $idUsuario));
		return $data->first()['id_rol'];
	}
}

?>