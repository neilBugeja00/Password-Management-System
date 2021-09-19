<?php
    //REGISTER USER'S NEW ENTRY
    function register_entry(){
        //connecting to database
        include "db_connect.php";

        //setting variables to user's input
        $new_entry_website = $_POST["website_input"];
        $new_entry_username = $_POST["username_input"];
        $new_entry_password = $_POST["password_input"];
        $new_entry_email = $_POST["email_input"];
        $new_entry_expiry = $_POST["expiry_input"];

        //If expiry is null
        if($new_entry_expiry == null){
            $new_entry_expiry = "0000-01-01";
        }

        echo "<h2>Trying to add new blog: $new_entry_website</h2>";
        echo "<h2>Trying to add new blog: $new_entry_password</h2>";
        echo "<h2>Trying to add new blog: $new_entry_expiry</h2>";

        //sets entry created to current date
        $new_entry_created = date('Y/m/d');

        //inserting user input into database
        $sql = "INSERT INTO storage (pass_id,pass_username, pass_password, pass_email, pass_website, pass_expiry, pass_created)
        VALUES (null,'$new_entry_username','$new_entry_password','$new_entry_email','$new_entry_website','$new_entry_expiry','$new_entry_created')";
        //running the query
        $result = $conn->query($sql) or die(mysqli_error($conn));

        //Once entry is added, redirects user to index.php
        header('Location: index.php');
    }

    //If user clicks on submit for creating entry
    if(isset($_POST['submitEntry'])){
        register_entry();
    } 