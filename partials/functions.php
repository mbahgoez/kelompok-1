<?php

// Functions

function siteUrl($url){
	echo "http://".$_SERVER['SERVER_NAME']."/kelompok-1/".$url;
}
function directToLogin(){
	if(!isset($_SESSION["user"])){
 		header("Location:http://localhost/kelompok-1/login.php");
 	}
}
function directToIndex(){
	if(isset($_SESSION["user"])){
 		header("Location:http://localhost/kelompok-1/");
 	}
}
function numTable($primary,$table){
	$sql = mysql_query("SELECT $primary FROM $table");
	echo mysql_num_rows($sql);
}
function directMsg($msg, $url){
	?>
	<script>
		alert("<?php echo $msg ?>");
		location.href = "<?php siteUrl($url); ?>";
	</script>
	<?php
}