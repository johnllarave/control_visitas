<?php
$token = $_GET['token'];
$correo = $_GET['correo'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cambio contraseña</title>

        <!--<link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/metisMenu.css" rel="stylesheet">
        <link href="css/sb-admin-2.css" rel="stylesheet">
        <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet">

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/metisMenu.js"></script>
        <script src="js/sb-admin-2.js"></script>
        <script src="js/jquery.validate.js"></script>

        <script>
            $().ready(function () {
                $("#valida_datos").validate({
                    rules: {
                        pass: {
                            required: true,
                            minlength: 6
                        },

                        pass_val: {
                            required: true,
                            equalTo: "#pass"
                        }
                    },
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default text-center loginscreen fadeInDown">
                        <div class="panel-heading">
                            <h2>Cambio de contraseña</h2>
                        </div>
                        <div class="panel-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>