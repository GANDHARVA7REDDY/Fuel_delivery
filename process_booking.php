<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Database connection details
$servername = "localhost"; // Change this if your MySQL server is running on a different host
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "fuel_data"; // Your database name

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$fuel_type = $_POST['fuel_type'];
$quantity = $_POST['quantity'];
$delivery_address = $_POST['delivery_address'];
$price = $_POST['price'];

// Insert data into the database
$sql = "INSERT INTO fuel_table (fuel_type, quantity, delivery_address, price) VALUES ('$fuel_type', $quantity, '$delivery_address', $price)";

if ($conn->query($sql) === TRUE) {
    echo "Booking successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
