<?php 
	include("../../../partials/koneksi.php");
	include("../../../partials/functions.php");

	$id= $_GET['id'];
	$query= mysql_query("DELETE FROM pelajaran WHERE id_pelajaran='$id'");
	
	cekQuery($query, "Data Mata Pelajaran Berhasil Dihapus!", "Data Mata Pelajaran Gagal Dihapus!", "#mapel");