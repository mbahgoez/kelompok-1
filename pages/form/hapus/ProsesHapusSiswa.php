<?php
	include "../../../partials/functions.php";
	include "../../../partials/koneksi.php";
	
	//variabel data
	$nis = $_GET['nis'];
	
	//query
	$hapus = mysql_query("delete from siswa where nis = $nis");
	
	//pesan
	if ($hapus){
		echo "<script>alert('Berhasil dihapus');
		location.href ='http://localhost/design-adm/index.php#siswa';
		</script>";
	}else
		echo "<script>alert('GAGAL dihapus');
		location.href =''http://localhost/design-adm/index.php#siswa';
		</script>";
?>