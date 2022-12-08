<?php
require "connect.php";
// echo $_POST['hospitalname'];
// echo $_POST['hospitaltype'];
// echo $_POST['accreditation'];
// echo $_POST['hospitalcaretype'];
// echo $_POST['hospitalregisnumber'];
// // echo $_POST['Registrationnumberscan'];
// echo $_POST['nodalpersoninfo'];
// echo $_POST['nodalpersontele'];
// echo $_POST['nodalpersonemailid'];
// echo $_POST['statetext'];
// echo $_POST['districttext'];
// echo $_POST['subdistricttext'];
// echo $_POST['towntext'];
// echo $_POST['villagetext'];
// echo $_POST['pincode'];

$hospitalname = $_POST['hospitalname'];
$hospitaltype = $_POST['hospitaltype'];
$accreditation = $_POST['accreditation'];
$hospitalcaretype = $_POST['hospitalcaretype'];
$hospitalregisnumber = $_POST['hospitalregisnumber'];
// $Registrationnumberscan = $_POST['Registrationnumberscan'];
$nodalpersoninfo = $_POST['nodalpersoninfo'];
$nodalpersontele = $_POST['nodalpersontele'];
$nodalpersonemailid = $_POST['nodalpersonemailid'];
$address = $_POST['address'];
$statetext = $_POST['state'];
$districttext = $_POST['districttext'];
$subdistricttext = $_POST['subdistricttext'];
$towntext = $_POST['towntext'];
$villagetext = $_POST['villagetext'];
$pincode = $_POST['pincode'];
$username = $_POST['username'];
$password = $_POST['password'];


echo $hospitalname;
echo $hospitaltype;
echo $hospitalcaretype;
echo $hospitalregisnumber;
// echo $Registrationnumberscan;
echo $nodalpersoninfo;
echo $nodalpersontele;
echo $nodalpersonemailid;
echo $statetext;
echo $districttext;
echo $subdistricttext;
echo $towntext;
echo $villagetext;
echo $pincode;
echo $address;
echo $username;
echo $password;

$signUpQuerry = "INSERT INTO `hosp_regis` (`username`,`password`,`hospitalname`, `hospitaltype`, `hospitalcaretype`, `hospitalregisnumber`, `nodalpersoninfo`, `nodalpersontele`, `nodalpersonemailid`, `statetext`, `districttext`, `subdistricttext`, `towntext`, `villagetext`, `pincode`, `address`) VALUES ('$username','$password','$hospitalname', '$hospitaltype', '$hospitalcaretype', '$hospitalregisnumber', '$nodalpersoninfo', '$nodalpersontele', '$nodalpersonemailid', '$statetext', '$districttext', '$subdistricttext', '$towntext', '$villagetext', '$pincode', '$address');";
$initalStocks = "INSERT INTO `bloodstocks` (`identity`, `name`, `wbap`, `wban`, `wbbp`, `wbbn`, `wbabp`, `wbabn`, `wbop`, `wbon`, `plap`, `plan`, `plbp`, `plbn`, `plabp`, `plabn`, `plop`, `plon`, `pmap`, `pman`, `pmbp`, `pmbn`, `pmabp`, `pmabn`, `pmop`, `pmon`,`pincode`) VALUES ('hospital', '$hospitalname', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','$pincode');";
if($conn->query($signUpQuerry) == true){
	$insert = true;
	echo "";
}
else{
	echo "ERROR: Failed to insert into data base: <br>$conn->error";
}
if($conn->query($initalStocks) == true){
	$insert = true;
	echo "";
}
else{
	echo "ERROR: Failed to insert into data base: <br>$conn->error";
}
echo"<script>
alert('Signup successful')
window.location='../'
</script>";

?>