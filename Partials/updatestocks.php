<?php
session_start();
include('../Actions/functions.php');
$loggedin_organization_name = null;
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
    <title>Update Stocks</title>
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
<!-- <form action="../Actions/updatestocks.php" method="post">
    <table>
        <tr>
            <th></th>
            <th>A+</th>
            <th>B+</th>
            <th>A-</th>
            <th>B-</th>
            <th>o+</th>
            <th>o-</th>
            <th>AB+</th>
            <th>AB+</th>
        </tr>
        <tr>
            <th>whole Blood</th>
            <td><input name="wbap" type="number" class="myNumber"></td>
            <td><input name="wban" type="number" class="myNumber"></td>
            <td><input name="wbbp" type="number" class="myNumber"></td>
            <td><input name="wbbn" type="number" class="myNumber"></td>
            <td><input name="wbabp" type="number" class="myNumber"></td>
            <td><input name="wbabn" type="number" class="myNumber"></td>
            <td><input name="wbop" type="number" class="myNumber"></td>
            <td><input name="wbon" type="number" class="myNumber"></td>
        </tr>
        <tr>
            <th>Plasma</th>
            <td><input name="pmap" type="number" class="myNumber"></td>
            <td><input name="pman" type="number" class="myNumber"></td>
            <td><input name="pmbp" type="number" class="myNumber"></td>
            <td><input name="pmbn" type="number" class="myNumber"></td>
            <td><input name="pmabp" type="number" class="myNumber"></td>
            <td><input name="pmabn" type="number" class="myNumber"></td>
            <td><input name="pmop" type="number" class="myNumber"></td>
            <td><input name="pmon" type="number" class="myNumber"></td>
        </tr>
        <tr>
            <th>Platelets</th>
            <td><input name="plap" type="number" class="myNumber"></td>
            <td><input name="plan" type="number" class="myNumber"></td>
            <td><input name="plbp" type="number" class="myNumber"></td>
            <td><input name="plbn" type="number" class="myNumber"></td>
            <td><input name="plabp" type="number" class="myNumber"></td>
            <td><input name="plabn" type="number" class="myNumber"></td>
            <td><input name="plop" type="number" class="myNumber"></td>
            <td><input name="plon" type="number" class="myNumber"></td>
        </tr>
	</table>
	<button>Update Stocks</button>
</form> -->
<br>
<div class="pagename">
    <h1>Update the Blood Stocks</h1>
</div>
<br>
<br>
<br>
<div class="pagename">
	<form action="../Actions/updatestocks.php" method="post">
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
		<input type="text" name="quantity" placeholder="Enter the Quantity">
		<button>Update</button>
		<br>
		<br>
		<br>
	</form>
</div>
    <script>
        function myFunction() {
  document.getElementsByClassName("myNumber").stepUp(5);
}

</script>
</body>
</html>