<?php
    //variables to connect to database
    $host = "localhost";
    $username = "root";
    $userpass = "110101";
    $database = "pms";

    $mysqli = new mysqli($host,$username,$userpass,$database);

    if($mysqli->connect_errno){
        echo "Failed to connect";
    }
?>