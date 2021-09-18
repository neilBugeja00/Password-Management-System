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
    <title>View Passwords</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="tablesort.css"> -->
</head>

<body>
    <table class = "table table-sortable">
        <thead>
            <tr>
                <th onclick="sortTable(0)">Website</th>
                <th onclick="sortTable(1)">Username</th>
                <th onclick="sortTable(2)">Password</th>
                <th onclick="sortTable(3)">Email</th>
                <th onclick="sortTable(4)">Date Of Creation</th>
                <th onclick="sortTable(5)">Expiry Date</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $sql = "SELECT pass_website, pass_username, pass_password, pass_email, pass_created, pass_expiry content FROM storage";
                $result = $mysqli->query($sql) or die(mysqli_error($mysqli));
                
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<tr>';
                        echo '<td>'. $row['pass_website'] .'</td>';
                        echo '<td>'. $row['pass_username'] .'</td>';
                        echo '<td>'. $row['pass_password'] .'</td>';
                        echo '<td>'. $row['pass_email'] .'</td>';
                        echo '<td>'. $row['pass_created'] .'</td>';
                        echo '<td>'. $row['pass_expiry'] .'</td>';
                    echo '</tr>';
                }
                } else {
                echo "0 results";
                }
                $mysqli->close();
            ?>
        </tbody>
    </table>
    <script src="tablesort.js"></script>
</body>

<a href="index.php">Back to homepage</a>
</html>