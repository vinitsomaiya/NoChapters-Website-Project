<?php
// author: Web-Dev-#9 Igor Malov

//cookie uses to identify the user, after we set cookie webpages will be know which user currently registered
//1) name for cookie, 2)which value to set, 3) how many seconds it will be store in memory of the website (1 hour), which pages can see that coockie(all pages) 
setcookie('userName', $userName, time() - 3600, "/");

// also set cookie for user id , $rowcount is a value that store id of current user
setcookie('userID', $userID,  time() - 3600, "/");

header("Location: ./index.php");
