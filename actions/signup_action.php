<?php
ob_start();
session_start();
include_once "../includes/config.php";
include_once "../includes/db.php";
$error = [];
if (isset($_POST)) {
  $firstName  = trim($_POST['fname']);
  $lastName  = trim($_POST['lname']);
  $email  = trim($_POST['email']);
  $password  = trim($_POST['password']);
  $confirmPassword  = trim($_POST['cpassword']);


//Validation

if (empty($firstName)) {
  $error[] = "First name can't be blank";
}

if (empty($email)) {
  $error[] = "Email can't be blank";
}

if (!empty($email)&& !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error[] = "Invalid Email";
}

if (empty($password)) {
  $error[] = "Password can't be blank";
}

if (empty($confirmPassword)) {
  $error[] = "Confirm Password can't be blank";
}

if (!empty($password) && !empty($confirmPassword) && $password != $confirmPassword) {
  $error[] = "Confirm Password doesn't match.";
}

if (!empty($email)) {
  $conn = db_connect();
  $sanitizeEmail = mysqli_real_escape_string($conn, $email);
  $emailSql = "SELECT * FROM `users` WHERE `email` = '{$sanitizeEmail}'";
  $sqlResult = mysqli_query($conn, $emailSql);
  $emailRow = mysqli_num_rows($sqlResult);
  if ($emailRow > 0) {
      $error[] = "Email Address already exists.";
  }
  db_close($conn);
}



if (!empty($error)) {
  $_SESSION['error'] = $error;
  header("location:".SITEURL."signup.php");
  exit();
} 
$passwordHash = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO `users` (first_name, last_name, email, password) VALUES ('{$firstName}','{$lastName}','{$email}','{$passwordHash}')";
$conn = db_connect();
if (mysqli_query($conn, $sql)) {
  db_close($conn);
  $message = "<h1>You are registered successfully!</h1>";
  $_SESSION['success'] = $message;
  header('location:' . SITEURL . 'signup.php');
}
}