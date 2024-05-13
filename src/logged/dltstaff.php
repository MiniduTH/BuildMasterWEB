<?php
include "../config.php";
session_start();

$email = $_POST['email'];

mysqli_query($conn, "DELETE FROM staff WHERE email='$email'");

mysqli_close($conn);

echo "<script>alert('User account deleted successfully!');</script>";
        echo "<script>window.location.href='../../index.php';</script>";
?>