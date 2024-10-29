<?php
include 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $customer_name = $_POST['customer_name'];
    $pizza_type = $_POST['pizza_type'];
    $pizza_size = $_POST['pizza_size'];
    $quantity = $_POST['quantity'];

    // Prepare an SQL statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO list (customer_name, pizza_type, pizza_size, quantity) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sssi", $customer_name, $pizza_type, $pizza_size, $quantity);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Order placed successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>