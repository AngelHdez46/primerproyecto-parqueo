<?php

include ('../app/config.php');

$id = $_GET['id_informacion'];

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_informaciones SET estado = 0, fyh_eliminacion = '$fechaHora' WHERE id_informacion = '$id'");

if($sentencia->execute()){
    ?>
    <div class="alert alert-success" role="alert">
        Registro satisfactorio
    </div>
    <script>location.href = "informacion.php";</script>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error en el registro
    </div>
<?php
};

?>