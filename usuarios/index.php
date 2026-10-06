<?php
include ('../app/config.php');
include ('../layout/admin/datos_usuario.php');
?>

<!doctype html>
<html lang="es">
  <head>
	<?php include ("../layout/admin/head.php");?>
  </head>

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    
    <div class="app-wrapper">
      
		<?php include ("../layout/admin/navbar.php");?>
      
      <main class="app-main">
        <br>
		<div class="container-fluid p-5">
            <div class="row">
                <h2 class="mb-3">Listado de usuarios</h2>
                <table class="table table-bordered table-sm table-striped">
                    <th><center>Nro</center></th>
                    <th>Nombre de Usuarios</th>
                    <th>Correo</th>
                    <th><center>Acciones</center></th>

                    <?php 
                    $contador = 0;
                    $query_usuario = $pdo->prepare("SELECT * FROM tb_usuarios WHERE estado = 1");
                    $query_usuario->execute();
                    $usuarios = $query_usuario->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($usuarios as $usuario){
                        $contador = $contador + 1;
                    ?>
                    <tr>
                        <td><center><?php echo $contador; ?></center></td>
                        <td><?php echo $usuario['nombres']; ?></td>
                        <td><?php echo $usuario['email']; ?></td>
                        <td>
                            <center>
                            <a href="update.php?id=<?php echo $usuario['id']; ?>" class="btn btn-success">Editar</a>
                            <a href="delete.php?id=<?php echo $usuario['id']; ?>" class="btn btn-danger">Borrar</a>
                            </center>
                        </td>
                    </tr>                 
                    <?php 
                    } 
                    ?>

                </table>
            </div>
        </div>
      </main>

	  <?php include ("../layout/admin/footer.php");?>
      
    </div>

	<?php include ("../layout/admin/scripts.php");?>
    
  </body>
</html>