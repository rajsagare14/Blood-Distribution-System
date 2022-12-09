<?php
session_start();
include('functions.php');  

$username = $_POST['username'];
$password = $_POST['password'];

$data = loginBloodBankUser($username,$password);
if(!$data){
	echo "
	<script>
		alert('Login unsuccessful')
		window.location='../Partials/login1.php'
	</script>
	";
}


$_SESSION['organization']=$username;
$_SESSION['pincode']=$data[0];
$pincode=$_SESSION['pincode'];
$userid = $_SESSION['organization'];
$identity = 'blood bank';
$_SESSION['identity']=$identity;
echo "
	<script>
		alert('Login success $userid,$pincode,$identity')
		window.location='../Partials/bloodbankdashboard.php'
	</script>
	";
?>