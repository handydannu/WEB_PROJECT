<?php
include 'includes/koneksi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE rekam_medis SET rekam_keluhan = '$_POST[rekam_keluhan]',
								rekam_beratbadan = '$_POST[rekam_beratbadan]',
								rekam_pelayanan='$_POST[rekam_pelayanan]',
                                rekam_pemeriksa = '$_POST[rekam_pemeriksa]',
                                rekam_tensidarah = '$_POST[rekam_tensidarah]',
                                rekam_tgl  = '$_POST[rekam_tgl]',
                                obat_id  = '$_POST[obat_id]',
                                petugas_id  = '$_POST[petugas_id]'
							WHERE rekam_id = '$_POST[id]' ";
    $dbh->exec($sql);
}
 
header("location:perawat_rekam.php");
?>