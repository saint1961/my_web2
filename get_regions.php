<?php
// Connect to the database

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "my_db";

$conn = new mysqli($hostname, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch regions from the database
$sql = "SELECT id, name FROM regions";
$result = $conn->query($sql);

// Output regions as options for the dropdown
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
    }
}

// Close the database connection
$conn->close();
?>
