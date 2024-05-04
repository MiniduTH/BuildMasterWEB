<?php
include "../config.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <style>
        /* Added styles for the new component */
       .project-status {
            background-color: #f7f7f7;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 20px;
        }
       .project-status h2 {
            margin-top: 0;
        }
       .project-status.budget {
            font-size: 24px;
            font-weight: bold;
            color: #337ab7;
        }
       .project-status.end-date {
            font-size: 18px;
            color: #666;
        }
       .project-status.remaining-time {
            font-size: 18px;
            color: #666;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="../../index.php">Dashboard</a></li>
                    <li><a href="index.php">Our Projects</a></li>
                    <li><a href="feedbacktst.php">Feedback</a></li>
                    <li><a href="../contact.html">Contact Us</a></li>
                    <li><a href="../../index.php">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="../logOut.php"><button class="btn">Logout</button></a>
            </div>
        </div>
    </nav>
    
    <h2 id="hello"> Hello <?php echo $_SESSION['Name'] . "," ?> </h2>

    <!-- Project Status Component -->
    <div class="project-status">
        <h2>Project Status</h2>
        <p class="budget">$10,000 remaining</p>
        <p class="end-date">End Date: March 15, 2024</p>
        <p class="remaining-time">Remaining Period: <span id="time">30 days, 12 hours, 45 minutes</span></p>
        <button class="btn" id="update-status">Update Status</button>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Construction Management System. All Rights Reserved.</p>
        </div>
    </footer>

    <script>
        // Basic JavaScript for interactivity
        document.getElementById('update-status').addEventListener('click', function() {
            alert('Status updated!');
            updateRemainingTime();
        });

        function updateRemainingTime() {
        const endDate = new Date("August 15, 2024 00:00:00");
        const now = new Date();
        const diffMs = endDate - now;
        const diffDays = Math.floor(diffMs / 86400000); // days
        const diffHrs = Math.floor((diffMs % 86400000) / 3600000); // hours
        const diffMins = Math.round(((diffMs % 86400000) % 3600000) / 60000); // minutes
        const remainingTime = `${diffDays} days, ${diffHrs} hours, ${diffMins} minutes`;
        document.getElementById("time").innerHTML = remainingTime;
    }

    // Update remaining time every 5 minutes
    setInterval(updateRemainingTime, 1000*60*5);


    </script>
</body>
</html>