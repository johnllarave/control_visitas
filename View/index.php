<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        <!--<link rel="icon" href="img/favicon.ico" type="image/x-icon">-->
        <link href="view/css/bootstrap.css" rel="stylesheet">
        <link href="view/css/metisMenu.css" rel="stylesheet">
        <link href="view/css/sb-admin-2.css" rel="stylesheet">
        <link href="view/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="view/css/style.css" rel="stylesheet">

        <script src="view/js/jquery.js"></script>
        <script src="view/js/bootstrap.js"></script>
        <script src="view/js/metisMenu.js"></script>
        <script src="view/js/sb-admin-2.js"></script>
        <script src="view/js/jquery.validate.js"></script>

        <script>
            $().ready(function () {
                $("#valida_datos").validate({
                    rules: {
                        user: {
                            required: true
                        },

                        pass: {
                            required: true
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
                            <h2>Inicio de sesión</h2>
                        </div>
                        <div class="panel-body">
                            <form action="Controller/LoginController.php" method="POST" id="valida_datos">
                                <div class="form-group">
                                    <label for="usuario"></label>
                                    <input type="text" class="form-control" name="user" id="user" placeholder="Usuario" required autofocus>

                                    <label for="password"></label>
                                    <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña" required>
                                </div>

                                <input type="submit" name="btn_login" class="btn btn btn-success btn-block" value="Ingresar">
                                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#olvido_pass">¿Olvido su contraseña?</button>
                            </form>

                            <!-- Modal Olvido contraseña-->
                            <div class="modal fade" id="olvido_pass" role="dialog">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12"><br>
                                                    <form action="View/envio_correo.php" method="POST" >
                                                        <div class="form-group">
                                                            <label >Ingrese su Correo</label>
                                                            <input class="form-control" name="correo" id="correo" required >
                                                        </div>
                                                        <input type="submit" class="btn btn-success" value="Enviar" >
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>