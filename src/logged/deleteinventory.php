<?php
include "../config.php";
session_start();

$id = $_POST['item_no'];

mysqli_query($conn, "DELETE FROM inventory WHERE id=$item_no");

mysqli_close($conn);

header('location: supplymgr.php');
?>