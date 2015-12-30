<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "INSERT INTO rekam_medis VALUE ('$_POST[rekam_id]', '$_POST[rekam_keluhan]', '$_POST[rekam_beratbadan]','$_POST[rekam_pelayanan]', 
		   '$_POST[rekam_pemeriksa]', '$_POST[rekam_tensidarah]', '$_POST[rekam_tgl]', '$_POST[obat_id]', '$_POST[petugas_id]')";
    $dbh->exec($sql);
}
 
header("location:perawat_rekam.php");
?>