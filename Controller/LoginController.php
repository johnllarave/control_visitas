<?php

require_once ("../Model/LoginModel.php");

/**
 * Validación de datos para dar ingreso al usuario si los datos son correctos
 */
class LoginController {

	/**
	 * Valida el usuario y la contraseña para redirecionarlo a la pagina inicio
	 * si no son correctos los datos lo envia al index sin poder ingresar a la aplicación
	 * @return void
	 */
	function validaLogin() {
		$user = $_POST['user'];
        $pass = $_POST['pass'];

        $ins_login = new LoginModel();
		$result = $ins_login->login($user, $pass);

		if ($result->num_rows >= 1) {
			$row = $result->fetch_array();

			$id_usuario = $row['id_usuario'];
			$documento = $row['documento'];
			$nombre = utf8_encode($row['nombre']);
			$apellido = utf8_encode($row['apellido']);
			$correo = $row['correo'];
			$id_rol = $row['id_rol'];

			$_SESSION['id_usuario'] = $id_usuario;
			$_SESSION['documento'] = $documento;
			$_SESSION['nombre'] = $nombre;
			$_SESSION['apellido'] = $apellido;
			$_SESSION['correo'] = $correo;
			$_SESSION['id_rol'] = $id_rol;

			header("location:../View/inicio.php");

		} else {
			echo "<script>
		            alert('Usuario o contraseña Incorrecto');
		            window.location.href = '../index.php';
		        </script>";
		}
	}
}

$login = new LoginController();
$login->validaLogin();

?>