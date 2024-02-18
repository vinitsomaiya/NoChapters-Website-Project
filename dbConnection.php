<?php
//CST8285-313 
//project: Assignment2
//author: Web-Dev-#9 Kyoko Ikari
//student no: 041042759

require_once('dbCredentials.php');
// function to connect to the database
// checks whether the connection was established
function dbConnect(){
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  if (mysqli_connect_errno()) {
    $message = "Connection was failed: ";
    $message .= mysqli_connect_error();
    $message .= " (" . mysqli_connect_errno() . ")";
    exit($message);
  }
  return $connection;
}
?>