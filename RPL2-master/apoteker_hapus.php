<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM obat WHERE obat_id = '$_GET[id]'");
}
header("location:apoteker_obat.php")
?>