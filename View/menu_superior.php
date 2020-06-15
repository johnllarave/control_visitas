<?php

session_start();

if ($_SESSION['nombre'] == "") {
    header("location:../index.php");
}
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="inicio.php">GESTION DE VISITAS</a>
</div>