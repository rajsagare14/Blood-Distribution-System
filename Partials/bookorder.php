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

if (!isset($_SESSION['blooddata']) && !isset($_SESSION['quantity'])) {
	echo "
		<script>
			alert('Error occurred , Please try again')
			window.location='../Actions/logout.php'
		</script>
		";
}

$dataofBlood = $_SESSION['blooddata'];
$colname = $_SESSION['bloodcolname'];
$quantity = $_SESSION['quantity'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Assets/css/dash1.css">
	<title>Book Blood</title>
</head>

<body>
	<h1>Blood Banks Near You which have the product in stock</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Blood bank Name</th>
			<th><?php echo $colname; ?></th>
			<th>Operation</th>
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
				<form action="../Actions/bookorder.php" method="post">
					<input type="hidden" name="id" value="<?php echo $dataofBlood[$i][0]; ?>">
					<input type="hidden" name="bankname" value="<?php echo $dataofBlood[$i][1];  ?>">
					<input type="hidden" name="identity" value="<?php echo $dataofBlood[$i][3];  ?>">
					<button>Place Order</button>
					
				</form>
			</td> 	
			<?php
		}
		?>
	</table>
</body>

</html>