<!DOCTYPE html>
<html>
<head>
  <h1>Exercise 3</h1>
  <?php
  function loadFiles($class)
  {include_once('classes/' .strtolower($class). '.classes.php');
  }
  spl_autoload_register('loadFiles');
?>
</head>
<body>
<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];

$regularUser = new regularUser('user1','user2');

if($regularUser instanceof regularUser){
  echo "<li> First Name: " .$firstName . "</li>";
  echo "<li> Last Name: " .$lastName . "</li>";
  echo "<li> Email: " .$email . "</li>";
}
else {
  echo "Something went wrong";
}
?>
<a href="index.php">Index</a>
</body>
</html>
