<?php
include "../config.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Management System</title>
    

    <?php


// $_SESSION['role'] = 'client';
switch($_SESSION['role']){

    case 'client' : include "client.php";
    break;
               
    case 'Project Manager' : include "../client.php";
    break;

    case 'Supply Manager' : include "supplymgr.php";
    break;

    case 'System Admin' : include "systemadmin.php";
    break;

    case 'Accountant' : include "accountantd.php";
    break;
}

?>
    
<footer>
        <div class="footer-container">
            <p>&copy;2024 BuildMaster IT. All Rights Reserved.</p>
        </div>
    </footer>
</body>
</html>
