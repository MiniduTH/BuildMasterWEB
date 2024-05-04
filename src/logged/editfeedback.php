<?php

include "../config.php";
session_start();


$id = $_POST['id'];

$result = mysqli_query($conn, "SELECT * FROM feedback WHERE id=$id");
$row = mysqli_fetch_assoc($result);

echo '<form action="updatefeedback.php" method="post">';

echo 'Visibility: <select id="visibility" name="visibility">
<option value="public" >Public</option>
<option value="private" selected > Private </option>
</select>' . print_r($row["visibility"], true) . '<br>';

echo 'Feedback: <textarea name="feedback">' . $row["feedback"] . '</textarea><br>';
echo '<button type="submit">Update</button>';
echo '</form>';

mysqli_close($conn);
?>