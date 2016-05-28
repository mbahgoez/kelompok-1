<?php
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$id = $_GET["id"];
$id_jurusan = $_POST["id_jurusan"];
$nama_jurusan = $_POST["nama_jurusan"];

$query = mysql_query("UPDATE jurusan SET id_jurusan='$id_jurusan', jurusan='$nama_jurusan' WHERE id_jurusan='$id'");

cekQuery($query, "Data Jurusan Berhasil Diperbarui!", "Data Jurusan Gagal Diperbarui!", "#jurusan");