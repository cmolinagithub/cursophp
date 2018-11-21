<?php

require('fpdf/fpdf.php');
require('conexion.php');
class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}

function Header()
{

	$this->SetFont('Arial','',10);
	$this->Text(20,14,'Historial clinico',0,'C', 0);
	$this->Ln(30);
}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','B',8);
	$this->Cell(100,10,'Historial medico',0,0,'L');

}

}

	$paciente= $_GET['id'];
	
	$con = new Conexion;
	$conectar = $con->con();	
	
	$strConsulta = "SELECT * from pacientes where id_paciente =  '$paciente'";
	
	$pacientes = $conectar->query($strConsulta);
	
	$fila = $pacientes->fetch_array();

	$pdf=new PDF('L','mm','Letter');
	$pdf->Open();
	$pdf->AddPage();
	$pdf->SetMargins(20,20,20);
	$pdf->Ln(10);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,6,'Clave: '.$fila['clave'],0,1);
	$pdf->Cell(0,6,'Nombre: '.$fila['nombre'].' '.$fila['apellido_paterno'].' '.$fila['apellido_materno'],0,1);
	$pdf->Cell(0,6,'Sexo: '.$fila['sexo'],0,1); 
	$pdf->Cell(0,6,'Domicilio: '.$fila['domicilio'],0,1); 
	
	$pdf->Ln(10);
	
	$pdf->SetWidths(array(65, 60, 55, 50, 20));
	$pdf->SetFont('Arial','B',10);
	$pdf->SetFillColor(85,107,47);
    $pdf->SetTextColor(255);

		for($i=0;$i<1;$i++)
			{
				$pdf->Row(array('FECHA', 'MEDICO', 'CONSULTORIO', 'DIAGNOSTICO'));
			}
	
	$strConsulta = "SELECT consultas_medicas.fecha_consulta, consultas_medicas.consultorio, consultas_medicas.diagnostico, medicos.nombre_medico 
	FROM consultas_medicas 
	Inner Join pacientes ON consultas_medicas.id_paciente = pacientes.id_paciente 
	Inner Join medicos ON consultas_medicas.id_medico = medicos.id_medico
	WHERE pacientes.id_paciente = '$paciente'";
	
	$historial = $conectar->query($strConsulta);
	$numfilas = $historial->num_rows;
	
	for ($i=0; $i<$numfilas; $i++)
		{
			$fila = $historial->fetch_array();
			$pdf->SetFont('Arial','',10);
			
			if($i%2 == 1)
			{
				$pdf->SetFillColor(153,255,153);
    			$pdf->SetTextColor(0);
				$pdf->Row(array($fila['fecha_consulta'], $fila['nombre_medico'], $fila['consultorio'], $fila['diagnostico']));
			}
			else
			{
				$pdf->SetFillColor(102,204,51);
    			$pdf->SetTextColor(0);
				$pdf->Row(array($fila['fecha_consulta'], $fila['nombre_medico'], $fila['consultorio'], $fila['diagnostico']));
			}
		}

$pdf->Output();
?>