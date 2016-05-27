<?php
include "../../../partials/koneksi.php";
$id = $_GET["id"];
$id_jurusan = $_POST["id_jurusan"];
$nama_jurusan = $_POST["nama_jurusan"];

$query = mysql_query("UPDATE jurusan SET id_jurusan='$id_jurusan', jurusan='$nama_jurusan' WHERE id_jurusan='$id'") or die(mysql_error());

if($query){
    ?>
    <script>
        alert("Pembaruan data telah Berhasil dilakukan!");
        location.href="http://localhost/design-adm/index.php#jurusan";
    </script>
    <?php
}