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
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="loginbox">
        <img src="css/Images/user.png" class="avatar" alt="avatar">
            <h1>Login Here</h1>
            <form>
                <p>Username</p>
                <input type="text" name="" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="" placeholder="Enter Password">
                <input type="submit" name="" value="Login">
                <a href="index.php">Create Account</a><br>
                <a href="index.php">Back to homepage</a>
            </form>
    </div>
</body>
</html>