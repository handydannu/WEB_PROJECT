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
							$sql = "SELECT * FROM tb_admin ORDER BY nama";
							foreach ($dbh->query($sql) as $data) :
							?>
							
							<h1 align="center">Detail Data Admin</h1>
							<fieldset style="width: 50%; margin: auto;">
								<legend>Data Anda</legend>

									<form>
									
								 <table border="0">
									<tr>
										<td>ID Admin</td><td>:</td><td><?php echo $data['id_admin']?></td>
									</tr><tr>
										<td>Nama Admin</td><td>:</td><td><?php echo $data['nama']?></td>
									</tr><tr>
										<td>Alamat</td><td>:</td><td><?php echo $data['alamat']?></td>
									</tr><tr>
										<td>Jenis Kelamin</td><td>:</td><td><?php echo $data['jenis_kelamin']?></td>
									</tr><tr>
										<td>No Ponsel</td><td>:</td><td><?php echo $data['no_hp']?></td>
									</tr><tr>
										<td>Tempat Dinas</td><td>:</td><td><?php echo $data['dinas']?></td>
									</tr>
									<?php
							endforeach;
							?>
								</table>
								</form>
							</fieldset> 
							<br/>
							<center><h2><a href="admin_beranda.php">Kembali</a></h2></center>
						
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