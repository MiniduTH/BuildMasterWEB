<?php
include "../config.php";
session_start();

$id = $_POST['id'];

mysqli_query($conn, "DELETE FROM feedback WHERE id=$id");

mysqli_close($conn);

header('location: feedbacktst.php');
?>