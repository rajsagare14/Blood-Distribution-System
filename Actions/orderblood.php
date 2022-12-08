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
$searchblood = "SELECT * FROM `bloodstocks` WHERE (`$colname`>0 and `identity` LIKE \"blood bank\")";

if ($result = mysqli_query($conn,$searchblood)) {
	echo "<table>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>Blood Bank Name</th>";
	echo "<th>$colname</th>";
	echo "</tr>";
	
	while($row = $result->fetch_array(MYSQLI_ASSOC)){
		$row_id = $row['id'];
		$row_name = $row['name'];
		echo "<tr>";
		echo "<td>$row_id</td>";
		echo "<td>$row_name</td>";
		echo "<td>$row[$colname]</td>";
		echo "<td><button>Place Order</button></td>";
		echo "</tr>";
	}
	echo "</table>" ;
	echo "<br>" ;
}
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