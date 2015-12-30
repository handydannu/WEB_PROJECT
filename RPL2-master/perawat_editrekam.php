<?php
include 'includes/koneksi.php';
if (isset($_GET['id'])) {
    $query = $dbh->query("SELECT * FROM rekam_medis WHERE rekam_id = '$_GET[id]'");
    $data  = $query->fetch(PDO::FETCH_ASSOC);
} else {
    echo "ID tidak tersedia !";
	echo "<a href='perawat_tambahrekam.php'> Tambah Data Rekam Medis</a>";
	echo "Atau ";
	echo "<a href='perawat_rekam.php'> Kembali</a>";
    exit();
}
 
if ($data === false) {
    echo "ID tidak tersedia !";
	echo "<a href='perawat_tambahrekam.php'> Tambah Data Rekam Medis</a>";
	echo "Atau ";
	echo "<a href='perawat_rekam.php'> Kembali</a>";;
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
						<h1 align="center">Edit Rekam Medis</h1>
							<fieldset style="width : auto%; margin: auto;">
								<legend>Form Rekam Medis</legend>
								<table border="0">
									<tr><form method="post" action="perawat_updaterekam.php">	
									<tr><td>ID Rekam Medic</td><td>:</td><td><input type="text" name="id" value="<?php echo $data['rekam_id']; ?>" readonly style="background-color: gray;" /></td></tr><tr>	
										<td>Keluhan</td><td>:</td><td><input type="text" maxlength="25" name="rekam_keluhan" value="<?php echo $data['rekam_keluhan']; ?>" required /><font color="red">*)</font></td>
									</tr><tr>
										<td>Berat Badan (kg)</td><td>:</td><td><input type="text" maxlength="25" name="rekam_beratbadan" value="<?php echo $data['rekam_beratbadan']; ?>" required /><font color="red">*)</font></td>
									</tr><tr>
										<td>Jenis Pelayanan</td><td>:</td><td><?php if ($data['rekam_pelayanan'] == 'Check up') : ?>
										<select name="rekam_pelayanan">
											<option value="Check Up" checked>Check-up</option>
											<option value="Medical">Medical</option>
										</select>
										<?php else : ?>
										<select name="rekam_pelayanan">
											<option value="Check Up">Check-up</option>
											<option value="Medical" checked>Medical</option>
										</select>
										<?php endif; ?></td><font color="red">*)</font></td>									</tr><tr>
									</tr><tr>
										<td>Dokter Pemeriksa</td><td>:</td><td><input type="text" maxlength="25" name="rekam_pemeriksa" value="<?php echo $data['rekam_pemeriksa']; ?>" required /><font color="red">*)</font></td>
																
									</tr><tr>
										<td>Tensi Darah (mmg)</td><td>:</td><td><input type="text" maxlength="3" name="rekam_tensidarah" value="<?php echo $data['rekam_tensidarah']; ?>" required /><font color="red">*)</font></td>
									</tr><tr>
										<td>Tanggal Rekam Medic</td><td>:</td><td><input type="date" name="rekam_tgl" value="<?php echo $data['rekam_tgl']; ?>"/></td>
									</tr><tr>
										<td>Obat Id</td><td>:</td><td>
										<?php
										error_reporting(E_ALL ^ E_DEPRECATED);
										mysql_connect("localhost", "root", null) or die("Off");
										mysql_select_db("dbadsi") or die("Connection Off");
										$ambil = "SELECT obat_id from obat";
										$hasil = mysql_query($ambil);
										?>
										<select name="obat_id">
										<?php
										while ($line = mysql_fetch_array($hasil, MYSQL_ASSOC)){
										?>
										<option value="<?php echo $line['obat_id'];?>"> <?php echo$line['obat_id'];?></option>
										<?php
										}
										?>
										</select><font color="red">*)</font></td><td>
									</tr><tr>	
										<td>Petugas Catat Rekam Medic</td><td>:</td><td>
										<?php
										error_reporting(E_ALL ^ E_DEPRECATED);
										mysql_connect("localhost", "root", null) or die("Off");
										mysql_select_db("dbadsi") or die("Connection Off");
										$ambil = "SELECT petugas_id from petugas where left(petugas_id,3)='PPP'";
										$hasil = mysql_query($ambil);
										?>
										<select name="petugas_id">
										<?php
										while ($line = mysql_fetch_array($hasil, MYSQL_ASSOC)){
										?>
										<option value="<?php echo $line['petugas_id'];?>"> <?php echo$line['petugas_id'];?></option>
										<?php
										}
										?>
										</select><font color="red">*)</font></td><td>
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