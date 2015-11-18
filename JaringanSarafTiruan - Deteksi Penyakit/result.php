<!DOCTYPE html>
<html>
  <head>
    <?php
	$host='localhost';
	$username='root';
	$password='';
	$database='jst_ai';
	$connect=mysql_connect($host,$username,$password);
	mysql_select_db($database,$connect);
   ?>
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
            <li><a href="index.php">BERANDA</a></li>
            <li><a href="kami.php">PENGEMBANG</a></li>
          </ul>
        </nav>
    </header>
</div>
<!-- ################################################################################################ --> 
<div class="wrapper row2">
  <div id="breadcrumb">
    <ul>
      <li><a href="index.php">Beranda</a></li>
      <li><a href="diagnosa.php">Diagnosa</a></li>
    </ul>
  </div>
</div>
<!-- ################################################################################################ --> 

<div class="wrapper row3">
  <main id="container" class="clear">
    <div class="sidebar one_quarter first"> 
    </div>
    <!-- ########################################################################################## --> 
    <div id="content" class="three_quarter"> 
    
      <?php
	  		
	  		$abjad = array("a.","b.","c.","d.","e.","f.","g.","h.","i.");
			$h = "1";
			$maxGejala = $_POST["max_gejala"];
			$GetGejala = array(intval($maxGejala)); 
			
			$judul = "";
			/* proses penghitungan pengetahuan di database */
			echo "<h1>Diagnosa...</h1>";
			
			/* proses penambahan nilai*/
			$number = 0;
			$command = mysql_query("SELECT * FROM tb_batuk");
			mysql_query("UPDATE tb_batuk set dynamicValue = 0"); /*---RESET---*/
			for($i=1; $i < intval($maxGejala); $i++){
				$GetGejala[$i] = $_POST["tb$i"]; /* mengambil data dari masing masing gejala per textbox */
				$keyInput = explode(" ", $GetGejala[$i]); /* split keyword inputan */
				while ($row = mysql_fetch_array($command)){ /* pencocokan input dengan database */
					$getID = $row['bt_id'];
					$key = explode(" ", $row['keywords']); /* split keyword database */
					for($j=0; $j <  count($keyInput); $j++){
						for($k=0; $k <  count($key); $k++){
							if($keyInput[$j] == $key[$k]){
								$number = intval($row['dynamicValue']) + 1;
								mysql_query("UPDATE tb_batuk set dynamicValue = $number WHERE bt_id ='$getID'");
								/*kalau mau dites*/
							} else {
								
							}
						}
					}
				}
			}
			
			/* proses perhitungan */
			$count = 0;
			$changKode = "A";
			$changKodeAfter = "-";
			$ambilNilai = array(0,0,0,0,0,0,0,0,0,0);
			$penyakit = array("","","","","","","","");
			$akumulasi = 0;
			$c = 0; $poss = 0; $poscode;
			$cmd = mysql_query("SELECT * FROM tb_batuk");
			echo "<table cols=2>";
			while ($row = mysql_fetch_array($cmd)){
				$changKode = substr($row["bt_id"], 0, 1);
				if($changKode == $changKodeAfter){
					$akumulasi = $akumulasi + intval($row["dynamicValue"]);
				} else {
					$penyakit[$c] = $row['bt_batuk'];
					$changKodeAfter = $changKode;
					$ambilNilai[$c] = $akumulasi * ($c/100);
					echo "<tr>";
					echo "<td> $penyakit[$c] </td> <td> $ambilNilai[$c] </td>";
					echo "</td>";
					echo "</tr>";
					if($c > 1){
						if($ambilNilai[$c] > $ambilNilai[$poss]){
							$poss = $c;
							$poscode = $row['bt_id'];
						}
					}
					$akumulasi = 0; $c++;
				}
			}
			
			echo "</table>";
			/*pencarian nilai maksimal kemungkinan*/
			echo "Jadi nilai maksimal anda adalah ".$ambilNilai[$poss]." dengan penyakit diderita ".$penyakit[$poss];
			$cmd3 = mysql_query("SELECT * FROM tb_batuk where bt_id = '$poscode'");
			echo "<hr>";
			echo "<h1>Solusi Penyembuhan Penyakit ".$penyakit[$poss]."</h1>";
			while ($row = mysql_fetch_array($cmd3)){
				echo $row['bt_solusi'];
			}
	  ?>
    </div>
    <div class="clear"></div>
  </main>
</div>

<?php
  include "includes/footer.php";
?>
</body>
</html>