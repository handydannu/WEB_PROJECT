<?php
	/* Database Settings */
	$db_host	= 'localhost';	// host name
	$db_name	= 'riwayat_penyakit';	// database name
	$db_user	= 'root';		// database user
	$db_pwd		= '';			// database password
	
	/* Include the class */
	include('dumper.php');
	
	$dumper = new ABCmysqlDumper($db_host, $db_name, $db_user, $db_pwd); // creating an object of the class, passing the db settings to its constructor
	$file = $dumper->generateDump(); 				/* generates the dump and will allow you to download the file with filename in the format "dbname-Day_Month_Year_HHMMSS" */
	
	//$file = $dumper->generateDump(false);			/* this will return the dump(will be available in $file) */
	//$file = $dumper->generateDump(true, 'abc');	/* generates the dump and will allow you to download the file with filename as "abc.sql" */
	
	if($file === false)
		echo 'Sorry, was not able to create the dump!';
	//else
	//	echo $file;

?>