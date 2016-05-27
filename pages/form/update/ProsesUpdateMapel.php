<?php
include "../../../partials/koneksi.php";

$id = $_GET["id"];
$id_pelajaran = $_POST['id_pelajaran'];
$nama_pelajaran = $_POST['nama_pelajaran'];
$kelas = $_POST['kelas'];
$id_guru = $_POST['id_guru'];
$query = mysql_query("UPDATE pelajaran SET id_pelajaran='$id_pelajaran', nama_pelajaran='$nama_pelajaran', kelas='$kelas', id_guru='$id_guru' WHERE id_pelajaran='$id'");


if($query){
    ?>
    <script>
        alert("Berhasil Memperbarui Data!");
        location.href='http://localhost/design-adm/index.php#mapel';
    </script>
    <?php
}