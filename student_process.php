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
        
        // Output the student details in a table
        echo "<h2>Student Details</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Field</th><th>Value</th></tr>";
        echo "<tr><td>Registration Number</td><td>{$registration_number}</td></tr>";
        echo "<tr><td>First Name</td><td>{$row['first_name']}</td></tr>";
        echo "<tr><td>Last Name</td><td>{$row['last_name']}</td></tr>";
        echo "<tr><td>Email</td><td>{$row['email']}</td></tr>";
        echo "<tr><td>School</td><td>{$row['school']}</td></tr>";
        echo "<tr><td>Department</td><td>{$row['department']}</td></tr>";
        echo "<tr><td>Course</td><td>{$row['course']}</td></tr>";
        echo "</table>";
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
?>
