<!DOCTYPE html>
<html>
	<body>
		<h1>Tambah data bunga</h1>
		<hr size="4" width="auto" color="#B62ECE">

		<form method="POST" action="aksitambah.php">

		<table border="0">
			<tr>
				<td width="150px">Kode Bunga</td>
				<td>:</td>
				<td><input type="text" size="5" placeholder="Cth:KD001" name="kode" maxlength="5" required /></td>
			</tr>
			<tr>
				<td width="150px">Nama Bunga</td>
				<td>:</td>
				<td><input type="text" size="30" placeholder="Cth:Bunga Mawar" name="nama" maxlength="50" required /></td>
			</tr>
			<tr>
				<td width="150px">Stok Bunga</td>
				<td>:</td>
				<td><input type="text" size="5" name="stok" placeholder="Cth:20" maxlength="3" required /> Batang</td>
			</tr>
			<tr>
				<td width="150px">Harga Bunga</td>
				<td>:</td>
				<td>Rp.<select name="harga">
						<option value="10000">10.000</option>
						<option value="20000">20.000</option>
						<option value="50000">50.000</option>
						<option value="75000">75.000</option>
						<option value="100000">100.000</option>
					   </select> 
				</td>
			</tr>
			<tr>
				<td width="150px">Warna Bunga</td>
				<td>:</td>
				<td><input type="text" size="30" name="warna" placeholder="Cth:Hitam" maxlength="30" required /></td>
			</tr>
			<tr>
				<td width="150px">Nama Supplier</td>
				<td>:</td>
				<td><input type="text" size="30" name="suplier" placeholder="Cth:Lisnawati" maxlength="30" required /></td>
			</tr>
			<tr>
				<td width="150px">Asal kota supplier</td>
				<td>:</td>
				<td><input type="text" size="30" name="asal" placeholder="Cth:Bandung" maxlength="30" required /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="Tambah Data" onclick="return confirm('Tambah data bunga ini ?')"/></td>
			</tr>
		</form>
		</table>
		<hr size="4" width="auto" color="#B62ECE">
	</body>
</html>