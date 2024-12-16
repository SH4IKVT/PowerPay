<?php
// Database connection details
$servername = "localhost"; // or your database server
$username = "root";        // your database username
$password = "";            // your database password
$dbname = "ebill_database";      // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the form
$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['Phone_number'];
$address = $_POST['admin_add'];

// Hash the password for security
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO admin (username, password, email, phone_number, address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $user, $hashed_pass, $email, $phone, $address);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
    
} else {
    echo "Error: " . $stmt->error;
}

// Close the connection
$stmt->close();
$conn->close();
?>
