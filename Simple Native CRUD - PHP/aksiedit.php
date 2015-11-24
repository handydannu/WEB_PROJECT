<?php
include 'koneksi.php';
 
if (isset($_POST)) {
    $sql = "UPDATE databunga SET nama = '$_POST[nama]',
    									stok='$_POST[stok]',
    									harga = '$_POST[harga]', 
    									warna = '$_POST[warna]',
    									suplier = '$_POST[suplier]',
    									asal = '$_POST[asal]'
    									WHERE kode = '$_POST[kode]' ";
    $dbh->exec($sql);
}
header("location:tampildata.php?edit=berhasil");
?>