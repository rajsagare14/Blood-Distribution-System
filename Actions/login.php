<?php
session_start();
include('functions.php');  

$username = $_POST['username'];
$password = $_POST['password'];

$data = loginHospitalUser($username,$password);
if(!$data){
	echo "
	<script>
		alert('Login unsuccessful')
		window.location='../Partials/login.php'
	</script>
	";
}


$_SESSION['organization']=$username;
$_SESSION['pincode']=$data[0];
$pincode=$_SESSION['pincode'];
$identity = 'hospital';
$_SESSION['identity']= $identity;

$userid = $_SESSION['organization'];
echo "
	<script>
		alert('Login success $userid,$pincode,$identity')
		window.location='../Partials/hospitaldashboard.php'
	</script>
	";





?>
