<?php
   include 'includes/hitung.php'; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include 'includes/head.php'; ?>     	
        <script type="text/javascript">
        // Popup window code
        function newPopup(url) {
            popupWindow = window.open(
                url,'popUpWindow','height=600,width=800,left=300,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=yes,status=yes')
        }
        </script>



    </head> 
<body> 
<div id="mosi_header_wrapper">
	<div id="mosi_header">
    	<div id="site_title">PROGRAM PEMODELAN SIMULASI</div>
        <p id="intro_text">PROGRAM PEMODELAN SIMULASI. Untuk menghitung soal resiprok</p>
        <a href="index.php" class="home_btn2"><b>BERANDA</b></a> |||
                        <a href="JavaScript:newPopup('grafik.php');" class="home_btn2"><b>TAMPILKAN GRAFIK</b></a>
            
    </div>
</div>
<div id="mosi_main_wrapper">
	<div id="mosi_main">
		<div id="content"> 
        <center>
            <div id="beranda" class="section">
                <h4 align="center">Hasil hitung</h4>
                    <p align="center">Tabel hasil perhitungan (nilai x dan y)</p>
                    <div id="contact_form">
                        <?php include 'includes/tb_hitung.php';?>  

                    </div> 
                 <br/><br/>
            </div> </center>
        </div>
    </div>

<div id="mosi_footer_wrapper">
	<div id="mosi_footer">
    	<p>Copyright © 2014 | <a href="http://moccadev.com">Handy D - MoccaDev</a> | Program Pemodelan Simulasi</p>
    </div>
</div>

</body> 
</html>