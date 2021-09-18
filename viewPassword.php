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
    <table class = "table">
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
</body>
</html>

<script>
    function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc";
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++;
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>