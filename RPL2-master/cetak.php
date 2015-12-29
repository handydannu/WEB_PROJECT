<?php 
$no="";
include "includes/koneksi.php";
include "print/fpdf.php";
	
	class PDF extends FPDF
	{
	//Page header
	function Header()
	{
    //Arial bold 15
    $this->SetFont('Arial','B',16);
	$this->Cell(80);
    //Title
    $this->Cell(30,10,'Cetak Kartu',1,0,'C');
    //Line break
    $this->Ln(20);
	}
	
	function Footer()
	// Position at 1.5 cm from bottom
	{
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');}
	} 

	
	$pdf = new FPDF('L','cm','A4');
	$pdf->AddPage();
	$pdf->SetMargins (1.5,3,1.75);
	$pdf->SetFont ('times','',14);
	$pdf->Cell ( '', 0.6, 'Kartu Berobat', 0, 1, 'C' );
	$pdf->Ln();
	$pdf->SetFontSize (10);
	$pdf->Cell (3, 0.6, 'Antiran No',1, 0, 'C');
	$pdf->Cell (3, 0.6, 'ID Pasien',1, 0, 'C');
	$pdf->Cell (3, 0.6, 'Nama Pasien', 1, 0, 'C');
	$pdf->Cell (4, 0.6, 'Alamat', 1, 0, 'C');
	$pdf->Cell (2.5, 0.6, 'Jenis Kelamin', 1, 0, 'C');
	$pdf->Cell (3, 0.6,'Usia', 1, 0, 'C');
	$pdf->Cell (3, 0.6,'Golongan Darah', 1, 0, 'C');
	$pdf->Cell (2.5, 0.6,'No Ponsel', 1, 0, 'C');
	
	$sql = "select * from pasien WHERE pasien_id='$_GET[id]' ";
    foreach ($dbh->query($sql) as $data) :
		$no++;
		$pdf->Ln();
		$pdf->Cell ( 3, 0.6 , $no, 1, 0, 'C');
		$pdf->Cell (3, 0.6, $data['pasien_id'], 1, 0, 'L');
		$pdf->Cell (3, 0.6, $data['pasien_nama'], 1, 0, 'L');
		$pdf->Cell (4, 0.6, $data['pasien_alamat'], 1, 0, 'L');
		$pdf->Cell (2.5, 0.6, $data['pasien_jk'], 1, 0, 'C');
		$pdf->Cell (3, 0.6, $data['pasien_umur'], 1, 0, 'C');
		$pdf->Cell (3, 0.6,$data['pasien_goldar'], 1, 0, 'L');
		$pdf->Cell (2.5, 0.6,$data['pasien_nohp'], 1, 0, 'L');
		
	endforeach;
	$pdf->Output();
?>
