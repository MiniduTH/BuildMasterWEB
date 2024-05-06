<?php
session_start();

include "src/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $role = $_POST["client"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];

    if ($password == $confirm_password) {
       
        if ($conn->query($sql) === TRUE) {
            $msg = "New record created successfully";

            // Insert into staff_logins table
            $sql = "INSERT INTO staff_logins (email, password)
            VALUES ('$email', '$password')";
            $conn->query($sql);

            // Insert into staff table
            $sql = "INSERT INTO staff (name, email, role)
            VALUES ('$name', '$email', '$role')";
            $conn->query($sql);

            
            
        } else {
            $msg = "Error: ". $sql. "<br>". $conn->error;
        }
    } else {
        $msg =   "Passwords do not match";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            padding: 20px;
        }

        .message {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
            color: #333;
            font-size: 16px;
            margin-top: 10px;
            text-align: center;
        }

        main a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            color: #00ffff;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <!-- Navigation Bar -->
    <nav>
    <div class="container">
        <div class="header_left">
            <h1 class="logo">BuildMaster</h1>
            <ul class="nav-links">
                <li class="active"><a href="../index.php">Home</a></li>
                <li><a href="ourproject.php">Our Projects</a></li>
                <li><a href="feedbacktst.php">Feedback</a></li>
                <li><a href="src/contact.php">Contact Us</a></li>
                <li><a href="index.php">About Us</a></li>
            </ul>
        </div>
        
    </div>
    </nav>
    <main>
    <?php echo $msg; ?>
    <a href="../index.php"><p>Go back to home</p></a>
    </main>
    <footer>
    <div class="footer-container">
        <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
