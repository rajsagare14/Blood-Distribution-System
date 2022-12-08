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
echo "<br>";
echo "$loggedin_organization_name";


$type = $_POST['type'];
$bloodgroup = $_POST['bloodgroup'];
$quantity = $_POST['quantity'];

echo "$type";
echo "$bloodgroup";
echo "$quantity";
echo"<br>";
$colname = "$type"."$bloodgroup";
echo"$colname";
$query = "UPDATE `bloodstocks` SET `$colname` = '$quantity' WHERE name=(SELECT bldbankName from bank_regis WHERE username='$loggedin_organization_name');";
if($conn->query($query) == true){
	$insert = true;
	echo "<script>
	window.location = \"../Partials/bloodbankdashboard.php\"
</script>";
}
else{
	echo "ERROR: Failed to insert into data base: <br>$conn->error";
}
?>