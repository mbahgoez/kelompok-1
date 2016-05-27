<?php
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$id = $_GET["id"];

$query = mysql_query("DELETE FROM jurusan WHERE id_jurusan='$id'");

if($query){
	directMsg("Data Jurusan Berhasil Dihapus", "#jurusan");
}