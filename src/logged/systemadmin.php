<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/systemadmin.css">
</head>
<body>
  <nav>
    <div class="nav">
        <div class="header_left">
            <h1 class="logo">BuildMaster</h1>
            <ul class="nav-links">
                <li class="active"><a href="../../index.php">Home</a></li>
                <li><a href="../ourproject.php">Our Projects</a></li>
                <li><a href="../viewFeedback.php">Feedback</a></li>
                <li><a href="../Contact.php">Contact Us</a></li>
                <li><a href="../aboutUs.php">About Us</a></li>
            </ul>
        </div>
    </div>
    <div class="login-signup">
      <a href="login.php"><button class="btn">Login</button></a>
      <button  class="btn"><a>Signup</a></button>
    </div>
  </nav>
  <div class="contnew">
    <header>
      <div class="header-info">
        <div class="customers"><?php echo $_SESSION['role'];?></div>
      </div>
    </header>
    <main>
      <div class="sidebar">
        <div class="filter-section">
          <h3>Daily Tasks</h3>
          <div class="containertodo">
            <input type="text" id="task" placeholder="Enter a task">
            <button id="add">Add Task</button>
            <ul id="task-list"></ul>
          </div>
        </div>
      </div>
      <div class="content">
        <div class="notice-form">
          <h1>Create New Staff Accounts</h1>
          <div class="form-container">
            <h2>Create an Account</h2>
            <form action="createacc.php" method="post">
              <label for="name">Name:</label>
              <input type="text" id="name" name="name" placeholder="Enter Name" required>
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" placeholder="Enter E-mail" required>
              <label for="role">Role:</label>
              <select id="role" name="client" required >
                <option value="Accountant">Accountant</option>
                <option value="SupplyManager">Supply Manager</option>
                <option value="ProjectManager">Project Manager</option>
              </select><br>
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" placeholder="Enter Password" required>
              <label for="confirm-password">Confirm Password:</label>
              <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm The Password" required>
              <input type="submit" value="Create Account">
            </form>
          </div>
        </div>
        <div class="notice-form">
          <h1>Publish Notice</h1>
          <div class="noticearea">
            <form action="noticesubmit.php" method="post">
              <input type="subject" name="Subject" placeholder="Subject">
              <textarea class="textarea" placeholder="Your Message" rows="15" required></textarea>
              <div class="person">
                <input type="checkbox" name="Project Manager" value="ProjectManager">
                <label for="Project Manager">Project Manager</label><br>
                <input type="checkbox" name="Supply Manager" value="SupplyManager">
                <label for="Supply Manager">Supply Manager</label><br>
                <input type="checkbox" name="Accountant" value="Accountant">
                <label for="Accountant">Accountant</label><br>
                <input type="checkbox" name="Client" value="Client">
                <label for="Client">Client</label><br>
              </div>
              <div class="submitbutton">
                <input type="submit" value="Publish">
              </div>
            </form>
          </div>
        </div>
      </div>
    </main>
  </div>
  <section class="social-media">
    <div class="social-media_container">
      <h3 class="heading">Follow us on</h3>
      <ul class="social-icons">
        <li><a href="#"><img src="../img/ig.png" alt="Instagram"></a></li>
        <li><a href="#"><img src="../img/fb.png" alt="Facebook"></a></li>
        <li><a href="#"><img src="../img/yt.png" alt="YouTube"></a></li>
        <li><a href="#"><img src="../img/twitter.png" alt="Twitter"></a></li>
      </ul>
    </div>
  </section>
  <script src="../js/systemadmin.js"></script>
</body>
</html>