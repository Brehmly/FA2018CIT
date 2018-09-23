<?php
function loadFiles($class)
{include_once('classes/'.strtolower($class).'.classes.php');
}
spl_autoload_register('loadFiles');
//include_once("classes/user.class.php");
//include_once("classes/user_sub_1.classes.php");
//include_once("classes/user_sub_2.classes.php");
?>
<!DOCTYPE html>
<html>
<head>
  <h1>Exercise 3</h1>
</head>
<body>
<?php

$user1 = new regularUser('Regular User','acbrehm');
$user2 = new adminUser('Administrator','adbrehm');


$user1->user_type = 1;
$user1->first_name = "Adam";
$user1->last_name = "Brehm";
$user1->email_address = "brehm@email.com";



$user2->user_type = 2;
$user2->first_name = "NotAdam";
$user2->last_name = "NotBrehm";
$user2->email_address = "Notbrehm@email.com";


echo "<li>User Level: ".$user1->user_level . "</li>";
echo "<li>Registered User ID: ".$user1->user_id . "</li>";
echo "<li>Registered First Name: ".$user1->first_name . "</li>";
echo "<li>Registered User Type: ".$user1->user_type . "</li>";
echo "<li>Registered Last Name: ".$user1->last_name . "</li>";
echo "<li>Registered Email: ".$user1->email_address . "</li>";


echo "<br><br><br><br>";


echo "<li>User Level: ".$user1->user_level . "</li>";
echo "<li>Registered User ID: ".$user1->user_id . "</li>";
echo "<li>Registered User Type: ".$user1->user_type . "</li>";
echo "<li>Registered Last Name: ".$user1->last_name . "</li>";
echo "<li>Registered First Name: ".$user1->first_name . "</li>";
echo "<li>Registered Email: ".$user1->email_address . "</li>";




?>


<h2>Doing math</h2>
<?php
$math=adminUser::doMath(7.2,125);
echo $math;
?>




<a href="register.php">Register</a>
</body>
</html>
