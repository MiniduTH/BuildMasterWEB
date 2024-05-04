<?php
include "config.php";
session_start();


?>
<?php
    echo $_SESSION['Name'];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="../../index.php">Dashboard</a></li>
                    <li><a href="index.html">Our Projects</a></li>
                    <li><a href="index.html">Feedback</a></li>
                    <li><a href="../contact.html">Contact Us</a></li>
                    <li><a href="index.html">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="../logOut.php"><button class="btn">Logout</button></a>
            </div>
        </div>
    </nav>



 

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Construction Management System. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>