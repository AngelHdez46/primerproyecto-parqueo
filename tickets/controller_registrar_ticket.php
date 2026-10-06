<?php

include ('../app/config.php');

$placa = $_GET['placa'];
$nombre = $_GET['nombre'];
$nit = $_GET['nit'];
$fecha_ingreso = $_GET['fecha_ingreso'];
$hora_ingreso = $_GET['hora_ingreso'];
$cuviculo = $_GET['cuviculo'];
$user_sesion = $_GET['user_sesion'];

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO tb_tickets (nombre_cliente, nit_ci, cuviculo, fecha_ingreso, hora_ingreso, user_sesion, fyh_creacion, estado) VALUES (:nombre, :nit, :cuviculo, :fecha_ingreso, :hora_ingreso, :user_sesion, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre',$nombre);
$sentencia->bindParam('nit',$nit);
$sentencia->bindParam('cuviculo',$cuviculo);
$sentencia->bindParam('fecha_ingreso',$fecha_ingreso);
$sentencia->bindParam('hora_ingreso',$hora_ingreso);
$sentencia->bindParam('user_sesion',$user_sesion);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_registro);

if($sentencia->execute()){
    ?>
    <div class="alert alert-success" role="alert">
        Registro satisfactorio
    </div>
    <script>location.href = "principal.php";</script>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error en el registro
    </div>
<?php
};

?>