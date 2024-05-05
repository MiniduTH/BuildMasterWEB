<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buidmaster";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>


