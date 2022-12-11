<?php

include('connect.php');



/*
user related Codes
*/
function addUserToTheDatabase(){

}

function loginHospitalUser($username,$password){
	$query = "select pincode from hosp_regis where username = '$username' and password = '$password';";
	$result = mysqli_query($GLOBALS['conn'], $query);
	$data = mysqli_fetch_all($result);
	if ($data) {
		return $data[0];
	}
	return false;
}
function loginBloodBankUser($username,$password){
	$query = "select pincode from bank_regis where username = '$username' and password = '$password';";
	$result = mysqli_query($GLOBALS['conn'], $query);
	$data = mysqli_fetch_all($result);
	if ($data) {
		return $data[0];
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

function getBloodStockOnUsername($username){
	/*

		Info : 

		params: 
		
		Query used:
			SELECT * FROM `bloodstocks` WHERE name=(SELECT hospitalname from hosp_regis WHERE username='AsterAaadharKolhapur')
		return : 
			if username exits 
				return the blood stock data
			else
				return false
	*/
	$query = "SELECT * FROM `bloodstocks` WHERE name=(SELECT hospitalname from hosp_regis WHERE username='$username')";
	$result = mysqli_query($GLOBALS['conn'], $query);
	$data = mysqli_fetch_all($result);
	if ($data) {
		return $data[0];
	}
	return false; 
}
function getBloodBankStockOnUsername($username){
	/*

		Info : 

		params: 

		Query used:
			SELECT * FROM `bloodstocks` WHERE name=(SELECT hospitalname from hosp_regis WHERE username='AsterAaadharKolhapur')
		return : 
			if username exits 
				return the blood stock data
			else
				return false
	*/
	$query = "SELECT * FROM `bloodstocks` WHERE name=(SELECT bldbankName from bank_regis WHERE username='$username')";
	$result = mysqli_query($GLOBALS['conn'], $query);
	$data = mysqli_fetch_all($result);
	if ($data) {
		return $data[0];
	}
	return false; 
}
function placeorderFromHospitalToBloodBank($organisationname,$colname,$quantity,$orderedfrom){
	/*
	
	
	$query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$loggedin_organization_name', '$colname', '$quantity', '$orderfrombldbankName', 'pending', current_timestamp());";

	*/

	$query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$organisationname', '$colname', '$quantity', '$orderedfrom', 'pending', current_timestamp());";
	$result = mysqli_query($GLOBALS['conn'], $query);
	if ($result) {
		return true;
	}
	return false;


}
function placeorderFromBloodBankToBloodBank($organisationname,$colname,$quantity,$orderedfrom){
	/*
	
	
	$query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$loggedin_organization_name', '$colname', '$quantity', '$orderfrombldbankName', 'pending', current_timestamp());";

	*/

	$query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$organisationname', '$colname', '$quantity', '$orderedfrom', 'pending', current_timestamp());";
	$result = mysqli_query($GLOBALS['conn'], $query);
	if ($result) {
		return true;
	}
	return false;


}
function ordersFromHospital($organisationname){
	/*
	
	
	$query = "INSERT INTO `order_blood` (`organizationname`, `product`, `quantity`, `orderedfrom`, `orderstatus`, `ordertime`) VALUES ('$loggedin_organization_name', '$colname', '$quantity', '$orderfrombldbankName', 'pending', current_timestamp());";

	*/

	$query = "SELECT * FROM `order_blood` where `organizationname` like '$organisationname'";
	$result = mysqli_query($GLOBALS['conn'], $query);
	$data = mysqli_fetch_all($result);
	if ($data) {
		return $data[0];
	}
	return false;


}