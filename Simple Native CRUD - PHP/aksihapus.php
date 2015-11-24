<?php
include 'koneksi.php';
if (isset($_GET['kode'])) {
    $dbh->exec("DELETE FROM databunga WHERE kode = '$_GET[kode]'");
}
header("location:tampildata.php?hapus=berhasil")
?>