<?php
include "../config.php";
session_start();

// Function to add a new expense
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
// Function to update an expense
function updateExpense($conn, $id, $date, $description, $amount) {
    $sql = "UPDATE expenses SET  date = '$date', description = '$description', amount = '$amount' WHERE id = '$id'";
    $conn->query($sql);
}

// Function to delete an expense
function deleteExpense($conn, $id) {
    $sql = "DELETE FROM expenses WHERE id = '$id'";
    $conn->query($sql);
}

// Function to get expenses for a user

function getExpenses($conn) {
    $sql = "SELECT * FROM expenses ";
    $result = $conn->query($sql);
    return $result;
}




// addExpense($conn, 'sysadmin1@buildmaster.com', '2022-05-20', 'Rent', 1000.00);
// updateExpense($conn, 1, 'sysadmin1@buildmaster.com', '2022-05-21', 'Rent (updated)', 1100.00);
// deleteExpense($conn, 2);


?>



<!DOCTYPE html>
<html>
<head>
    <title>Expense Manager</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/form.css">
    <link rel="stylesheet" href="../CSS/feedback.css">


<!-- The rest of your code goes here -->
</head>
<body>
<main>
    <h1>Expense Manager</h1>

    <h2>Add Expense</h2>
    <form action="" method="post">
    <label for="email">Email:</label>
        <select name="email" id="email">
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
        Date: <input type="date" name="date" required><br>
        Description: <input type="text" name="description" required><br>
        Amount: <input type="number" name="amount" step="0.01" required><br>
        <input type="submit" name="add_expense" value="Add Expense">
    </form>
<?php

    if (isset($_POST['add_expense'])) {
    addExpense($conn, $_POST['email'], $_POST['date'], $_POST['description'], $_POST['amount']);
}?>

    <h2>Update Expense</h2>
    <form action="" method="post">
        ID: <input type="number" name="id" required ><br>
        Email: <input type="email" name="email" required><br>
        Date: <input type="date" name="date" required><br>
        Description: <input type="text" name="description" required><br>
        Amount: <input type="number" name="amount" step="0.01" required><br>
        <input type="submit" name="update_expense" value="Update Expense">
    </form>

    <?php
    if (isset($_POST['update_expense'])) {
        updateExpense($_POST['id'], $_POST['email'], $_POST['date'], $_POST['description'], $_POST['amount']);
    }
    ?>

    <h2>Delete Expense</h2>
    <form action="" method="post">
        ID: <input type="number" name="id" required><br>
        <input type="submit" name="delete_expense" value="Delete Expense">
    </form>

    <?php
    if (isset($_POST['delete_expense'])) {
        deleteExpense($conn,$_POST['id']);
    }
    ?>

    <h2>View Expenses</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Date</th>
            <th>Description</th>
            <th>Amount</th>
        </tr>
        <?php
        $expenses = getExpenses($conn);
        while ($expense = $expenses->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $expense['id'] . "</td>";
            echo "<td>" . $expense['email'] . "</td>";
            echo "<td>" . $expense['date'] . "</td>";
            echo "<td>" . $expense['description'] . "</td>";
            echo "<td>" . $expense['amount'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    </main>
</body>
</html>

<?php 

$conn->close();
?>