<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "INSERT INTO penyakit VALUE ('$_POST[id]', '$_POST[penyakit_nama]', '$_POST[pasien_id]','$_POST[rekam_id]')";
    $dbh->exec($sql);
}
 
header("location:perawat_rekam.php");
?>