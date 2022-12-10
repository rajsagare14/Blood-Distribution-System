<?php
$id = $_POST['id'];
$orderstatus = $_POST['orderstatus'];
$query = "UPDATE `order_blood` SET `orderstatus` = '$orderstatus' WHERE `order_blood`.`id` = $id"
?>