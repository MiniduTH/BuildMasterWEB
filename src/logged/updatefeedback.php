<?php

include "../config.php";
session_start();

$id = $_POST['id'];
$visibility = $_POST['visibility'];
$feedback = $_POST['feedback'];

$stmt = $conn->prepare("UPDATE feedback SET visibility = ?, feedback = ? WHERE id = ?");
$stmt->bind_param("ssi", $visibility, $feedback, $id);

$stmt->execute();
$stmt->close();
$conn->close();

echo "<script>alert('Feedback Updated successfully ');</script>";
        echo "<script>window.location.href='../../index.php';</script>";

header('location: supplymgr.php');

?>