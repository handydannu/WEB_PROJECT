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
						 
						 
						<h1 align="center">Tabel Data Dokter</h1>
						 						 
						<table border="1">
							<thead>
								<tr>
									<th>ID Dokter</th>
									<th>Nama Dokter</th>
									<th>Tanggal Lahir</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>No Hp</th>
									<th>Aksi</th>
								</tr>
							</thead>
							 
							<tbody>
							 <?php
							$sql = "SELECT * FROM dokter ORDER BY id_dokter";
							foreach ($dbh->query($sql) as $data) :
							?>
								<tr>
									<td><?php echo $data['id_dokter']?></td>
									<td><?php echo $data['nama_dokter'] ?></td>
									<td><?php echo $data['tanggal_lahir'] ?></td>
									<td><?php echo $data['jenis_kelamin'] ?> </td>
									<td><?php echo $data['alamat'] ?></td>
									<td><?php echo $data['no_hp'] ?></td>
									<td align="center">
										<a href="edit_dokter.php?id=<?php echo $data['id_dokter'] ?>">edit</a>
										   
										<a href="hapus_dokter.php?id=<?php echo $data['id_dokter'] ?>" onclick="return confirm('Anda yakin akan menghapus data?')">hapus</a>
									</td>
								</tr>
							<?php
							endforeach;
							?>
							</tbody>
						</table>
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