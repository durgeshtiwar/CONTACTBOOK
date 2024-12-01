<?php
include_once("../common/db.php");
session_start();
if (isset($_POST['signUp'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];

  $user = $conn->prepare("Insert into `users`
  (`id`,`username`,`email`,`password`,`address`)
  values(NULL,'$username', '$email', '$password', '$address')");
  $result = $user->execute();
  if ($result) {
    $_SESSION['user'] = ["username"=>$username, "email"=>$email];
    echo"New User Registered";
  } else {
    echo"User Not Registered";
  }
  
}
?>