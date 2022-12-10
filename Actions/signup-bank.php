<?php
session_start();
require "connect.php";
$bldbankName = $_POST['bldbankName'];
$parentHospName = $_POST['parentHospName'];
$hospType = $_POST['hospType'];
$contactPerson = $_POST['contactPerson'];
$hospEmail = $_POST['hospEmail'];
$hospContact = $_POST['hospContact'];
$licenceNo= $_POST['licenceNo'];
$licenceFromDate= $_POST['licenceFromDate'];
$licenceToDate= $_POST['licenceToDate'];
$componentFacility= $_POST['componentFacility'];
$capheresisFacility= $_POST['apheresisFacility'];
$helplineNo= $_POST['helplineNo'];
$address = $_POST['address'];
$statetext = $_POST['state'];
$districttext = $_POST['districttext'];
$subdistricttext = $_POST['subdistricttext'];
$towntext = $_POST['towntext'];
$villagetext = $_POST['villagetext'];
$pincode = $_POST['pincode'];

$username = $_POST['username'];
$password = $_POST['password'];

echo $bldbankName;
echo $parentHospName;
echo $hospType;
echo $contactPerson;
echo $hospEmail;
echo $hospContact;
echo $licenceNo;
echo $licenceFromDate;
echo $licenceToDate;
echo $componentFacility;
echo $helplineNo;
echo $statetext;
echo $districttext;
echo $subdistricttext;
echo $towntext;
echo $villagetext;
echo $pincode;
echo $address;
echo $username;
echo $password;

$signUpQuerry = "INSERT INTO `bank_regis` (`username`, `password`, `bldbankName`, `hospType`, `contactPerson`, `hospEmail`, `hospContact`, `licenceNo`, `helplineNo`, `statetext`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES ('$username', '$password', '$bldbankName', '$hospType', '$contactPerson', '$hospEmail', '$hospContact', '$licenceNo', '$helplineNo', '$statetext', '$districttext', '$subdistricttext', '$towntext', '$villagetext', '$pincode', '$address');";
$initalStocks = "INSERT INTO `bloodstocks` (`identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`) VALUES ('blood bank', '$bldbankName', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','$pincode');";

if($conn->query($signUpQuerry) == true){
	$insert = true;
}
else{
	echo "ERROR: Failed to insert into data base: <br>$conn->error";
}
if($conn->query($initalStocks) == true){
	$insert = true;
}
else{
	echo "ERROR: Failed to insert into data base: <br>$conn->error";
}
echo"<script>
alert('Signup successful')
window.location='../'
</script>";
?>