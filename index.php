<?php
    //connecting to database
    include "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><a href="createPassword.php">New</a></li>
                    <li><a href="viewPassword.php">View</a></li>
                    <li><a href="delete.php">Delete</a></li>
                    <li><a href="#">Edit</a></li>
                    <li><a href="login.php">Log in</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>