<?php

include ('../app/config.php');

$id = $_GET['id'];
date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_rol SET fyh_eliminacion = '$fechaHora', estado = '0' WHERE id_rol = '$id'");


if($sentencia->execute()){
    ?>
    
    <div class="alert alert-success" role="alert">
        Eliminación correcta
    </div>
    <script>location.href = "index.php";</script>
    
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error al actualizar
    </div>
<?php
};

?>