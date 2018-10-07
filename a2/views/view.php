<!DOCTYPE html>
<html>
<head>
  <title>My First MVC</title>
</head>
<body>
  <h1>Hello from my view!</h1>
  <?php



    echo "<ul>";
    echo "<li> UserID: ". $userID . " </li>";
    echo "<li> First Name: ". $firstName . " </li>";
    echo "<li> Last Name: ". $lastName . " </li>";
    echo "<li> Email: ". $email . " </li>";
    echo "<li> Role: ". $role . " </li>";
    echo "</ul>";
  ?>
</body>
