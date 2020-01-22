<!DOCTYPE html>
<html>
<head>
	<title>Online banking.</title>
</head>
<body>

	<h1 class = 'title'>Online banking.</h1>

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
		.box {
			font-size: 35px;
			height: 100px;
			width: 500px;
			background-color: #d8c3a5;
			margin: 1% auto;
			height: 400px;
			text-align: center;
			font-family: verdana;
			color: #e98074;
			border-radius: 4px;
		}
		.button {
			background-color: #e98074;
			color: #eae7dc;
			font-family: verdana;
			font-size: 50px;
			border-radius: 8px;
			cursor: pointer;
			width: 300px;
			padding: 15px;
		}
		
		.button:hover {
			background-color: #eae7dc; 
			color: #e98074;
			font-family: verdana;
			font-size: 50px;
		}
		a {
			text-decoration: none;
		}
		a:visited{
			color: #d8c3a5;
		}
	</style>
	<div class = 'box'>
		<h1> Welcome. </h1>
		<div>
			<button class = 'button'><a href = 'login.php '> Log - in  </a></button>
			<p> </p>
			<button class = 'button'><a href = 'register.php' >Register</a> </button>
		</div>
	</div>
</body>
</html>