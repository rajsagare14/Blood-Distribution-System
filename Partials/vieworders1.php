<?php
session_start();
include('../Actions/functions.php');
$loggedin_organization_name = null;
if (isset($_SESSION['organization'])) {
	$loggedin_organization_name = $_SESSION['organization'];
}
else {
	echo "
		<script>
			alert('Login needed. if issue continues try by changing the browser')
			window.location='./login.php'
		</script>
		";
}
$query = "SELECT * FROM `order_blood` WHERE orderedfrom like (SELECT bank_regis.bldbankName FROM bank_regis WHERE bank_regis.username LIKE '$loggedin_organization_name') ORDER BY ordertime DESC";
if ($result = mysqli_query($conn,$query)) {
	$data = mysqli_fetch_all($result);
	$_SESSION['blooddata'] = $data;
}
$dataofBlood = $_SESSION['blooddata'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Orders</title>
</head>
<body>
<table><caption>Orders Recieved</caption>
		<tr>
			<th>ID</th>
			<th>Ordered By</th>
			<th>Product</th>
			<th>Quantity</th>
			<!-- <th>Ordered From</th> -->
			<th>Order Status</th>
			<th>Ordered On</th>
		</tr>

		<?php

		for ($i = 0; $i < count($dataofBlood); $i++) {
			echo "<tr>";
		?>
			<td>
				<?php echo $dataofBlood[$i][0]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][1]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][2]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][3]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][5]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][6]; ?>
			</td>
			<?php

			?>
			
			<td>
				<form action="../Actions/vieworders1.php" method="post">
					<input type="hidden" name="id" value="<?php echo $dataofBlood[$i][0]; ?>">
					<select name="orderstatus">
			<option value="pending">Pending</option>
			<option value="accepted">Accept</option>
			<option value="rejected">Reject</option>
			<option value="cancelled">Cancel</option>
		</select>
					<button>Save Changes</button>
					
				</form>
			</td>
			<?php
		}
		?>
	</table>
	<?php
	$query = "SELECT * FROM `order_blood` where organizationname like '$loggedin_organization_name' ORDER BY ordertime DESC";
	if ($result = mysqli_query($conn,$query)) {
		$data = mysqli_fetch_all($result);
		$_SESSION['blooddata'] = $data;
	}
	$dataofBlood = $_SESSION['blooddata'];
	?>
<table><caption>Orders Sent</caption>
		<tr>
			<th>ID</th>
			<!-- <th>Ordered By</th> -->
			<th>Product</th>
			<th>Quantity</th>
			<th>Ordered From</th>
			<th>Order Status</th>
			<th>Ordered On</th>
		</tr>

		<?php

		for ($i = 0; $i < count($dataofBlood); $i++) {
			echo "<tr>";
		?>
			<td>
				<?php echo $dataofBlood[$i][0]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][1]; ?>
			</td>
			<?php

			?>
			
			<td>
				<?php echo $dataofBlood[$i][3]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][4]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][5]; ?>
			</td>
			<?php

			?>
			<td>
				<?php echo $dataofBlood[$i][6]; ?>
			</td>
			<?php

			?>
			<?php
		}
		?>
	</table>
</body>
<!-- SET @name = (SELECT bldbankName FROM bank_regis where username LIKE 'aby'); -->
<!-- SELECT * FROM `order_blood`  -->
<!-- where orderedfrom LIKE '@name' ORDER BY ordertime DESC; -->

<!-- SELECT * FROM `order_blood` where orderedfrom like '$loggedin_organization_name' ORDER BY ordertime DESC -->

<!-- SELECT * FROM `order_blood` where organizationname like '$loggedin_organization_name' ORDER BY ordertime DESC -->
</html>