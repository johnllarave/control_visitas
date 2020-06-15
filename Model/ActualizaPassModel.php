<?php

include '../Model/config.php';

class ActualizaPassModel {

	private $con;
	private $conexion;

	public function __construct() {
		$this->con = new Config();
		$this->conexion = $this->con->conexion();
	}

	function datos($pass_validar) {
        $query="SELECT * FROM usuario WHERE documento = '".$_SESSION['documento']."' AND pass = '".$pass_validar."'";
		$result = mysqli_query($this->conexion, $query);

        return $result;
	}

	function pass($pass) {
	    $pass = utf8_decode(mysqli_real_escape_string($this->conexion, $pass));

	    $act_pass = "UPDATE usuario SET pass = '".$pass."' WHERE documento = '".$_SESSION['documento']."'";
    	$this->conexion->query($act_pass) or die(mysqli_errno($this->conexion) . ": " . mysqli_error($this->conexion) . " ");

        return "ok";
	}
}

?>