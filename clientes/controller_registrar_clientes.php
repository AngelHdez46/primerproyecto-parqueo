<?php

include ('../app/config.php');

$placa = $_GET['placa'];
$placa = strtoupper($placa); //convierte a mayusculas
$nombre = $_GET['nombre'];
$nit = $_GET['nit'];
$nit = strtoupper($nit); //convierte a mayusculas

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO tb_clientes (nombre_cliente, nit_ci, placa_auto, fyh_creacion, estado) VALUES (:nombre_cliente, :nit_ci, :placa_auto, :fyh_creacion, :estado)");

$sentencia->bindParam('nombre_cliente',$nombre);
$sentencia->bindParam('nit_ci',$nit);
$sentencia->bindParam('placa_auto',$placa);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_registro);

if($sentencia->execute()){
    ?>
    <div class="alert alert-success" role="alert">
        Registro satisfactorio
    </div>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error en el registro
    </div>
<?php
};

?>