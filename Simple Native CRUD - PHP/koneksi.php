<?php
$dsn  = "mysql:dbname=lisnawati_21111087;host=localhost";
$user = "root";
$pass = "";
 
try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Koneksi ke database gagal: ".$e->getMessage();
}
?>