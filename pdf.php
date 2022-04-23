<?php

require"conexion.php";
$conexion = conexion();

$id=$_GET['id'];



$sql = "SELECT nombre, Apaterno, Amaterno, curso, fechaI, fechaF, division FROM registros WHERE id='$id'";
$result = $conexion->query($sql);

require"fpdf/fpdf.php";

class PDF extends FPDF
{


  function Header()
  {
 
  $this->Image('img/logo1.png',150,15,25);
  
  $this->SetY(60);
  $this->SetX(100);
  $this->SetFont('Arial','B',15);
  

$this->Cell(5,8, "UNIVERSIDAD TECNOLOGICA FIDEL VELAZQUES",0, 1, "C");
$this->SetY(80);
$this->SetX(100);
$this->SetFont('Arial','B',12);


$this->Cell(5,10, "REGISTRO DE CURSO",0, 1, "C");
  $this->SetTextColor(270, 130, 14 );
 
  
 
  $this->Ln(30);

  }
  
  function Footer()
  {
       $this->SetFont('helvetica', 'B', 8);
          $this->SetY(-15);
          $this->Cell(95,5,utf8_decode('Página ').$this->PageNo().' / {nb}',0,0,'L');
          $this->Cell(95,5,date('d/m/Y | g:i:a') ,00,1,'R');
          $this->Line(10,287,200,287);
          $this->Cell(0,5,utf8_decode("UNIVERSIDAD TECNOLOGICA FIDEL VELAZQUES."),0,0,"C");
          
  }
  


  
  }
  




  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();
  $pdf->SetAutoPageBreak(true, 20);
  $pdf->SetTopMargin(500);
  $pdf->SetLeftMargin(10);
  $pdf->SetRightMargin(10);
  $pdf->SetX(15);
  $pdf->SetFillColor(210,57,57);
  $pdf->SetDrawColor(255, 255, 255);



$pdf->Ln(10);

$pdf->SetFont("Arial", "B", 9);

$pdf->Cell(20,5, "NOMBRE",1, 0, "C");
$pdf->Cell(20,5, "A.PATERNO",1, 0, "C");
$pdf->Cell(30,5, "A.MATERNO",1, 0, "C");
$pdf->Cell(20,5, "CURSO",1, 0, "C");
$pdf->Cell(30,5, "FECHA.I",1, 0, "C");
$pdf->Cell(20,5, "FECHA.F",1, 0, "C");
$pdf->Cell(30,5, "DIVISION",1, 1, "C");



$pdf->SetFont("Arial", "", 10);

while ($row = $result->fetch_assoc()){

$pdf->Cell(20,5, $row['nombre'],1, 0, "C");
$pdf->Cell(20,5, $row['Apaterno'],1, 0, "C");

$pdf->Cell(30,5, $row['Amaterno'],1, 0, "C");
$pdf->Cell(20,5, $row['curso'],1, 0, "C");
$pdf->Cell(30,5, $row['fechaI'],1, 0, "C");
$pdf->Cell(20,5, $row['fechaF'],1, 0, "C");
$pdf->Cell(30,5, $row['division'],1, 1, "C");


}





$pdf->Output();

?>

