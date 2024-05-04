<!-- index.php -->
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
                        <li><a href="index.php">Our Projects</a></li>
                        <li><a href="index.php">Feedback</a></li>
                        <li><a href="../contact.html">Contact Us</a></li>
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
            <form action="feedbackpost.php" method="post">
                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback"></textarea>
                <label for="visibility">Visibility:</label>
                <select id="visibility" name="visibility">
                    <option value="public" >Public</option>
                    <option value="private" selected >Private</option>
                </select>
                <button type="submit">Submit</button>
            </form>
            <!-- Feedback List -->
            <ul class="feedback-list">
                <!-- Feedback items will be rendered here -->
            </ul>
        </section>

        <div class="container1">
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Visibility</th>
        <th>Feedback</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
                <?php
                include "../config.php";

                session_start();

                $email = $_SESSION['email'];
                $result = mysqli_query($conn, "SELECT * FROM feedback WHERE email='$email' ");
              
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row["id"] . "</td>";  
                  echo "<td>" . $row["visibility"] . "</td>";
                  echo "<td>" . $row["feedback"] . "</td>";
                  echo '<td>
                    
                    <form action="editfeedback.php" method="post">
                    <input type="hidden" name="id" value="' . $row["id"] . '">
                    <button type="submit">Edit</button></form>
                     <form action="deletefeedback.php" method="post">
                        <input type="hidden" name="id" value="' . $row["id"] . '">
                        <button type="submit">Delete</button>
                    </form>                               </td>';
                  echo "</tr>";
                }
              
                mysqli_close($conn);
                ?>
                </tbody>
              </table>

    </main>
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Construction Management System. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>