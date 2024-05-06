<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="../CSS/form.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="index.php">Our Projects</a></li>
                    <li><a href="index.php">Feedback</a></li>
                    <li><a href="src/contact.html">Contact Us</a></li>
                    <li><a href="../index.php">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="login.html"><button class="btn">Login</button></a>
                <button  class="btn"><a>Signup</a></button>
            </div>
        </div>
    </nav>

    <main>
        <div class="form-container">
            <h2>Add Inventory Item</h2>
            <form action="postinventory.php" method="post">
                
            <div class="form-group">
                    <label for="item_no">Item No:</label>
                    <input type="number" id="item_no" name="item_no" required aria-label="Item Number">
                </div>

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required aria-label="Item Name">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea id="description" name="description" required aria-label="Item Description"></textarea>
                </div>
                <div class="form-group">
                    <label for="minStock">Minimum Stock Level:</label>
                    <input type="number" id="minStock" name="minStock" required aria-label="Minimum Stock Level">
                </div>
                <div class="form-group">
                    <label for="remaining">Remaining Amount:</label>
                    <input type="number" id="remaining" name="remaining" required aria-label="Remaining Amount">
                </div>
                <button type="submit" aria-label="Add Item Button">Add Item</button>
            </form>
        </div>

            <!-- Footer -->
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Construction Management System. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>