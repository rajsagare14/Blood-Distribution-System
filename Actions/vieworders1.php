<?php
session_start();
include('../Actions/functions.php');
$loggedin_organization_name = null;
if (isset($_SESSION['organization'])) {
	$loggedin_organization_name = $_SESSION['organization'];
}
$id = $_POST['id'];
$organizationname = $_POST['organizationname'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$orderedfrom = $_POST['orderedfrom'];
$orderstatus = $_POST['orderstatus'];
$query = "UPDATE `order_blood` SET `orderstatus` = '$orderstatus' WHERE `order_blood`.`id` = $id";
if ($result = mysqli_query($conn,$query)) {
	echo"
	<script>
	alert('The order has been $orderstatus')
	// window.location = '../Partials/vieworders1.php'
	</script>
	";
}
if($orderstatus == 'accepted'){
	$query = "UPDATE bloodstocks SET bloodstocks.$product = (bloodstocks.$product-$quantity) where bloodstocks.name LIKE '$orderedfrom'";
	if ($result = mysqli_query($conn,$query)) {
		echo"
		<script>
		alert('The Stocks have been Updated')
		//window.location = '../Partials/vieworders1.php'
		</script>
		";
	}
	$query = "UPDATE bloodstocks SET bloodstocks.$product = (bloodstocks.$product+$quantity) where bloodstocks.name LIKE (SELECT hosp_regis.hospitalname FROM hosp_regis WHERE hosp_regis.username LIKE '$organizationname')";
	if ($result = mysqli_query($conn,$query)) {
		echo"
		<script>
		alert('The Stocks have been Updated')
		// window.location = '../Partials/vieworders1.php'
		</script>
		";
	}
}
$identitymy = $_SESSION['identity'];
$redirectto = null;
echo $identitymy;
if($identitymy == 'blood bank'){
	$redirectto = '../Partials/bloodbankdashboard.php';
}
else{
	$redirectto = '../Partials/hospitaldashboard.php';
}
echo $redirectto;

if(!$result){
	echo "
		<script>
			// alert('Unable to place Order try later')
			window.location='$redirectto'
		</script>
	";
}

echo "
		<script>
			// alert('Order was placed , waiting for confirmation')
			window.location='$redirectto'
		</script>
	";
?>