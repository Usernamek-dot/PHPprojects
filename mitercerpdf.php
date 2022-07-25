<?php
require('fpdf182/fpdf.php');

require('conexion.php');
$consulta = "select * from tblcliente ";
$resultado = $conexion->query($consulta);

class PDF extends FPDF{
    // Cabecera de página
function Header()
{
    // Logo
    $this->Image('img.jpg',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    //colores
    $this->SetFillColor(230,230,0);
    $this->SetTextColor(220,50,50);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(140,10,'Imprimiendo datos de una bd en formato pdf',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

function Footer()
{
    // Posición a 1,5 cm del final
    $this->SetY(-15);
    // Arial itálica 8
    $this->SetFont('Arial','I',8);
    // Color del texto en gris
    $this->SetTextColor(128);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página').$this->PageNo(),0,0,'C');
}
   

}

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',8);
while($fila = $resultado->fetch_assoc()){
    $pdf->Cell(19,10,$fila['docid'],1,0,'C',0);
    $pdf->Cell(19,10,$fila['nombres'],1,0,'C',0);
    $pdf->Cell(19,10,$fila['apellidos'],1,0,'C',0);
    $pdf->Cell(19,10,$fila['telefono'],1,0,'C',0);
    $pdf->Cell(27,10,$fila['direccion'],1,0,'C',0);
    $pdf->Cell(27,10,$fila['email'],1,1,'C',0);
}

$pdf->Output();

?>