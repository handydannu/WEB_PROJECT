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
                            <li class="current"><a href="admin_pasien.php"><b>List Pasien</b></a></li>
                            <li><a href="admin_registrasi.php"><b>Registrasi</b></a></li>
                            <li><a href="admin_cari.php"><b>Cari Pasien</b></a></li>
                            <li><a href="admin_laporan.php"><b>Panel Laporan</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
						<?php
						include 'includes/koneksi.php';
						?>
						<style>
							tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
								background-color: #749ED4;
							}
							table{
								width: auto;
								margin: auto;
								border-collapse: collapse;
								box-shadow: darkgrey 3px;
							}
							thead tr {
								background-color: #D4D074;
							}
						</style>
						 
						<h1 align="center">Tabel Data Pasien</h1>
						 						 
						<table border="1">
							<thead>
								<tr>
									<th>ID Pasien</th>
									<th>Nama Pasien</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Umur</th>
									<th>Golongan Darah</th>
									<th>No HP</th>
									<th>Aksi</th>
								</tr>
							</thead>
							 
							<tbody>
							<?php
							$sql = "SELECT * FROM pasien ORDER BY pasien_id";
							foreach ($dbh->query($sql) as $data) :
							?>
								<tr>
									<td><?php echo $data['pasien_id']?></td>
									<td><?php echo $data['pasien_nama'] ?></td>
									<td><?php echo $data['pasien_alamat'] ?></td>
									<td><?php echo ($data['pasien_jk'] === "l") ? "Laki-Laki" : "Perempuan"; ?> </td>
									<td><?php echo $data['pasien_umur'] ?></td>
									<td><?php echo $data['pasien_goldar'] ?></td>
									<td><?php echo $data['pasien_nohp'] ?></td>
									<td align="center">
										<a href="cetak.php?id=<?php echo $data['pasien_id'] ?>">CETAK KARTU</a>
										<a href="admin_edit.php?id=<?php echo $data['pasien_id'] ?>">EDIT DATA</a>
										<a href="admin_hapus.php?id=<?php echo $data['pasien_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')">HAPUS</a>
									</td>
								</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
						<br/>
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