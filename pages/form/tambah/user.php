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
							<label>Username </label>
							<input type="text" name="user_name" placeholder="Please Enter Your Username" value="Bagus Mantonafi">
						</div>
					</div>
					<div class="row">
						<div class="col-50">
							<label>Password</label>
							<input type="password" name="password" placeholder="Please Enter Your Password">
						</div>
						<div class="col-50">
							<label>Re-Type Password</label>
							<input type="password" name="re_password" placeholder="Please Enter Your Re-Password">
						</div>
					</div>

					<div class="row">
						<div class="col-100">
							<label>Bio</label>
							<textarea name="" id="" cols="88" rows="10"></textarea>
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