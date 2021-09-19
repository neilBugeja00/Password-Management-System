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
    <title>Create Account</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="creationBox">
    <h1>Create Entry</h1>
        <form action="create_user">
            <p>Username</p>
            <input type="text" name="username_input" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="text" name="password_input" placeholder="Enter Password" required>
            <p>Email</p>
            <input type="email" name="email_input" placeholder="Enter Email">
            <input id="button" type="submit" value="Signup"><br><br>
            <a href="index.php">Back to homepage</a>
        </form>
    </div>
</body>
</html>