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
$name = $data['name'];
$email = $data['email'];

// Insert the record into the database
$sql = "INSERT INTO records (name, email) VALUES ('$name', '$email')";
mysqli_query($connection, $sql);

// Return a success message
$response = ['message' => 'Record inserted successfully'];
echo json_encode($response);
?>
