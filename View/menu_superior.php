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
<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <h4 class="dropdown-toggle"> <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></h4>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="actualiza_datos.php"><i class="fa fa-user fa-fw"></i> Actualizar datos</a></li>
            <li><a href="actualiza_pass.php"><i class="fa fa-gear fa-fw"></i> Actualizar contraseña</a></li>
            <li class="divider"></li>
            <li><a href="destruir_sesion.php"><i class="fa fa-sign-out fa-fw"></i>Salir</a></li>
        </ul>
    </li>
</ul>