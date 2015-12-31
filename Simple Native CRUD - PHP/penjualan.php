<!Doctype HTML>
<html>
    <body>
<?php
    include "koneksi.php";
?>    

    
    <h1>Data Penjualan</h1>
    <hr size="4" width="auto" color="#B62ECE"> <br/>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Bunga</th>
                    <th>Nama Pembeli</th>
                    <th>Jumlah (batang)</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>No. Telp</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM penjualan";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kode]";?></d>
                <td><?php echo "$data[pembeli]";?></td>
                <td><?php echo "$data[jumlah]";?></td>
                <td><?php echo "$data[alamat]";?></td>
                <td><?php echo "$data[kota]";?></td>
                <td><?php echo "$data[telp]";?></td>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
        <hr size="4" width="auto" color="#B62ECE">
    </body>
</html>