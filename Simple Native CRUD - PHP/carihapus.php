<!Doctype HTML>
<html>
    <body>
<?php
    include "koneksi.php";
?>    

    
    <h1>Hapus Data Bunga</h1>
    <hr size="4" width="auto" color="#B62ECE">

    <form action="hasilcarihapus.php" method="post">  
        <input placeholder="Cari nama bunga yang hendak di hapus" type="search" name="cari" size="80" id="cari">
        <input type="submit" value="Cari">
    </form>

    <hr size="4" width="auto" color="#B62ECE">
       </body>
</html>