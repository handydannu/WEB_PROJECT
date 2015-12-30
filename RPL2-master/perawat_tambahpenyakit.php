<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>BERANDA PERAWAT</title>
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
	            	Halaman Tambah Penyakit 
                </div>
                <div id="templatemo_header_bottom">
                	<div id="templatemo_menu">
                    	<ul>
                        	<li><a href="perawat_beranda.php"><b>Beranda</b></a></li>
							<li class="current"><a href="perawat_rekam.php"><b>Data Rekam Medis</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
						<h1 align="center">Tambah Penyakit</h1>
							<fieldset style="width : auto%; margin: auto;">
								<legend>Form Tambah Penyakit</legend>
								<table border="0">
									<tr><form method="post" action="perawat_simpanpenyakit.php">	
									<tr><td>ID Penyakit Terdaftar</td><td>:</td><td>
										
										<?php
										error_reporting(E_ALL ^ E_DEPRECATED);
										mysql_connect("localhost", "root", "") or die("Off");
										mysql_select_db("dbadsi") or die("Connection Off");
										$ambil = "SELECT penyakit_id from penyakit";
										$hasil = mysql_query($ambil);
										?>
										<select>
										<?php
										while ($line = mysql_fetch_array($hasil, MYSQL_ASSOC)){
										?>
										<option value="<?php echo $line['penyakit_id'];?>"> <?php echo$line['penyakit_id'];?></option>
										<?php
										}
										?>
										</select></td>
										</tr><tr>
										<td>ID Penyakit Baru</td><td>:</td><td><input type="text" name="id" maxlength="6" placeholder="PNY000" required /><font size="1" color="red">*Id penyakit baru harus berbeda dari list penyakit terdaftar</font></td>
									</tr><tr>
										<td>Keluhan</td><td>:</td><td><input type="text" name="penyakit_nama" maxlength="20" placeholder="sakit" required /><font size="1" color="red">*)</font></td>
									</tr><tr>
									
									
									<td>ID Pasien</td><td>:</td><td>
										
										<?php
										error_reporting(E_ALL ^ E_DEPRECATED);
										mysql_connect("localhost", "root", "") or die("Off");
										mysql_select_db("dbadsi") or die("Connection Off");
										$ambil = "SELECT pasien_id from pasien";
										$hasil = mysql_query($ambil);
										?>
										<select name="pasien_id">
										<?php
										while ($line = mysql_fetch_array($hasil, MYSQL_ASSOC)){
										?>
										<option value="<?php echo $line['pasien_id'];?>"> <?php echo$line['pasien_id'];?></option>
										<?php
										}
										?>
										</select></td>
									</tr><tr>
										<td>ID Pasien</td><td>:</td><td>
										
										<?php
										error_reporting(E_ALL ^ E_DEPRECATED);
										mysql_connect("localhost", "root", "") or die("Off");
										mysql_select_db("dbadsi") or die("Connection Off");
										$ambil = "SELECT rekam_id from rekam_medis";
										$hasil = mysql_query($ambil);
										?>
										<select name="rekam_id">
										<?php
										while ($line = mysql_fetch_array($hasil, MYSQL_ASSOC)){
										?>
										<option value="<?php echo $line['rekam_id'];?>"> <?php echo$line['rekam_id'];?></option>
										<?php
										}
										?>
										</select></td>
										</tr><tr>	
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
                        	<li><a href="perawat_rekam.php">KEMBALI</a> </li>
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