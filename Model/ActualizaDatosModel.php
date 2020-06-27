<?php

include '../Model/config.php';

class ActualizaDatosModel {

	private $con;
	private $conexion;

	public function __construct() {
		//$this->con = new Config();
		//$this->conexion = $this->con->conexion();
	}

	function datos() {
        $query="SELECT id_usuario, documento, nombre, apellido, correo, telefono 
    			FROM usuario 
    			WHERE id_usuario = '".$_SESSION['id_usuario']."'";

		$result = mysqli_query($this->conexion, $query);

        return $result;
	}

	function actualza($nombre, $apellido, $correo, $telefono) {
	    /*$nombre = utf8_decode(mysqli_real_escape_string($this->conexion, $nombre));
	    $apellido = utf8_decode(mysqli_real_escape_string($this->conexion, $apellido));
	    $correo = utf8_decode(mysqli_real_escape_string($this->conexion, $correo));
	    $telefono = utf8_decode(mysqli_real_escape_string($this->conexion, $telefono));*/

        $act_datos="UPDATE usuario SET nombre='".$nombre."', apellido='".$apellido."', correo='".$correo."', telefono='".$telefono."'  
                	WHERE id_usuario = '".$_SESSION['id_usuario']."'";

         $datos = $nombre ." ". $apellido ." ". $correo ." ". $telefono;
    	//$this->conexion->query($act_datos) or die(mysqli_errno($this->conexion) . ": " . mysqli_error($this->conexion) . " ");

        return $datos;
	}
}

?>