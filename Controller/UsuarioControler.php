<?php

require_once ("../Model/UsuarioModel.php");

/**
 * Clase para la administración de usuarios
 */
class UsuarioController {

	/**
	 * Funcion valida los datos del usuario
	 * @return void
	 */
	function validaDatos() {
        $instancia_datos = new UsuarioModel();
		$result = $instancia_datos->datos();

		return $result;
	}

	/**
	 * Función para cargar los datos del usuario en el formulario
	 * @param int $id_usuario 
	 * @return array
	 */
	function buscaDatos($id_usuario) {
        $instancia_datos = new UsuarioModel();
		$result = $instancia_datos->buscaUsuario($id_usuario);

		return $result;
	}

	/**
	 * Función para almacenar la información de los usuarios creados en la base de datos
	 * @return void
	 */
	function creaUsuario() {

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$documento = $_POST['documento'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];

		$instancia_crea = new UsuarioModel();
		$result = $instancia_crea->crea($nombre, $apellido, $documento, $correo, $telefono);

		if ($result == 'ok') {
			header("location:../View/usuarios.php");
		}
	}

	/**
	 * Función para actualizar la información de los usuarios
	 * @return void
	 */
    function actualizaUsuario() {

		$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$documento = $_POST['documento'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];
		$id = $_POST['id'];

		$instancia_actualiza = new UsuarioModel();
		$result = $instancia_actualiza->actualiza($nombre, $apellido, $documento, $correo, $telefono, $id);

		if ($result == 'ok') {
			header("location:../View/usuarios.php");
		}		
	}
}

if (isset($_POST['btn_usuario_crea'])) {
	$crea = new UsuarioController();
	$crea->creaUsuario();
}

if (isset($_POST['btn_usuario_act'])) {
	$actualiza = new UsuarioController();
	$actualiza->actualizaUsuario();
}
?>
