<?php
	include "../../../partials/functions.php";
	include "../../../partials/koneksi.php";
	
	//variabel data
	$nisSebelumnya = $_GET['nisSebelum'];
	$nis = $_POST['nis'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$id_juru = $_POST['id_juru'];
	$jk = $_POST['jk'];
	$alamat = $_POST['alamat'];
	
	//query
	$update = mysql_query("update siswa set NIS=$nis, nama='$nama_lengkap', id_jurusan='$id_juru', jk='$jk', alamat='$alamat' where NIS=$nisSebelumnya");
	
	//pesan
	if ($update){
		echo "<script>alert('Data Berhasil di ubah');
		location.href ='http://localhost/design-adm/index.php#siswa';
		</script>";
	}else
		echo "<script>alert('Data Gagal di ubah');
		location.href ='http://localhost/design-adm/index.php#siswa';
		</script>";
?>