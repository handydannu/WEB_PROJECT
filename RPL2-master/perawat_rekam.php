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
	            	Halaman - Perawat 
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
						<?php
						include 'includes/koneksi.php';
						?>
						<style>
							tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
								background-color: #749ED4;
							}
							table{
								width: 100%;
								margin: auto;
								border-collapse: collapse;
								box-shadow: darkgrey 3px;
							}
							thead tr {
								background-color: #D4D074;
							}
						</style>
						 
						<h1 align="center">Tabel Data Rekam Medis</h1>
						 						 
						<table border="1">
							<thead>
								<tr>
									<th>ID Rekam Medis</th>
									<th>Keluhan</th>
									<th>Berat Badan(kg)</th>
									<th>Jenis Pelayanan</th>
									<th>Dokter Pemeriksa</th>
									<th>Tensi Darah(mg)</th>
									<th>Tanggal Rekam</th>
									<th>Obat ID</th>
									<th>Petugas Pencatat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							 
							<tbody>
							<?php
							$sql = "select * from rekam_medis join obat using (obat_id) join petugas using (petugas_id) ORDER BY rekam_id";
							foreach ($dbh->query($sql) as $data) :
							?>
								<tr>
									<td><?php echo $data['rekam_id']?></td>
									<td><?php echo $data['rekam_keluhan'] ?></td>
									<td><?php echo $data['rekam_beratbadan'] ?></td>
									<td><?php echo $data['rekam_pelayanan'] ?> </td>
									<td><?php echo $data['rekam_pemeriksa'] ?></td>
									<td><?php echo $data['rekam_tensidarah'] ?></td>
									<td><?php echo $data['rekam_tgl'] ?></td>
									<td><?php echo $data['obat_id'] ?></td>
									<td><?php echo $data['petugas_id'] ?></td>
									<td align="center">
										<a href="perawat_det.php?id=<?php echo $data['rekam_id'] ?>">DETAIL</a>
										<a href="perawat_editrekam.php?id=<?php echo $data['rekam_id'] ?>">EDIT DATA</a>
										<a href="perawat_hapus.php?id=<?php echo $data['rekam_id'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')">HAPUS</a>
									</td>
								</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
						<p align="right"><font size="1" color="black">*Rekam medis dapat dihapus jika RIWAYAT PENYAKIT KOSONG</font></p>
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
							<li><a href="perawat_tambahrekam.php">Tambah Rekam Medis</a></li>
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