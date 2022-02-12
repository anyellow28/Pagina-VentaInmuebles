<?php
require 'fpdf/fpdf.php';

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    //$this->Image('logo.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',10);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(30,10,'Reporte de Departamentos',0,0,'C');
    // Salto de línea
    $this->Ln(10);
    $this->Cell(30,10,'Distrito',1,0,'C',0);
    $this->Cell(25,10,'Habitaciones',1,0,'C',0);
    $this->Cell(25,10,'Direccion',1,0,'C',0);
    $this->Cell(25,10,'Precio',1,0,'C',0);
    $this->Cell(40,10,'Regalos',1,0,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
require 'database.php';
error_reporting(0);
$stmt = $dbh->prepare("select * from departamentos");
$stmt->execute();
// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',10);
$departamentos = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($departamentos as $row) {

    $pdf->cell(30,10,$row['distrito'],1,0,'C',0);
    $pdf->cell(25,10,$row['numhab'],1,0,'C',0);
    $pdf->cell(25,10,$row['direccion'],1,0,'C',0);
    $pdf->cell(25,10,$row['precio'],1,0,'C',0);
    $pdf->cell(40,10,$row['numregalo'],1,1,'C',0);
}
$pdf->Output();
?>
