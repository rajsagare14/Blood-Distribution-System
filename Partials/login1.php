<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/css/login.css">
	<title>Document</title>
</head>
<body>
<div class="image">
	  <img src="../Assets/Images/bgimg.jpg"  alt="hhhhhhhhh"/>
    </div>
	<div class="login-page">
		<div class="form">
		<h3>Enter Blood Bank Credentials</h3>
		  <form method = "POST" action = "../Actions/login1.php">
			<input type="text" placeholder="username" name="username"/>
			<input type="password" placeholder="password" name = "password"/>
			<button>login</button>
			<p class="message">Not registered? <a href="../Partials/signup.php">Create an account</a></p>
		  </form>
		</div>
	  </div>
	<script src="../Assets/login.js"></script>
</body>
</html>