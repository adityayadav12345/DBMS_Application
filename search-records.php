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

// Get the search parameter
$search = $_GET['search'];

// Query to search for records based on the search parameter
$sql = "SELECT * FROM records WHERE name LIKE '%$search%' OR email LIKE '%$search%' ";
$result = mysqli_query($connection, $sql);

// Fetch all the matching records
$records = [];
while ($row = mysqli_fetch_assoc($result)) {
  $records[] = $row;
}

// Return the records as JSON
echo json_encode($records);
?>
