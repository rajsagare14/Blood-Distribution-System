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
$searchblood = "SELECT id,name,$colname FROM `bloodstocks` WHERE (`$colname`>0 and `identity` LIKE \"blood bank\")";

if ($result = mysqli_query($conn,$searchblood)) {
	$data = mysqli_fetch_all($result);
	$_SESSION['blooddata'] = $data;
	$_SESSION['bloodcolname']=$colname;
	$_SESSION['quantity']=$quantity;
	echo "
		<script>
			window.location='../Partials/bookorder.php'
		</script>
	";
}
$query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$loggedin_organization_name', '$colname', '$quantity', '$orderfrombldbankName', 'pending', current_timestamp());";
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