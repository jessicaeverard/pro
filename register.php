<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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

		h1{
			font-family: verdana;
			color: #e85a4f;
			margin-top: -25px;
		}

		.inputs{
			height: 10px;
			width: 220px;
			font-family: verdana;
			background-color: #eae7dc;
			color: #8e8d8a;
			border-radius: 4px;
			border:none;
			font-size: 13px;
			padding: 10px;
		}

		#box{
			width:300px;
			height: 400px;
			margin: auto;
			background: #e85a4f;
			padding: 25px;
			border-radius: 5px;
			margin-top: -5px;
		}

		#button{
			font-family: verdana;
			background-color: #eae7dc;
			color: #111111;
			border-radius: 4px;
			border:none;
			font-size: 20px;
		}

	</style>
	<button><a href = 'project1.php '> Back</a></button>
		<center><h1> Register </h1></center>
		<div id="box">
		<center><form method = 'post'>
			<input type = 'text' placeholder = 'First name' name = 'firstname' class = 'inputs'>
			<p></p>
			<input type = 'text' placeholder = 'Surname' name = 'surname' class = 'inputs'>
			<p></p>
			<input type = 'email' placeholder="E-mail" name="email" class='inputs'>
			<p></p>
			<input type="text" placeholder = 'Username' name="username" class = 'inputs'>
			<p></p>
			<input type="password" placeholder="Password" name="password" class = 'inputs'>
			<p></p>
			<input type="password" placeholder = 'Confirm password' name="confirmpassword" class = 'inputs'>
			<p></p>
			<input type="date" placeholder="Date of birth" name="dob" class = 'inputs'>
			<p></p>
			<input type="number" placeholder="Phone number" name="phonenumber" class = 'inputs'>
			<p></p>
			<input type = 'submit' placeholder='Register' name='register' id = 'button'>
		</form></center>
	</div>

</body>
</html>