<?php
session_start();
include_once("../common/db.php");
if (isset($_POST['signUp'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];

  $user = $conn->prepare("Insert into `users`
  (`id`,`username`,`email`,`password`,`address`)
  values(NULL,'$username', '$email', '$password', '$address');");
  $result = $user->execute();
  if ($result) {
    $_SESSION["user"] = ["username" => $username, "email" => $email];
    echo"Register success";
    echo"<pre>";
    print_r($_SESSION['user']['email']);
    print_r($_SESSION['user']['username']);
    header("location: /contactbook");
    exit;
  } else {
    echo"User Not Registered";
  }
  
}else if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $username = "";

  $query = "select * from users where email='$email' and password='$password'";
  $result = $conn->query($query);
  if ($result->num_rows == 1) {

      foreach ($result as $row) {

          $username = $row['username'];
      }

      $_SESSION["user"] = ["username" => $username, "email" => $email];
      header("location: /contactbook");
  } else {
      echo "New user not registered";
  }}else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /contactbook");
  }
?>