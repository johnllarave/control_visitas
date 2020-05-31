<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Inicio</title>

        <!--<link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <link href="css/bootstrap.css" rel="stylesheet">   
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">
        <head>

        <body>
            <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <?php include'menu_superior.php';?>
                div class="navbar-default sidebar" role="navigation">
                     <div class="sidebar-nav navbar-collapse"> 
                        <?php include'menu_lateral.php';?>  
                     </div>

                 </div>
             /nav>
             <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1> SISTEMA PARA LA GESTION DE VISITAS</h1>
                        <div class="page-header" ></div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <h1 >Bienvenido <?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></h1>
                </div>
            </div>
        </div>
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/metisMenu.js"></script>
        <script src="js/sb-admin-2.js"></script>
        <script src="js/plugins/toastr/toastr.min.js"></script>

        <script>
            $(document).ready(function() {
                setTimeout(function() {
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 10000
                    };
                    toastr.success('Desarrollado por:<br>• John Alexander Llarave Herrán<br>• Cristian Camilo Vega Gómez<br>• Juan Manuel Parra Navarrete', 'Sistema control de visitas');
                }, 100);
            });
        </script>
    </body>
</html>

