<!Doctype HTML>
<html>
    <body>
<?php
    include "koneksi.php";
?>    

    
    <h1>Data Bunga</h1>
    <hr size="4" width="auto" color="#B62ECE">
<br/>
        <table border="0">
            <thead>
                <tr>
                    <th>Kode Bunga</th>
                    <th>Nama Bunga</th>
                    <th>Harga Bunga (Rp.)</th>
                    <th>Warna</th>
		    <th></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM databunga";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "<img src='gambar/$data[kode].jpg' width=200 height=100 name='kode' alt='NO PICTURE' >";?></d>
                <td><?php echo "$data[nama]";?></td>
                <td><?php echo "$data[harga]";?></td>
                <td><?php echo "$data[warna]";?></td>
                <td><a href="belibarang.php?kode=<?php echo $data['kode'];?>">
                    <img src="gambar/ok.png"></a><font color="red">BELI !</font></td>
            </tr>
	    
		<td colspan="5">
		<br/>                
                <hr size="1" width="auto" color="#B62ECE"></td>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
        <hr size="4" width="auto" color="#B62ECE">
    </body>
</html>