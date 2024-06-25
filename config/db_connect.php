<?php

$servername = "localhost";
$username = "root";
$password = "rubicscube";
$database = "real_estate"; // Change this to your actual database name

// Creating connection
$conn = new mysqli($servername, $username, $password, $database);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>