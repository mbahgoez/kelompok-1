<?php
 include "partials/koneksi.php";
 include "partials/functions.php"; 

 directToIndex();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get Access and Manage</title>
	<link rel="stylesheet" href="css/ionicons.min.css">
	<style>
	@-webkit-keyframes arrowdown {
		0%{top:0px;}
		100%{top:20px;}
	}
	@-webkit-keyframes arrowdown {
		0%{top:0px;}
		100%{top:20px;}
	}
	@keyframes arrowdown {
		0%{top:0px;}
		100%{top:20px;}
	}
	@-webkit-keyframes shake {
		0%{-webkit-transform:rotate(40deg);transform:rotate(40deg);}
		100%{-webkit-transform:rotate(-40deg);transform:rotate(-40deg);}
	}
	@keyframes shake {
		0%{-webkit-transform:rotate(40deg);transform:rotate(40deg);}
		100%{-webkit-transform:rotate(-40deg);transform:rotate(-40deg);}
	}
	body {
		background:#60C0E1;
		color:#fff;
		font-family:'raleway', 'segoe ui', sans-serif;
		text-align:center;
	}
	* {
		box-sizing:border-box;
	}

	div.row {
		padding:10px;
		padding-top:30px;
	}
	div.row i.animate {
		font-size:50px;
		position:relative;
		-webkit-animation:arrowdown .3s alternate infinite;
		        animation:arrowdown .3s alternate infinite;
		/* top:0; */
	}
	div.row i:hover {
		/* top:20px; */
	}
	div.row h1 {
		margin:0;
		padding:0;
		text-transform:uppercase;
		font-size:50px;
		transition: all .3s ease;
	}
	div.row h1 i {
		margin-right:10px;
	}
	div.row h1:hover {
		letter-spacing:6px;
	}
	div.row h1::after {
	    display: block;
	    width: 60%;
	    margin:auto;
	    height: 2px;
	    content: "";
	    background: #fff;
	}
	div.row h1 span {
		font-family:monospace;
		font-size:20px;
		font-weight:lighter;
		position:relative;
		top:-20px;
		left:0px;
	}
	div.row p {
		line-height:140%;
		padding:0px 20%;
		font-size:16px;
	}
	div.content {
		width:100%;
		padding:10px 15%;
	}
	div.content::after {
		content:"";
		display:block;
		clear:both;
	}
	div.ill {
		width:60%;
		float:left;
		margin-top: -60px;
	}
	div.ill h3 {
		margin:0;
		padding:0;
		position:relative;
		top:50px;
		font-size:30px;
		font-weight:400;
	}
	div.ill i {
		margin:0px 10px;
	}
	div.ill .icon-left {
		font-size:100px;
		display:inline-block;
		-webkit-animation:shake 1s alternate infinite;
		        animation:shake 1s alternate infinite;
	}
	div.ill .icon-center {
		font-size:200px;
	}
	div.ill .icon-right {
		font-size:100px;
	}
	div.form {
		width:40%;
		float:left;
		padding: 0 10px;
	    border-left: 2px solid #fff;
	}
	div.form input {
		width:100%;
		padding:12px 10px;
		border:3px solid #93D8EF;
		margin:5px 0;
		border-radius:3px;
		font-family:'raleway', 'segoe ui', sans-serif;
		color:#60C0E1;
	}
	div.form p {
		padding: 0;
	    margin: 0;
	    margin-bottom: 10px;
	    text-align: right;
	    text-transform: lowercase;
	/*     text-decoration: underline; */
	    font-family:monospace;
	}
	div.form input::-webkit-input-placeholder {
		color:#999;
		font-family:'raleway', 'segoe ui', sans-serif;
	}
	div.form button {
		float:right;
		border:3px solid #93D8EF;
		background:transparent;
		padding:15px 30px;
		font-family:'raleway', 'segoe ui', sans-serif;
		font-weight:600;
		font-size:18px;
		color:#fff;
		margin-top:5px;
		overflow:hidden;
		position:relative;

	}
	div.form button span {
		position:relative;
		left:0;
		transition:all .3s ease-in-out;
	}
	div.form button:hover span{
		left:15px;
		display:inline-block;
	}
	div.form button:hover i{
		position:relative;
		right:-50px;
		opacity:0;
	}
	div.form button i {
		transition:all .3s ease;
		right:0;
		margin-left:10px;
	}

	div.form input:focus, div.form button:focus {
		outline:none;
	}


	</style>
</head>
<body>
	<div class="row">
		<h1><i class="icon ion-ios-pulse-strong"></i>Memanage Web-Apps<span>Beta 0.5</span></h1>
		<p>Website ini adalah website CRUD yang dirancang untuk keperluan memanage atau mempermudah sisi Manajemen. Semoga anda senang dan nyaman dengan adanya website ini. Cheers!</p>
		<i class="icon ion-ios-arrow-down animate"></i>
	</div>
	<div class="content">
		<div class="ill">
			<h3>#AnggapSajaRumahSendiri!</h3>
			<i class="icon ion-erlenmeyer-flask icon-left"></i>
			<i class="icon ion-ios-people icon-center"></i>
			<i class="icon ion-android-create icon-right"></i>
		</div>
		<div class="form">
				<p>Isikan Dibawah ini!</p>
			<form action="partials/authenticate.php" method="POST">
				<input type="text" placeholder="Username *wajib" name="username">
				<input type="password" placeholder="Password *wajib" name="password">
				<button><span>Masuk Sebagai Admin</span> <i class="icon ion-arrow-right-c"></i></button>	
			</form>
		</div>
	</div>
</body>
</html>