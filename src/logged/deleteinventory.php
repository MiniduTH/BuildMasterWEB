<?php
include "../config.php";
session_start();

$item_no = $_POST['item_no'];

mysqli_query($conn, "DELETE FROM inventory WHERE item_no=$item_no");

mysqli_close($conn);

header('location: supplymgr.php');
?>