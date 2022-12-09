<?php
session_start();
include('functions.php');
$id = $_POST['id'];
$colname = $_SESSION['bloodcolname'];
$dataofBlood = $_SESSION['blooddata'];
$quantity=$_SESSION['quantity'];
$organisationName = $_SESSION['organization'];
$user=$_POST['bankname'];

$identitymy = $_SESSION['identity'];
// $dataofBlood = $_SESSION['blooddata'];
$result = placeorderFromHospitalToBloodBank($organisationName,$colname,$quantity,$user);
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
			alert('Unable to place Order try later')
			window.location='$redirectto'
		</script>
	";
}

echo "
		<script>
			alert('Order was placed , waiting for confirmation')
			window.location='$redirectto'
		</script>
	";
