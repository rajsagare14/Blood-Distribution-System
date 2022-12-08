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
	<link rel="stylesheet" type="text/css" href="../Assets/css/dash.css" />
	<title>BDS</title>
</head>

<body>
	<div id="center">
		<div id="center-set">
			<h1 align='center'><?php echo $_SESSION['organization']; ?></h1>
			
				<!-- Getting data from database -->
				<?php

				$dataOfStock = getBloodBankStockOnUsername($_SESSION['organization']);

					if(!$dataOfStock){
						echo "No data found";
					}else{

					

				?>
				

				
				<?php
				echo "<table>";
				echo"<tr class=\"bloodgroups\">";
					echo"<th scope = \"col\"></th>";
					echo"<th scope = \"col\">A+</th>";
					echo"<th scope = \"col\">B+</th>";
					echo"<th scope = \"col\">A-</th>";
					echo"<th scope = \"col\">B-</th>";
					echo"<th scope = \"col\">AB+</th>";
					echo"<th scope = \"col\">AB-</th>";
					echo"<th scope = \"col\">O+</th>";
					echo"<th scope = \"col\">O+</th>";
				echo"</tr>";
					$count = 3; // this is because the 3rd column in database is where the blood stocks start
					
					for($i=1;$i<4;$i++){

						echo  "<tr>";
						if($i==1){
							echo "<th scope = \"row\">whole Blood</th>";
						}else if($i==2){
							echo "<th scope = \"row\">Plasma</th>";
						}else if($i==3){
							echo "<th scope = \"row\">Plateletes</th>";
						}

						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
						$count=$count+1;
						echo "<td>$dataOfStock[$count]</td>";
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
			<form action="./updatestocks1.php" method="post">
				<button>Update Stocks</button>
			</form>
</body>

</html>