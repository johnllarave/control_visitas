<?php

//include '../Model/config.php';

session_start();

$_SESSION['documento'];
$_SESSION['nombre'];
$_SESSION['apellido'];
$_SESSION['correo'];

session_destroy();
session_unset();

if ($_SESSION['nombre'] == "") {
    header("location:../index.php");
}

if ($_SESSION['nombre']) {
    session_destroy();
    header("location:../index.php");
}

?>