<?php
$query = mysql_query("SELECT * FROM guru");
$i = 1;
?>

<div id="guru">
	<div class="list-table">
		<div class="card">
			<div class="header">
				<h3>DAFTAR PENGAJAR</h3>
				<hr>
			</div>
			<div class="command">
				
				<a href="pages/form/tambah/TambahGuru.php" class="btn-tambah">TAMBAH PENGAJAR</a>
			</div>
			<div class="list">
			<div class="scrolling">
				<table>
					<thead>
						<tr>
							<th><i class="icon ion-pound"></i></th>
							<th>ID Guru</th>
							<th>Nama Guru</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
							<th colspan="2" align="center">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php while($data = mysql_fetch_array($query)){ ?>
						<tr>
							<td><?php echo $i++; ?></td>
							<td><?php echo $data['id_guru']; ?></td>
							<td><?php echo $data['nama_guru']; ?></td>
							<td><?php echo $data['jk']; ?></td>
							<td><?php echo $data['alamat']; ?></td>
							<td>
								<a href="pages/form/hapus/ProsesHapusGuru.php?id=<?php echo $data['id_guru']; ?>" class="hapus">
									HAPUS
								<i class="icon ion-ios-trash-outline"></i>
								</a>
							</td>

							<td>
								<a href="pages/form/update/UpdateGuru.php?id=<?php echo $data['id_guru']; ?>" class="edit">
									EDIT
								<i class="icon ion-edit"></i>
								</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
				</div>
			</div><!-- list -->
		</div><!-- card -->
	</div><!-- list table -->
</div><!-- guru -->