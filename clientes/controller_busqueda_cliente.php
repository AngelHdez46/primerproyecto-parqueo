<?php

include ('../app/config.php');

$placa = $_GET['placa'];
$id_mapa = $_GET['id_mapa'];
$placa = strtoupper($placa); //convierte a mayusculas

$id_cliente = "";
$nombre_cliente = "";
$nit_ci = "";

date_default_timezone_set("America/Cancun");
$fechaHora = date("Y-m-d h:i:s");

$query_buscar = $pdo->prepare("SELECT * FROM tb_clientes WHERE placa_auto = '$placa' AND estado = '1'");
$query_buscar->execute();
$buscarclientes = $query_buscar->fetchAll(PDO::FETCH_ASSOC);

foreach($buscarclientes as $cliente){
    $id_cliente = $cliente['id_cliente'];
    $nombre_cliente = $cliente['nombre_cliente'];
    $nit_ci = $cliente['nit_ci'];
} 

//aqui si es necesario declarar las variables y asignarlas dentro del foreach
//por si no encuentra nada, da error

if($nombre_cliente == ""){
   // echo "El cliente es nuevo";

    ?>
    <!-- Fila 2: Nombre -->
    <div class="mb-3 row align-items-center">
        <label for="" class="col-sm-3 col-form-label">Nombre: <span><b style="color: red;">*</b></span></label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nombre<?php echo $id_mapa; ?>" value="">
        </div>
    </div>

    <!-- Fila 3: NIT/CI -->
    <div class="mb-3 row align-items-center">
        <label for="" class="col-sm-3 col-form-label">NIT/CI: <span><b style="color: red;">*</b></span></label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nit<?php echo $id_mapa; ?>" value="">
        </div>
    </div>

<?php
}else{
    //echo $id_cliente."-".$nombre_cliente."-".$nit_ci;
    ?>
    <!-- Fila 2: Nombre -->
    <div class="mb-3 row align-items-center">
        <label for="" class="col-sm-3 col-form-label">Nombre: <span><b style="color: red;">*</b></span></label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nombre<?php echo $id_mapa; ?>" value="<?php echo $nombre_cliente; ?>">
        </div>
    </div>

    <!-- Fila 3: NIT/CI -->
    <div class="mb-3 row align-items-center">
        <label for="" class="col-sm-3 col-form-label">NIT/CI: <span><b style="color: red;">*</b></span></label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="nit<?php echo $id_mapa; ?>" value="<?php echo $nit_ci; ?>">
        </div>
    </div>

<?php
}

?>