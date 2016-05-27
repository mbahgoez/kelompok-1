<div id="user-team">
	<div class="card">
		<div class="header">
			<h3>TEAM ASSASINS</h3>
			<hr>
		</div>
		<div class="list">
			<ul>
				<?php
				$query = mysql_query("SELECT * FROM user");
				?>
				<?php while($data = mysql_fetch_array($query)){?>
				<li>
					<div class="item">
						<span class="avatar"></span>
						<div class="desc">
							<h6 class="name"><?php echo $data["nama_lengkap"]; ?></h6>
							<p><?php echo $data["bio"]; ?></p>
						</div>
						<a class="hapus" href="pages/form/hapus/ProsesHapusUser.php?user=<?php echo $data["user_name"]; ?>"></a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="footer">
			<a href="pages/form/tambah/TambahUser.php" class="btn-tambah">TAMBAH USER</a>
		</div>
	</div>
</div><!-- user team -->

