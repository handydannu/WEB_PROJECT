<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php include 'includes/head.php'; ?>     	
    </head> 
<body> 
<div id="mosi_header_wrapper">
	<div id="mosi_header">
    	<div id="site_title">PROGRAM PEMODELAN SIMULASI</div>
        <p id="intro_text">PROGRAM PEMODELAN SIMULASI. Untuk menghitung soal resiprok</p>
    </div>
</div>
<div id="mosi_main_wrapper">
	<div id="mosi_main">
		<div id="content"> 
        <center>
            <div id="beranda" class="section">
                <ul id="mosi_menu">
                    <li><a href="#inputdata" class="services"><span>ISI DATA</span></a></li>
                </ul>
            </div>
        </center>   

           <div class="section" id="inputdata">                 
                    <h4 align="center">INPUT DATA</h4>
                    <p align="center">MASUKKAN DATA YANG INGIN DIINPUTKAN (nilai x dan y)</p>
                    <div id="contact_form">
                        <center>
                            <?php include 'includes/input.php'; ?>
                        </center>
                    </div>

                <a href="#beranda" class="home_btn center">BERANDA</a> 
            </div> 
         </div> 
    </div>
</div>

<div id="mosi_footer_wrapper">
	<div id="mosi_footer">
    	<p>Copyright © 2014 | <a href="http://moccadev.com">Handy D - MoccaDev</a> | Program Pemodelan Simulasi</p>
    </div>
</div>

</body> 
</html>