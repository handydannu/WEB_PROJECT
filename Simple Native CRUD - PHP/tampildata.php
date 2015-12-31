<!Doctype HTML>
<html>
    <body>
<?php
    include "koneksi.php";
?>    
    <?php
        if (!empty($_GET['tambah']) && $_GET['tambah'] == 'berhasil') 
        {
            echo '<center>';
            echo '<img src="gambar/ok.png">&nbsp;&nbsp;<font color="green" size="2">Data berhasil di tambahkan !</font>';
            echo '</center><br/><br/>';
        }
    ?>
    <?php
        if (!empty($_GET['edit']) && $_GET['edit'] == 'berhasil') 
        {
            echo '<center>';
            echo '<img src="gambar/ok.png">&nbsp;&nbsp;<font color="green" size="2">Data berhasil di edit !</font>';
            echo '</center><br/><br/>';
        }
    ?>
    <?php
        if (!empty($_GET['hapus']) && $_GET['hapus'] == 'berhasil') 
        {
            echo '<center>';
            echo '<img src="gambar/ok.png">&nbsp;&nbsp;<font color="green" size="2">Data berhasil di dihapus !</font>';
            echo '</center><br/><br/>';
        }
    ?>

    
    <h1>Data Bunga</h1>
    <hr size="4" width="auto" color="#B62ECE">
     <br/>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Bunga</th>
                    <th>Nama Bunga</th>
                    <th>Harga Bunga (Rp.)</th>
                    <th>Warna</th>
                    <th>Nama Supplier</th>
                    <th>Asal Kota Supplier</th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM databunga";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kode]";?></d>
                <td><?php echo "$data[nama]";?></td>
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