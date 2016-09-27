<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include 'includes/css_pasien.php';?>
	</head>
	<body>
	
	
    <div id="slider">
    <div id="templatemo_wrapper">
    	
        <div id="header">
            
            <div id="site_title">
			</div>
            
            <div id="menu">
                <ul class="navigation">
                    <li><a href="pasien_beranda.php" class="selected">Beranda<span class="ui_icon home"></span></a></li>
                    <li><a href="index.php">Logout<span class="ui_icon aboutus"></span></a></li>
                </ul>
            </div>
        </div>
        
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
				
                    <div class="panel" id="contactus">
						
                    	<?php
						include 'includes/connect.php';
						?>
						<style>
							tbody > tr:nth-child(2n+1) > td, tbody > tr:nth-child(2n+1) > th {
								background-color: #ededed;
							}
							table{
								width: 75%;
								margin: auto;
								border-collapse: collapse;
								box-shadow: darkgrey 3px;
							}
							thead tr {
								background-color: #36c2ff;
							}
						</style>
						 
						<h1 align="center">Tabel Data Pasien</h1>
						 						 
						<table border="1">
							<thead>
								<tr>
									<th>Nama Pasien</th>
									<th>Diagnosa Penyakit</th>
									<th>Solusi Penyakit</th>
									<th>Waktu Derita</th>
									<th>Histori RS</th>
									<th>Nama Dokter</th>
								</tr>
							</thead>
							 
							<tbody>
							<?php
							$sql = "select * from penyakit join pasien using (id_pasien) join dokter using (id_dokter) where id_pasien='$_GET[id]' ";
							foreach ($dbh->query($sql) as $data) :
							?>
								<tr>
									<td><?php echo $data['nama_pasien']?></td>
									<td><?php echo $data['diagnosa_penyakit'] ?></td>
									<td><?php echo $data['solusi_penyakit'] ?></td>
									<td><?php echo $data['waktu_derita'] ?> </td>
									<td><?php echo $data['histori_rs'] ?></td>
									<td><?php echo $data['nama_dokter'] ?></td>
								</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
						<table border="0">
							<tr><td align="right"><form action="report.php?id=<?php echo $data['id_pasien'] ?>" method="post">
									<font color="green">---<input type="submit" name="cetak" value="Cetak Seluruh Data"/>---</font></form></td></tr>
						</table>			
						<br/>
						<center><h4><a href="pasien_data.php">Kembali</a></h4>
						
                	</div>
                </div>
            </div>
        </div> 
        
        
        
        <div id="footer">
			<?php include 'includes/footer_dokter.php';?> 
        </div>
    
    </div> 
    </div> 

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>