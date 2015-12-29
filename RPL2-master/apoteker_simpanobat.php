<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "INSERT INTO obat VALUE ('$_POST[obat_id]', '$_POST[obat_nama]', '$_POST[obat_jenis]','$_POST[obat_stok]', '$_POST[obat_expire]')";
    $dbh->exec($sql);
}
 
header("location:apoteker_obat.php");
?>