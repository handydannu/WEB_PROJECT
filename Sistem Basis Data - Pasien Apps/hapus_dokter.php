<?php
include 'includes/connect.php';
if (isset($_GET['id'])) {
    $dbh->exec("DELETE FROM dokter WHERE id_dokter = '$_GET[id]'");
}
header("location:admin_datadokter.php")
?>