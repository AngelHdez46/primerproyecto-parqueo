<?php
include('../app/config.php');
include('../layout/admin/datos_usuario.php');

$id = $_GET['id'];

$query_usuario = $pdo->prepare("SELECT * FROM tb_rol WHERE id_rol = '$id' AND estado = '1'");
$query_usuario->execute();
$usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                    
foreach($usuarios as $usuario){
   //sólo está de adorno, porque sino, no muestra ningun valor
}

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
                    <h2>Eliminar Rol</h2>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="col-md-12">
                                    <div class="card card-danger" style="border: 1px solid #777777;">
                                        <div class="card-header">
                                            <h3 class="card-title">¿Está seguro de eliminar este rol?</h3>

                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">ID del Rol</label>
                                                <input type="text" class="form-control" id="id" value="<?php echo $usuario['id_rol']; ?>" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Nombre del Rol</label>
                                                <input type="text" class="form-control" id="nombres" value="<?php echo $usuario['nombre']; ?>" disabled>
                                            </div>
                                            <br>
                                            <button type="button" class="btn btn-danger" id="btn_eliminar">Eliminar</button>
                                            <a href="index.php" class="btn btn-default">Cancelar</a>
                                            <br>
                                            <br>
                                            <div id="respuesta"></div>

                                        </div>
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
    $('#btn_eliminar').click(function() {

        var id = $('#id').val();

        var url = 'controller_delete_rol.php';
        $.get(url, {id: id}, function(datos) {
        $('#respuesta').html(datos)
        });

    });



</script>