<?php
	include "../../../partials/functions.php";
	include "../../../partials/koneksi.php";
	
	//variabel data
	$nis = $_GET['nis'];
	
	//query
	$hapus = mysql_query("DELETE FROM siswa WHERE nis = $nis");
	
	//pesan
	cekQuery($hapus, "Data Siswa Berhasil Dihapus!", "Data Siswa Gagal Dihapus!", "#siswa");