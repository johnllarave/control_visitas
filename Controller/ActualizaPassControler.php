<?php

require_once ("../Model/ActualizaPassModel.php");

class ActualizaPassController {

	function validaPass() {

		$pass_validar = sha1($_POST['pass_validar']);

        $instancia_datos = new ActualizaPassModel();
		$result = $instancia_datos->datos($pass_validar);

		return $result;
	}

	function actualizaPass($valor) {

		if ($valor == 1) {
			$pass_actual = sha1($_POST['pass_actual']);
		    $pass = sha1($_POST['pass']);

		    if ($pass_actual == $pass) {
		        header("location:../View/actualiza_pass.php");
		    } else {

		    	$instancia_actualiza = new ActualizaPassModel();
				$result = $instancia_actualiza->pass($pass);
		    
				if ($result == 'ok') {
					header("location:../View/actualiza_pass.php");
				}
		    }
	    } else {
	    	return 0;
	    }
	}
}