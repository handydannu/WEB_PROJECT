<?php
session_start();
mysql_connect('localhost','root','');
mysql_select_db('dbadsi'); 

$query= "select * from petugas where petugas_username = '$_POST[username]' and petugas_password = '$_POST[password]' and petugas_tipe='apoteker'";
$result= mysql_query($query);
if (mysql_num_rows($result)>0 ) 
{
$_SESSION['username'] = $_POST['username'];
header("location:apoteker_beranda.php");
} 
else{header("location:error_login.php");};

?>  
