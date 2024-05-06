<?php

include "../config.php";
session_start();


$item_no = $_POST['item_no'];

$result = mysqli_query($conn, "SELECT * FROM inventory WHERE item_no = $item_no");
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/form.css">
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

                $item_no = $_POST['item_no'];
     
                $result = mysqli_query($conn, "SELECT * FROM inventory where item_no = '$item_no'");
                $row = mysqli_fetch_assoc($result);
                ?>
              
        <div class="form-container">
            <h2>Edit Stock Count</h2>
            <form action="inventoryupdate.php" method="post">
                
                    
                    <input type="text" id="itemNo" name="item_no" hidden aria-label="Item Number" value ="<?php echo $row["item_no"]?>">
                
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" disabled aria-label="Item Name" value ="<?php echo $row["name"]?>">
                </div>
            
                <div class="form-group">
                    <label for="remaining">Remaining Amount:</label>
                    <input type="number" id="remaining" name="remaining" required aria-label="Remaining Amount" value ="<?php echo $row["remaining_amount"]?>">
                </div>
                <button type="submit" aria-label="Add Item Button">Confirm</button>
            </form>
        </div>
        </main>
              
               <?php
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>      