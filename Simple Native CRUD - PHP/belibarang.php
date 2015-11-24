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
		<title>Data pembeli</title>
	</head>

	<body>
		<h1>Data pembeli bunga</h1>
		<hr size="4" width="auto" color="#B62ECE">
	
		<form method="POST" action="tampildatabeli.php">

		<table border="0">
			<tr>
				<td width="150px">Kode Bunga</td>
				<td>:</td>
				<td><input type="text" size="5" name="kode" maxlength="5" style="background-color:gray;" value="<?php echo $data['kode'] ?>" readonly /></td>
			</tr>
			<tr>
				<td width="150px">Nama Pembeli</td>
				<td>:</td>
				<td><input type="text" size="30" placeholder="Cth:Awan" name="pembeli" maxlength="50" required/></td>
			</tr>
			<tr>
				<td width="150px">Jumlah Bunga</td>
				<td>:</td>
				<td><input type="text" size="5" placeholder="0" name="jumlah" maxlength="3" required/> Batang</td>
			</tr>
			<tr>
				<td width="150px">Alamat</td>
				<td>:</td>
				<td><textarea cols="22" rows="5" name="alamat">Isi alamat anda</textarea></td>
			</tr>
			<tr>
				<td width="150px">Kota</td>
				<td>:</td>
				<td><input type="text" size="30" placeholder="Cth:Bandung" name="kota" maxlength="20" required/></td>
			</tr>
			<tr>
				<td width="150px">Nomor Telpon</td>
				<td>:</td>
				<td><input type="text" size="30" name="telp" placeholder="Cth:089777777777" maxlength="12" required/></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Beli" onclick="return confirm('Beli bunga ini ?')"/></td>
			</tr>
		</form>
		</table>
    	<hr size="4" width="auto" color="#B62ECE">
	</body>
</html>