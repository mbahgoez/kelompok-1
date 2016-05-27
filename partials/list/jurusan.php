<?php
    $query = mysql_query("SELECT * FROM jurusan");
    $i = 1;
?>
<div id="jurusan">
	<div class="list-table">
		<div class="card">
			<div class="header">
				<h3>DAFTAR JURUSAN</h3>
				<hr>
			</div>
			<div class="command">
				
				<a href="pages/form/tambah/TambahJurusan.php" class="btn-tambah">TAMBAH JURUSAN</a>
			</div>
			<div class="list">
				<div class="scrolling">
					<table>
						<thead>
							<tr>
								<th><i class="icon ion-pound"></i></th>
								<th>ID Jurusan</th>
								<th>Jurusan</th>
								<th colspan="2" align="center">Action</th>
							</tr>
						</thead>
						<tbody>
                        <?php while($data = mysql_fetch_array($query)){ ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $data["id_jurusan"]; ?></td>
								<td><?php echo $data["jurusan"]; ?></td>
								<td>
									<a href="pages/form/hapus/ProsesHapusJurusan.php?id=<?php echo $data["id_jurusan"]; ?>" class="hapus">
										HAPUS
									<i class="icon ion-ios-trash-outline"></i>
									</a>
								</td>

								<td>
									<a href="pages/form/update/UpdateJurusan.php?id=<?php echo $data["id_jurusan"]; ?>" class="edit">
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
</div><!-- kelas -->


<style>
	
	#jurusan {
		margin-bottom:100px;
	}
</style>