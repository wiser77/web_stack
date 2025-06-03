<?php
$server = "localhost";
$username = "root"; // Adjust based on your setup
$password = ""; // Set if you have a MySQL password
$database = "food_ordering";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
