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
                    <h2>Creación de un Nuevo Rol</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="card" style="border: 1px solid #606060;">
                                    <div class="card-header" style="background-color: #007bff; color: #ffffff;">
                                        <h4>Datos del Nuevo Rol</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="">Nombre del Rol</label>
                                            <input type="text" class="form-control" id="nombres">
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
        
        if(nombres == ""){
            alert('Debe llenar el campo Nombres');
            $('#nombres').focus();
        } else {
            var url = 'controller_create_rol.php';
            $.get(url, {nombres: nombres}, function(datos) {
                $('#respuesta').html(datos)
            });
        };

    });



</script>