<?php
session_start();
$typeBlood = $_POST['type'];
$bloodgroup = $_POST['bloodgroup'];
$quantity = $_POST['quantity'];
echo $typeBlood;
echo "<br>";
echo $bloodgroup;
echo "<br>";
echo $quantity;

$colname = "$type"."$bloodgroup";
echo"$colname";
$query = "";


//select * from bloodbanks where pincode like '$pinfirsttowdigit____'

// Order Blood Table
// id hospitalname  product quantity orderfrom status     Timestamp
// 1  'hospitalnae' 'wbabp' 200		bank name 	pending		currtime
// 2  'hospitalnae' 'wbabp' 200		bank name 	approved	currtime
// 3  'hospitalnae' 'wbabp' 200		bank name 	rejected	currtime