<?php
include "config.php";
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$accType = $_POST['accType'];

if ($accType=='C') {
    $select = "SELECT * FROM user WHERE email = '$email' AND password = '$password' ";
    $result = $conn->query($select);
}


if ($result->num_rows > 0) {

    $row = $result->fetch_array() ;

    $_SESSION['Name'] = $row['first_name'];

    $msg = "Logged in successfully";
    
} else {
    $msg = "Invalid username or password";
}

$conn->close();
?>


<!DOCTYPE html>

<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .message {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f2f2f2;
            color: #333;
            font-size: 16px;
            margin-top: 10px;
            text-align: center;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #333;
            text-decoration: none;
            font-size: 18px;
        }

        a:hover {
            color: #0066cc;
        }
    </style>
</head>
<body>
    <div class="message"><?php echo $msg; ?></div>
    <a href="logOut.php"><p>Log Out</p></a>
    <a href="../index.html"><p>Go back to home</p></a>
</body>
</html>

