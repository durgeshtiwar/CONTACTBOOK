<?php 
$host = "localhost";
$username = "root";
$password = "Durgesh@1419";
$database = "discussionboard";
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
  die("Not Connected with Db".$conn->connect_error);
}
?>