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
<html>

<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>BDS</title>
</head>

<body>
	<div id="center">
		<div id="center-set">
			<h1 align='center'><?php echo $_SESSION['organization']; ?></h1>
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
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
				</tr>
				<tr>
					<th>Plasma</th>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
				</tr>
				<tr>
					<th>Platelets</th>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
				</tr>






				<!-- <button onclick="myFunction()">Try it</button> -->



			</table>

			<form action="./orderblood.php" method="post">
				<button>Order</button>
			</form>
</body>

</html>