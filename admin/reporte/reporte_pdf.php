<?php
require('fpdf/fpdf.php');

class PDF extends FPDF {
	// Page header
	function Header() {
		    // Logo
		    //$this->Image('../../assets/img/logotipo.png',10,5,25);
		    // Arial bold 15
		    $this->SetFont('Arial','B',15);
		    // Move to the right
		    $this->Cell(80);
		    // Title
		    $this->Cell(120,10,'REPORTE DE LA FICHA - SISTEMA  EGRESADO ITSAE',0,0,'C');
		    // Line break
		    $this->Ln(20);
		}

		// Pie de pagina
		function Footer()
		{
		    // Position at 1.5 cm from bottom
		    $this->SetY(-15);
		    // Arial italic 8
		    $this->SetFont('Arial','I',8);
		    // Page number
		    $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
		}
   }
   

   //Realizando proceso para capturar los Datos de para presentar en la hoja de PDF.
   require_once('../clases/conexion.php');

   //Consulta la tabla datos_generales a la Base de Datos. 
   $reportar_ficha = $pdo->prepare("SELECT * FROM datos_generales");
   $reportar_ficha->execute();


	$pdf = new PDF();
	$pdf->AddPage('L');
	$pdf->SetFont('Arial','',10);

    //Capturando los datos de cada de la tabla a la base de Datos.
    if ($reportar_ficha->rowCount()>=1) {
    	while($fila = $reportar_ficha->fetch()){
    		$pdf->Cell(20, 5, $fila['dni'], 1,0, 'C', 0);
    		$pdf->Cell(25, 5, $fila['nombres'], 1,0, 'C', 0);  
    		$pdf->Cell(25, 5, $fila['apellidos'], 1,0, 'C', 0);
    		$pdf->Cell(25, 5, $fila['fecha_nacimiento'], 1,0, 'C', 0); 
    		$pdf->Cell(25, 5, $fila['nacionalidad'], 1,0, 'C', 0);
    		$pdf->Cell(25, 5, $fila['nacionalidad'], 1,0, 'C', 0);    		

    	}
    }




	$pdf->Output();


?>