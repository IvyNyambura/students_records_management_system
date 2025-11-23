<?php
session_start();

// Include database connection
include 'database/conn.php';

// Retrieve registration details from the form
$registration_number = $_POST['registration_number'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$school = $_POST['school'];
$department = $_POST['department'];
$course = $_POST['course'];

// SQL query to insert registration details into the student_details table
$sql = "INSERT INTO student_details (registration_number, First_Name, Last_Name, email, School, Department, Course) 
        VALUES ('$registration_number', '$first_name', '$last_name', '$email', '$school', '$department', '$course')";

// Execute the query
if ($link->query($sql) === TRUE) {
    // Registration successful
    echo "Student registered successfully!";
} else {
    // Error occurred during registration
    echo "Error: " . $sql . "<br>" . $link->error;
}

// Close database connection
$link->close();

