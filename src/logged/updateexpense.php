<?php

include "../config.php";
session_start();


$item_no = $_POST['id'];

$result = mysqli_query($conn, "SELECT * FROM inventory WHERE item_no = $item_no");
$row = mysqli_fetch_assoc($result);

function updateExpense($conn, $id, $date, $description, $amount) {
    $sql = "UPDATE expenses SET  date = '$date', description = '$description', amount = $amount WHERE id = '$id'";
    $conn->query($sql);
    
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/form.css">
    <link rel="stylesheet" href="../CSS/tableview.css">
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
                        <li><a href="../viewfeedback.php">Feedback</a></li>
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
    <main>
                <?php
                include "../config.php";

                session_start();

                $id = $_POST['id'];
     
                $result = mysqli_query($conn, "SELECT * FROM expenses where id = '$id'");
                $row = mysqli_fetch_assoc($result);
                ?>
              
        <div class="form-container">
            <h2>Modify Expense</h2>
            <form action="" method="post">
                <input type="hidden" name="id" value=" <?php echo $id ?> " class="form-input">
                
                <label for="date" class="form-label">Date:</label>
                <input id='day' type="date" name="date" value='<?php echo $row['date']?>' required class="form-input">

                <label for="description" class="form-label" >Description:</label>
                <input type="text" name="description" value='<?php echo $row['description']?>'required class="form-input">

                <label for="amount" class="form-label">Amount:</label>
                <input type="number" name="amount" step="0.01" value='<?php echo $row['amount']?>' required class="form-input">

                <button type="submit" name="update_expense" class="form-submit">Update Expense</button>
               
            </form>
        </div>
        </main>
        <?php
    if (isset($_POST['update_expense'])) {
        updateExpense($conn,$_POST['id'], $_POST['date'], $_POST['description'], $_POST['amount']);
        echo "<script>alert('Expense updated successfully!');</script>";
        echo "<script>window.location.href='accountant.php';</script>";
    }
    ?>
           
     
     <?php

                mysqli_close($conn);
                ?>

