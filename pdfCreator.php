<?php

include "fpdf181/fpdf.php";

$name = $_POST['name'];
$vorname = $_POST['vorname'];
$zip = $_POST['zip'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


$pdf->Cell(40,10,$name,0, 1);
$pdf->Cell(40,10,$vorname, 0,2);
$pdf->Cell(40,10,$zip,0);

$pdf->Output();