<?php
include('graph/phpgraphlib.php');
$graph = new PHPGraphLib(650,200);
$data = array(1.02,0.667,0.367,0.278,0.237,0.187,0.155,0.156,0.142,0.111,0.12,
		0.097,0.099,0.089,0.079);
$graph->addData($data);
$graph->setTitle('Banyak Obat Terlarut');
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->createGraph();
?>