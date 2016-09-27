<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('riwayat_penyakit'); 

$query= "select * from dokter where id_dokter = '$_POST[username]' and password = '$_POST[password]' ";
$result= mysql_query($query);
if (mysql_num_rows($result)>0 ) 
{
$_SESSION['nama_dokter'] = $_POST['username'];
header("location:dokter_beranda.php");
} 
else{header("location:error_login.php");};

?>  
