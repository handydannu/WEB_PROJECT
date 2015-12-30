<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM rekam_medis WHERE rekam_id = '$_GET[id]'");
}
header("location:perawat_rekam.php")
?>