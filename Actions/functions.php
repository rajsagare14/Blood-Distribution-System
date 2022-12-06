<?php

include('connect.php');



/*
user related Codes
*/
function addUserToTheDatabase(){

}

function loginHospitalUser($username,$password){
	$query = "select * from hosp_regis where username = '$username' and password = '$password';";
	$result = mysqli_query($GLOBALS['conn'], $query);
	$data = mysqli_fetch_all($result);
	if ($data) {
		return $data;
	}
	return false;
}

/*
Functionality Codes

*/ 

// Completed , but not checked and tested
function addBloodStocks($identity, $name, $wbap, $wban, $wbbp, $wbbn, $wbabp, $wbabn, $wbop, $wbon, $plap, $plan, $plbp, $plbn, $plabp, $plabn, $plop, $plon, $pmap, $pman, $pmbp, $pmbn, $pmabp, $pmabn, $pmop, $pmon)
{

	/*
	Info : 
		Function to add the blood stocks to the database
	params: 
		$identity : Whether it is hospital or blood bank
		$name : 
		$wbap
		$wban
		$wbbp 
		$wbbn
		$wbabp
		$wbabn
		$wbop
		$wbon
		$plap
		$plan
		$plbp
		$plbn
		$plabp
		$plabn
		$plop
		$plon
		$pmap
		$pman
		$pmbp
		$pmbn
		$pmabp
		$pmabn
		$pmop
		$pmon
	return:
		true if user is added successfully
		false if user is not added successfully
	*/
	$query = "INSERT INTO `bloodstocks` (`identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`) VALUES ('$identity','$name','$wbap','$wban', '$wbbp', '$wbbn', '$wbabp', '$wbabn', '$wbop', '$wbon', '$plap', '$plan', '$plbp', '$plbn', '$plabp', '$plabn', '$plop', '$plon', '$pmap', '$pman', '$pmbp', '$pmbn', '$pmabp', '$pmabn', '$pmop', '$pmon');";
	$result = mysqli_query($GLOBALS['conn'], $query);
	if ($result) {
		return true;
	}
	return false;
}
