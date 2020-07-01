<?php

include '../Model/config.php';

class UsuarioModel {

	private $con;
	private $conexion;

	public function __construct() {
		$this->con = new Config();
		$this->conexion = $this->con->conexion();
	}

	function datos() {
		if ($_SESSION['id_rol'] == 2) {
			$condicion =  " AND id_jefe = '".$_SESSION['id_usuario']."'";
		}

        $query="SELECT id_usuario, CONCAT(nombre, ' ', apellido) AS usuario, documento, correo, telefono, nombre_rol
                FROM usuario
                INNER JOIN rol ON usuario.id_rol = rol.id_rol
                WHERE estado = '1'".$condicion."";
		$result = mysqli_query($this->conexion, $query);

        return $result;
	}

	function buscaUsuario($id_usuario) {
		$id_usuario = mysqli_real_escape_string($this->conexion, $id_usuario);

        $query="SELECT id_usuario, documento, nombre, apellido, correo, telefono FROM usuario WHERE id_usuario = '".$id_usuario."'";
		$result = mysqli_query($this->conexion, $query);

        return $result;
	}

	function crea($nombre, $apellido, $documento, $correo, $telefono) {
	    $nombre = utf8_decode(mysqli_real_escape_string($this->conexion, $nombre));
	    $apellido = utf8_decode(mysqli_real_escape_string($this->conexion, $apellido));
	    $documento = utf8_decode(mysqli_real_escape_string($this->conexion, $documento));
	    $correo = utf8_decode(mysqli_real_escape_string($this->conexion, $correo));
	    $telefono = utf8_decode(mysqli_real_escape_string($this->conexion, $telefono));
	    $pass = sha1($documento);
    	$id_jefe = $_SESSION['id_usuario'];

    	if ($_SESSION['id_rol'] == 1) { $id_rol = '2'; } //El administrador crea coordinadores
	    if ($_SESSION['id_rol'] == 2) { $id_rol = '3'; } //El coordinador crea vendedores

        $query="INSERT INTO usuario (documento, nombre, apellido, correo, telefono, pass, id_jefe, id_rol) 
                VALUES ('".$documento."','".$nombre."','".$apellido."','".$correo."','".$telefono."','".$pass."','".$id_jefe."','".$id_rol."')";
    	$this->conexion->query($query) or die(mysqli_errno($this->conexion) . ": " . mysqli_error($this->conexion) . " ");

        return "ok";
	}
    function actualiza($nombre, $apellido, $documento, $correo, $telefono, $id) {
	    $nombre = utf8_decode(mysqli_real_escape_string($this->conexion, $nombre));
	    $apellido = utf8_decode(mysqli_real_escape_string($this->conexion, $apellido));
	    $documento = utf8_decode(mysqli_real_escape_string($this->conexion, $documento));
	    $correo = utf8_decode(mysqli_real_escape_string($this->conexion, $correo));
	    $telefono = utf8_decode(mysqli_real_escape_string($this->conexion, $telefono));
	    $id = utf8_decode(mysqli_real_escape_string($this->conexion, $id));

        $query="UPDATE usuario SET nombre='".$nombre."', apellido='".$apellido."', documento='".$documento."', correo='".$correo."', telefono='".$telefono."'  
                WHERE id_usuario = '".$id."'";
    	$this->conexion->query($query) or die(mysqli_errno($this->conexion) . ": " . mysqli_error($this->conexion) . " ");

        return "ok";
	}
}

?>
