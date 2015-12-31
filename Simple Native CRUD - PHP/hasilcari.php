<!Doctype HTML>
<html>
    <body>
<?php
    include "koneksi.php";
?>    

    
    <h1>Data Bunga</h1>
    <hr size="4" width="auto" color="#B62ECE">

    <form action="hasilcari.php" method="post">  
        <input placeholder="Cari nama bunga" type="search" name="cari" size="80" id="cari">
        <input type="submit" value="Cari">
    </form>

    <hr size="4" width="auto" color="#B62ECE">
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Bunga</th>
                    <th>Nama Bunga</th>
                    <th>Stok bunga (batang)</th>
                    <th>Harga Bunga (Rp.)</th>
                    <th>Warna</th>
                    <th>Nama Supplier</th>
                    <th>Asal Kota Supplier</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $cari = ($_POST['cari']); 
            $sql = "SELECT * FROM databunga WHERE nama LIKE '%".$cari."%'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kode]";?></d>
                <td><?php echo "$data[nama]";?></td>
                <td><?php echo "$data[stok]";?></td>
                <td><?php echo "$data[harga]";?></td>
                <td><?php echo "$data[warna]";?></td>
                <td><?php echo "$data[suplier]";?></td>
                <td><?php echo "$data[asal]";?></td>
	    </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
        <hr size="4" width="auto" color="#B62ECE">
    </body>
</html>