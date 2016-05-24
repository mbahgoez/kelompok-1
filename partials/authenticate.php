<?php 
include "koneksi.php";
include "functions.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$username = mysql_real_escape_string($_POST["username"]);
	$password = mysql_real_escape_string($_POST["password"]);

	$query = mysql_query("SELECT * FROM user WHERE user_name='$username' AND password='$password'");
	if($query){
		$num = mysql_num_rows($query);
		if($num == 1){
			$user = mysql_fetch_array($query);
			$_SESSION["user"] = $user["user_name"];
			$_SESSION["nama"] = $user["nama_lengkap"];
			$_SESSION["bio"] = $user["bio"];

			header("Location:http://localhost/design-adm/");
		}
		else {
			header("Location:http://localhost/design-adm/login.php");
		}
	}
}
else {
	echo "request method not found";
}