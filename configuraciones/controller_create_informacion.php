<?php

include ('../app/config.php');

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

$sentencia = $pdo->prepare("INSERT INTO tb_informaciones (nombre_parqueo, actividad_empresa, sucursal, direccion, zona, telefono, ciudad, pais, fyh_creacion, estado) VALUES (:nombre, :actividad, :sucursal, :direccion, :zona, :telefono, :ciudad, :pais, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre',$nombre);
$sentencia->bindParam('actividad',$actividad);
$sentencia->bindParam('sucursal',$sucursal);
$sentencia->bindParam('direccion',$direccion);
$sentencia->bindParam('zona',$zona);
$sentencia->bindParam('telefono',$telefono);
$sentencia->bindParam('ciudad',$ciudad);
$sentencia->bindParam('pais',$pais);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_registro);

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