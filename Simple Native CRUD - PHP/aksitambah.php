<?php
include 'koneksi.php';
 
if (isset($_POST)) 
{
    $sql = "INSERT INTO databunga VALUES ('$_POST[kode]', '$_POST[nama]', '$_POST[stok]','$_POST[harga]','$_POST[warna]','$_POST[suplier]','$_POST[asal]')";
    $dbh->exec($sql);
    
}
header("location:tampildata.php?tambah=berhasil");
?>