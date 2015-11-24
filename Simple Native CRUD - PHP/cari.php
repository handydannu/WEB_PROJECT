<!Doctype HTML>
<html>
    <body>
<?php
    include "koneksi.php";
?>    

    
    <h1>Cari Data Bunga</h1>
    <hr size="4" width="auto" color="#B62ECE">

    <form action="hasilcari.php" method="post">  
        <input placeholder="Cari nama bunga" type="search" name="cari" size="80" id="cari">
        <input type="submit" value="Cari">
    </form>
    <hr size="4" width="auto" color="#B62ECE">
    </body>
</html>