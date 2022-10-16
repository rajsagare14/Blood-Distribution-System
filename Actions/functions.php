<?php
session_start();
include ('connect.php');
// Functions are listed here

//Check the email validity
function checkTheUserEmail($emailId){
/*
 * Check if the email entered is unique or not
 *
 * return true : if email is not present in the table
 *
 * return false : if email is present in the table
 *
 * */

    $query = "select emailid from users where emailid = '$emailId'; " ;
    $result = mysqli_query($GLOBALS['con'],$query);
    $data =  mysqli_fetch_all($result);

    if($data){
        return false;
    }
    return true;

    /*
     * function not tested
     * */
}


//Register User
function registerUser($emailId , $password , $registrationNumber , $userType  ){
/*
 *
 * return true : if user is successfully created
 *
 * return false : if user is not created
 * */


}

