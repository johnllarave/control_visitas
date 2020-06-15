<ul class="nav" id="side-menu">
    <br>
    <li>
        <a href="inicio.php"><i class="fa fa-home"></i>Inicio</a>
    </li>
    <?php
        //Condicion para que el administrador pueda crear usuarios
        if ($_SESSION['id_rol'] == '1') {
    ?>
            <li>
                <a href="usuarios.php"><i class="fa fa-user-plus"></i> Usuarios</a>
            </li>
    <?php
        }

        if ($_SESSION['id_rol'] == '2') {
    ?>
            <li>
                <a href="usuarios.php"><i class="fa fa-user-plus"></i> Usuarios</a>
            </li>
    <?php
        }
    ?>
    <li>
        <a href="clientes.php"><i class="fa fa-comments"></i> Clientes</a>
    </li>
    
    <li>
        <a href="form_visitas.php"><i class="fa fa-file-text-o"></i> Visitas</a>
    </li>
    
    <li>
        <a href="visitas.php"><i class="fa fa-file-excel-o"></i> Reportes</a>
    </li>
</ul>