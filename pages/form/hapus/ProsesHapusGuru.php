<?php

include "../../../partials/koneksi.php";

$id = $_GET['id'];

$query = mysql_query("DELETE FROM guru WHERE id_guru='$id'");


if($query){
    ?>
    <script>
        alert("Data Berhasil di dihapus!");
        location.href = 'http://localhost/design-adm/index.php#guru';
    </script>
    <?php
}