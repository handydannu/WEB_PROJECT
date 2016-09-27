<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "riwayat_penyakit";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");


if(isset($_POST['username']))
{
$username = mysql_real_escape_string($_POST['username']);

$check_for_username = mysql_query("SELECT id_dokter FROM dokter WHERE id_dokter='$username'");

if(mysql_num_rows($check_for_username))
{
echo '1';
}
else
{
echo '0'; 
}

}

?>