<?php

session_start();
if (isset($_SESSION['usuario_sesion'])) {
    $usuario_sesion = $_SESSION['usuario_sesion'];

    $query_usuario_session = $pdo->prepare("SELECT * FROM tb_usuarios WHERE email = '$usuario_sesion' AND estado = 1");
    $query_usuario_session->execute();
    $session_usuarios = $query_usuario_session->fetchAll(PDO::FETCH_ASSOC);

    foreach ($session_usuarios as $usuario_loggeado){
    }

    $nombre_usuario_sesion = $usuario_loggeado['nombres'];
    $rol_usuario_sesion = $usuario_loggeado['rol'];
    $fyh_registro_usuario_sesion = $usuario_loggeado['fyh_creacion'];
} else {
    header("Location: " . $URL . "/");
};

?>