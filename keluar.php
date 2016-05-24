<?php
include "partials/koneksi.php";

session_destroy();

if(empty($_SESSION["user"])){
	header("Location:http://localhost/design-adm/login.php");
}
else {
	session_destroy();
	header("Location:http://localhost/design-adm/login.php");
}