<?php

include '../Model/config.php';

class CambioPassModel {

	private $con;
	private $conexion;

	public function __construct() {
		$this->con = new Config();
		$this->conexion = $this->con->conexion();
	}

	function cambiaPass($cliente, $actividad, $observacion) {
		$pass = utf8_decode(mysqli_real_escape_string($this->conexion, $_POST['pass']));
	    $token = utf8_decode(mysqli_real_escape_string($this->conexion, $_POST['token']));
	    $correo = utf8_decode(mysqli_real_escape_string($this->conexion, $_POST['correo']));

	    $nuevo_pass = sha1($pass);

	    $query ="SELECT * FROM usuario WHERE correo = '".$correo."' AND token = '".$token."' AND fecha_token >= '".date("Y-m-d")."'";
    	$result = $this->conexion->query($query) or die(mysqli_errno($this->conexion) . ": " . mysqli_error($this->conexion) . " ");

    	if ($result->num_rows == 0) {
	        echo "<script>
	                alert('Su solicitud de cambio de contraseña se encuentra vencida, genere una nueva solicitud y vuelva a intentar');
	                document.location.href='../index.php';
	              </script>";
	    } else {
	        $insert_new_pass = "UPDATE usuario SET pass = '".$nuevo_pass."', token = 0 WHERE correo = '".$correo."'";
	        $this->conexion->query($insert_new_pass) or die(mysqli_errno($this->conexion) . ": " . mysqli_error($this->conexion) . " ");
	        echo "<script>
	                alert('Se ha realizado con exito el cambio de contraseña');
	                document.location.href='../index.php';
	              </script>";
	    }
        //return "ok";
	}
}

?>