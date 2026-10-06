<?php

include ('../app/config.php');

$nombres = $_GET['nombres'];
$email = $_GET['email'];
$contrasena = $_GET['contrasena'];

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO tb_usuarios (nombres, email, contrasena, fyh_creacion, estado) VALUES (:nombres, :email, :contrasena, :fyh_creacion, :estado)");

$sentencia->bindParam('nombres',$nombres);
$sentencia->bindParam('email',$email);
$sentencia->bindParam('contrasena',$contrasena);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_registro);

if($sentencia->execute()){
    ?>
    <div class="alert alert-success" role="alert">
        Registro satisfactorio
    </div>
    <script>location.href = "../roles/asignar.php";</script>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Error en el registro
    </div>
<?php
};

?>