<?php
include "../config.php";
session_start();

$name = $_POST['name'] ;
$role = $_POST['role'];
$email = $_POST['email'] ;

$sql = "UPDATE staff SET name=?, role=? WHERE email=?";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $name, $role,  $email);

$stmt->execute();

if ($stmt->affected_rows > 0) {
    echo "<script>alert('Staff updated successfully!');</script>";
        echo "<script>window.location.href='systemadmin.php';</script>";
} else {
    echo"<script>alert('Account was not updated!');</script>";
}

$stmt->close();
$conn->close();

?>