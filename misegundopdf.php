<?php

//llamar libreria
require('fpdf182/fpdf.php');

class PDF extends FPDF{
    //cabecera de la pag
    function header(){
        //logo
        $this->Image('img.jpg',10,8,25);
        //fuente
        $this->SetFont('Times','',12);
        //Movernos a la derecha
        $this->Cell(200,30,'Mi segundo pdf ',0,0,'C');
		//Salto de línea
		$this->Ln(19);
    }
    //Pie de pag
    function footer(){
        //Posicionamos a 1,5 cm del final
		$this->SetY(-18);
		//Arial italic 8
		$this->SetFont('Arial','I',8);
		//Número de página
		$this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
}

//Creación del objeto de la clase heredada
$pdf = new PDF();
//Alias para el numero de las páginas
$pdf->AliasNbPages();
//Añade Página
$pdf->AddPage();
//Establece la fuente
$pdf->SetFont('Times','',12);
//Imprimir celdas
for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo linea de numero '.$i,0,1);
//Salida de la página
$pdf->Output();

?>