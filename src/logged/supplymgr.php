<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    
    <link rel="stylesheet" href="../CSS/tableview.css">

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
                        <li><a href="../ourproject.php">Our Projects</a></li>
                        <li><a href="../viewfeedback">Feedback</a></li>
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

    <a href="addinventoryitem.php" class="add-item-button">Add Item</a>

    <div class="table-container">
    <table>
        <thead>
          <tr>
            <th>Item No.</th>
            <th>Name</th>
            <th>Description</th>
            <th>Minimum Stock Level</th>
            <th>Remaining Amount</th>
            <th>Action</th>
          </tr>
        </thead>
            <tbody>
                
                <?php
                include "../config.php";

                session_start();

                $email = $_SESSION['email'];
     
                $result = mysqli_query($conn, "SELECT * FROM inventory");
              

                while ($row = mysqli_fetch_assoc($result)) {
                 if($row["remaining_amount"]<=$row["min_stock_level"]){
                    echo "<tr class='warn'>";
                 }   
                 else{echo "<tr>";}
                  
                  echo "<td>" . $row["item_no"] . "</td>";  
                  echo "<td>" . $row["name"] . "</td>";
                  echo "<td>" . $row["description"] . "</td>";
                  echo "<td>" . $row["min_stock_level"] . "</td>";
                  echo "<td>" . $row["remaining_amount"] . "</td>";
                  echo  '<td>    
                  <form action="inventoryedit.php" method="post">
                  <input type="hidden" name="item_no" value="' . $row["item_no"] . '">
                  <button type="submit" class="btn-update" >Update</button></form>
                   <form action="deleteinventory.php" method="post">
                      <input type="hidden" name="item_no" value="' . $row["item_no"] . '">
                      <button type="submit" class="btn-delete" >Delete</button>
                  </form>                              
              </td>';
                  echo "</tr>";
                 
                }
              
                mysqli_close($conn);
                ?>
            </tbody>
        </table>
    </div>      



<style>
    
</style>