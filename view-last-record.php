<?php
// Connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database_name";

// Create a connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to fetch the last record
$sql = "SELECT * FROM records ORDER BY id DESC LIMIT 1";
$result = mysqli_query($connection, $sql);

// Fetch the data as an associative array
$data = mysqli_fetch_assoc($result);

// Return the data as JSON
echo json_encode($data);
?>
