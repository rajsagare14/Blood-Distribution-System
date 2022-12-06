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


$userid = $_SESSION['organization'];
echo "
	<script>
		alert('Login success $userid')
		window.location='../Partials/hospitaldashboard.php'
	</script>
	";





?>
