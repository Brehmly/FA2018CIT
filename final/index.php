<?php

// Display errors in production mode
error_reporting(-1);
ini_set('display_errors', 'On');

// let's get started
require 'application/router.php';
?>
