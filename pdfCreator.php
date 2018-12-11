<?php
session_start();
include "fpdf181/fpdf.php";
include "loginUser.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);

$pdf->Image("logo/logo.png","180", "5", "25", "25", "PNG");
$pdf->Cell(40,10,utf8_decode("Sehr geehrte/r Frau/Herr ") . utf8_decode($LDAP_LastName) . ",",0, 1);
$pdf->Cell(40,10,utf8_decode("mit diesem Schreiben erhalten Sie Ihre angeforderten personenbezogenen Daten, "),0, 2);
$pdf->Cell(40,10,utf8_decode("die auf unserem System gespeichert sind. Falls Sie die Daten löschen wollen, "),0, 3);
$pdf->Cell(40,10,utf8_decode("gehen Sie bitte einen Schritt zurück und klicken Sie auf den Button \"Daten löschen!\"."),0, 4);
$pdf->Cell(40,10,"",0, 5);

$pdf->Cell(40,10,"Anzeigename: " . utf8_decode($LDAP_cn),0, 6);
$pdf->Cell(40,10,"Benutzername: " . utf8_decode($LDAP_LastName),0, 7);
$pdf->Cell(40,10,"Nachname: " . utf8_decode($LDAP_LastName),0, 8);
$pdf->Cell(40,10,"Vorname: " . utf8_decode($LDAP_FirstName),0, 9);
$pdf->Cell(40,10,"Beschreibung: " . utf8_decode($LDAP_description),0, 10);
$pdf->Cell(40,10,utf8_decode("Büro: ") . utf8_decode($LDAP_physicaldeliveryofficename),0, 11);
$pdf->Cell(40,10,"Rufnummer: " . utf8_decode($LDAP_telephonenumber),0, 12);
$pdf->Cell(40,10,"E-Mail: " . utf8_decode($LDAP_mail),0, 13);
$pdf->Cell(40,10,"Webseite: " . utf8_decode($LDAP_wwwhomepage),0, 14);
$pdf->Cell(40,10,"Adresse: " . utf8_decode($LDAP_streetaddress . ", " . $LDAP_postalcode . " " .  $LDAP_city . ", " . $LDAP_region . ", " . $LDAP_country),0, 15);
$pdf->Cell(40,10,"Postfach: " . utf8_decode($LDAP_postofficebox),0, 16);
$pdf->Cell(40,10,"Position: " . utf8_decode($LDAP_title),0, 17);
$pdf->Cell(40,10,"Abteilung: " . utf8_decode($LDAP_department),0, 18);
$pdf->Cell(40,10,"Firma: " . utf8_decode($LDAP_company),0, 19);

$pdf->Output();