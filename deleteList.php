<?php
// author: Web-Dev-#9 Igor Malov

$current_novelID = $_GET['id'];

echo $current_novelID;

require_once('dbConnection.php');

// function for the connection to database
$my_db = dbConnect();

$sql = "DELETE FROM novels WHERE novel_id = '$current_novelID'";

$result = mysqli_query($my_db, $sql);

//After deleting page  userList page 
header("Location: ./userList.php");
