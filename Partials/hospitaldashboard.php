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

?>
<!DOCTYPE html>
<html>

<head>
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>BDS</title>
</head>

<body>
	<div id="center">
		<div id="center-set">
			<h1 align='center'><?php echo $_SESSION['organization']; ?></h1>
			<table>
				<tr>
					<th></th>
					<th>A+</th>
					<th>B+</th>
					<th>A-</th>
					<th>B-</th>
					<th>o+</th>
					<th>o-</th>
					<th>AB+</th>
					<th>AB+</th>
				</tr>
				<!-- Getting data from database -->
				<?php

				$dataOfStock = getBloodStockOnUsername($_SESSION['organization']);

					if(!$dataOfStock){
						echo "No data found";
					}else{

					

				?>
				

				
				<?php
					$count = 3;
					
					for($i=1;$i<4;$i++){

						echo  "</tr>";
						if($i==1){
							echo "<th>whole Blood</th>";
						}else if($i==2){
							echo "<th>Plasma</th>";
						}else if($i===3){
							echo "<th>Plateletes</th>";
						}

						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]<td>";
						$count=$count+1;
						echo  "</tr>";
						
					}
				?>
						<?php
}
						?>

			</table>
			
			<form action="./orderblood.php" method="post">
				<button>Order</button>
			</form>
</body>

</html>