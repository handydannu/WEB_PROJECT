<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM obat WHERE obat_id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia!
<a href='apoteker_obat.php'>Kembali</a>";
    exit();
}
 
if ($data === false) {
    echo "Data tidak ditemukan!
<a href='apoteker_beranda.php'>Kembali</a>";
    exit();
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>BERANDA APOTEKER</title>
		<link href="adsi.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="js/mootools-core.js"></script>
		<script type="text/javascript" src="js/mootools-more.js"></script>
		<script type="text/javascript" src="js/byzoomer-0.9.js"></script>

		<script language="javascript" type="text/javascript">
		function clearText(field){
			if (field.defaultValue == field.value) field.value = '';
			else if (field.value == '') field.value = field.defaultValue;
		}
		window.addEvent('load', function(){
				new ByZoomer();	
			});
		</script>
		</head>

<body>
	<div id="templatemo_top_bg">
   	  <div class="templatemo_container">
        
        	<div id="templatemo_header">
            	<div id="templatemo_logo">
	            	Halaman Depan - Petugas Apoteker 
                </div>
                <div id="templatemo_header_bottom">
                	<div id="templatemo_menu">
                    	<ul>
                        	<li><a href="apoteker_beranda.php"><b>Beranda</b></a></li>
                            <li class="current"><a href="apoteker_obat.php"><b>Data Obat</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
						<fieldset style="width : 65%; margin: auto;">
								<legend>Form Obat</legend>
								 <table border="0">
									<tr><form method="post" action="apoteker_update.php"><input type="hidden" name="id" value="<?php echo $data['obat_id']; ?>" />	
										<td>Nama Obat</td><td>:</td><td><input type="text" maxlength="25" name="obat_nama" placeholder="Nama Obat" required value="<?php echo $data['obat_nama']; ?>"/><font color="red">*)</font></td>
									</tr><tr>
										<td>Jenis Obat</td><td>:</td><td><textarea name="obat_jenis" placeholder="ceontoh : paracetamol" cols="50" required><?php echo $data['obat_jenis']; ?></textarea></td>
									</tr><tr>
										<td>Jumlah Stok</td><td>:</td><td><input type="text" maxlength="12" name="obat_stok" placeholder="contoh : 23" required value="<?php echo $data['obat_stok']; ?>"/><font color="red">*)</font></td>
									</tr><tr>
										<td>Tanggal Expire</td><td>:</td><td><input type="date" name="obat_expire" required value="<?php echo $data['obat_expire']; ?>"/><font color="red">*)</font></td>
									</tr>
									<tr>
										<td></td><td></td>
										<td>
										<input type="submit" value="Simpan">
										<input type="reset" value="Reset" onclick="return confirm('Hapus data yang telah diinput?')"></td>
									</tr></form>
								</table>
							</fieldset> 
                    </div>                      
              </div>
              <div id="templatemo_content_right">
				                	                  
                    <div class="templatemo_section">
                    	<div class="templatemo_section_2_top">
                        Panel Menu
                        </div>
                        <div class="templatemo_section_2_mid">
                        <ul>
                        	<li><a href="index.php">LOGOUT</a> </li>
						</ul>

                        </div>
                        <div class="templatemo_section_2_bottom">
                        </div>
                    </div>
                    
                </div>
                
                <div class="cleaner_with_height"></div>
        </div>
        <div class="cleaner_with_height"></div>
   	  </div>
    	
    </div>
    <div id="templatemo_bottom_bg">
    
    	<div class="templatemo_container">
        
        	<div id="templatemo_bottom_panel">               
			</div>
            <div class="cleaner_with_height"></div>
            
        </div>
   
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>