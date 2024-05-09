<?php
include "../config.php";
session_start();

$email = $_SESSION['email'];

mysqli_query($conn, "DELETE FROM user WHERE email='$email'");

mysqli_close($conn);

echo "<script>alert('User account deleted successfully!');</script>";
        echo "<script>window.location.href='../../index.php';</script>";
?>