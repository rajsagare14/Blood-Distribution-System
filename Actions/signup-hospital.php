<?php

echo $_POST['hospitalname'];
echo $_POST['hospitaltype'];

echo $_POST['hospitalregisnumber'];
echo $_POST['Registrationnumberscan'];
echo $_POST['nodalpersoninfo'];
echo $_POST['nodalpersontele'];
echo $_POST['nodalpersonemailid'];
echo $_POST['statetext'];
echo $_POST['districttext'];
echo $_POST['subdistricttext'];
echo $_POST['towntext'];
echo $_POST['villagetext'];
echo $_POST['pincode'];

$hospitalname = $_POST['hospitalname'];
$hospitaltype = $_POST['hospitaltype'];

$hospitalregisnumber = $_POST['hospitalregisnumber'];
$Registrationnumberscan = $_POST['Registrationnumberscan'];
$nodalpersoninfo = $_POST['nodalpersoninfo'];
$nodalpersontele = $_POST['nodalpersontele'];
$nodalpersonemailid = $_POST['nodalpersonemailid'];
$statetext = $_POST['statetext'];
$districttext = $_POST['districttext'];
$subdistricttext = $_POST['subdistricttext'];
$towntext = $_POST['towntext'];
$villagetext = $_POST['villagetext'];
$pincode = $_POST['pincode'];
/*
echo $hospitalname;
echo $hospitaltype;
echo $hospitalcaretype;
echo $hospitalregisnumber;
echo $Registrationnumberscan;
echo $nodalpersoninfo;
echo $nodalpersontele;
echo $nodalpersonemailid;
echo $statetext;
echo $districttext;
echo $subdistricttext;
echo $towntext;
echo $villagetext;
echo $pincode;
*/

$hospitalcaretype = "";

foreach($_POST['hostipalcaretype'] as $value){
//    echo "value : ".$value.'<br/>';
    $hospitalcaretype = $hospitalcaretype . $value . ", ";
}

echo $hospitalcaretype;

?>