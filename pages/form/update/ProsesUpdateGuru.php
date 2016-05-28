<?php
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$id = $_GET['id'];
$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = mysql_query("UPDATE guru SET id_guru='$id_guru', nama_guru='$nama_guru', jk='$jk', alamat='$alamat' WHERE id_guru='$id'");

cekQuery($query, "Data Guru Berhasil Diperbarui!", "Data Guru Gagal Diperbarui!", "#guru");