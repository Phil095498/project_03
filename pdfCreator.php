<?php
session_start();
include "fpdf181/fpdf.php";
include "loginUser.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

$pdf->Cell(40,10,"Anzeigename: " . $LDAP_cn,0, 1);
$pdf->Cell(40,10,"Benutzername: " . $LDAP_LastName,0, 2);
$pdf->Cell(40,10,"Nachname: " . $LDAP_LastName,0, 3);
$pdf->Cell(40,10,"Vorname: " . $LDAP_FirstName,0, 4);
$pdf->Cell(40,10,"Beschreibung: " . $LDAP_description,0, 5);
$pdf->Cell(40,10,"Büro: " . $LDAP_LastName,0, 6);
$pdf->Cell(40,10,"Rufnummer: " . $LDAP_LastName,0, 7);
$pdf->Cell(40,10,"E-Mail: " . $LDAP_LastName,0, 8);
$pdf->Cell(40,10,"Webseite: " . $LDAP_LastName,0, 9);
$pdf->Cell(40,10,"Adresse: " . $LDAP_LastName,0, 10);
$pdf->Cell(40,10,"Position: " . $LDAP_LastName,0, 11);
$pdf->Cell(40,10,"Abteilung: " . $LDAP_LastName,0, 12);
$pdf->Cell(40,10,"Firma: " . $LDAP_LastName,0, 13);

$pdf->Output();