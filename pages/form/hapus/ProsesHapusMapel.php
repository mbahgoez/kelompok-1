<?php 
	include ("../../../partials/koneksi.php");
	$id= $_GET['id'];
	$query= mysql_query("delete from pelajaran where id_pelajaran='$id'");
	
	if($query){
		?>
		<script>
			alert("Data telah berhasil dihapus!");
			location.href="http://localhost/design-adm/index.php#mapel";
		</script>
	<?php
	}
?>