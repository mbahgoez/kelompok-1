<?php
	include "../../../partials/functions.php";
	include "../../../partials/koneksi.php";
	
	//variabel data
	$nis = $_GET['nis'];
	
	//query
	$hapus = mysql_query("DELETE FROM siswa WHERE nis = $nis");
	
	//pesan
	if($hapus){
		directMsg("Data Siswa Berhasil Dihapus!", "#siswa")	
	}