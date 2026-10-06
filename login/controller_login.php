<?php

include ('../app/config.php');

session_start();

$usuario_user = $_POST['usuario'];
$contrasena_user = $_POST['contrasena'];

$email_tabla = "";
$contrasena_tabla = "";

$query_login = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$usuario_user' AND contrasena = '$contrasena_user' AND estado = 1");
$query_login->execute();
$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);

foreach($usuarios as $usuario){
    $nombres = $usuario['nombres'];
    $email_tabla = $usuario['email'];
    $contrasena_tabla = $usuario['contrasena'];
}

if(($usuario_user==$email_tabla) && ($contrasena_user == $contrasena_tabla)){
?>
    <div class="alert alert-success" role="alert">
        Usuario Correcto
    </div>
    <script>location.href = "principal.php";</script>
<?php 

    $_SESSION['usuario_sesion'] = $email_tabla;


}else{
?>
    <div class="alert alert-danger" role="alert">
        Error en los datos
    </div>
    <script>$('#contrasena').val(""); $('#contrasena').focus();</script>
<?php
}
?>