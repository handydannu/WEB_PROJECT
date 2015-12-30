<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM penyakit WHERE penyakit_id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia !";
    exit();
}
 
if ($data === false) {
    echo "ID tidak tersedia !";
    exit();
}
?>

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
	            	Halaman Edit Rekam Medis 
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
						<h1 align="center">Edit Penyakit</h1>
							<fieldset style="width : auto%; margin: auto;">
								<legend>Form Edit Penyakit</legend>
								<table border="0">
									<tr><form method="post" action="perawat_updatepenyakit.php">	
									<tr><td>ID Penyakit</td><td>:</td><td><input type="text" name="id" value="<?php echo $data['penyakit_id']; ?>" readonly style="background-color: gray;" /></td></tr><tr>	
										<td>Keluhan</td><td>:</td><td><input type="text" maxlength="25" name="penyakit_nama" value="<?php echo $data['penyakit_nama']; ?>" required /><font color="red">*)</font></td>
									</tr><tr>
										<td>ID Pasien</td><td>:</td><td><input type="text" name="pasien_id" value="<?php echo $data['pasien_id']; ?>" readonly style="background-color: gray;"/></td>
									</tr><tr>
										<td>ID Rekam</td><td>:</td><td><input type="text" name="rekam_id" value="<?php echo $data['rekam_id']; ?>" readonly style="background-color: gray;" /></td>
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