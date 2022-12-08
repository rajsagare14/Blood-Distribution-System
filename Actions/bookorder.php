<?php
session_start();
include('functions.php');
$id = $_POST['id'];
$colname = $_SESSION['bloodcolname'];
$quantity=$_SESSION['quantity'];
$organisationName = $_SESSION['organization'];
$user=$_POST['bankname'];

$result = placeorderFromHospitalToBloodBank($organisationName,$colname,$quantity,$user);

if(!$result){
	echo "
		<script>
			alert('Unable to place Order try later')
			window.location='../Partials/hospitaldashboard.php'
		</script>
	";
}

echo "
		<script>
			alert('Order was placed , waiting for confirmation')
			window.location='../Partials/hospitaldashboard.php'
		</script>
	";
