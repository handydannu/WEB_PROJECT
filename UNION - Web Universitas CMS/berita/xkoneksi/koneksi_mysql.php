<?php

$conn = mysql_connect("localhost", "root", "") or die("gagal koneksi ke server");

if($conn){
	mysql_select_db("tubes", $conn) or die ("gagal koneksi ke database");
}else{
	echo "gagal koneksi ke server";
}

?>