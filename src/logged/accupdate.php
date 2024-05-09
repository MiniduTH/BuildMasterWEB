<?php
include "../config.php";
session_start();


$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$date_of_birth = $_POST['date-of-birth'];
$gender = $_POST['gender'];
$mobile_number = $_POST['mobile-number'];
$address = $_POST['address'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$email = $_SESSION['email'] ;

if ($password!= $confirm_password) {
    echo "Passwords do not match";
    return;
}

$sql = "UPDATE user SET first_name=?, last_name=?, dob=?, gender=?, tel=?, address=?, password=? WHERE email=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssisss", $first_name, $last_name, $date_of_birth, $gender, $mobile_number, $address, $password,$email);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "<script>alert('User updated successfully!');</script>";
        echo "<script>window.location.href='accountant.php';</script>";
} else {
    echo"<script>alert('User was not updated!');</script>";
}

$stmt->close();
$conn->close();

?>