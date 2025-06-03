<?php
$server = "localhost";
$username = "root"; // Adjust based on setup
$password = ""; // MySQL password (if set)
$database = "image_gallery";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
