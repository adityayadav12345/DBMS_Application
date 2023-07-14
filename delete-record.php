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

// Get the record ID from the request parameters
$id = $_GET['id'];

// Delete the record from the database
$sql = "DELETE FROM records WHERE id='$id'";
mysqli_query($connection, $sql);

// Return a success message
$response = ['message' => 'Record deleted successfully'];
echo json_encode($response);
?>
