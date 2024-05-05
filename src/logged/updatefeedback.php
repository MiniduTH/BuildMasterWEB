<?php

include "../config.php";
session_start();


$id = $_POST['id'];
$visibility = $_POST['visibility'];
$feedback = $_POST['feedback'];


mysqli_query($conn, "UPDATE feedback SET visibility = '$visibility', feedback = '$feedback' WHERE id = $id");
mysqli_close($conn);

header('location: feedbacktst.php');
?>