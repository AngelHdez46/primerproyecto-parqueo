<?php

include ('../app/config.php');

$id = $_GET['id_informacion'];
$nombre = $_GET['nombre'];
$actividad = $_GET['actividad'];
$sucursal = $_GET['sucursal'];
$direccion = $_GET['direccion'];
$zona = $_GET['zona'];
$telefono = $_GET['telefono'];
$ciudad = $_GET['ciudad'];
$pais = $_GET['pais'];

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("UPDATE tb_informaciones SET nombre_parqueo = '$nombre', actividad_empresa = '$actividad', sucursal = '$sucursal', direccion = '$direccion', zona = '$zona', telefono = '$telefono', ciudad = '$ciudad', pais = '$pais', fyh_actualizacion = '$fechaHora' WHERE id_informacion = '$id'");

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