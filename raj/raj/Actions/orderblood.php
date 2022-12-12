<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/css/dash.css">
	<title>Order Blood</title>
</head>
<body>
	
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
			<a href="#">Clients</a>
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
<?php
$typeBlood = $_POST['type'];
$bloodgroup = $_POST['bloodgroup'];
$quantity = $_POST['quantity'];
// echo $typeBlood;
echo "<br>";
// echo $bloodgroup;
echo "<br>";
// echo $quantity;
$orderfrombldbankName = "Blood Bank Name here";
$colname = "$typeBlood"."$bloodgroup";
// echo"$colname";
echo"<br>";
// $query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$loggedin_organization_name', '$colname', '$quantity', '$orderfrombldbankName', 'pending', current_timestamp());";
// echo"$query";
$searchblood = "SELECT * FROM `bloodstocks` WHERE (`$colname`>0 and `identity` LIKE \"blood bank\")";

if ($result = mysqli_query($conn,$searchblood)) {
	echo "<table>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>Blood Bank Name</th>";
	echo "<th>$colname</th>";
	echo "</tr>";
	
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$row_id = $row['id'];
		$row_name = $row['name'];
		echo "<tr>";
		echo "<td>$row_id</td>";
		echo "<td>$row_name</td>";
		echo "<td>$row[$colname]</td>";
		echo "<td><button>Place Order</button></td>";
		echo "</tr>";
	}
	echo "</table>" ;
	echo "<br>" ;
}
// Amazing search algorithm
// SELECT * FROM `bloodstocks` WHERE `pincode` LIKE "4160__";
// INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$hospitalname', '$colname', '$quantity', 'Kazi bank of blood', 'pending', current_timestamp());
//select * from bloodbanks where pincode like '$pinfirsttowdigit____'

// Order Blood Table(for blood bank and hospital both)(request sent to blood banks only)
// id hospitalname  product quantity orderfrom status     Timestamp
// 1  'hospitalnae' 'wbabp' 200		bank name 	pending		currtime
// 2  'hospitalnae' 'wbabp' 200		bank name 	approved	currtime
// 3  'hospitalnae' 'wbabp' 200		bank name 	rejected	currtime
?>

</body>
</html>