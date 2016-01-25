<?php session_start(); 
    
    if(($_SESSION['ses_username'] != "") and ($_SESSION['ses_password'] != ""))
    {
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selamat datang di Universitas Ontario</title>

<?php include 'xincludes/stylesheet.php'; ?>
<?php include 'xincludes/script_dds.php'; ?>
<?php include '../berita/xlinker/listing.php'; ?>

</head>
<body id="subpage">

<div id="tubes_wrapper">
    
    <?php include 'xmenu/menu_admin.php'; ?>
    
    <div id="tubes_page_intro">
        <h1>List Kurikulum</h1>
        <p align="justify">Selamat datang admin !</p>
    </div>
    
    
    <div id="tubes_main">
        <div id="tubes_content" class="left">



                <table align="center">
                    <tr>
                        <th><a href="#" class="kurmore2">Pariwisata</a></th>
                        <th><a href="../prodi/indo.php" class="kurmore">Sastra Indonesia</a></th>
                        <th><a href="../prodi/eng.php" class="kurmore">Sastra Inggris</a></th>
                    </tr><tr>
                        <th><a href="../prodi/france.php" class="kurmore">Sastra Perancis</a></th>
                        <th><a href="../prodi/german.php" class="kurmore">Sastra Jerman</a></th>
                        <th><a href="../prodi/russia.php" class="kurmore">Sastra Rusia</a></th>
                    </tr>
                </table>

            <div class="post-item">
                
                    <?php
                      if (!empty($_GET['delete']) && $_GET['delete'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil menghapus kurikulum !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                     <?php
                      if (!empty($_GET['add']) && $_GET['add'] == 'gagal') {
                      echo '<center>';
                      echo '<img src="../admin/images/hapus.png">&nbsp;&nbsp;<font color="red" size="2">Gagal melakukan operasi !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                     <?php
                      if (!empty($_GET['edit']) && $_GET['edit'] == 'success') {
                      echo '<center>';
                      echo '<img src="../images/ok.png">&nbsp;&nbsp;<font color="green" size="2">Berhasil mengubah kurikulum !</font>';
                      echo '</center>';
                     }
                     ?>
                     <br/><br/>
                
                <?php
                    include "../berita/xkoneksi/koneksi.php";
                ?>    
       <h3>Semester : I</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '1' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

       <h3>Semester : II</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '2' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : III</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '3' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : IV</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '4' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : V</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '5' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : VI</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '6' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : VII</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '7' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>

        <h3>Semester : VIII</h3>
        <table id="box-table-a">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>Tahun</th>
                    <th>Semester</th>
                    <th>SKS</th>
                    <th>Prodi</th>
                    <th>Keterangan</th>
                    <th colspan="2"></th>
                </tr>
            </thead>
        <tbody>
        <?php
            $sql = "SELECT * FROM tb_kurikulum             
            WHERE kur_semester = '8' AND kur_prodi = 'Program Pariwisata'";
            foreach ($dbh->query($sql) as $data) :
        ?>
            <tr>
                <td><?php echo "$data[kur_id]";?></d>
                <td><?php echo "$data[kur_matkul]";?></td>
                <td><?php echo "$data[kur_tahun]";?></td>
                <td><?php echo "$data[kur_semester]";?></td>
                <td><?php echo "$data[kur_sks]";?></td>
                <td><?php echo "$data[kur_prodi]";?></td>
                <td><?php echo "$data[kur_keterangan]";?></td>
                <td><a href="../prodi/edit_cur.php?id=<?php echo $data['kur_id'];?>">
                <img src="../admin/images/edit.png"></a></td>
                <td><a href="../prodi/del_cur.php?id=<?php echo $data['kur_id'];?>" onclick="return confirm('Anda yakin akan menghapus data?')">
                    <img src="../admin/images/hapus.png"></a>
            </tr>
        <?php
            endforeach;
        ?>
            </tbody>
        </table>
        
        
            </div>       

        <a href="../prodi/add_curicullum.php" class="more">Tambah Data</a>     
        <div class="clear"></div>        
        </div>
                
        <div class="col_3 right">
            <div class="sidebar_section sidebar_section_bg">
                <?php include '../admin/xmenu/side_admin.php';?>
            </div>
      </div>
        <div class="clear"></div>
                
    </div>
</div>

<div id="tubes_bottom_wrapper">
    <div id="tubes_bottom">     
        <div class="clear"></div>
    </div>
    
</div>

<div id="tubes_footer_wrapper">
    <div id="tubes_footer">
        <?php include 'xlinker/footlink.php'; ?>
    </div>
</div>

</body>
</html>


<?php 
    }
    else
    {
        header('Location: ../admin/login.php');
    }
?>