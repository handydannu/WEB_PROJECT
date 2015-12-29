<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Pelayanan</title>
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
	            	Pelayanan 
                </div>
                <div id="templatemo_header_bottom">
                	<div id="templatemo_menu">
                    	<ul>
                        	<li><a href="index.php"><b>Beranda</b></a></li>
                            <li class="current"><a href="depan_layanan.php"><b>Pelayanan</b></a></li>
                            <li><a href="depan_kontak.php"><b>Kontak</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
                    	<h1>Layanan Dari Kami : </h1>
						<p>Berikut adalah layanan yang kami berikan : </p>
						<ul>
							<li>Administrasi Pasien</li>
							<li>Pembuatan Kartu Berobat</li>
							<li>Detail Pembayaran</li>
							<li>Manajemen Rekam Medis</li>
							<li>Manajemen Pengelolaan Obat</li>
							<li>Pembuatan Laporan Bulanan</li>
							<li>Pembuatan Surat Rujukan</li>
						</ul>	
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