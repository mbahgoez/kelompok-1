<?php
/**
 * Created by PhpStorm.
 * User: Bagus
 * Date: 24/05/2016
 * Time: 18:00
 */
include "../../../partials/koneksi.php";
include "../../../partials/functions.php";

$user = $_GET["user"];

$query = mysql_query("DELETE FROM user WHERE user_name='$user'");

if($query){
  	directMsg("Data Pengguna Berhasil Dihapus!", "#user-team");
}