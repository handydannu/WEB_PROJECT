<?php 
session_start();
$_SESSION['nama_dokter']; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>		
		<?php include 'includes/css_dokter.php';?>
	</head>
	<body>
	
    <div id="slider">
    <div id="templatemo_wrapper">
    	
        <div id="header">
            
            <div id="site_title" align="right">		
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
                
                    <div class="panel" id="home">
                    	<div class="col_400 float_l">
                            <h2>Panel Dokter  <?php echo $_SESSION['nama_dokter'];?></h2>    

                            <img src="images/red_cross1.jpg" alt="Red Cross" class="image_wrapper image_fl" />
                            
                            <p align="justify">Panel Dokter SiD-Meyer Medica.</p>
							
                            <p align="justify">Selamat datang di panel dokter. Anda bisa menggunakan menu disebelah kanan untuk keperluan medis.</p>
                        </div>
                        <div class="col_400 float_r">
							<?php include 'includes/pelayanan_dokter.php';?>	
                        </div>
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