<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "INSERT INTO pasien VALUE ('$_POST[pasien_id]', '$_POST[pasien_nama]', '$_POST[pasien_alamat]','$_POST[pasien_jk]', '$_POST[pasien_umur]', '$_POST[pasien_goldar]', '$_POST[pasien_nohp]')";
    $dbh->exec($sql);
}
 
header("location:admin_pasien.php");
?>