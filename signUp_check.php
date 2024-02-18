<?php
// author: Web-Dev-#9 Igor Malov

//get all info from method POST which user inters in Sign-Up Page to set info about user to database 
$userName = filter_var(trim($_POST['userName']));
$email = filter_var(trim($_POST['email']));
$password = filter_var(trim($_POST['password']));

require_once('dbConnection.php');

// function for the connection to database
$my_db = dbConnect();

// set value from POST method to table 'users' 
$my_db->query("INSERT INTO `users` (`user_name`, `user_email`, `user_password`) VALUES ('$userName', '$email', '$password' )");


// $sql = "SELECT * from users";

// if ($result = mysqli_query($my_db, $sql)) {

//     // Return the number of rows in result set
//     $rowcount = mysqli_num_rows($result);
// }

$sql = "SELECT * FROM users ORDER BY user_id DESC LIMIT 1";

$result = mysqli_query($my_db, $sql);

$row = mysqli_fetch_assoc($result);

//cookie uses to identify the user, after we set cookie webpages will be know which user currently registered
//1) name for cookie, 2)which value to set, 3) how many seconds it will be store in memory of the website (24 hours), which pages can see that coockie(all pages) 
setcookie('userName', $userName, time() + 3600 * 24, "/");
// also set cookie for user id , $rowcount is a value that store id of current user
setcookie('userID', $row['user_id'],  time() + 3600 * 24, "/");



$my_db->close();

//After sign_up page go to userList page 
header("Location: ./userList.php");
