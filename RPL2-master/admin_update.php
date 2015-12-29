<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE pasien SET pasien_nama = '$_POST[pasien_nama]',
								pasien_alamat='$_POST[pasien_alamat]',
                                pasien_jk = '$_POST[pasien_jk]',
                                pasien_umur = '$_POST[pasien_umur]',
                                pasien_goldar  = '$_POST[pasien_goldar]',
                                pasien_nohp  = '$_POST[pasien_nohp]'
								WHERE pasien_id = '$_POST[id]' ";
    $dbh->exec($sql);
}
 
header("location:admin_pasien.php");
?>