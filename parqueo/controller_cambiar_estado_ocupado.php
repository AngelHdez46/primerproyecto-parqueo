<?php

include ('../app/config.php');

$cuviculo = $_GET['cuviculo'];

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_mapeos SET estado_espacio = 'OCUPADO', fyh_actualizacion = '$fechaHora' WHERE nro_espacio = '$cuviculo'");


if($sentencia->execute()){
    ?>
    <div class="alert alert-success" role="alert">
        Actualización correcta
    </div>
<!--<script>location.href = "index.php";</script> -->
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error al actualizar
    </div>
<?php
};

?>