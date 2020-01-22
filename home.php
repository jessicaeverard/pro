<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>

	<style>
		body {
			background-color: #eae7dc;
			margin:0;
		}
		.title {
			margin-top: -5px;
			font-family: verdana;
			color: #e85a4f;
			font-size: 70px;
		}

		h1{
			font-family: verdana;
			color: #e85a4f;
			margin-top: -55px;
		}
		.buttons {
  			width: 180px;
  			height: 100vh;
  			background-color: #d8c3a5;
		}

		.header{
			width: 100%;
			height:130px;
			background-color: #d8c3a5;
		}
	</style>

	<?php
	$username = $_GET['username']; // This will fetch the username being passed by the register page from the url bar using the GET method
	echo "
	<div class='header'><center><h1 class = 'title'>Hello $username, </h1></div>
	<div class = 'buttons'></center></div>
	" ;
	?>

</body>
</html>