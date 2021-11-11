<?php
    //connecting to database
    include "db_connect.php";

    $passFinal = $_GET['passID'];

    //Delete Entry
    // sql to delete a record
    $sql = "UPDATE storage SET $fieldToEdit=$newData' WHERE pass_id = $passFinal";

    header('Location: index.php');

    $conn->close();