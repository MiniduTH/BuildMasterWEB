<?php
include "../config.php";
session_start();
?>

<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/feedback.css">
    <link rel="stylesheet" href="../CSS/accountaniit.css">
    <style>
        .add-item-button {
                display: inline-block;
                padding: 10px 20px;
                margin: 10px;
                border-radius: 5px;
                background-color: #4CAF50; /* Green */
                color: white;
                text-decoration: none;
                font-weight: bold;
                font-size: 16px;
                transition: background-color 0.3s ease;
        }

        .add-item-button:hover {
                background-color: #3e8e41;
        }
            
        .btn-update {
            background-color: #4CAF50; /* Green */
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-update:hover {
            background-color: #3e8e41;
        }

        .btn-delete {

        background-color: #ff0000; /* Red */
        color: white;
        padding: 8px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top:2px;
        }

    .btn-delete:hover {
        background-color: #cc0000;
    }
    </style>

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
                  <form action="inventoryedit.php" method="post">
                  <input type="hidden" name="id" value="' . $expense["id"] . '">
                  <button type="submit" class="btn-update">Update</button></form>
                   <form action="deleteinventory.php" method="post">
                      <input type="hidden" name="id" value="' . $expense["id"] . '">
                      <button type="submit" class="btn-delete">Delete</button>
                  </form>                              
              </td>';

                  echo "</tr>";
                 
                }
              
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>      



<script>
    const addExpenseButton = document.getElementById('addExpenseButton');
    const expenseForm = document.getElementById('expenseForm');

    addExpenseButton.addEventListener('click', function() {
    if (expenseForm.style.display === 'none') {
        expenseForm.style.display = 'block';
    } else {
        expenseForm.style.display = 'none';
    }
    });

    
    document.getElementById('day').max = new Date().toISOString().split('T')[0];
</script>