
<?php
include "../config.php";

// Get form data
$subject = $_POST['Subject'];
$message = $_POST['textarea'];
$recipients = array();
if (isset($_POST['Project Manager'])) {
  $recipients[] = 'ProjectManager';
}
if (isset($_POST['Supply Manager'])) {
  $recipients[] = 'SupplyManager';
}
if (isset($_POST['Accountant'])) {
  $recipients[] = 'Accountant';
}
if (isset($_POST['Client'])) {
  $recipients[] = 'Client';
}

// Insert data into database
$sql = "INSERT INTO notices (subject, message, recipients) VALUES ('$subject', '$message', '" . implode(',', $recipients) . "')";
if (mysqli_query($conn, $sql)) {
  echo "Notice submitted successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>