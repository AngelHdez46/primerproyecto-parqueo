<?php
require('../app/templeates/fpdf19/fpdf.php');
include ('../app/config.php');

$query_informaciones = $pdo->prepare("SELECT * FROM tb_informaciones WHERE estado = 1");
$query_informaciones->execute();
$informaciones = $query_informaciones->fetchAll(PDO::FETCH_ASSOC);
                    
foreach($informaciones as $informacion){
}

$query_tickets = $pdo->prepare("SELECT * FROM tb_tickets WHERE estado = 1");
$query_tickets->execute();
$tickets = $query_tickets->fetchAll(PDO::FETCH_ASSOC);
                    
foreach($tickets as $ticket){
}

// Configuración de tamaño para Ticket Térmico: 80mm de ancho x 80mm de alto
$pdf = new FPDF('P', 'mm', array(80, 80));

// Título de la pestaña/visor
$pdf->SetTitle(iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'Ticket de Parqueo'));

// Ajustamos márgenes (Izquierda, Arriba, Derecha)
$pdf->SetMargins(4, 3, 4);

// DESACTIVAR salto de página automático para evitar que se cree una segunda hoja
$pdf->SetAutoPageBreak(false);

$pdf->AddPage();

// --- ENCABEZADO (Interlineado ajustado a 3.5mm) ---
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['nombre_parqueo']), 0, 1, 'C');

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['actividad_empresa']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'SUCURSAL Nro. '.$informacion['sucursal']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['direccion']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['zona']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'TELÉFONO: '.$informacion['telefono']), 0, 1, 'C');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $informacion['ciudad'].', '.$informacion['pais']), 0, 1, 'C');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 2.5, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', '------------------------------------------------------------------------------------------------------------------------'), 0, 1, 'C');

// --- DATOS DEL CLIENTE ---
$pdf->SetFont('Arial', 'B', 7.5);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'Datos del Cliente'), 0, 1, 'L');

// Línea 1: SEÑOR(A)
$pdf->SetFont('Arial', 'B', 7);
$pdf->Write(4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'SEÑOR(A): ')); // Negrita
$pdf->SetFont('Arial', '', 7);
$pdf->Write(4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $ticket['nombre_cliente'])); // Normal
$pdf->Ln(3); // Salto a la siguiente línea

// Línea 2: RFC
$pdf->SetFont('Arial', 'B', 7);
$pdf->Write(4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'RFC: ')); // Negrita
$pdf->SetFont('Arial', '', 7);
$pdf->Write(4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $ticket['nit_ci'])); // Normal
$pdf->Ln(3); // Salto a la siguiente línea

// Línea 3: Placa
$pdf->SetFont('Arial', 'B', 7);
$pdf->Write(4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'PLACA: ')); // Negrita
$pdf->SetFont('Arial', '', 7);
$pdf->Write(4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', $ticket['placa_auto'])); // Normal
$pdf->Ln(3); // Salto a la siguiente línea

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', '------------------------------------------------------------------------------------------------------------------------'), 0, 1, 'C');

// --- DETALLES DEL PARQUEO ---
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'CUVICULO DE PARQUEO: ' . $ticket['cuviculo']), 0, 1, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'FECHA DE INGRESO: ' . $ticket['fecha_ingreso']), 0, 1, 'L');
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'HORA DE INGRESO: ' . $ticket['hora_ingreso']), 0, 1, 'L');

$pdf->SetFont('Arial', '', 5);
$pdf->Cell(0, 3, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', '------------------------------------------------------------------------------------------------------------------------'), 0, 1, 'C');

// --- PIE DE TICKET ---
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(0, 4, iconv('UTF-8', 'ISO-8859-1//TRANSLIT', 'USUARIO: '.$ticket['user_sesion']), 0, 1, 'L');

$pdf->Output('I', 'Ticket_Parqueo.pdf');
?>