<?php
    //variables to connect to database
    $host = "localhost";
    $username = "root";
    $userpass = "110101";
    $database = "pms";

    $conn = new mysqli($host,$username,$userpass,$database);

    if($conn->connect_errno){
        echo "Failed to connect";
    }
?>