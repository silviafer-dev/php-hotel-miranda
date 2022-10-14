<?php

require "../env.php";

$servername = $server;
$username = $user;
$password = $passwd;
$dbname = $name;

// Create connection

 $db =  new mysqli($servername, $username, $password, $dbname );

if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
} 

?>
