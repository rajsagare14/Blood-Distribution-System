<?php
session_start();
include('../Actions/functions.php');
$loggedin_organization_name = null;
$identity = $_SESSION['identity'];
if (isset($_SESSION['organization'])) {
	$loggedin_organization_name = $_SESSION['organization'];
} else {
	echo "
		<script>
			alert('Login needed. if issue continues try by changing the browser')
			window.location='./login.php'
		</script>
		";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/css/dash1.css">
	<title>Order Blood</title>
</head>
<body>
<main>
	<div class="sidebar-header">

	
	
	
	
	</div>
	
	<div class="main-section-header">
		<div class="logo-header">
			<a href="#default" class="logo">
				<img src="../Assets/Images/logo.png" id="userlogo" alt="image">
			</a>
		</div>
		<!-- Nav bar system -->

		<nav class="navbar">
			
		<div class="sidebar-navbar">
			<!-- id="mySidebar" class="sidebar" -->
		<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> -->
			<a href="#">About</a>
			<a href="#">Services</a>
			<!-- <a href="#">Clients</a> -->
			<a href="#">Contact</a>
		</div>
		<div class="other-content">
		<i class="icon"><img src="../Assets/Images/usericon.png" alt=""></i>
			<span class="org-name">

				<?php
				echo $_SESSION['organization'];
				?>
				</span>
		</div>
			
		</nav>
	</div>
</main>
	<br>
	<h1>Search the Blood</h1>
	<br>
	<br>
	<br>
	<form action="../Actions/orderblood.php" method="post">
		<!-- to get the stocks updated -->
		<select name="type">
			<option value="wb">Whole Blood</option>
			<option value="pm">Plasma</option>
			<option value="pl">Platelet</option>

		</select>
		<select name="bloodgroup">
			<option value="ap">A +ve</option>
			<option value="an">A -ve</option>
			<option value="bp">B +ve</option>
			<option value="bn">B -ve</option>
			<option value="abp">AB +ve</option>
			<option value="abn">AB -ve</option>
			<option value="op">O +ve</option>
			<option value="on">O -ve</option>

		</select>
		<!-- to get stocks updated -->
		<input type="number" name="quantity" placeholder="Enter the Quantity">
		<button>Search</button>
		<br>
		<br>
		<br>
	</form>
</body>
</html>