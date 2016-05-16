<?php 
include "partials/functions.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DASHBOARD</title>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<link rel="stylesheet" href="css/nprogress.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<div id="arrow">
		<i class="icon ion-android-arrow-up"></i>
	</div>
	
	<nav>
		<?php include("partials/nav/menu.php"); ?>
	</nav>


	<section id="main">
		<?php include "partials/header.php"; ?>
		<div id="content">
			
			<?php include "partials/list/user.php"; ?>
			
			<?php include "partials/list/siswa.php"; ?>

			<?php include "partials/list/guru.php"; ?>
	
			<?php include "partials/list/mapel.php"; ?>

			<?php include "partials/list/jurusan.php"; ?>
		</div><!-- content -->
	</section>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.floatThead.min.js"></script>
	<script src="js/nprogress.js"></script>
	<script src="js/script.js"></script>
</body>
</html>