<?php
session_start();    
include "config.php";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="CSS/viewFeedback.css">
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
                <li><a href="../ourproject.html">Our Projects</a></li>
                <li><a href="viewfeedback.php">Feedback</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
        </div>
        <div class="login-signup">
            <a href="login.php"><button class="btn">Login</button></a>
            <a href="signup.php"><button  class="btn">Signup</button></a>
        </div>
    </div>
</nav>

    <main>
        <section class="feedback-section">
            <h1><b>Feedbacks</b></h1>
           <div class="feedback-container">
                <?php
                include "../config.php";

                session_start();

                $result = mysqli_query($conn, "select * from feedback WHERE visibility = 'public'; ");
              
                while ($row = mysqli_fetch_assoc($result)) {

                
                echo '<div class="feedback-card">';
                echo '<h3>'.$row["name"].'</h3>';
                echo  '<p>"'.$row["feedback"].'"</p>';
                echo '</div>';
                 }

           ?>
           </div>
                
            
        </section>
    </main>

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
