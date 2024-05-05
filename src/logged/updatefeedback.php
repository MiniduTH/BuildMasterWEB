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

header('location: feedbacktst.php');
?>