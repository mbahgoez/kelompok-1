<?php

include "../../../partials/koneksi.php";

$id = $_POST["id_jurusan"];
$jurusan = $_POST["nama_jurusan"];

$query = mysql_query("INSERT INTO jurusan VALUES('$id','$jurusan')");

if($query){
    header("Location:http://localhost/design-adm/index.php#jurusan");
}
else {
    ?>
    <script>
        alert("Gagal Menambahkan Jurusan");
        location.href="http://localhost/design-adm/index.php#jurusan";
    </script>
    <?php
}