<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM penyakit WHERE penyakit_id = '$_GET[id]'");
}
header("location:perawat_rekam.php")
?>