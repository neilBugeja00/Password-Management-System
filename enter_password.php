<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>

<?php
    //connecting to database
    include "db_connect.php";

    //setting variables to user's input
    $new_entry_website = $_GET["website_input"];
    $new_entry_username = $_GET["username_input"];
    $new_entry_password = $_GET["password_input"];
    $new_entry_email = $_GET["email_input"];
    $new_entry_expiry = $_GET["expiry_input"];

    //SQL injection
    $new_entry_website = addslashes($new_entry_website);
    $new_entry_username = addslashes($new_entry_username);
    $new_entry_password = addslashes($new_entry_password);
    $new_entry_email = addslashes($new_entry_email);
    $new_entry_expiry = addslashes($new_entry_expiry);

    //If expiry is null
    if($new_entry_expiry == null){
        $new_entry_expiry = "0000-01-01";
    }

    //sets entry created to current date
    $new_entry_created = date('Y/m/d');

    echo "<h2>Trying to add new blog: $new_entry_expiry</h2>";

    //inserting user input into database
    $sql = "INSERT INTO storage (pass_id,pass_username, pass_password, pass_email, pass_website, pass_expiry, pass_created)
    VALUES (null,'$new_entry_username','$new_entry_password','$new_entry_email','$new_entry_website','$new_entry_expiry','$new_entry_created')";
    //running the query
    $result = $mysqli->query($sql) or die(mysqli_error($mysqli));

?>

<a href="createPassword.php">Return to create password page</a>