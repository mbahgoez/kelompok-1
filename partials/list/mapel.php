<?php
	$sql = mysql_query('select * from pelajaran');
?>

<div id="mapel">
	<div class="list-table">
		<div class="card">
			<div class="header">
				<h3>DAFTAR MATA PELAJARAN</h3>
				<hr>
			</div>
			<div class="command">
				
				<a href="pages/form/tambah/TambahMapel.php" class="btn-tambah">TAMBAH MATA PELAJARAN</a>
			</div>
			<div class="list">
				<div class="scrolling">
					<table>
						<thead>
							<tr>
								<th><i class="icon ion-pound"></i></th>
								<th>ID Mapel</th>
								<th>Nama Pelajaran</th>
								<th>Kelas</th>
								<th>ID Guru</th>
								<th colspan="2" align="center">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							$i=1;
while($data= mysql_fetch_array($sql)){
							?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $data['id_pelajaran'];?></td>
								<td><?php echo $data['nama_pelajaran'];?></td>
								<td><?php echo $data['kelas'];?></td>
								<td><?php echo $data['id_guru'];?></td>
								<td>
									<a href="pages/form/hapus/ProsesHapusMapel.php?id=<?php echo $data['id_pelajaran']?>" class="hapus">
										HAPUS
									<i class="icon ion-ios-trash-outline"></i>
									</a>
								</td>

								<td>
									<a href="pages/form/update/UpdateMapel.php?id=<?php echo $data['id_pelajaran']; ?>" class="edit">
										EDIT
									<i class="icon ion-edit"></i>
									</a>
								</td>
							</tr>
						
							<?php 
								}
							?>					
						</tbody>
					</table>
				</div><!-- scrolling -->
			</div><!-- list -->
		</div><!-- card -->
	</div><!-- list table -->
</div><!-- mapel -->