<?php

// .https://juc353.encs.concordia.ca/
$servername = "juc353.encs.concordia.ca";
$username = "juc353_1";
$password = "AbCd1234";
$dbname = "juc353_1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected to juc353_1";
?>

