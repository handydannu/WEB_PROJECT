<?php
    include 'koneksi.php';
    if (isset($_GET['kode'])) {
          $query = $dbh->query("SELECT * FROM databunga WHERE kode = '$_GET[kode]'");
          $data  = $query->fetch(PDO::FETCH_ASSOC);
      }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Edit Bunga</title>
	</head>

	<body>
		<h1>Edit data bunga</h1>
		<hr size="4" width="auto" color="#B62ECE">
	
		<form method="POST" action="aksiedit.php">

		<table border="0">
			<tr>
				<td width="150px">Kode Bunga</td>
				<td>:</td>
				<td><input type="text" size="5" name="kode" maxlength="5" style="color:gray;" value="<?php echo $data['kode'] ?>" readonly /></td>
			</tr>
			<tr>
				<td width="150px">Nama Bunga</td>
				<td>:</td>
				<td><input type="text" size="30" name="nama" maxlength="50" required value="<?php echo $data['nama'] ?>" /></td>
			</tr>
			<tr>
				<td width="150px">Stok Bunga</td>
				<td>:</td>
				<td><input type="text" size="5" name="stok" maxlength="3" required value="<?php echo $data['stok'] ?>" /> Batang</td>
			</tr>
			<tr>
				<td width="150px">Harga</td>
				<td>:</td>
				<td><input type="text" size="5" name="harga" maxlength="6" required value="<?php echo $data['harga'] ?>" /></td>
			</tr>
			<tr>
				<td width="150px">Warna Bunga</td>
				<td>:</td>
				<td><input type="text" size="30" name="warna" maxlength="20" required value="<?php echo $data['warna'] ?>" /></td>
			</tr>
			<tr>
				<td width="150px">Nama Supplier</td>
				<td>:</td>
				<td><input type="text" size="30" name="suplier" maxlength="30" required value="<?php echo $data['suplier'] ?>" /></td>
			</tr>
			<tr>
				<td width="150px">Asal Kota Supplier Harga</td>
				<td>:</td>
				<td><input type="text" size="30" name="asal" maxlength="30" required value="<?php echo $data['asal'] ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Edit Data" onclick="return confirm('Edit data bunga ini ?')"/></td>
			</tr>
		</form>
		</table>
    	<hr size="4" width="auto" color="#B62ECE">
	</body>
</html>