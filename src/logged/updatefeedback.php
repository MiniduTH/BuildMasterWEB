<?php
$conn = mysqli_connect("hostname", "username", "password", "database");

$id = $_POST['id'];
$visibility = $_POST['visibility'];
$feedback = $_POST['feedback'];

mysqli_query($conn, "UPDATE feedback SET  visibility='$visibility', feedback='$feedback' WHERE id=$id");

mysqli_close($conn);

header('location: feedbacktst.php');
?>