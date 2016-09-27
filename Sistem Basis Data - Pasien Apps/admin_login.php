<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include 'includes/css.php';?>
	</head>
	<body>
		
    <div id="slider">
    <div id="templatemo_wrapper">
    	
        <div id="header">
            
            <div id="site_title">
				<?php include 'includes/cari_atas.php';?>
            </div>
			
            <div id="menu">
                <ul class="navigation">
					<li><a href="index.php">Beranda<span class="ui_icon home"></span></a></li>
                </ul>
            </div>
			
        </div> 
        
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
				
                    <div class="panel" id="contactus">
                        <div class="col_400 float_l">
                        
                         	<h1><font color="red"><b>Silahkan Login</b></font></h1>
					<p>Silahkan login sesuai dengan akun yang anda miliki !</p>
                    	<table border='0'>
							<tr>
								<td><a href="dokter_login.php" class="service_three"><h1>Login Dokter</h1></a></td>
							</tr><tr>
								<td><a href="pasien_login.php" class="service_five"><h1>Login Pasien</h1></a></td>
							</tr><tr>	
								<td><a href="admin_login.php" class="service_two"><h1>Login Admin Menkes</h1></a></td>
							</tr>
						</table>
                        
						</div>
                                                
                        <div class="col_400 float_r">
                            <div id="contact_form">
                                <form method="post" name="login" action="admin_ceklogin.php">
									<h1>Login Admin</h1>
                                    <label for="author">Username :</label> <input name="username" placeholder="username" type="text" class="input_field" id="username" maxlength="40" required/>
									<div class="cleaner_h10"></div>
                                    
                                    <label for="email">Password</label> <input name="password" placeholder="********" type="password" class="input_field" id="password" maxlength="40" required/>
									<div class="cleaner_h10"></div>
									<p>Lupa Password ? Klik <a href="admin_lupa.php">link ini !</a></p>
                                    <input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Login" />
                                    <input type="reset" class="submit_btn float_r" name="reset" id="reset" value="Ulangi" />
                            
                                </form>
                            </div>
						</div>
                        
                        <div class="col_380 float_r">
                        
                        </div>
                	</div>
                </div>
            </div>
        </div> 
        
        
        
        <div id="footer">        
            <?php include 'includes/footer.php';?>              
        </div>
    
    </div> 
    </div> 
	
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>