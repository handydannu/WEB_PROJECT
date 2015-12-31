<html>
   <body>
   <center>
   <hr size="4" width="auto" color="#B62ECE">
   <h1>Data Pembeli</h1>
   <hr size="4" width="auto" color="#B62ECE">
   <table>

<?php
$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];
$pembeli = $_POST['pembeli'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$telp = $_POST['telp'];

echo "<tr><td>Kode Bunga </td>
          <td> : </td>
          <td>$kode</td></tr>";
echo "<tr><td>Nama Pembeli</td>
          <td> : </td>
          <td>$pembeli</td></tr>";
echo "<tr><td>Jumlah Bunga </td>
          <td> : </td>
          <td>$jumlah</td></tr>";
echo "<tr><td>Alamat</td>
          <td> : </td>
          <td>$alamat</td></tr>";
echo "<tr><td>Kota</td>
          <td> : </td>
          <td>$kota</td></tr>";
echo "<tr><td>Nomor Telp</td>
          <td> : </td>
          <td>$telp</td></tr>";
echo "</table>";
?>

<hr size="4" width="auto" color="#B62ECE">
 <h1>DATA BERHASIL DISIMPAN ! TERIMA KASIH SUDAH BERBELANJA :) </h1>
<hr size="4" width="auto" color="#B62ECE">
<?php
error_reporting(0);
$conn=mysql_connect("localhost","root","");
mysql_select_db("lisnawati_21111087");
$sql="insert into penjualan values('$kode','$jumlah','$pembeli','$alamat','$kota','$telp')";
$hasil=mysql_query($sql,$conn);

?>
</table>
</center>
</body>
</html>