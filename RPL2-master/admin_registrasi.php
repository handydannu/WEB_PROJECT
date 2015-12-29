<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>BERANDA ADMIN</title>
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
	            	Halaman Depan - Petugas Administrasi 
                </div>
                <div id="templatemo_header_bottom">
                	<div id="templatemo_menu">
                    	<ul>
                        	<li><a href="admin_beranda.php"><b>Beranda</b></a></li>
                            <li><a href="admin_pasien.php"><b>List Pasien</b></a></li>
                            <li class="current"><a href="admin_registrasi.php"><b>Registrasi</b></a></li>
                            <li><a href="admin_cari.php"><b>Cari Pasien</b></a></li>
                            <li><a href="admin_laporan.php"><b>Panel Laporan</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
						<h1 align="center">Registrasi Pasien</h1>
							<fieldset style="width : auto%; margin: auto;">
								<legend>Form Pasien</legend>

								
								 <table border="0">
									<tr><form method="post" action="admin_simpanpasien.php">	
									<tr>
										<td>ID Pasien Terdaftar</td><td>:</td><td>
										
										<?php
										error_reporting(E_ALL ^ E_DEPRECATED);
										mysql_connect("localhost", "root", "") or die("Off");
										mysql_select_db("dbadsi") or die("Connection Off");
										$ambil = "SELECT pasien_id from pasien";
										$hasil = mysql_query($ambil);
										?>
										<select>
										<?php
										while ($line = mysql_fetch_array($hasil, MYSQL_ASSOC)){
										?>
										<option value="<?php echo $line['pasien_id'];?>"> <?php echo$line['pasien_id'];?></option>
										<?php
										}
										?>
										</select></td>
										</tr><tr>
										<td>ID Pasien Baru</td><td>:</td><td><input type="text" name="pasien_id" maxlength="6" placeholder="PAS999" required /><font size="1" color="red">*Id pasien baru harus berbeda dari list pasien terdaftar</font></td>
									</tr><tr>
										<td>Nama Pasien</td><td>:</td><td><input type="text" maxlength="25" name="pasien_nama" placeholder="Nama Pasien" required /><font color="red">*)</font></td>
									</tr><tr>
										<td>Alamat</td><td>:</td><td><textarea name="pasien_alamat" cols="50" required></textarea></td>
									</tr><tr>
										<td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="pasien_jk" value="l" id="laki-laki" /><label for="laki-laki">Laki-Laki</label>
																			<input type="radio" name="pasien_jk" value="p" id="perempuan" /><label for="perempuan">Perempuan</label><font color="red">*)</font></td>									</tr><tr>
									</tr><tr>
										<td>Umur</td><td>:</td><td><input type="text" maxlength="2" name="pasien_umur" placeholder="contoh : 20" required /><font color="red">*)</font></td>
																
									</tr><tr>
										<td>Golongan Darah</td><td>:</td><td>
																<select name="pasien_goldar">
																	<option value="A">A</option>
																	<option value="B">B</option>
																	<option value="AB">AB</option>
																	<option value="O">O</option>
																</select><font color="red">*)</font></td>
									</tr><tr>
										<td>Nomor Handphone</td><td>:</td><td><input type="text" maxlength="12" name="pasien_nohp" placeholder="081xxxxxxxxx"/><font size="1">Optional</font></td>
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