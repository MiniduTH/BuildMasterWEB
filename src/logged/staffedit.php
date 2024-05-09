<?php

include "../config.php";
session_start();


$email = $_POST['email'];

$result = mysqli_query($conn, "SELECT * FROM staff WHERE email='$email'");
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
    <form id="change-form" action="updatestaff.php" method="post">
      <div class="form-group">
        <label for="first-name">Name:</label>
        <input type="text" id="first-name" name="name" value = "<?php echo $row["name"]?>">
      </div>
     <input  type="hidden" name="email" value="<?php echo $row["email"]?>">
      <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" required>
          <option value="Accountant">Accountant</option>
          <option value="Project Manager">Project Manager</option>
          <option value="Supply Manager">Supply Manager</option>
        </select>
      </div>
      <button type="submit">Save Changes</button>
    </form>
    </div>
    <p id="error-message" class="error-message"></p>
  </div>

</body>
</html>