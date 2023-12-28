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

// Fetch districts based on the selected region
$regionId = $_POST['region_id'];
$sql = "SELECT id, name FROM districts WHERE region_id = $regionId";
$result = $conn->query($sql);

// Output districts as options for the dropdown
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
    }
}
else {
    echo "<option value=''>No districts found</option>";
}

// Close the database connection
$conn->close();
?>
