<?php

session_start();

if ($_SESSION['nombre'] == "") {
    header("location:../index.php");
}
?>