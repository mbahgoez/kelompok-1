<?php 
	include "../../../partials/koneksi.php";
	include "../../../partials/functions.php";

	$id= $_POST["id_pelajaran"];
	$nama=$_POST["nama_pelajaran"];
	$kelas=$_POST["kelas"];
	$guru=$_POST["id_guru"];

	$query= mysql_query("insert into pelajaran values('$id','$nama','$kelas','$guru')") or die(mysql_error());

	cekQuery($query, "Data Mata Pelajaran Berhasil Ditambah!", "Data Mata Pelajaran Gagal Ditambah", "#mapel");