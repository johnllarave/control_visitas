<?php

require_once ("./Model/ActualizaDatosModel.php");

/**
 * Clase para actualziar los datos
 */
class ActualizaDatosController {

	/**
	 * Funcion para validar los datos antes de actualizarlos
	 * @return Array
	 */
	function validaDatos() {
        $instancia_datos = new ActualizaDatosModel();
		$result = $instancia_datos->datos();
		$row = $result->fetch_array();

		return $row;
	}

	/**
	 * Funcion para actualizar los datos
	 * @return void
	 */
	function actualizaDatos($nombre, $apellido, $correo, $telefono) {

		/*$nombre = $_POST['nombre'];
		$apellido = $_POST['apellido'];
		$correo = $_POST['correo'];
		$telefono = $_POST['telefono'];*/

		$instancia_actualiza = new ActualizaDatosModel();
		$result = $instancia_actualiza->actualza($nombre, $apellido, $correo, $telefono);

		//if ($result == 'ok') {
			//header("location:../View/actualiza_datos.php?success");
			return $result;
		//}
	}
}

if (isset($_POST['btn_act_datos'])) {
	$actualza = new ActualizaDatosController();
	$actualza->actualizaDatos();
}

?>