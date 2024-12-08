<?php

include '../connection.php';

$userEmail = $_POST['user_email'];

$sqlQuery = "SELECT * FROM user_table WHERE user_email = '$userEmail'";

$resultOfQuery = $connectNow->query($sqlQuery);

if($resultOfQuery->num_rows > 0)
{
    // num rows length == 1 --- email already in someone else use --- Error
   echo json_encode(array("success"=>true));
}
else
{
    // num rows length == 0 -- email is not already in someone else use
    // a user will allwoed to signup Successfuly
    echo json_encode(array("success"=>false));
}