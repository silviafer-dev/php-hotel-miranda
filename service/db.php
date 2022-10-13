
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

$sql = "SELECT * FROM rooms";
$result = mysqli_query($db, $sql);

echo "<pre>";

var_dump(mysqli_fetch_all($result));
echo "</pre>";

$db->close();

?>
