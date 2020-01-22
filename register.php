<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<h1 class = 'title'>On.</h1>
	
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
			margin-top:-55px;
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
		#back{
			font-family: verdana;
			background-color: #eae7dc;
			color: #111111;
			border-radius: 4px;
			border:none;
			font-size: 20px;
		}
		a {
			text-decoration: none;
		}
		a:visited{
			color: #8e8d8a;
		}
	</style>
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
			<input type = 'submit' value = 'Register' id = 'button' name = 'register'>
			<button id = 'back'><a href = 'project1.php'> Back to home</a></button>
		</form></center>
	</div>

	<?php

		if(isset($_POST['register'])){

		$firstname = 		$_POST['firstname'];
		$surname =   		$_POST['surname'];
		$email = 			$_POST['email'];
		$password = 		$_POST['password'];
		$confirmpassword= 	$_POST['confirmpassword'];
		$username = 		$_POST['username'];
		$phonenumber = 		$_POST['phonenumber'];
		$dob =  			$_POST['dob'];

		if(($firstname == "" or $surname == "" or $email == "" or $password == "" or $confirmpassword == "" or $username == "" or $phonenumber == "" or $dob == "") or ($password !== $confirmpassword)) {
            echo "<script>";
   			echo "alert('Please fill in all fields or check your password ')";
   			echo "</script>";
        }

        else {
		
		echo $firstname . $surname . $email . $username . $password . $confirmpassword . $phonenumber . $dob;
		$conn = mysqli_connect("localhost", "root", "", "reward");
		mysqli_query($conn, "INSERT INTO users (firstname, surname, email, password, confirmpassword, username, phonenumber, dob) values('$firstname', '$surname', '$email', '$password', '$confirmpassword', '$username', '$phonenumber', '$dob')");
		header("Location:http://localhost/project1/home.php?firstname=$username"); //This will redirect the user to a session page and then transfer their username to the home.php page using the GET method.
	    }
	}
	?>

</body>
</html>