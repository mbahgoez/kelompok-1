<?php
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";
$id = $_GET['id'];

$query = mysql_query("DELETE FROM guru WHERE id_guru='$id'");

if($query){
	directMsg("Data Pengajar Berhasil Dihapus!", "#guru");
}