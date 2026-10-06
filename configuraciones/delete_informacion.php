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
                    <h2 class="mb-3">Eliminar la información</h2>

                    <div class="col-md-12">


                        <div class="card card-outline card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Una vez eliminado, no se puede deshacer el cambio.</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                    </button>
                                </div>
                            </div>

                            <?php
                            $id_info = $_GET['id'];
                            $query_informaciones = $pdo->prepare("SELECT * FROM tb_informaciones WHERE estado = 1 AND id_informacion = '$id_info'");
                            $query_informaciones->execute();
                            $informaciones = $query_informaciones->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($informaciones as $informacion) {
                            }

                            ?>


                            <div class="card-body">

                                <div class="row">
                                    <div class="col-md-5">
                                        <label for=""">Nombre del parqueo <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="nombre" value="<?php echo $informacion['nombre_parqueo']; ?>" disabled>
                                        <input type="text" class="form-control" id="id_informacion" value="<?php echo $informacion['id_informacion']; ?>" hidden>
                                    </div>
                                    <div class="col-md-5">
                                        <label for=""">Actividad de la empresa <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="actividad" value="<?php echo $informacion['actividad_empresa']; ?>" disabled>
                                    </div>
                                    <div class="col-md-2">
                                        <label for=""">Sucursal <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="sucursal" value="<?php echo $informacion['sucursal']; ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for=""">Dirección <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="direccion" value="<?php echo $informacion['direccion']; ?>" disabled>
                                    </div>
                                    <div class="col-md-6">
                                        <label for=""">Zona <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="zona" value="<?php echo $informacion['zona']; ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""">Teléfono <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="telefono" value="<?php echo $informacion['telefono']; ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""">Ciudad <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="ciudad" value="<?php echo $informacion['ciudad']; ?>" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label for=""">País <span style=" color: red;">*</span></label>
                                        <input type="text" class="form-control" id="pais" value="<?php echo $informacion['pais']; ?>" disabled>
                                    </div>

                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <a href="informacion.php" class="btn btn-default w-100">Cancelar</a>
                                    </div>
                                    <div class="col-md-6" id="btn_guardar">
                                        <button class="btn btn-danger w-100">
                                            Eliminar
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

        var id_informacion = $('#id_informacion').val();

        var url = 'controller_delete_informacion.php';
        $.get(url, {
            id_informacion: id_informacion,
        }, function(datos) {
            $('#respuesta').html(datos)
        });

    });
</script>