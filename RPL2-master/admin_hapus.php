<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM pasien WHERE pasien_id = '$_GET[id]'");
}
header("location:admin_pasien.php")
?>