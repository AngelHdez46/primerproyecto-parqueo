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
                    <h2 class="mb-3">Asignación de Roles a Usuarios</h2>

                    <div class="col-md-12">


                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Asignar Rol</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse" aria-label="Collapse card">
                                        <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                        <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">

                                <table class="table table-bordered table-sm table-striped">
                                    <th>
                                        <center>Nro</center>
                                    </th>
                                    <th>Nombre de Usuarios</th>
                                    <th>Correo</th>
                                    <th>
                                        <center>Acciones</center>
                                    </th>

                                    <?php
                                    $contador = 0;
                                    $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE estado = 1");
                                    $query_usuario->execute();
                                    $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($usuarios as $usuario) {
                                        $contador = $contador + 1;
                                    ?>
                                        <tr>
                                            <td>
                                                <center><?php echo $contador; ?></center>
                                            </td>
                                            <td><?php echo $usuario['nombres']; ?></td>
                                            <td><?php echo $usuario['email']; ?></td>
                                            <td>
                                                <?php 
                                                if($usuario['rol'] == ""){
                                                ?>
                                                <center>
                                                    <!-- <a href="update.php?id=<?php  //echo $usuario['id']; ?>" class="btn btn-success">Asignar</a> -->
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $usuario['id']; ?>">
                                                        Asignar
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal<?php echo $usuario['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Asignar Rol</h1>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="controller_asignar.php" method="post">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mb-3">
                                                                                    <label for="">Nombre del usuario</label>
                                                                                    <input type="text" class="form-control" value="<?php echo $usuario['nombres']; ?>" name="nombre">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mb-3">
                                                                                    <label for="">Correo</label>
                                                                                    <input type="text" class="form-control"  value="<?php echo $usuario['email']; ?>" name="email">
                                                                                    <input type="text" class="form-control"  value="<?php echo $usuario['id']; ?>" name="id" hidden>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mb-3">
                                                                                    <label for="">Roles</label>
                                                                                    
                                                                                    <select name="rol" id="" class="form-control">
                                                                                        <?php 

                                                                                        $query_roles = $pdo->prepare("SELECT * FROM tb_rol WHERE estado = 1");
                                                                                        $query_roles->execute();
                                                                                        $roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);

                                                                                        foreach ($roles as $rol) {
                                                                                        ?>

                                                                                        <option value="<?php echo $rol['nombre']; ?>"><?php echo $rol['nombre']; ?></option>

                                                                                        <?php
                                                                                        }
                                                                                         ?>
                                                                                    </select>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-primary">Asignar</button>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </center>


                                                <?php
                                                }else{
                                                ?>
                                                    <center><?php echo $usuario['rol']; ?></center>
                                                <?php
                                                }
                                                ?>
                                                
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>

                                </table>
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


