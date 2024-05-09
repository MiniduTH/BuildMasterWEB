<?php
include "../config.php";
session_start();

function deleteExpense($conn, $id) {
    $sql = "DELETE FROM expenses WHERE id = '$id'";
    $conn->query($sql);
}

function addExpense($conn, $email, $date, $description, $amount) {
    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        
        $sql = "INSERT INTO expenses (email, date, description, amount) VALUES ('$email', '$date', '$description', $amount)";
        $conn->query($sql);
        echo "Added.";

    } else {
        echo "Error: The email does not exist in the users table.";
    }
}


if (isset($_POST['delete_expense'])) {
    deleteExpense($conn,$_POST['id']);
}


?>

<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>

    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/tableview.css">
    <link rel="stylesheet" href="../CSS/accountaniit.css">

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
                        <li><a href="../aboutus.php">About Us</a></li>
                    </ul>
                </div>
                <div class="login-signup">
                    <a href="../logOut.php"><button class="btn">Logout</button></a>
                </div>
            </div>
        </nav>
    </header>

    <button id="addExpenseButton" class="add-item-button">Add an expense</button>
<div id="expenseForm" style="display: none;">
<form action="" method="post" class="glass-form">
  <label for="email" class="form-label">Email:</label>
  <select name="email" id="email" class="form-select">
    <?php
      // Query the users table to get all the emails
      $sql = "SELECT email FROM user";
      $result = mysqli_query($conn, $sql);

      // Loop through the results and create a dropdown option for each email
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='". $row['email']. "'>". $row['email']. "</option>";
      }

     ?>
  </select>
  <label for="date" class="form-label">Date:</label>
  <input id='day' type="date" name="date" required class="form-input">
  <label for="description" class="form-label">Description:</label>
  <input type="text" name="description" required class="form-input">
  <label for="amount" class="form-label">Amount:</label>
  <input type="number" name="amount" step="0.01" required class="form-input">
  <button type="submit" name="add_expense" class="form-submit">Add Expense</button>
</form>    
<?php

    if (isset($_POST['add_expense'])) {
        addExpense($conn, $_POST['email'], $_POST['date'], $_POST['description'], $_POST['amount']);
}
?>
</div>


    <div class="table-container">
    <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Date</th>
            <th>Description</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
        </thead>
            <tbody>
                
                <?php
                include "../config.php";

                session_start();
                
                // $sql = "SELECT * FROM expenses ";
                // $result = $conn->query($sql);
                $result = mysqli_query($conn, "SELECT * FROM expenses");
              

                while ($expense = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                
                echo "<td>" . $expense['id'] . "</td>";
                echo "<td>" . $expense['email'] . "</td>";
                echo "<td>" . $expense['date'] . "</td>";
                echo "<td>" . $expense['description'] . "</td>";
                echo "<td>" . $expense['amount'] . "</td>";
                echo  '<td>    
                  <form action="updateexpense.php" method="post">
                  <input type="hidden" name="id" value="'  . $expense["id"] . '">
                  <button type="submit" class="btn-update">Update</button>
                  </form>

                  <form action="" method="post">
                  <input type="hidden" name="id" value="' .  $expense["id"]  . '">
                  <input type="hidden" name="delete_expense" value="true">
                  <button type="submit" class="btn-delete">Delete</button>
              </form>
                                           
              </td>';

                  echo "</tr>";

                 
                }
              
               
                ?>
            </tbody>
        </table>
    </div>    
    
   
    
    <?php
             mysqli_close($conn);
             ?>



<script>
     

    const addExpenseButton = document.getElementById('addExpenseButton');
    const expenseForm = document.getElementById('expenseForm');

    addExpenseButton.addEventListener('click', function() {
    if (expenseForm.style.display === 'none') {
        expenseForm.style.display = 'block';
        
        addExpenseButton.innerText = 'Close';

    } else {
        expenseForm.style.display = 'none';
        addExpenseButton.innerText = 'Add an Expense';
    }
    });

    
    document.getElementById('day').max = new Date().toISOString().split('T')[0];
</script>