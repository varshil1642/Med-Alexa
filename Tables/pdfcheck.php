<?php
$server= "localhost";
$username = "root";
$password = "";
$db = "medalexa";

$con = mysqli_connect($server,$username,$password,$db);

$jsonString = file_get_contents("php://input");
$object = json_decode($jsonString, true);

// require_once('TCPDF/tcpdf.php');
require("fpdf/fpdf.php");

// Extend the TCPDF class to create custom Header and Footer
class PDF extends FPDF {
    //Page header
    function Header() {
        $this->SetY(9);
        $this->SetFont('helvetica', 'B', 20);
        $this->Cell(0, 15, 'Prescription', 1, false, 'C', 0, '', 1, false, 'M', 'M');
    }
    
    // Page footer
    function Footer() {
        $this->SetY(-30); 
        $this->SetFont('times', '', 15);
        $this->Cell(0,10,"-----Get Well Soon-----",0,0,'C');
        $this->Ln(10);
        $this->SetFont('times','',12);
        $this->SetFillColor(224,235,255);
        $this->Cell(100,8,'Email : team.medalexa@gmail.com',1,0,'C',1);
        $this->SetX(109);
        $this->Cell(90,8,'Phone : 8469756025',1,1,'C',1);
        $this->SetFont('times', '', 11);
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'R', 0, '', 0, false, 'T', 'M');
    }
}

// create new PDF document
// $pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf=new FPDF();
// $pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Team Med-Alexa');
$pdf->SetTitle('medalexa');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');


// set margins
// $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
// $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
// $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
// $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// add a page
$pdf->AddPage();

$pt_id = "PTer98";
$dr_id = "DRer23";
$dname = "Karna Modasiya";
$pname =  "Random Person";
$date = date('m/d/y h:i:s a',time());
$age = "34";
$gender = "Male";
$email = "karanmodasiya24@gmail.com";
// set some text to print

$pdf->SetFont('times','',12);
$pdf->SetX(120);
$pdf->Cell(70,5,'Prescription Date : '.$date.'',0,0);
$pdf->Ln(20);
$pdf->SetX(20);
$pdf->Cell(150,5,'Doctor ID     :   '.$dr_id.'',0,0);
$pdf->SetX(100);
$pdf->Cell(150,5,'Doctor Name    :   '.$dname.'',0,0);
$pdf->Ln(10);
$pdf->SetX(20);
$pdf->Cell(150,5,'Patient ID     :   '.$pt_id.'',0,0);
$pdf->SetX(100);
$pdf->Cell(150,5,'Patient Name    :   '.$pname.'',0,0);
// $pdf->Ln(10);
// $pdf->SetX(20);
// $pdf->Cell(150,5,'Patient Age   :   '.$age.'',0,0);
// $pdf->SetX(100);
// $pdf->Cell(150,5,'Patient Gender  :   '.$gender.'',0,0);
// $pdf->Ln(10);

// $pdf->SetFont('times','B',15);
// $pdf->Cell(0,10,"Prescription",0,0,'C');
$pdf->Ln(10);

$pdf->SetFont('times','B',10);
$pdf->SetX(19);
$pdf->SetFillColor(224,235,255);
$pdf->Cell(30,10,'Sr No. ',1,0,'C',1);
$pdf->Cell(80,10,'Medicine Name',1,0,'C',1);
$pdf->Cell(30,10,'Quantity ',1,0,'C',1);
$pdf->Cell(30,10,'Dosage ',1,0,'C',1);
$pdf->Ln(15);
$pdf->SetFillColor(255,255,255);

$i= 1;
while($i!=15)
{    
    $pdf->SetFont('times','',12);
    $pdf->SetX(19);
    $pdf->Cell(30,5,''.$i.'',0,0,'C',1);
    $pdf->Cell(80,5,'Comboflame',0,0,'C',1);
    $pdf->Cell(30,5,'5',0,0,'C',1);
    $pdf->Cell(30,5,' 1 1 1 ',0,0,'C',1);
    $i++;
    $pdf->Ln(8);
}


$pdf->Output('example_001.pdf', 'I');
