<?php
$servername = "localhost";
$user = "root";
$password = "";
$database = "coffee";

// Create connection
$conn = new mysqli($servername, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
