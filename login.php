<!DOCTYPE html>
<html>
<head>
	<title>Log in</title>
</head>
<body>
	<h1 class = 'title'>RewardMe.</h1>
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
			height: 225px;
			width: 500px;
			background-color: #d8c3a5;
			margin: 1% auto;			
			text-align: center;
			font-family: verdana;
			color: #e98074;
			border-radius: 4px;
		}
		.inputs{
			font-size: 30px;
			font-family: verdana;
			background-color: #eae7dc;
			color: #8e8d8a;
			border-radius: 4px;
			border:none;
		}
	</style>
	<div class = 'box'>
		<h1>Log In</h1>
		<form method="post" class = 'box'>
			<input type="text" name="username" placeholder="Username" class ='inputs' autocomplete="off">
			<p></p>
			<input type="password" name="password" placeholder="Password" class = 'inputs'>
			<p></p>
			<input type="submit" value="Log-in" name="login" class = 'inputs'>
		</form>
	</div>
	
</body>
</html>
