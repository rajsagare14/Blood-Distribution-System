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
$query = "SELECT * FROM `order_blood` where organizationname like '$loggedin_organization_name' ORDER BY ordertime DESC";
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
<table><caption>Orders Sent</caption>
		<tr>
			<th>ID</th>
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
</html>