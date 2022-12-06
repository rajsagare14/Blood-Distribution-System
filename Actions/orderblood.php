<?php
session_start();
$typeBlood = $_POST['type'];
$quantity = $_POST['quantity'];
echo $typeBlood;
echo "<br>";
echo $quantity;




//select * from bloodbanks where pincode like '$pinfirsttowdigit____'