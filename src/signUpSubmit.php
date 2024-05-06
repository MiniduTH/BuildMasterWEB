<?php
include "config.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$tel = $_POST['tel'];
$addr = $_POST['addr'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first_name,last_name,dob,gender,tel,address,email,password) VALUES ( '$fname', '$lname', '$dob', '$gender', $tel, '$addr', '$email', '$pwd')";


if ($conn-> query($sql)) {
    $message = "Account created successfully!";
} else {
    $message = "Fail to create an acc: ". $stmt->error;
}

$conn->close();
?>

<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="CSS/style.css">
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
    <div class="message"><?php echo $message; ?></div>
    <a href="logIn.php"><p>Log In</p></a>
    <a href="../index.php"><p>Go back to home</p></a>
</body>
</html>