<?php
session_start();

// Include database connection
include 'database/conn.php';

// Check if registration number is provided in the $_POST array
if(isset($_POST['registration_number'])) {
    // Retrieve registration number from the form
    $registration_number = $_POST['registration_number'];

    // SQL query to retrieve student details from the student_details table
    $sql = "SELECT * FROM student_details WHERE registration_number='$registration_number'";
    $result = $link->query($sql);

    // Check if there is a match for the provided registration number
    if ($result->num_rows > 0) {
        // Fetch student details
        $row = $result->fetch_assoc();
        $first_name = $row['First_Name'];
        $last_name = $row['Last_Name'];
        $email = $row['email'];
        $school = $row['School'];
        $department = $row['Department'];
        $course = $row['Course'];

        // Output the student details
        echo "Registration Number: " . $registration_number . "<br>";
        echo "First Name: " . $first_name . "<br>";
        echo "Last Name: " . $last_name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "School: " . $school . "<br>";
        echo "Department: " . $department . "<br>";
        echo "Course: " . $course . "<br>";
    } else {
        // No match found for the provided registration number
        echo "No student found with the registration number: " . $registration_number;
    }
} else {
    // Handle case where registration number is not provided in the form
    echo "Registration number not provided.";
}

// Close database connection
$link->close();

