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
<!-- <button class="openbtn" onclick="openNav()">☰</button> -->
<main>
	<div class="sidebar-header">

	
	
	
	
	</div>
	
	<div class="main-section-header">
		<div class="logo-header">
			<a href="#default" class="logo">
				<img src="../Assets/Images/logo.png" id="userlogo" alt="image">
			</a>
		</div>
		<!-- Nav bar system -->

		<nav class="navbar">
			
		<div class="sidebar-navbar">
			<!-- id="mySidebar" class="sidebar" -->
		<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a> -->
			<a href="#">About</a>
			<a href="#">Services</a>
			<a href="#">Clients</a>
			<a href="#">Contact</a>
		</div>
		<div class="other-content">
		<i class="icon"><img src="../Assets/Images/usericon.png" alt=""></i>
			<span class="org-name">

				<?php
				echo $_SESSION['organization'];
				?>
				</span>
		</div>
			
		</nav>
	</div>
</main>
	

	


	<div id="usericon">
	</div>
	<!-- profile name -->
	<div id="organization">
		
		</div>
		<!-- Getting data from database -->
			
		  <?php

		$dataOfStock = getBloodStockOnUsername($_SESSION['organization']);

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
							echo"<th scope = \"col\">O-</th>";
							echo"<th scope = \"col\">O+</th>";
						echo"</tr>";
							$count = 3; // this is because the 3rd column in database is where the blood stocks start
							
							for($i=1;$i<4;$i++){

								echo  "<tr class = \"bloodname\">";
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
			<button class="button-13" role = "button">Order</button>
		</form>
					<form action="./updatestocks.php" method="post">
						<button class="button-13" role = "button">Update Stocks</button>
					</form>
	<?php
		echo"</div>";
	?>

</body>
<!-- https://www.javatpoint.com/kotlin-android-read-and-write-internal-storage -->
</html>