<?php
$dsn  = "mysql:dbname=dbadsi;host=localhost";
$user = "root";
$pass = "";
 
try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: ".$e->getMessage();
}
?>