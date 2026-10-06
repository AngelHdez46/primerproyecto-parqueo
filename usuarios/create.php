<?php
include('../app/config.php');
include('../layout/admin/datos_usuario.php');
?>

<!doctype html>
<html lang="es">

<head>
    <?php include("../layout/admin/head.php"); ?>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">

    <div class="app-wrapper">

        <?php include("../layout/admin/navbar.php"); ?>

        <main class="app-main">
            <br>
            <div class="container">
                <div class="row">
                    <h2>Creación de un nuevo usuario</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="card" style="border: 1px solid #606060;">
                                    <div class="card-header" style="background-color: #007bff; color: #ffffff;">
                                        <h4>Nuevo Usuario</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" id="nombres">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Correo</label>
                                            <input type="email" class="form-control" id="email">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="text" class="form-control" id="contrasena">
                                        </div>
                                        <br>
                                        <button type="button" class="btn btn-primary" id="btn_guardar">Guardar</button>
                                        <a href="index.php" class="btn btn-default">Cancelar</a>
                                        <br>
                                        <br>
                                        <div id="respuesta"></div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <?php include("../layout/admin/footer.php"); ?>

    </div>

    <?php include("../layout/admin/scripts.php"); ?>

</body>

</html>


<script>
    $('#btn_guardar').click(function() {

        var nombres = $('#nombres').val();
        var email = $('#email').val();
        var contrasena  = $('#contrasena').val();
        
        if(nombres == ""){
            alert('Debe llenar el campo Nombres');
            $('#nombres').focus();
        } else if (email == "") {
            alert('Debe llenar el campo Correo');
            $('#email').focus();
        } else if (contrasena == "") {
            alert('Debe llenar el campo Contraseña');
            $('#contrasena').focus();
        } else {
            var url = 'controller_create.php';
            $.get(url, {nombres: nombres,email: email, contrasena: contrasena}, function(datos) {
                $('#respuesta').html(datos)
            });
        };

    });



</script>