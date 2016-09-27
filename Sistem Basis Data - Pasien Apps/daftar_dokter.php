<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
$("#username").change(function() 
{ 

var username = $("#username").val();
if(username.length > 3)
{
$("#availability_status").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Mengecek ketersediaan...');


$.ajax({  
    type: "POST",  
    url: "check_username.php",  
    data: "username="+ username,  
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')
	{ 
	$("#availability_status").html('<img src="images/available.png" align="absmiddle"> <font color="Green"> Username tersedia </font>  ');
	
	}  
	else  if(server_response == '1')
	{  
	 $("#availability_status").html('<img src="images/not_available.png" align="absmiddle"> <font color="red">Username tidak tersedia</font>');
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#availability_status").html('<font color="#cc0000">Username terlalu pendek</font>');

}
return false;
});

});
</script>
		<?php include 'includes/css.php';?>		
		<link rel="stylesheet" href="css/css_daftar.css" type="text/css" />
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
					<li><a href="index.php" class="selected">Beranda<span class="ui_icon home"></span></a></li>
					<li><a href="laporkan.php">Laporkan Masalah<span class="ui_icon home"></span></a></li>					
                </ul>
            </div>
			
        </div>
        
        <div id="content">
        
            <div class="scroll">
                <div class="scrollContainer">
				<div>
				<h1>Pendaftaran Dokter</h1>
                </div>
						<div id="isinya">
						  <form action="sukses.php" method="post">
							<div class="style_form">
							  <label for="username">Username :</label>
							  <input type="text" name="username" id="username" required class="form_element"/>
							  <span id="availability_status"></span> </div>
							<div class="style_form">
							  <label for="full_name">Password :</label>
							  <input type="password" name="password" id="password" required class="form_element"/>
							</div>
							<div class="style_form">
							  <input name="kirim" type="submit" value="Daftar" id="submit_btn" />
							</div>
						  </form>
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