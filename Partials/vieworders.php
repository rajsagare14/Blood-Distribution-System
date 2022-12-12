<?php
session_start();
include('../Actions/functions.php');
$loggedin_organization_name = null;
if (isset($_SESSION['organization'])) {
	$loggedin_organization_name = $_SESSION['organization'];
}
else {
	echo "
		<script>
			alert('Login needed. if issue continues try by changing the browser')
			window.location='./login.php'
		</script>
		";
}
$query = "SELECT * FROM `order_blood` where organizationname like '$loggedin_organization_name' ORDER BY ordertime DESC";
if ($result = mysqli_query($conn,$query)) {
	$data = mysqli_fetch_all($result);
	$_SESSION['blooddata'] = $data;
}
$dataofBlood = $_SESSION['blooddata'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/css/dash.css">
	<title>Orders</title>
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
<table><caption>Orders Sent</caption>
		<tr>
			<th>ID</th>
			<th>Product</th>
			<th>Quantity</th>
			<th>Ordered From</th>
			<th>Order Status</th>
			<th>Ordered On</th>
		</tr>

		<?php

		for ($i = 0; $i < count($dataofBlood); $i++) {
			echo "<tr>";
		?>
			<td>
				<?php echo $dataofBlood[$i][0]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][2]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][3]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][4]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][5]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][6]; ?>
			</td>
			<?php

			?>
			<?php
		}
		?>
	</table>
</body>
</html>