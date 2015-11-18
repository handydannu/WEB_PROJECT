<!DOCTYPE html>
<html>
	<head>
		<title>Artificial Neural Network</title>
		<meta charset="utf-8">
		<link href="styles/layout.css" rel="stylesheet" type="text/css" media="all">
	</head>
<body id="top">
<div class="wrapper row1">
	  <header id="header" class="clear"> 
		    <div id="logo" class="fl_left">
		      <h1><i class="icon-stethoscope"></i> <a href="index.php">ArtificialNeuralNetwork</a></h1>
		      <p align="right">Diagnosa penyakit batuk</p>
		    </div>

		    <nav id="mainav" class="fl_right">
		      <ul class="clear">
		        <li class="active"><a href="index.php">BERANDA</a></li>
		        <li><a href="kami.php">PENGEMBANG</a></li>
		      </ul>
		    </nav>
	  </header>
</div>

<div class="wrapper bgded" style="background-image:url('styles/images/batuk.jpg');">
  <div id="announce" class="clear"> 
    <!-- ########################################################################################## -->
    <div class="one_third"><a href="diagnosa.php">
      <div class="hexagon"><i class="icon-stethoscope"></i>
        <p class="nospace">Diagnosa penyakit anda sekarang !</p>
      </div>
      </a></div>
    <!-- ########################################################################################## --> 
  </div>
</div>

<?php
	include "includes/footer.php";
?>
</body>
</html>