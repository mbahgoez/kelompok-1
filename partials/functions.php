<?php

// Functions

function siteUrl($url){
	echo "http://".$_SERVER['SERVER_NAME']."/design-adm/".$url;
}


function directToLogin(){
	if(!isset($_SESSION["user"])){
 		header("Location:http://localhost/design-adm/login.php");
 	}
}

function directToIndex(){
	if(isset($_SESSION["user"])){
 		header("Location:http://localhost/design-adm/");
 	}
}