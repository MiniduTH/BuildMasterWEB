<?php

include "../config.php";
session_start();


$id = $_POST['id'];

$result = mysqli_query($conn, "SELECT * FROM feedback WHERE id=$id");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/feedback.css">

</head>
<body>
    <header>
        <nav>
            <div class="container">
                <div class="header_left">
                    <h1 class="logo">BuildMaster</h1>
                    <ul class="nav-links">
                        <li class="active"><a href="../../index.php">Dashboard</a></li>
                        <li><a href="ourproject.php">Our Projects</a></li>
                        <li><a href="index.php">Feedback</a></li>
                        <li><a href="../contact.php">Contact Us</a></li>
                        <li><a href="index.php">About Us</a></li>
                    </ul>
                </div>
                <div class="login-signup">
                    <a href="../logOut.php"><button class="btn">Logout</button></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Feedback Form -->
        <section class="feedback-form">
            <h2>Leave Your Feedback</h2>
            <form action="updatefeedback.php" method="post">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback"><?php echo $row["feedback"]?></textarea>
                <label for="visibility">Visibility:</label>
                <select id="visibility" name="visibility">
                    <option value="public" <?php if ($visibility == 'public') echo 'selected'; ?>>Public</option>
                    <option value="private"<?php if ($visibility == 'private') echo 'selected'; ?> >Private</option>
                </select>
                <input type = "hidden" name = "id" value ="<?php echo $id ?>"/>
                <button type="submit">Submit</button>
            </form>
            <!-- Feedback List -->
            <ul class="feedback-list">
                <!-- Feedback items will be rendered here -->
            </ul>
        </section>
   
        <footer>
        <div class="footer-container">
            <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
