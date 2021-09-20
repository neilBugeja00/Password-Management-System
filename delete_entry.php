<?php
    //connecting to database
    include "db_connect.php";
    echo "testing connection";

    $passFinal = $_GET['passID'];
    echo "testID set to pass_id";
    echo "<h2>Trying to add new blog: $passFinal</h2>";
    //Once entry is added, redirects user to index.php
    //header('Location: index.php');

    $conn->close();