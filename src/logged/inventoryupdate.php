<?php

include "../config.php";
session_start();


$item_no = $_POST['item_no'];

$remaining = $_POST['remaining'];

$stmt = $conn->prepare("UPDATE inventory SET remaining_amount = ? WHERE item_no = ?");
$stmt->bind_param("ii", $remaining, $item_no);

$stmt->execute();
$stmt->close();
$conn->close();

header('location: supplymgr.php');
?>