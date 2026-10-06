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
            <div class="container-fluid p-5">
                <div class="row">
                    <h2 class="mb-3">Creación de una nueva información</h2>

                    <div class="col-md-12">


                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Registre los datos con mucho cuidado</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for=""">Nombre del parqueo <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="nombre">
                                    </div>
                                    <div class="col-md-5">
                                        <label for=""">Actividad de la empresa <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="actividad">
                                    </div>
                                    <div class="col-md-2">
                                        <label for=""">Sucursal <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="sucursal">
                                    </div>
                                    <div class="col-md-6">
                                        <label for=""">Dirección <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="direccion">
                                    </div>
                                    <div class="col-md-6">
                                        <label for=""">Zona <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="zona">
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""">Teléfono <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="telefono">
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""">Ciudad <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="ciudad">
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""">País <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="pais">
                                    </div>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="" class="btn btn-default w-100">Cancelar</a>
                                    </div>
                                    <div class="col-md-6" id="btn_guardar">
                                        <button class="btn btn-primary w-100">
                                            Registrar
                                        </button>
                                    </div>
                                </div>

                                <div id="respuesta"></div>

                            </div>
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

        var nombre = $('#nombre').val();
        var actividad = $('#actividad').val();
        var sucursal = $('#sucursal').val();
        var direccion = $('#direccion').val();
        var zona = $('#zona').val();
        var telefono = $('#telefono').val();
        var ciudad = $('#ciudad').val();
        var pais = $('#pais').val();

        if (nombre == "") {
            alert('Debe llenar el campo Nombre del parqueo');
            $('#nombre').focus();
        } else if (actividad == "") {
            alert('Debe llenar el campo Actividad del parqueo');
            $('#actividad').focus();
        } else if (sucursal == "") {
            alert('Debe llenar el campo Sucursal');
            $('#sucursal').focus();
        } else if (direccion == "") {
            alert('Debe llenar el campo Dirección');
            $('#direccion').focus();
        } else if (zona == "") {
            alert('Debe llenar el campo Zona');
            $('#zona').focus();
        } else if (telefono == "") {
            alert('Debe llenar el campo Teléfono');
            $('#telefono').focus();
        } else if (ciudad == "") {
            alert('Debe llenar el campo Ciudad');
            $('#ciudad').focus();
        } else if (pais == "") {
            alert('Debe llenar el campo País');
            $('#pais').focus();
        } else {
            var url = 'controller_create_informacion.php';
            $.get(url, {
                nombre: nombre,
                actividad: actividad,
                sucursal: sucursal,
                direccion: direccion,
                zona: zona,
                telefono: telefono,
                ciudad: ciudad,
                pais: pais
            }, function(datos) {
                $('#respuesta').html(datos)
            });
        };

    });
</script>