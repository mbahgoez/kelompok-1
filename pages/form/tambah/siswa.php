<?php include "../../../partials/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Siswa</title>
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
						<div class="col-33">
							<label>NIS</label>
							<input type="number" name="nis" placeholder="NIS" required>
						</div>
					
						<div class="col-66">
							<label>Fullname</label>
							<input type="password" name="password" placeholder="Please Enter Your Name" required>
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label>ID Jurusan</label>
							<input type="number" name="number" placeholder="Number" required>
						</div>
					</div>
					<div class="row">
						<label for="">Jenis Kelamin</label>
						<label class="radio"><input type="radio" name="jk" name="l" required>Laki - laki</label>
						<label class="radio"><input type="radio" name="jk" name="p" required>Perempuan</label>
					</div>

					<div class="row">
						<div class="col-100">
							<label for="">Alamat Rumah</label>
							<input type="text" name="alamat" placeholder="Masukan Alamat" required>
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