<?php
require('../app/templeates/fpdf19/fpdf.php');
include ('../app/config.php');

$query_informaciones = $pdo->prepare("SELECT * FROM tb_informaciones WHERE estado = 1");
 $query_informaciones->execute();
$informaciones = $query_informaciones->fetchAll(PDO::FETCH_ASSOC);
                    
foreach($informaciones as $informacion){
}


$valor_prueba = "ANGEL HERNANDEZ";
$valor_prueba2 = "HERA021004";

// Tamaño personalizado: 80mm de ancho x 150mm de alto
$pdf = new FPDF('P', 'mm', array(80, 100));

// Ajustamos los márgenes para aprovechar el espacio del ticket
$pdf->SetMargins(4, 4, 4);
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['nombre_parqueo']), 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['actividad_empresa']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'SUCURSAL Nro. '.$informacion['sucursal']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['direccion']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['zona']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'TELÉFONO: '.$informacion['telefono']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['ciudad'].', '.$informacion['pais']), 0, 1, 'C');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', '------------------------------------------------------------------------------------------------------------------------'), 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'Datos del Cliente'), 0, 1, 'L');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'SEÑOR(A): '.$valor_prueba), 0, 1, 'L');
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'RFC: '.$valor_prueba2), 0, 1, 'L');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', '------------------------------------------------------------------------------------------------------------------------'), 0, 1, 'C');

date_default_timezone_set("America/Cancun");
$fecha = date("Y-m-d");
$hora = date("h:i:s");
$CUVICULO = 16;

$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'CUVICULO DE PARQUEO: ' . $CUVICULO), 0, 1, 'L');
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'FECHA DE INGRESO: ' . $fecha), 0, 1, 'L');
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'HORA DE INGRESO: ' . $hora), 0, 1, 'L');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', '------------------------------------------------------------------------------------------------------------------------'), 0, 1, 'C');

$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'USUARIO: '.$valor_prueba), 0, 1, 'L');

$pdf->Output('I', 'Ticket_Parqueo.pdf');
?>