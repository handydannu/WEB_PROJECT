<h1>Hasil Pencarian</h1>
                        
					<?php
						error_reporting(E_ALL ^ E_DEPRECATED);
						$namahost = 'localhost';
						$dbusername = 'root';
						$dbpassword = '';
						$namabase = 'dbadsi';

						$koneksi = mysql_connect($namahost,$dbusername,$dbpassword);
						if (!$koneksi)
						{
							die('Database tidak terkoneksi: ' . mysql_error());
						}

						mysql_select_db($namabase, $koneksi);
						
						if (!empty($_REQUEST['cari'])) 
						{

						$cari = mysql_real_escape_string($_REQUEST['cari']);     
						
						$sql = "SELECT * FROM pasien WHERE pasien_nama LIKE '%".$cari."%'"; 
						$querycari = mysql_query($sql); 
						
						  echo "<table border='1'>
								<tr>
									<th>ID Pasien</th>
									<th>Nama Pasien</th>
									<th>Alamat</th>
									<th>Jenis Kelamin</th>
									<th>Umur</th>
									<th>Golongan Darah</th>
									<th>No HP</th>
									<th>Keterangan</th>
								</tr>";
					
						if ($row = mysql_fetch_array($querycari))
					  {  
						echo '<br />Data Ditemukan !';
						echo '<td>' .$row['pasien_id'] . '</td>';  
						echo '<td>' .$row['pasien_nama'] . '</td>'; 
						echo '<td>' .$row['pasien_alamat'] . '</td>'; 
						echo '<td>' .$row['pasien_jk'] . '</td>'; 
						echo '<td>' .$row['pasien_umur'] . '</td>'; 
						echo '<td>' .$row['pasien_goldar'] . '</td>';
						echo '<td>' .$row['pasien_nohp'] . '</td>';
						echo '<td>Pasien sudah terdaftar di list pasien</td>';
						echo '</tr>';
						echo '</table>';
					   } 
						else
						{
						echo '<td>'."Data Kosong".'</td>';  
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>';   
						echo '<td>'."Data Kosong".'</td>'; 
						echo '</tr>';
						echo '</table>';
						}
						}
					
					?>	