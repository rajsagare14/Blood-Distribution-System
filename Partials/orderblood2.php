<?php
session_start();
include('orderblood.php');

if($conn->query($query) == true){
	$insert = true;
	echo "<script>
	alert\"Order Placed\"
	window.location = \"../Partials/hospitaldashboard.php\"
</script>";
}
else{
	echo "ERROR: Failed to insert into data base: <br>$conn->error";
}
?>