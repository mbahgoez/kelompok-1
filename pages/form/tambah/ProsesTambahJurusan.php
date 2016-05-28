<?php

include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$id = $_POST["id_jurusan"];
$jurusan = $_POST["nama_jurusan"];

$query = mysql_query("INSERT INTO jurusan VALUES('$id','$jurusan')");

cekQuery($query, "Data Jurusan Berhasil Ditambah!", "Data Jurusan Gagal Ditambah!", "#jurusan");