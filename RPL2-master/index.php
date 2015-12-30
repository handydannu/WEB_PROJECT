<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Selamat Datang !</title>
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
	            	Selamat Datang 
                </div>
                <div id="templatemo_header_bottom">
                	<div id="templatemo_menu">
                    	<ul>
                        	<li class="current"><a href="index.php"><b>Beranda</b></a></li>
                            <li><a href="depan_layanan.php"><b>Pelayanan</b></a></li>
                            <li><a href=""><b>Kontak</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
                    	<h1>Selamat Datang di Sistem Informasi Klinik Al-Islam</h1>
                        <p>Selamat datang di Sistem Informasi Klinik Al-Islam. Percayakan keperluan medis anda kepada kami.
						   Pelayanan terjamin, keamanan data terjaga, data tersimpan rapi serta histori anda ada bersama kami.
						   Perlu dicatat, pasien yang lebih dari 3 bulan tidak mengunjungi Klinik maka datanya akan kami hapus
						   dan kami nyatakan sembuh.</p>
						<p>Gunakan panel disebelah kanan untuk mengakses keperluan anda. Mulai dari petugas medis, petugas rawat,
						   apoteker dan kementrian kesehatan untuk melihat laporan.</p>   
					</div>    
				
				</div>
				
                <?php include 'includes/panel_menu.php';?>
				
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