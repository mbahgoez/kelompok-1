<div id="user">
	<div class="avatar">
		<span></span>
	</div>
	<div class="profil">
		<h1><?php echo $_SESSION["nama"]; ?></h1>
		<h2><?php echo $_SESSION["bio"]; ?></h2>
	</div>
</div>
<div id="menu">
	<ul>
		<li class="active">
			<a href="<?php siteUrl("#dashboard"); ?>">
				<i class="icon ion-ios-analytics-outline"></i>
				DASHBOARD
			</a>
		</li>
		<li>
			<a href="<?php siteUrl("#dashboard"); ?>">
				<i class="icon ion-ios-people"></i>
				USER ADMIN
			</a>
			<span class="badge">
				<?php numTable("user_name","user"); ?>
			</span>
		</li>
		<li>
			<a href="<?php siteUrl("#siswa"); ?>">
				<i class="icon ion-university"></i>
				SISWA TERDAFTAR
			</a>
			<span class="badge"><?php numTable("NIS","siswa"); ?></span>
		</li>
		<li>
			<a href="<?php siteUrl("#guru"); ?>">
				<i class="icon ion-person-stalker"></i>
				GURU PENGAJAR
			</a>
			<span class="badge"><?php numTable("id_guru","guru"); ?></span>
		</li>
		<li>
			<a href="<?php siteUrl("#mapel"); ?>">
				<i class="icon ion-ios-bookmarks-outline"></i>
				MATA PELAJARAN
			</a>
			<span class="badge"><?php numTable("id_pelajaran","pelajaran"); ?></span>
		</li>
		<li>
			<a href="<?php siteUrl("#jurusan"); ?>">
				<i class="icon ion-erlenmeyer-flask"></i>
				JURUSAN
			</a>
			<span class="badge"><?php numTable("id_jurusan","jurusan"); ?></span>
		</li>
	</ul>
</div>