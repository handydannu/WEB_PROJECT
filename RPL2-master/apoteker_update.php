<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE obat SET obat_nama = '$_POST[obat_nama]',
								obat_jenis='$_POST[obat_jenis]',
                                obat_stok = '$_POST[obat_stok]',
                                obat_expire = '$_POST[obat_expire]'
								WHERE obat_id = '$_POST[id]' ";
    $dbh->exec($sql);
}
 
header("location:apoteker_obat.php");
?>