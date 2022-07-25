
<?php
//llamar libreria
require('fpdf182/fpdf.php');
//crear objeto
$pdf = new FPDF();
//añadir obj a libreria
$pdf->AddPage();
//añadir fuente 
$pdf->SetFont('Times','',17);
//crear contenido
$pdf->Cell(50,70,'Este es mi primer pdf');
//dar salida al documento
$pdf->OutPut();
?>
