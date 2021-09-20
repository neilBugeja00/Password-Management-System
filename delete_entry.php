<?php
    //connecting to database
    include "db_connect.php";

    $passFinal = $_GET['passID'];

    //Delete Entry
    // sql to delete a record
    $sql = "DELETE FROM storage WHERE pass_id=$passFinal";

    if ($conn->query($sql) === TRUE){
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    //Once entry is added, redirects user to index.php
    header('Location: index.php');

    $conn->close();