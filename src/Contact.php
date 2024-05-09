<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BuildMaster - Contact Us</title>
        <link rel="stylesheet" href="CSS/contact.css">
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
                    <li><a href="viewfeedback.php">Feedback</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </div>
            <?php
        error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
     
        

            if($_SESSION['status'] ==1){
                echo '<div class="login-signup">
                <a href="../logOut.php"><button class="btn">Logout</button></a>
                </div>';
            }else{
               echo '<div class="login-signup">
                <a href="login.php"><button class="btn">Login</button></a>
                <a href="signup.php"><button  class="btn">Signup</button></a>
                </div>';

            }
            ?>
        </div>
    </nav>
    
    <main>
        <section class="contact-section">
            <div class="contact-info">
                <h2>Let's Build Something <span>Awesome</span></h2>
                <p>We're a team of passionate builders dedicated to bringing your vision to life. Get in touch, and let's create something extraordinary together.</p>
                <br>

                <div class="contact-details">
                    <div>
                        <p><b>123 Main Street, 1st Lane, Colombo 8</b></p>
                    </div>
                    <div>
                        <p><b>info@buildmaster.com</b></p>
                    </div>
                    <div>
                        <p><b>(076) 382-7754</b></p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form>
                    <input type="text" placeholder="Your Name" required>
                    <input type="email" placeholder="Your Email" required>
                    <input type="text" placeholder="Subject" required>
                    <textarea placeholder="Your Message" rows="5" required></textarea>
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
        </section>
    </main>
        <!-- Social Media Icons Section -->
        <section class="social-media">
            <div class="social-media_container">
                <h3 class="heading">Follow us on</h3>
                <ul class="social-icons">
                    <li><a href="#"><img src="img/ig.png" alt="Instagram"></a></li>
                    <li><a href="#"><img src="img/fb.png" alt="Facebook"></a></li>
                    <li><a href="#"><img src="img/yt.png" alt="YouTube"></a></li>
                    <li><a href="#"><img src="img/twitter.png" alt="Twitter"></a></li>
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