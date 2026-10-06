<?php

include ('../app/config.php');

$nro_espacio = $_GET['nro_espacio'];
$estado_espacio = $_GET['estado_espacio'];
$observaciones = $_GET['observaciones'];

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO tb_mapeos (nro_espacio, estado_espacio, observacion, fyh_creacion, estado) VALUES (:nro_espacio, :estado_espacio, :observaciones, :fyh_creacion, :estado)");

$sentencia->bindParam('nro_espacio',$nro_espacio);
$sentencia->bindParam('estado_espacio',$estado_espacio);
$sentencia->bindParam('observaciones',$observaciones);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_registro);

if($sentencia->execute()){
    ?>
    <div class="alert alert-success" role="alert">
        Registro satisfactorio
    </div>
    <script>location.href = "mapeo_de_vehiculos.php";</script>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error en el registro
    </div>
<?php
};

?>