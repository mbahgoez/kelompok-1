<?php 
include "../../../partials/koneksi.php";
include "../../../partials/functions.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Perbarui Siswa</title>
	<link rel="stylesheet" href="<?php echo siteUrl('css/ionicons.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo siteUrl('css/style.css'); ?>">
</head>
<body>

	<nav>
		<?php include("../../../partials/nav/menu.php"); ?>
	</nav>
	
	
	<section id="main">
	<?php include "../../../partials/header.php"; 
		$nis = $_GET['nis'];
		$tampilkan = mysql_query("SELECT * FROM siswa WHERE nis = $nis");
		$hasil = mysql_fetch_array($tampilkan);
	?>
		<div id="content">
			<form action="http://localhost/design-adm/pages/form/Update/ProsesUpdateSiswa.php?nisSebelum=<?php echo $nis; ?>" method="post">
				<div id="form-tambah">
					<div class="row">
						<div class="col-33">
							<label>NIS</label>
							<input type="number" name="nis" value="<?php echo $hasil[0]; ?>" required>
						</div>
					
						<div class="col-66">
							<label>Fullname</label>
							<input type="text" name="nama_lengkap" value="<?php echo $hasil[1]; ?>" required>
						</div>
					</div>
					<div class="row">
						<div class="col-100">
							<label>ID Jurusan</label>
							<input type="text" name="id_juru" value="<?php echo $hasil[2]; ?>" required>
						</div>
					</div>
					<div class="row">
						<label>Jenis Kelamin</label>
                        <?php
						if ($hasil[3] == 'L'){
						echo'
						<label class="radio"><input type="radio" name="jk" value="L" required checked>Laki - laki</label> 
						<label class="radio"><input type="radio" name="jk" value="P" required>Perempuan</label>';
						}else{
						echo'
						<label class="radio"><input type="radio" name="jk" value="L" required>Laki - laki</label>
						<label class="radio"><input type="radio" name="jk" value="P" required checked>Perempuan</label>';
						}
						?>
					</div>

					<div class="row">
						<div class="col-100">
							<label for="">Alamat Rumah</label>
							<input type="text" name="alamat" value="<?php echo $hasil[4]; ?>" required>
						</div>
					</div>

					
					
					<div class="row">
						<div class="col-100" align="right">
							<button class="btn-tambah" type="submit">PERBARUI <span><i class="icon ion-android-add"></i></span></button>
						</div>
					</div>

				</div>
			</form>
		</div>
	</section>

</body>
</html>