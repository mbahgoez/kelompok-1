<?php

	//koneksi
    include "../../../partials/functions.php";
    include "../../../partials/koneksi.php";
	
	//variabel
	$nis = $_POST['nis'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$id_jurusan = $_POST['id_juru'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	
	//query
	$tambah = mysql_query("insert into siswa values('$nis', '$nama_lengkap', '$id_jurusan', '$jk', '$alamat')") or die(mysql_error());
	
	//pesan
	if($tambah){
		echo"<script> alert('Data Berhasil Ditambah');
		location.href = 'http://localhost/design-adm/index.php#siswa';
		</script>";
	}
?>