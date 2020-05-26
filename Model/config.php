<?php

session_start();
error_reporting(0);

class Config {

	private $host;
	private $user;
	private $pass;
	private $bd;

	function __construct() {
		//Parametros de conexión al servidor de base de datos
		//Estos datos son de conexión a base de datos local local
		$this->host = "localhost";
		$this->user = "root";
		$this->pass = "";
		$this->bd = "control_visitas";
	}

	public function conexion() {
		$parametros = mysqli_connect($this->host, $this->user, $this->pass, $this->bd) or die(mysqli_connect_errno() . PHP_EOL);

		return $parametros;
	}

	public function fecha() {
		//mustra la hora real, es este caso esta la hora de Bogotá, Colombia
		$fecha = new DateTime("now", new DateTimeZone('America/Bogota'));
		$dato = $fecha->format('Y-m-d H:i:s');

		//retorna la fecha y hora de la función
		return $dato;
	}
}
//Url del proyecto para el envío de correo
$url_aplicacion = "http://localhost:8080/";

?>