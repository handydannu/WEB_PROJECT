<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE penyakit SET pasien_id = '$_POST[pasien_id]',
								penyakit_nama = '$_POST[penyakit_nama]',
								rekam_id = '$_POST[rekam_id]'
							WHERE penyakit_id = '$_POST[id]' ";
    $dbh->exec($sql);
}
 
header("location:perawat_rekam.php");
?>