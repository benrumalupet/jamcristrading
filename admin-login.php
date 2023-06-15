<?php
session_start();
include "connection.php";

// Open the database connection
$conn = openConnection();

// Retrieve the login credentials from the form
$identifier = $_POST['identifier'] ?? "";
$password = $_POST['password'] ?? "";

// Validate and sanitize user input (optional but recommended)
$identifier = trim($identifier);
$password = trim($password);
$identifier = mysqli_real_escape_string($conn, $identifier);
$password = mysqli_real_escape_string($conn, $password);

// Prepare and execute the login query
$stmt = $conn->prepare("SELECT * FROM admin WHERE (email = ? OR username = ?) AND password = ?");
$stmt->bind_param("sss", $identifier, $identifier, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    // Login successful
    $_SESSION['logged_in'] = true;
    // $stmt->close(); // Close the statement
    // $conn->close(); // Close the connection
    // echo '<script>alert("Login Successful.");</script>';
    // header("Location: admin.php?login=success"); // Change "admin.php" to your desired destination
    echo "<script>alert('Login Sucessful')</script>";
    echo "<script>window.location.href='admin.php';</script>";
  
    exit();
} else {
    // Login failed
    echo "<script>alert('Invalid email or password.')</script>";
    echo "<script>window.location.href='login.php';</script>";
}
?>
