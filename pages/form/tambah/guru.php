<?php include "../../../partials/functions.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Guru</title>
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
							<label>ID Guru</label>
							<input type="text" name="id_guru" placeholder="ID Guru" required>
						</div>
						<div class="col-66">
							<label>Nama Guru</label>
							<input type="text" name="nama_guru" placeholder="Please Enter Fullname" required>
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label>Jenis Kelamin</label>
							<label class="radio">
								<input type="radio" name="jk" value="l" required>Laki - laki
							</label>
							<label class="radio">
								<input type="radio" name="jk" value="p" required>Perempuan
							</label>
						</div>
					</div>

					<div class="row">
						<div class="col-100">
							<label>Alamat</label>
							<textarea name="alamat" id="" cols="88" rows="10" required></textarea>
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