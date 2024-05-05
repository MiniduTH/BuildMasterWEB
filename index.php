<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

include "config.php";
session_start();

if ($_SESSION['status'] == 1){
    header('location:src/logged/index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="src/CSS/home.css">
    <link rel="stylesheet" href="src/CSS/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="index.php">Our Projects</a></li>
                    <li><a href="index.php">Feedback</a></li>
                    <li><a href="src/contact.html">Contact Us</a></li>
                    <li><a href="src/aboutus.html">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="src/login.html"><button class="btn">Login</button></a>
                <button  class="btn"><a href="src/signUp.html">Signup</a></button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="cover">
        <section class="hero">
            <div class="container_hero">
                <h2>Welcome to BuildMaster</h2>
                <p>Efficiently manage your construction projects from start to finish.</p>
                <a href="src/login.html" class="btn">Get Started</a>
            </div>
        </section>
    </div>

    <!-- Social Media Icons Section -->
    <section class="social-media">
        <div class="social-media_container">
            <h3 class="heading">Follow us on</h3>
            <ul class="social-icons">
                <li><a href="#"><img src="src/img/ig.png" alt="Instagram"></a></li>
                <li><a href="#"><img src="src/img/fb.png" alt="Facebook"></a></li>
                <li><a href="#"><img src="src/img/yt.png" alt="YouTube"></a></li>
                <li><a href="#"><img src="src/img/twitter.png" alt="Twitter"></a></li>
            </ul>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>