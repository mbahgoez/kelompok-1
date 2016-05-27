<?php
include "../../../partials/koneksi.php";

$id = $_GET['id'];
$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = mysql_query("UPDATE guru SET id_guru='$id_guru', nama_guru='$nama_guru', jk='$jk', alamat='$alamat' WHERE id_guru='$id'");


if($query){
    ?>
    <script>
        alert("Data Berhasil diperbarui!");
        location.href = 'http://localhost/design-adm/index.php#guru';
    </script>
    <?php
}