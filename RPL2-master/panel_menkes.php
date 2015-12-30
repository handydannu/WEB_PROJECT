<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Panel Menkes</title>
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
	            	Panel Menkes
                </div>
                <div id="templatemo_header_bottom">
                	<div id="templatemo_menu">
                    	<ul>
                        	<li><a href="index.php"><b>Beranda</b></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div id="templatemo_content">
            	<div id="templatemo_content_left">
                	<div class="templatemo_post">
                    	<h1>Silahkan Login</h1>
						<p>Silahkan login terlebih dahulu untuk mengakses panel dinas kesehatan. Panel ini dikhususkan untuk Petugas
						   Dinas Kesehatan untuk mengontrol perihal kinerja dan laporan klinik.</p>
                    </div>                      
              </div>
			  
			  <div id="templatemo_content_right">
              <div class="templatemo_section">
                    	<div class="templatemo_section_1_top">
                        	DINAS LOGIN
                        </div>
						
                        <div class="templatemo_section_1_mid">
                        	<div class="templatemo_form">
                                <form method="post" action="ceklogin_dinas.php">
                                    <div class="templatemo_label">
                                        <label>Username :</label>
                                        <label>Password :</label>                            
                                    </div>
                            
                                    <div class="templatemo_textboxes">
                                        <input name="username" value="Username" type="text" onfocus="clearText(this)" onblur="clearText(this)" class="textfield" required/>
                                        <input name="password" value="password" type="password" onfocus="clearText(this)" onblur="clearText(this)" class="textfield" required/>
                                    </div>	
									
                                    <div class="cleaner_with_height"></div>					
                                    <div class="templatemo_login_bottom">
										<input type="submit" name="login" value="" class="button"/>
                                    </div>
                                </form>                                
                            </div>
                            
                    	<div class="cleaner_with_height"></div>

                        </div>
                        <div class="templatemo_section_1_bottom"></div>
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