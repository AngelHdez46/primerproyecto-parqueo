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
                    <h2 class="mb-3">Listado de Espacios de Vehiculos</h2>

                    <div class="col-md-6">

                        <table class="table table-bordered table-sm table-striped">
                            <th>
                                <center>Nro</center>
                            </th>
                            <th>Nro Espacio</th>
                            <th>
                                <center>Acciones</center>
                            </th>

                            <?php
                            $contador = 0;
                            $query_mapeo = $pdo->prepare("SELECT * FROM tb_mapeos WHERE estado = 1");
                            $query_mapeo->execute();
                            $mapeos = $query_mapeo->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($mapeos as $mapeo) {
                                $contador = $contador + 1;
                            ?>
                                <tr>
                                    <td>
                                        <center><?php echo $contador; ?></center>
                                    </td>
                                    <td><?php echo $mapeo['nro_espacio']; ?></td>
                                    <td>
                                        <center>
                                            <a href="update.php?id=<?php echo $mapeo['id_map']; ?>" class="btn btn-success">Editar</a>
                                            <a href="delete.php?id=<?php echo $mapeo['id_map']; ?>" class="btn btn-danger">Borrar</a>
                                        </center>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>

                        </table>

                    </div>

                </div>
            </div>
        </main>

        <?php include("../layout/admin/footer.php"); ?>

    </div>

    <?php include("../layout/admin/scripts.php"); ?>

</body>

</html>