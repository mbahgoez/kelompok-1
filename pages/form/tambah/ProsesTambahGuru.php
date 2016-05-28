<?php
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];

$query = mysql_query("INSERT INTO guru VALUES('$id_guru', '$nama_guru','$jk','$alamat')");


cekQuery($query, "Data Guru berhasil ditambah!", "Data Guru gagal ditambah!", "#guru");