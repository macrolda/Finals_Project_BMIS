<?php
require('fpdf17/fpdf.php');
include_once("../config.php");

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

//$data_resident = "SELECT  res_lastName, res_firstName, res_middleName FROM resident_info";
//$result_resident = $conn -> query($data_resident);

session_start();
$res_lastName = $_SESSION['res_lastName'];
$res_firstName = $_SESSION['res_firstaName'];
$res_middleName = $_SESSION['res_middleName'];
$currentDate = date("F d, Y");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();

$pdf->Image('logo_1.png',80,6,-400);
$pdf->Image('logo_2.png',180,6,-400);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,'Republic of the Philippines',0,1,'C');

$pdf->SetFont('Arial','',14);
$pdf->Cell(0,5,"Province of Cebu City",0,2,'C');
$pdf->Cell(0,5,"City of Talisay",0,3,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,"Barangay Tabunok",0,4,'C');

$pdf->SetFont('Arial','B',30);
$pdf->Cell(0,5,'',0,5,'C');
$pdf->Cell(0,5,'',0,6,'C');
$pdf->Cell(0,5,'',0,7,'C');
$pdf->Cell(0,5,'Certificate of Residency',0,8,'C');

$pdf->SetFont('Arial','',16);
$pdf->Cell(0,5,'',0,9,'C');
$pdf->Cell(0,5,'',0,10,'C');
$pdf->Cell(0,5,'',0,11,'C');
$pdf->Cell(0,5,'This is to certify that,' .$res_firstName. " ".$res_middleName." " .$res_lastName.' that is of legal age,',0,12,'C');
$pdf->Cell(0,5,'',5,13,'C');

$pdf->SetFont('Arial','',16);
$pdf->Cell(0,5,'married, Filipino Citizen, whose specimen signature appears below is a PERMANENT RESIDENT',0,14,'C');
$pdf->Cell(0,5,'',5,15,'C');

$pdf->Cell(0,5,'of this Barangay Tabunok, Talisay City, Cebu.',0,16,'C');
$pdf->Cell(0,5,'',5,17,'C');

$pdf->Cell(0,5,'',0,18,'C');
$pdf->Cell(0,5,'Based on records of this office, he/she has been residing at Barangay Tabunok, Talisay City, Cebu.',0,19,'C');
$pdf->Cell(0,5,'',5,20,'C');

$pdf->Cell(0,5,'',0,21,'C');
$pdf->Cell(0,5,'This CERTIFICATION is being issued upon the request of the above-named person of',0,22,'C');
$pdf->Cell(0,5,'',5,23,'C');
$pdf->Cell(0,5,'whatever legal purpose it may serve.',0,24,'C');
$pdf->Cell(0,5,'',5,25,'C');

$pdf->Cell(0,5,'Issued this '.$currentDate. 'at Barangay Tabunok, Talisay City, Cebu.',5,27,'C');

$pdf->Cell(0,5,'',5,28,'C');
$pdf->Cell(0,5,'',5,29,'C');
$pdf->Cell(0,5,'',5,30,'C');
$pdf->Cell(0,5,'',5,31,'C');

$pdf->Cell(0,5,'captain',0,32,'R');
$pdf->Cell(0,5,'______________________________',0,33,'R');
$pdf->Cell(0,5,' Punong Barangay              ',0,34,'R');

$pdf->Cell(0,5,'________________________',0,33,'L');
$pdf->Cell(0,5,'        Specimen Signature',0,34,'L');

$pdf->Output();
?>