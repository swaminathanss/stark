<?php
$servername = "localhost";
$username = "root"; // Change if you have a different username
$password = "";     // Change if you have a password
$dbname = "food_delivery_db"; // Use your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>