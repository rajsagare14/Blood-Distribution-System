<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Order the Blood</h1>
	<form action="../Actions/orderblood.php" method="post">
		<!-- to get the type -->
		<select name="type">
			<option value="wholeblood">Whole Blood</option>
			<option value="plasma">Plasma</option>
			<option value="platelet">Platelet</option>

		</select>
		<!-- Get QUntity -->
		<input type="text" name="quantity" placeholder="Enter the Quantity">
		<button>Order</button>
	</form>
</body>
</html>