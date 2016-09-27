<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include 'includes/css_dokter.php';?>
	</head>
	<body>
	
	
    <div id="slider">
    <div id="templatemo_wrapper">
    	
        <div id="header">
            
            <div id="site_title">
			</div>
            
            <div id="menu">
                <ul class="navigation">
                    <li><a href="dokter_beranda.php" class="selected">Beranda<span class="ui_icon home"></span></a></li>
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
									<th>ID Pasien</th>
									<th>Nama Pasien</th>
									<th>Tanggal Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>No Hp</th>
									<th>Aksi</th>
								</tr>
							</thead>
							 
							<tbody>
							<?php
							$sql = "SELECT * FROM pasien ORDER BY id_pasien";
							foreach ($dbh->query($sql) as $data) :
							?>
								<tr>
									<td><?php echo $data['id_pasien']?></td>
									<td><?php echo $data['nama_pasien'] ?></td>
									<td><?php echo $data['tanggal_lahir'] ?></td>
									<td><?php echo $data['jenis_kelamin']; ?> </td>
									<td><?php echo $data['alamat'] ?></td>
									<td><?php echo $data['no_hp'] ?></td>
									<td align="center">
										<a href="detail_pasien.php?id=<?php echo $data['id_pasien'] ?>">detail</a>
										<a href="edit_pasien.php?id=<?php echo $data['id_pasien'] ?>">edit</a>
										<a href="hapus_pasien.php?id=<?php echo $data['id_pasien'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')">hapus</a>
									</td>
								</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
						<br/>
						<center><h2><a href="input_pasien.php">Input Data Pasien Baru </a></h2></center>
						
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