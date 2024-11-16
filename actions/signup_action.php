<?php
include_once "../includes/config.php";
$error = [];
if (isset($_POST)) {
  $fisrtName  = trim($_POST['fname']);
  $lastName  = trim($_POST['lname']);
  $email  = trim($_POST['email']);
  $password  = trim($_POST['password']);
  $confirmPassword  = trim($_POST['cpassword']);
}

//Validation

if (empty($fisrtName)) {
  $error[] = "First can't be blank";
}