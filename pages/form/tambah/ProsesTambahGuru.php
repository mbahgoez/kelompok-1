<?php
include "../../../partials/koneksi.php";

$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = mysql_query("INSERT INTO guru VALUES('$id_guru', '$nama_guru','$jk','$alamat')");

if($query){
    ?>
    <script>
        alert("Data Berhasil di tambahkan!");
        location.href = 'http://localhost/design-adm/index.php#guru';
    </script>
    <?php
}