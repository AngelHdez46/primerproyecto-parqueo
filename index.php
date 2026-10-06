<?php
include 'app/config.php';




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="public/imagenes/logo.png">
    <title>Sistema de Parqueo</title>
    <!--- Referencia a Bootstrap CSS --->
    <link href="./public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-image: url('public/imagenes/piso.jpg'); 
              background-repeat: no-repeat;
              z-index: -3;
              background-size: 100vw 100vh;  
  ">
    <nav class="navbar navbar-expand-lg" style="background-color: #1f116d;" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="public/imagenes/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                SISPARQUEO
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">SOBRE NOSOTROS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PROMOCIONES
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">MENSUALES</a></li>
                            <li><a class="dropdown-item" href="#">DÍAS</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">FICHAS</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">CONTACTANOS</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                </form>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ingresar
                </button>
            </div>
        </div>
    </nav>

    <div class="container">
        <br>
        <div class="row">
            <?php
            $contador = 0;
            $query_mapeo = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = 1");
            $query_mapeo->execute();
            $mapeos = $query_mapeo->fetchAll(PDO::FETCH_ASSOC);

            foreach ($mapeos as $mapeo) {
                if ($mapeo['estado_espacio'] == "LIBRE") {
            ?>
                    <div class="col">
                        <center>
                            <h2><?php echo $mapeo['id_map'];  ?></h2>
                            <button class="btn btn-success" style="width: 100%; height: 145px;">
                                <p><?php echo $mapeo['estado_espacio']; ?></p>
                            </button>

                        </center>
                    </div>

                <?php
                }

                if ($mapeo['estado_espacio'] == "OCUPADO") {
                ?>
                    <div class="col">
                        <center>
                            <h2><?php echo $mapeo['id_map'];  ?></h2>
                            <button class="btn btn-info"><img src="<?php echo $URL ?>/public/imagenes/carro.png" width="60px" alt=""></button>
                            <p><?php echo $mapeo['estado_espacio']; ?></p>
                        </center>
                    </div>

            <?php
                }
            }
            ?>

        </div>

    </div>













    <!-- Referencia a JS en ese orden funcionan bien 
    <script src="./public/js/jquery-4.0.0.slim.min.js"></script> No funciona bien el SLIM con AJAX -->
    <script src="./public/js/jquery-4.0.0.min.js"></script>
    <script src="./public/js/popper.min.js"></script>
    <script src="./public/js/bootstrap.min.js"></script>

</body>

</html>





<!-- Modal Inicio -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Inicio de Sesión</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Usuario/Email</label>
                            <input type="email" class="form-control" id="usuario">
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena">
                            </div>
                        </div>
                    </div>
                </div>

                <!--Respuesta del Controller_login -->
                <div id="respuesta"> </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="btn_ingresar">Ingresar</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        $('#btn_ingresar').click(function() {
            login();
        });

        $('#contrasena').keypress(function(e) {
            if (e.which == 13) {
                login();
            }
        });

        function login() {
            var usuario = $('#usuario').val();
            var contrasena = $('#contrasena').val();

            if (usuario == "") {
                alert('Debe introducir su usuario.')
                $('#usuario').focus();
            } else if (contrasena == "") {
                alert('Debe introducir su contraseña.')
                $('#contrasena').focus();
            } else {
                var url = 'login/controller_login.php';
                $.post(url, {
                    usuario: usuario,
                    contrasena: contrasena
                }, function(datos) {
                    $('#respuesta').html(datos)
                });
            }
        }
    </script>