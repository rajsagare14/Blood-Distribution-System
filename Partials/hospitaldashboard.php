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
			<!-- You are now logged in. you can logout by clicking on signout link given below. -->
			<!-- <h2>Available Blood Stocks</h2>
<div class="a">
<div id="a+ve">
        <h3 class="bloodGroup">A +ve</h3>
        <div  class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
<div  id="a-ve">
        <h3 class="bloodGroup">A -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
</div>
    <br>
<div class="b">
<div  id="B+ve">
        <h3 class="bloodGroup">B +ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
<div  id="B-ve">
        <h3 class="bloodGroup">B -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
</div>
    <br>
    <div class="o">
    <div  id="o+ve">
        <h3 class="bloodGroup">O +ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    <div  id="o-ve">
        <h3 class="bloodGroup">O -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    </div>
    <br>
    <div class="ab">
    <div  id="ab+ve">
        <h3 class="bloodGroup">AB +ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    <div  id="ab-ve">
        <h3 class="bloodGroup">AB -ve</h3>
        <div class = "stocks">
            <h4 class="wholeBlood">999</h4>
            <h4 class="plasma">999</h4>
            <h4 class="platelets">999</h4>
        </div>
    </div>
    </div>  -->
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
				<tr>
					<th>whole Blood</th>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
				</tr>
				<tr>
					<th>Plasma</th>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
				</tr>
				<tr>
					<th>Platelets</th>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
					<td>0000</td>
				</tr>






				<!-- <button onclick="myFunction()">Try it</button> -->



			</table>


			<button> <a href="../Actions/logout.php">Logout</a> </button>
</body>

</html>