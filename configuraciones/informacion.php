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
                <h2 class="mb-3">Listado de Informaciones</h2>
                
                <div class="row">
                    <div class="col-sm-4">
                        <a href="create_informacion.php" class="btn btn-primary mb-3">Registrar nuevo</a>
                    </div>
                </div>
                
                <table class="table table-bordered table-sm table-striped">
                    <th><center>Nro</center></th>
                    <th>Nombre del Parqueo</th>
                    <th>Empresa</th>
                    <th>Sucursal</th>
                    <th>Dirección</th>
                    <th>Zona</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>País</th>
                    <th><center>Acciones</center></th>

                    <?php 
                    $contador = 0;
                    $query_informaciones = $pdo->prepare("SELECT * FROM tb_informaciones WHERE estado = 1");
                    $query_informaciones->execute();
                    $informaciones = $query_informaciones->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach($informaciones as $informacion){
                        $contador = $contador + 1;
                    ?>
                    <tr>
                        <td><center><?php echo $contador; ?></center></td>
                        <td><?php echo $informacion['nombre_parqueo']; ?></td>
                        <td><?php echo $informacion['actividad_empresa']; ?></td>
                        <td><?php echo $informacion['sucursal']; ?></td>
                        <td><?php echo $informacion['direccion']; ?></td>
                        <td><?php echo $informacion['zona']; ?></td>
                        <td><?php echo $informacion['telefono']; ?></td>
                        <td><?php echo $informacion['ciudad']; ?></td>
                        <td><?php echo $informacion['pais']; ?></td>
                        <td>
                            <center>
                            <a href="update_informacion.php?id=<?php echo $informacion['id_informacion']; ?>" class="btn btn-success">Editar</a>
                            <a href="delete_informacion.php?id=<?php echo $informacion['id_informacion']; ?>" class="btn btn-danger">Borrar</a>
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