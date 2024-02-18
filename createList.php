<?php
//CST8285-313 
//project: Assignment2
// author: Web-Dev-#9 Kyoko Ikari
// student no: 041042759
// this code is referred from the lecture materials

require_once('dbConnection.php');

$db = dbConnect();

// take the input values from newList.php
// insert the new novel data as a new entry
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $title = $_POST['novel_title'];
  $author = $_POST['novel_author'];
  $year = $_POST['novel_publish_year'];

  $current_userID = $_COOKIE['userID'];

  // declaration of insert statement for new record
  $sql = "INSERT INTO novels (novel_title, novel_author, novel_publish_year, user_id) VALUES ('$title','$author','$year', '$current_userID')";
  // For INSERT statements, $result is true/false
  $result = mysqli_query($db, $sql);

  // redirect to userList page with new id
  header("Location: userList.php");
}
