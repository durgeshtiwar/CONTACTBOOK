<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Board</title>
  <?php
  include_once("./client/commonFiles.php");
  ?>
</head>
<body>
  <?php
  include_once("./client/header.php");
  if (isset($_GET['signUp'])) {
  include_once("./client/signUp.php");
  }elseif(isset($_GET['login']))
  {
    include_once("./client/login.php");
  }
  ?>
</body>
</html>