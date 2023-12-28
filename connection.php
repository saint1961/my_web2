<?php

// Database credentials
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

// Create a connection
$conn = new mysqli($hostname, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Close the connection
$conn->close();
?>