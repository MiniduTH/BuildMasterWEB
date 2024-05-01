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

$sql = "INSERT INTO user (first_name,last_name,dob,gender,tel,address,email,password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssisss", $fname, $lname, $dob, $gender, $tel, $addr, $email, $pwd);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $message = "Account created successfully!";
} else {
    $message = "Failed to insert item: ". $stmt->error;
}

$stmt->close();
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
    <div class="message"><?php echo $message; ?></div>
    <a href="logIn.html"><p>Log In</p></a>
    <a href="../index.html"><p>Go back to home</p></a>
</body>
</html>