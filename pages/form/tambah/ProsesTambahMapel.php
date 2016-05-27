<?php 
	include "../../../partials/koneksi.php";

	$id= $_POST["id_pelajaran"];
	$nama=$_POST["nama_pelajaran"];
	$kelas=$_POST["kelas"];
	$guru=$_POST["id_guru"];

	$query= mysql_query("insert into pelajaran values('$id','$nama','$kelas','$guru')");

	if($query){
		header('location:http://localhost/design-adm/index.php#mapel');
	}
?>