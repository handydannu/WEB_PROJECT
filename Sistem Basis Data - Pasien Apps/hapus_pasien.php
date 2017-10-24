<?php
include 'includes/connect.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM pasien WHERE id_pasien = '$_GET[id]'");
}
header("location:dokter_pasien.php")
?>