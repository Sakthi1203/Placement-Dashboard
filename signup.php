<?php

// Establish a connection to the MySQL database
$servername = "localhost";
$username = " ";
$password = " ";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get the form data from the POST request
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Hash the password using the bcrypt algorithm
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Prepare an SQL statement to insert the user data into the database
$stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashed_password);

// Execute the statement and check for errors
if ($stmt->execute() === FALSE) {
  die("Error: " . $stmt->error);
}

// Close the database connection
$stmt->close();
$conn->close();

// Redirect the user to a confirmation page
header("Location: registration_confirmation.php");
exit();
?>
