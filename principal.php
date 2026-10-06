<?php
include('app/config.php');
include('layout/admin/datos_usuario.php');

?>

<!doctype html>
<html lang="es">

<head>
    <?php include("layout/admin/head.php"); ?>
    <script src="<?php echo $URL; ?>/public/js/jquery-4.0.0.min.js" crossorigin="anonymous"></script>
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

        <?php include("layout/admin/navbar.php"); ?>

        <main class="app-main">
            <!-- ========== Aquí es donde va todo el nuevo contenido ========== -->

            <div class="container-fluid p-5">
                <div class="row">
                    <h2 class="mb-3">Bienvenido al Sistema de Parqueo</h2>

                    <div class="col-md-12">

                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Mapeo actual del parqueo</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
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
                                                    <button type="button" class="btn btn-success" style="width: 100%; height: 145px;" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $mapeo['id_map']; ?>">
                                                        <p><?php echo $mapeo['estado_espacio']; ?></p>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal<?php echo $mapeo['id_map']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ingreso del Vehiculo</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <!-- Fila 1: Placa + Botón Buscar -->
                                                                    <div class="mb-3 row align-items-center">
                                                                        <label for="placa" class="col-sm-3 col-form-label">Placa:</label>
                                                                        <div class="col-sm-6 col-8">
                                                                            <input type="text" class="form-control" id="placa<?php echo $mapeo['id_map']; ?>" style="text-transform: uppercase;">
                                                                        </div>
                                                                        <div class="col-sm-3 col-4">
                                                                            <button class="btn btn-primary w-100" id="btn_buscar_cliente<?php echo $mapeo['id_map']; ?>" type="button"><i class="bi bi-search"></i> Buscar</button>
                                                                            <script>
                                                                                $('#btn_buscar_cliente<?php echo $mapeo['id_map']; ?>').click(function() {
                                                                                    var placa = $('#placa<?php echo $mapeo['id_map']; ?>').val();

                                                                                    if (placa == "") {
                                                                                        alert('Debe llenar el campo Placa');
                                                                                        $('#placa<?php echo $mapeo['id_map']; ?>').focus();
                                                                                    } else {
                                                                                        var url = 'clientes/controller_busqueda_cliente.php';
                                                                                        $.get(url, {
                                                                                            placa: placa
                                                                                        }, function(datos) {
                                                                                            $('#respuesta_buscar_cliente<?php echo $mapeo['id_map']; ?>').html(datos)
                                                                                        });
                                                                                    };

                                                                                });
                                                                            </script>

                                                                        </div>
                                                                    </div>

                                                                    <div id="respuesta_buscar_cliente<?php echo $mapeo['id_map']; ?>"></div>


                                                                    <!-- Fila 4: Fecha de ingreso -->
                                                                    <div class="mb-3 row align-items-center">
                                                                        <label for="NIT" class="col-sm-4 col-form-label">Fecha de ingreso: </label>
                                                                        <div class="col-sm-8">
                                                                            <?php
                                                                            date_default_timezone_set("America/Cancun");
                                                                            $dia = date("d");
                                                                            $mes = date("m");
                                                                            $anio = date("Y");
                                                                            ?>
                                                                            <input type="date" class="form-control" id="fecha_ingreso" value="<?php echo $anio . "-" . $mes . "-" . $dia; ?>">
                                                                        </div>
                                                                    </div>

                                                                    <!-- Fila 4: Hora de ingreso -->
                                                                    <div class="mb-3 row align-items-center">
                                                                        <label for="NIT" class="col-sm-4 col-form-label">Hora de ingreso: </label>
                                                                        <div class="col-sm-8">
                                                                            <?php
                                                                            date_default_timezone_set("America/Cancun");
                                                                            $minutos = date("i");
                                                                            $horas = date("H");
                                                                            ?>
                                                                            <input type="time" class="form-control" id="hora_ingreso" value="<?php echo $horas . ":" . $minutos; ?>">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                                                    <button type="button" class="btn btn-primary">Imprimir Ticket</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

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
                        </div>
                    </div>
                </div>
            </div>



        </main>

        <?php include("layout/admin/footer.php"); ?>
    </div>
    <?php include("layout/admin/scripts.php"); ?>
</body>

</html>