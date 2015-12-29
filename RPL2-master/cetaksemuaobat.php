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
    $this->Cell(30,10,'Cetak Obat',1,0,'C');
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
	$pdf->Cell ( '', 0.6, 'Data Obat', 0, 1, 'C' );
	$pdf->Ln();
	$pdf->SetFontSize (10);
	$pdf->Cell (3, 0.6, 'No',1, 0, 'C');
	$pdf->Cell (3, 0.6, 'ID Obat',1, 0, 'C');
	$pdf->Cell (3, 0.6, 'Nama Obat', 1, 0, 'C');
	$pdf->Cell (4, 0.6, 'Jenis Obat', 1, 0, 'C');
	$pdf->Cell (2.5, 0.6, 'Sisa Stok', 1, 0, 'C');
	$pdf->Cell (3, 0.6,'Tanggal Expire', 1, 0, 'C');
	
	$sql = "select * from obat ORDER BY obat_id";
    foreach ($dbh->query($sql) as $data) :
		$no++;
		$pdf->Ln();
		$pdf->Cell ( 3, 0.6 , $no, 1, 0, 'C');
		$pdf->Cell (3, 0.6, $data['obat_id'], 1, 0, 'L');
		$pdf->Cell (3, 0.6, $data['obat_nama'], 1, 0, 'L');
		$pdf->Cell (4, 0.6, $data['obat_jenis'], 1, 0, 'L');
		$pdf->Cell (2.5, 0.6, $data['obat_stok'], 1, 0, 'C');
		$pdf->Cell (3, 0.6, $data['obat_expire'], 1, 0, 'C');
		
	endforeach;
	$pdf->Output();
?>
