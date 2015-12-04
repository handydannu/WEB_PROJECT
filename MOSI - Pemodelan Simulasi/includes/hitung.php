<?php
    //inisialisasi X1 dari input
    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $x3 = $_POST['x3'];
    $x4 = $_POST['x4'];
    $x5 = $_POST['x5'];
    $x6 = $_POST['x6'];
    $x7 = $_POST['x7'];
    $x8 = $_POST['x8'];
    $x9 = $_POST['x9'];
    $x10 = $_POST['x10'];
    $x11 = $_POST['x11'];
    $x12 = $_POST['x12'];
    $x13 = $_POST['x13'];
    $x14 = $_POST['x14'];
    $x15 = $_POST['x15'];

        //inisialisasi Y1 dari input
    $y1 = $_POST['y1'];
    $y2 = $_POST['y2'];
    $y3 = $_POST['y3'];
    $y4 = $_POST['y4'];
    $y5 = $_POST['y5'];
    $y6 = $_POST['y6'];
    $y7 = $_POST['y7'];
    $y8 = $_POST['y8'];
    $y9 = $_POST['y9'];
    $y10 = $_POST['y10'];
    $y11 = $_POST['y11'];
    $y12 = $_POST['y12'];
    $y13 = $_POST['y13'];
    $y14 = $_POST['y14'];
    $y15 = $_POST['y15'];

    //inisialisasi 1/Yi
    $pery1 = round(@(1/$y1),5);
    $pery2 = round(@(1/$y2),5);
    $pery3 = round(@(1/$y3),5);
    $pery4 = round(@(1/$y4),5);
    $pery5 = round(@(1/$y5),5);
    $pery6 = round(@(1/$y6),5);
    $pery7 = round(@(1/$y7),5);
    $pery8 = round(@(1/$y8),5);
    $pery9 = round(@(1/$y9),5);
    $pery10 = round(@(1/$y10),5);
    $pery11 = round(@(1/$y11),5);
    $pery12 = round(@(1/$y12),5);
    $pery13 = round(@(1/$y13),5);
    $pery14 = round(@(1/$y14),5);
    $pery15 = round(@(1/$y15),5);

    //inisialisasi X kuadrat
    $xx1 = $x1*$x1;
    $xx2 = $x2*$x2;
    $xx3 = $x3*$x3;
    $xx4 = $x4*$x4;
    $xx5 = $x5*$x5;
    $xx6 = $x6*$x6;
    $xx7 = $x7*$x7;
    $xx8 = $x8*$x8;
    $xx9 = $x9*$x9;
    $xx10 = $x10*$x10;
    $xx11 = $x11*$x11;
    $xx12 = $x12*$x12;
    $xx13 = $x13*$x13;
    $xx14 = $x14*$x14;
    $xx15 = $x15*$x15;

    //inisialisasi Xi/Yi
	$xy1 = round(@($x1 / $y1),5);
	$xy2 = round(@($x2 / $y2),5);
	$xy3 = round(@($x3 / $y3),5);
	$xy4 = round(@($x4 / $y4),5);
	$xy5 = round(@($x5 / $y5),5);
	$xy6 = round(@($x6 / $y6),5);
	$xy7 = round(@($x7 / $y7),5);
	$xy8 = round(@($x8 / $y8),5);
	$xy9 = round(@($x9 / $y9),5);
	$xy10 = round(@($x10 / $y10),5);
	$xy11 = round(@($x11 / $y11),5);
	$xy12 = round(@($x12 / $y12),5);
	$xy13 = round(@($x13 / $y13),5);
	$xy14 = round(@($x14 / $y14),5);
	$xy15 = round(@($x15 / $y15),5);

	//sigma Xi
	$sigmax = ($x1 +$x2 +$x3 +$x4 +$x5 +$x6 +$x7 +$x8 +$x9 +$x10 +$x11 +
				$x12 +$x13 +$x14 +$x15);
	//sigma Yi
	$sigmay = ($y1 +$y2 +$y3 +$y4 +$y5 +$y6 +$y7 +$y8 +$y9 +$y10 +
				$y11 +$y12 +$y13 +$y14 +$y15);

	//sigma 1/Yi
	$sigma1y = ($pery1 +$pery2 +$pery3 +$pery4 +$pery5 +$pery6 +$pery7 +$pery8 +$pery9 +$pery10 +
				$pery11 +$pery12 +$pery13 +$pery14 +$pery15);

	$sigmaxx = ($xx1 +$xx2 +$xx3 +$xx4 +$xx5 +$xx6 +$xx7 +$xx8 +$xx9 +$xx10 +
				$xx11 +$xx12 +$xx13 +$xx14 +$xx15);

	$sigmaxy = ($xy1 +$xy2 +$xy3 +$xy4 +$xy5 +$xy6 +$xy7 +$xy8 +$xy9 +$xy10 +
				$xy11 +$xy12 +$xy13 +$xy14 +$xy15);

	$sigmax2 = $sigmax * $sigmax;
	$sigman = 15;

	//hitung b
	$hit1 = $sigman * $sigmaxy;
	$hit2 = $sigmax * $sigma1y;
	$hit3 = $sigman * $sigmaxx;

	$tot1 = $hit1 - $hit2;
	$tot2 = $hit3 - $sigmax2;

	$nilaib = round(@($tot1 / $tot2),5);

	//hitung a
	$hit4 = round(@($sigma1y / $sigman),5);
	$hit5 = round(@($sigmax / $sigman),5);
	$hit6 = round(($nilaib * $hit5),5);

	$nilaia = round(($hit4 - $hit6),5);
?>