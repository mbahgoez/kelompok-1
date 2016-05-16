<?php include "../../../partials/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah User</title>
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
							<label>ID Jurusan</label>
							<input type="text" name="id_jurusan" placeholder="RPL/MM/TKJ/AN/DKV" required>
						</div>
					</div>

					<div class="row">
						<div class="col-100">
							<label>Nama Jurusan</label>
							<input type="text" name="nama_jurusan" placeholder="Masukan Nama Jurusan" required>
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