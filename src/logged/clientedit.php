<?php

include "../config.php";
session_start();


$email = $_SESSION['email'];

$result = mysqli_query($conn, "SELECT * FROM user WHERE email='$email'");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Account Details</title>
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="stylesheet" href="../CSS/signup.css">
  <link rel="stylesheet" href="../CSS/client.css">
  <script src="test.js"></script>
</head>
<body>
  <div class="container1">
    <h2>Change Account Details</h2><div class="form">
    <form id="change-form" action="accupdate.php" method="post">
      <div class="form-group">
        <label for="first-name">First Name:</label>
        <input type="text" id="first-name" name="first-name" value = "<?php echo $row["first_name"]?>">
      </div>
      <div class="form-group">
        <label for="last-name">Last Name:</label>
        <input type="text" id="last-name" name="last-name"value = "<?php echo $row["last_name"]?>" >
      </div>
      <div class="form-group">
        <label for="date-of-birth">Date of Birth:</label>
        <input type="date" id="date-of-birth" name="date-of-birth" value = "<?php echo $row["dob"]?>">
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="M">Male</option>
          <option value="F">Female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="mobile-number">Mobile Number:</label>
        <input type="tel" id="mobile-number" name="mobile-number" value = "<?php echo $row["tel"]?>">
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" cols="50" ><?php echo $row["address"]?></textarea>
      </div>
      <div class="form-group">
        <label for="password">Enter New Password:</label>
        <input type="password" id="password" name="password" value = "<?php echo $row["password"]?>" required>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm New Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" value = "<?php echo $row["password"]?>" required>
      </div>
      <button type="submit">Save Changes</button>
    </form>
    </div>
    <p id="error-message" class="error-message"></p>
  </div>

</body>
</html>