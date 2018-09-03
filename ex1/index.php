<?php include '_includes/config.php' ?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>

<?php
	include   '_includes/header.inc.php';
	?>
<body>
  <?php
  $myArray = array('Adam Brehm', 'Purple', 'Inception', 'Dark Force Rising', 'Youtube.com');
  echo "<h1>" . $myArray[0] . "</h1>";

	function printArray($myArray) 				 {
		//foreach ($myArray as $value)  {
		//	if ($value != 'Adam Brehm'){
		//		echo "<li>" . $myArray .  "</li>";
		$length = count($myArray);
	  for ($i = 1; $i < $length; $i++) {

	    echo "<li>" . $myArray[$i] .  "</li>";
}}


		echo "<ul>";
printArray($myArray);
			echo "</ul>";
  ?>
  <?php include  '_includes/footer.inc.php'; ?>
