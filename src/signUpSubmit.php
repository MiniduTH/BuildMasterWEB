<?php
include "config.php";

$fname = $_POST['fname'];
$fname = $_POST['lname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$tel = $_POST['rel'];
$addr = $_POST['addr'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO user (first_name,last_name,dob,gender,tel,address,email,password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssisss", $fname, $lname, $dob, $gender, $tel, $addr, $email, $pwd);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "Account created successfully!";
} else {
    echo "Failed to insert item: ". $stmt->error;
}

$stmt->close();
$conn->close();
?>
