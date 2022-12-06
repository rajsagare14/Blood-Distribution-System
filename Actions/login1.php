<?php
echo $_POST['username'];
echo $_POST['password'];
include('connect.php');  
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
	// to prevent from mysqli injection  
	$username = stripcslashes($username);  
	$password = stripcslashes($password);  
	$username = mysqli_real_escape_string($conn, $username);  
	$password = mysqli_real_escape_string($conn, $password);  
	echo "usename = $username<br>";
	echo "password = $password<br>";
	$loginQuerry = "select * from bank_regis where username = '$username' and password = '$password'";
	
	$result = mysqli_query($conn, $loginQuerry);
	if(!$result){
		die(mysqli_error($conn));
	}
	$row = mysqli_fetch_array($result, MYSQLI_NUM);  
	$count = mysqli_num_rows($result);  
	  
	if($count == 1){ 
		echo "<h1><center> Login successful </center></h1>";
		echo "<p id=\"result\"></p>
		<button onclick=\"redirect()\">Click to Redirect to Tutorials Point</button><script>
		function redirect () {
		   var interval = setInterval(myURL, 5000);
		   var result = document.getElementById(\"result\");
		   result.innerHTML = \"<b> The page will redirect after delay of 5 seconds setInterval() method.\";
		}
  
		function myURL() {
		   document.location.href = 'blooddash.php';
		   clearInterval(interval);
		}
	 </script>";
		echo "usename = $username<br>";
		echo "password = $password<br>";

		$sql="SELECT id FROM bank_regis WHERE username='$username' and password='$password'";
 		$result=mysqli_query($conn,$sql);
 		$row=mysqli_fetch_array($result);
 		// $active=$row['active'];
		$count=mysqli_num_rows($result);
	 	if($count==1) {
	  		$_SESSION['login_user']=$username;
	  		header("location: blooddash.php");
		}  
	else{  
		echo "<h1> Login failed. Invalid username or password.</h1>";  
	} 
/////////////////////////////////////////////////////////////////////////
}
?>
