<?php

include '../Model/config.php';

class LoginModel {

	private $con;
	private $conexion;

	public function __construct() {
		$this->con = new Config();
		$this->conexion = $this->con->conexion();
	}

	function login($user, $pass) {
		$user = mysqli_real_escape_string($this->conexion, $user);
		$pass = sha1(mysqli_real_escape_string($this->conexion, $pass));

		$query = "SELECT * FROM usuario WHERE documento = '".$user."' AND pass = '".$pass."' AND estado = '1'";
        $result = mysqli_query($this->conexion, $query);

        return $result;
	}
}

?>