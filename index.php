<html>
<head>
    <title>Student Record Management System</title>
    <style>
     body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #a3a0ad;
    background-size: cover;
    background-repeat: no-repeat;
    opacity: 0.9; /* Adjust the value to your desired opacity level */
}


        header, nav, main, footer {
            width: 100%;
            margin: 0 auto;
        }

        header {
            margin-top: 10px;
            background-color:#101357;
            color:white;
            padding: 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: blue;
            
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        main {
            margin-top: 20px;
        }

        main h2 {
            color: black;
        }

        form input[type="text"] {
            padding: 10px;
            width: 300px;
        }

        form button {
            padding: 10px 20px;
            background-color: green;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        footer {
            background-color: #333333;
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
        <h1>Welcome to Student Record Management System</h1>
    </header>

    <nav>
        <ul>
            <li><a href="view_records.php">View Student Records</a></li>
            <li><a href="register_students.php">Register New Student</a></li>
        </ul>
    </nav>

  
    <main style="display: flex; align-items: center, padding: auto;">
    <div style="flex: 0.5;">
        <h2>Search Student Records</h2>
        <form action="searchstudent_process.php" method="POST">
        <label for="registration_number">Registration Number:</label><br>
        <input type="text" id="registration_number" name="registration_number"><br><br>
        <button type="submit">Search</button>
    </form>
    </div>
    <div style="flex: 1;">
        <img src="assets/mut.jpg" alt="Image Description" style="max-width: 100%">
    </div>
</main>



    <footer>
        <p>Muranga University Of Technology. All Rights Reserved.</p>
    </footer>
</body>
</html>
