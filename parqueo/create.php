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
                    <h2 class="mb-3">Creación de Espacios</h2>

                    <div class="col-md-6">


                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">LLene todos los campos</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Nro Espacio</label>
                                        <input type="number" class="form-control" id="nro_espacio">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Estado del Espacio</label>
                                        <select name="" id="estado_espacio" class="form-control">
                                            <option value="LIBRE">LIBRE</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="">Observaciones</label>
                                        <textarea name="" id="observaciones" cols="30" rows="5" class="form-control"></textarea>
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

        var nro_espacio = $('#nro_espacio').val();
        var estado_espacio = $('#estado_espacio').val();
        var observaciones = $('#observaciones').val();
        
        if(nro_espacio == ""){
            alert('Debe llenar el campo Nro de Espacio');
            $('#nro_espacio').focus();
        } else {
            var url = 'controller_create_parqueo.php';
            $.get(url, {nro_espacio: nro_espacio, estado_espacio: estado_espacio, observaciones: observaciones}, function(datos) {
                $('#respuesta').html(datos)
            });
        };

    });



</script>