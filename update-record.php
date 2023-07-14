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

// Get the data from the request body
$data = json_decode(file_get_contents('php://input'), true);

// Extract the values
$id = $data['id'];
$newName = $data['name'];
$newEmail = $data['email'];

// Update the record in the database
$sql = "UPDATE records SET name='$newName', email='$newEmail' WHERE id='$id'";
mysqli_query($connection, $sql);

// Return a success message
$response = ['message' => 'Record updated successfully'];
echo json_encode($response);
?>
