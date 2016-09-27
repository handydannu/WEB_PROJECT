<?php
include 'includes/connect.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM dokter WHERE id_dokter = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!
<a href='admin_datadokter.php'>Kembali</a>";
    exit();
}
 
if ($data === false) {
    echo "Data tidak ditemukan!
<a href='admin_datadokter.php'>Kembali</a>";
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include 'includes/css_admin.php';?>
	</head>
	<body>
	
	
    <div id="slider">
    <div id="templatemo_wrapper">
    	
        <div id="header">
            
            <div id="site_title">
			</div>
            
            <div id="menu">
                <ul class="navigation">
                    <li><a href="admin_beranda.php" class="selected">Beranda<span class="ui_icon home"></span></a></li>
                    <li><a href="index.php">Logout<span class="ui_icon aboutus"></span></a></li>
                </ul>
            </div>
        </div>
        
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
				
                    <div class="panel" id="contactus">
						
						<h1 align="center">Detail Data Dokter</h1>
							<fieldset style="width : 65%; margin: auto;">
								<legend>Form Dokter</legend>
								 <table border="0">
									<tr><form method="post" action="update_dokter.php"><input type="hidden" name="id" value="<?php echo $data['id_dokter']; ?>" />	
										<td>Nama Dokter</td><td>:</td><td><input type="text" maxlength="25" name="nama_dokter" placeholder="Nama Dokter" required value="<?php echo $data['nama_dokter']; ?>"/><font color="red">*)</font></td>
									</tr><tr>
										<td>Tanggal Lahir</td><td>:</td><td><input type="date" name="tanggal_lahir" required value="<?php echo $data['tanggal_lahir']; ?>"/><font color="red">*)</font></td>
									</tr><tr>
										<td>Jenis Kelamin</td><td>:</td><td><?php if ($data['jenis_kelamin'] === 'pria') : ?>
										<select name="jenis_kelamin">
											<option value="pria" checked>Pria
											<option value="wanita">Wanita
										</select>
										<?php else : ?>
										<select name="jenis_kelamin">
											<option value="pria">Pria
											<option value="wanita" checked>Wanita
										</select>
										<?php endif; ?></td>									
									</tr><tr>
										<td>Alamat</td><td>:</td><td><textarea name="alamat" cols="50" required><?php echo $data['alamat']; ?></textarea></td>
									</tr><tr>
										<td>Nomor Handphone</td><td>:</td><td><input type="text" maxlength="12" name="no_hp" placeholder="081xxxxxxxxx" required value="<?php echo $data['no_hp']; ?>"/><font color="red">*)</font></td>
									</tr>
									<tr>
										<td></td><td></td>
										<td>
										<input type="submit" value="Simpan">
										<input type="reset" value="Reset" onclick="return confirm('Hapus data yang telah diinput?')"></td>
									</tr></form>
								</table>
							</fieldset> 
							<br/>
							<center><h2><a href="admin_datadokter.php">Tabel Data Dokter</a></h2></center>
						
                	</div>
                </div>
            </div>
        </div> 
        
        <div id="footer">
			<?php include 'includes/footer_admin.php';?> 
        </div>
    
    </div> 
    </div> 

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>