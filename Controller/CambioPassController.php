<?php

require_once ("../Model/CambioPassModel.php");

class CambioPassController {

	function cambioPass() {
		$pass = $_POST['pass'];
	    $token = $_POST['token'];
	    $correo = $_POST['correo'];

		$instancia = new CambioPassModel();
		$result = $instancia->cambiaPass($pass, $token, $correo);

		/*if ($result == 'ok') {
			header("location:../index.php");
		}*/
	}
}

if (isset($_POST['btn_pass'])) {
	$crea = new CambioPassController();
	$crea->cambioPass();
}

?>