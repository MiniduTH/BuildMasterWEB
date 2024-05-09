<?php
include "../config.php";
session_start();
?>
<title>Construction Management System</title>
    <link rel="stylesheet" href="../CSS/style.css">
    
    <style>
        /* Added styles for the new component */
       .project-status {
            background-color: #f7f7f7;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin: 20px;
        }
       .project-status h2 {
            margin-top: 0;
        }
       .project-status.budget {
            font-size: 24px;
            font-weight: bold;
            color: #337ab7;
        }
       .project-status.end-date {
            font-size: 18px;
            color: #666;
        }
 .project-status {
        background-color: #f7f7f7;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        margin: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

   .project-status h2 {
        margin-top: 0;
    }

   .project-status.budget {
        font-size: 24px;
        font-weight: bold;
        color: #337ab7;
    }

   .project-status.end-date {
        font-size: 18px;
        color: #666;
    }

    /* Add some styling to the hello message */
    #hello {
    color: #fff; /* Change the text color to white */
    font-size: 36px;
    font-weight: bold;
    text-align: center;
    margin-bottom: 20px;
    background-color: rgba(0, 105, 143, 0.8); /* Add a blue background color with 80% opacity */
    padding: 20px; /* Add some padding around the text */
    border-radius: 10px; /* Add a border radius to make the corners rounded */
    backdrop-filter: blur(5px); /* Add a blur effect to the background */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow to give the text some depth */
}
.button-container {
    display: flex;
    justify-content: space-around;
    padding: 20px;
}

.edit-btn, .delete-btn {
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.edit-btn {
    background-color: #4CAF50; /* Green */
    color: white;
}

.delete-btn {
    background-color: #f44336; /* Red */
    color: white;
}

/* Add a hover effect for buttons */
.edit-btn:hover, .delete-btn:hover {
    opacity: 0.8;
}

      
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="container">
            <div class="header_left">
                <h1 class="logo">BuildMaster</h1>
                <ul class="nav-links">
                    <li class="active"><a href="../../index.php">Dashboard</a></li>
                    <li><a href="../ourproject.php">Our Projects</a></li>
                    <li><a href="feedbacktst.php">Your Feedbacks</a></li>
                    <li><a href="../contact.php">Contact Us</a></li>
                    <li><a href="../aboutus.php">About Us</a></li>
                </ul>
            </div>
            <div class="login-signup">
                <a href="../logOut.php"><button class="btn">Logout</button></a>
            </div>
        </div>
    </nav>
    
    <h2 id="hello"> Hello <?php echo $_SESSION['Name']  ?> </h2>

    <!-- Project Status Component -->
    <div class="project-status">
    <h2>Project Status</h2>
    <p class="budget">$10,000 remaining</p>
    <p class="end-date">End Date: <span id='end-date'>2025-01-01<span></p>
</div>

<div class="button-container">
    <form action="clientedit.php" method="post">
        <button class="edit-btn">Edit Account</button>
    </form>
    <form action="dltacc.php"  method="post">
        <button class="delete-btn">Delete Account</button>
    </form>
</div>
