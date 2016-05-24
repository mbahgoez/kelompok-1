<?php
session_start();

$server = "localhost";
$user = "root";
$pass = "";
$db = "sekolah_bagol";

$connect = mysql_connect($server, $user, $pass) or die(mysql_error());
mysql_select_db($db);

?>