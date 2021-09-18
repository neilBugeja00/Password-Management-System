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
</head>
<body>
    <table name = "passwordList">
                <tr>
                    <th>Website</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Date Of Creation</th>
                    <th>Expiry Date</th>
                </tr>
            

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
    </table>
</body>
</html>