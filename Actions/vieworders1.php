<?php
session_start();
include('../Actions/functions.php');
$id = $_POST['id'];
$orderstatus = $_POST['orderstatus'];
$query = "UPDATE `order_blood` SET `orderstatus` = '$orderstatus' WHERE `order_blood`.`id` = $id";
if ($result = mysqli_query($conn,$query)) {
	echo"
	<script>
	alert('The order has been $orderstatus')
	window.location = '../Partials/vieworders1.php'
	</script>
	";
}
?>