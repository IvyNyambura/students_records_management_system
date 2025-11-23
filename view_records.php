<!DOCTYPE html>
<html>
<head>
    <title>View Student Records</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:#282828;
        }

        header, main, footer {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            margin-top: 20px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        footer {
            background-color: #006699;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>View Student Records</h1>
    </header>

    <main>
        <table>
            <tr>
                <th>Registration Number</th>
                <th>Name</th>
                <th>Course</th>
                <th>Email</th>
            </tr>
            <?php
            // Include database connection
            include 'database/conn.php';

            // SQL query to retrieve student records
            $sql = "SELECT * FROM student_details";
            $result = $link->query($sql);

            // Check if there are any records returned
            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['registration_number'] . "</td>";
                    echo "<td>" . $row['First_Name'] . " " . $row['Last_Name'] . "</td>";
                    echo "<td>" . $row['Course'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No student records found</td></tr>";
            }
            // Close database connection
            $link->close();
            ?>
        </table>
    </main>

    <footer>
        <p>Muranga University Of Technology. All Rights Reserved.</p>
    </footer>
</body>
</html>
