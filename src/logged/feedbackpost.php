<?php
include "../config.php";
session_start();

$feedback = $_POST['feedback'];
$visibility = $_POST['visibility'];
$email = $_SESSION['email'];
$name = $_SESSION['Name'];


$sql = "INSERT INTO feedback (email,name,visibility,feedback) VALUES ( '$email', '$name', '$visibility', '$feedback')";


if ($conn-> query($sql)) {
    $message = "Feedback sent successfully";
} else {
    $message = "Error : Try Again: ". $stmt->error;
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
    
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <div class="message"><?php echo $message; ?></div>
    <a href="feedbacktst.php"><p>Go back</p></a>
</body>
</html>