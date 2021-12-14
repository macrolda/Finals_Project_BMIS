<?php
require('fpdf17/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->Cell(0,5,'',0,1,'C');
$pdf->Cell(0,5,'',0,2,'C');
$pdf->Cell(0,5,'',0,3,'C');
$pdf->Cell(0,5,'',0,4,'C');
$pdf->Image('logo_1.png',40,25,-400);
$pdf->Image('logo_2.png',140,25,-400);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,'Republic of the Philippines',0,5,'C');

$pdf->SetFont('Arial','',14);
$pdf->Cell(0,5,"Province of Cebu City",0,6,'C');
$pdf->Cell(0,5,"City of Talisay",0,7,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,"Barangay Tabunok",0,8,'C');

$pdf->SetFont('Arial','B',24);
$pdf->Cell(0,5,'',0,9,'C');
$pdf->Cell(0,5,'',0,10,'C');
$pdf->Cell(0,5,'',0,11,'C');
$pdf->Cell(0,5,'',0,12,'C');
$pdf->Cell(0,5,'',0,13,'C');
$pdf->Cell(0,5,'Barangay Clearance',0,14,'C');

$pdf->SetFont('Arial','',14);
$pdf->Cell(0,5,'',0,15,'C');
$pdf->Cell(0,5,'',0,16,'C');
$pdf->Cell(0,5,'',0,17,'C');
$pdf->Cell(0,5,'',0,18,'C');
$pdf->Cell(0,5,'This is to certify .$firstName .$middleName .$lastName that is of legal age,',0,19,'C');
$pdf->Cell(0,5,'',0,20,'C');
$pdf->Cell(0,5,'Filipino and a bonafied resident of Barangay Tabunok and that has no derogatory',0,21,'C');
$pdf->Cell(0,5,'',0,22,'C');
$pdf->Cell(0,5,'records in the Barangay prior to the date of issuance of this certificate',0,23,'C');

$pdf->Cell(0,5,'',0,24,'C');
$pdf->Cell(0,5,'',0,25,'C');
$pdf->Cell(0,5,'This certificate is issued in his/her request for: ',0,26,'C');
$pdf->Cell(0,5,'',0,27,'C');
$pdf->Cell(0,5,'',0,28,'C');
$pdf->Cell(0,5,'.$purpose',0,29,'C');
$pdf->Cell(0,5,'',0,30,'C');
$pdf->Cell(0,5,'Issued this .$currentDate',0,31,'C');
$pdf->Cell(0,5,'',0,32,'C');
$pdf->Cell(0,5,'',0,33,'C');

$pdf->Cell(0,5,'',5,34,'C');
$pdf->Cell(0,5,'',5,35,'C');
$pdf->Cell(0,5,'',5,36,'C');
$pdf->Cell(0,5,'',5,37,'C');

$pdf->Cell(0,5,'.$AdminFirstName .$AdminMiddleName .$AdminLastName',0,38,'R');
$pdf->Cell(0,5,'______________________________',0,39,'R');
$pdf->Cell(0,5,' Punong Barangay              ',0,40,'R');

$pdf->Cell(0,5,'________________________',0,39,'L');
$pdf->Cell(0,5,'              Signature',0,40,'L');

$pdf->Cell(0,5,'',5,41,'C');
$pdf->Cell(0,5,'',5,42,'C');
$pdf->Cell(0,5,'',5,43,'C');
$pdf->Cell(0,5,'',5,44,'C');

$pdf->Cell(0,5,'OR Number: .$inputORNum',5,41,'L');
$pdf->Cell(0,5,'',5,44,'C');
$pdf->Cell(0,5,'OR Date Issued: .$inputORDate',5,42,'L');
$pdf->Cell(0,5,'',5,44,'C');
$pdf->Cell(0,5,'Cedulla Number: .$inputCedullaNum',5,43,'L');
$pdf->Cell(0,5,'',5,44,'C');
$pdf->Cell(0,5,'Cedulla Date Issued: .$inputCedullaDate',5,44,'L');

$pdf->Output();
?>