<?php include "../../../partials/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Mata Pelajaran</title>
	<link rel="stylesheet" href="<?php echo siteUrl('css/ionicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo siteUrl('css/style.css'); ?>">
</head>
<body>

	<nav>
		<?php include("../../../partials/nav/menu.php"); ?>
	</nav>
	
	
	<section id="main">
	<?php include "../../../partials/header.php"; ?>

		<div id="content">
			<form action="">
				<div id="form-tambah">
					<div class="row">
						<div class="col-100">
							<label>ID Pelajaran</label>
							<input type="text" name="id_pelajaran" placeholder="ID Pelajaran" required>
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label>Nama Pelajaran</label>
							<input type="text" name="name" placeholder="Fullname" required>
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label>Kelas</label>
							<input type="text" name="kelas" placeholder="Kelas" required>
						</div>
					</div>

					<div class="row">
						<div class="col-100">
							<label>ID Guru</label>
							<input type="text" name="id_guru" placeholder="ID Guru" required>
						</div>
					</div>
					
					<div class="row">
						<div class="col-100" align="right">
							<button class="btn-tambah" type="submit">TAMBAH <span><i class="icon ion-android-add"></i></span></button>
						</div>
					</div>

				</div>
			</form>
		</div>
	</section>

</body>
</html>