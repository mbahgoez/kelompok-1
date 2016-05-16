<?php

// Functions and Connections

$server = "localhost";
$user = "root";
$pass = "";
$db = "";

$connect = mysql_connect($server, $user, $pass) or die(mysql_error());


function siteUrl($url){
	echo "http://".$_SERVER['SERVER_NAME']."/design-adm/".$url;
}