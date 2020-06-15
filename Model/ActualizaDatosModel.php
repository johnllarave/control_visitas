<?php

include '../Model/config.php';

class ActualizaDatosModel {

	private $con;
	private $conexion;

	public function __construct() {
		$this->con = new Config();
		$this->conexion = $this->con->conexion();
	}

	function datos() {
        $query="SELECT id_usuario, documento, nombre, apellido, correo, telefono 
    			FROM usuario 
    			WHERE id_usuario = '".$_SESSION['id_usuario']."'";

		$result = mysqli_query($this->conexion, $query);

        return $result;
	}