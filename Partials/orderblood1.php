<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>Search the Blood</h1>
	<form action="../Actions/orderblood.php" method="post">
		<!-- to get the stocks updated -->
		<select name="type">
			<option value="wb">Whole Blood</option>
			<option value="pm">Plasma</option>
			<option value="pl">Platelet</option>

		</select>
		<select name="bloodgroup">
			<option value="ap">A +ve</option>
			<option value="an">A -ve</option>
			<option value="bp">B +ve</option>
			<option value="bn">B -ve</option>
			<option value="abp">AB +ve</option>
			<option value="abn">AB -ve</option>
			<option value="op">O +ve</option>
			<option value="on">O -ve</option>

		</select>
		<!-- to get stocks updated -->
		<input type="number" name="quantity" placeholder="Enter the Quantity">
		<button>Search</button>
		<br>
		<br>
		<br>
	</form>
	<h1>Order the Blood</h1>
	<form action="../Actions/orderblood1.php" method="post">
		<!-- to get the stocks updated -->
		<select name="type">
			<option value="wb">Whole Blood</option>
			<option value="pm">Plasma</option>
			<option value="pl">Platelet</option>

		</select>
		<select name="bloodgroup">
			<option value="ap">A +ve</option>
			<option value="an">A -ve</option>
			<option value="bp">B +ve</option>
			<option value="bn">B -ve</option>
			<option value="abp">AB +ve</option>
			<option value="abn">AB -ve</option>
			<option value="op">O +ve</option>
			<option value="on">O -ve</option>

		</select>
		<!-- to get stocks updated -->
		<input type="number" name="quantity" placeholder="Enter the Quantity">
		<button>Order</button>
		<br>
		<br>
		<br>
	</form>

</body>
</html>