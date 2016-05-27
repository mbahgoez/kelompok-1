<div id="siswa">
	<div class="list-table">
		<div class="card">
			<div class="header">
				<h3>DAFTAR SISWA</h3>
				<hr>
			</div>
			<div class="command">
				<a href="pages/form/tambah/TambahSiswa.php" class="btn-tambah">TAMBAH SISWA</a>
			</div>
			<div class="list">
				<div class="scrolling">
					<table>
						<thead>
							<tr>
								<th><i class="icon ion-pound"></i></th>
								<th>NIS</th>
								<th>Nama</th>
								<th>ID Jurusan</th>
								<th>Jenis Kelamin</th>
								<th>Alamat</th>
								<th colspan="2" align="center">Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php
							$urut = 1;
							$tampilkan = mysql_query("select * from siswa");
							while ($hasil = mysql_fetch_array($tampilkan)){
								echo' 
								<tr>
								<td>'.$urut.'</td>
								<td>'.$hasil[0].'</td>
								<td>'.$hasil[1].'</td>
								<td>'.$hasil[2].'</td>
								<td>'.$hasil[3].'</td>
								<td>'.$hasil[4].'</td>
								<td>
									<a href="http://localhost/design-adm/pages/form/Hapus/ProsesHapusSiswa.php?nis='.$hasil[0].'" class="hapus">
										HAPUS
									<i class="icon ion-ios-trash-outline"></i>
									</a>
								</td>

								<td>
									<a href="http://localhost/design-adm/pages/form/update/UpdateSiswa.php?nis='.$hasil[0].'" class="edit">
										EDIT
									<i class="icon ion-edit"></i>
									</a>
								</td>
							</tr>';
							$urut++;
							}
							?>
						</tbody>
					</table>
				</div><!-- scrolling -->
			</div><!-- list -->
		</div><!-- card -->
	</div><!-- list table -->
</div><!-- siswa -->