<?php 
	include("../../../partials/koneksi.php");
	include("../../../partials/functions.php");

	$id= $_GET['id'];
	$query= mysql_query("DELETE FROM pelajaran WHERE id_pelajaran='$id'");
	
	if($query){
		directMsg("Data Mata Pelajaran Berhasil Dihapus!", "#mapel");
	}