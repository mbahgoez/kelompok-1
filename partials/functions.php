<?php

// Functions

function siteUrl($url){
	echo "http://".$_SERVER['SERVER_NAME']."/kelompok-1/".$url;
}
function directToLogin(){
	if(!isset($_SESSION["user"])){
 		header("Location:http://".$_SERVER['SERVER_NAME']."/kelompok-1/login.php");
 	}
}
function directToIndex(){
	if(isset($_SESSION["user"])){
 		header("Location:http://".$_SERVER['SERVER_NAME']."/kelompok-1/");
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
function cekQuery($query, $msg1, $msg2, $url){

	if($query){
		?>
		<script>
			alert("<?php echo $msg1; ?>");
			location.href = "<?php siteUrl($url); ?>";
		</script>
		<?php
	} else {
		?>
		<script>
			alert("<?php echo $msg2; ?>");
			location.href = "<?php siteUrl($url); ?>";
		</script>
		<?php
	}
}