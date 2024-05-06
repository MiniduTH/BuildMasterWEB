<?php
include "../config.php";
session_start();

$item_no = $_POST['item_no'];
$name = $_POST['name'];
$description = $_POST['description'];
$minStock = $_POST['minStock'];
$remaining = $_POST['remaining'];

// Prepare the SQL query with parameterized values
$stmt = $conn->prepare("INSERT INTO inventory (item_no, name, description, min_stock_level, remaining_amount) VALUES (?,?,?,?,?)");
$stmt->bind_param("issii", $item_no, $name, $description, $minStock, $remaining);

// Execute the query
$stmt->execute();
$stmt->close();
$conn->close();

header('location: supplymgr.php');
?>