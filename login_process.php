<?php
session_start();
include("database/conn.php");
// Retrieve username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to retrieve credentials from the admin table
$sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
$result = $link->query($sql);

// Check if there is a match for the provided credentials
if ($result->num_rows > 0) {
    // Authentication successful, redirect to dashboard or desired page
    header("Location: index.php");
    exit();
} else {
    // Authentication failed, redirect back to login page with error message
    header("Location: login.php?error=1");
    exit();
}

// Close database connection


