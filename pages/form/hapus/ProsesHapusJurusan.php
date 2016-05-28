<?php
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$id = $_GET["id"];

$query = mysql_query("DELETE FROM jurusan WHERE id_jurusan='$id'");

cekQuery($query, "Data Jurusan Berhasil Dihapus!", "Data Jurusan Gagal Dihapus!", "#jurusan");