<?php
include "../../../partials/koneksi.php";
$id = $_GET["id"];
$query = mysql_query("DELETE FROM jurusan WHERE id_jurusan='$id'");

if($query){
?>
    <script>
        alert("Berhasil Menghapus");
        location.href = "http://localhost/design-adm/index.php#jurusan";
    </script>

    <?php
}