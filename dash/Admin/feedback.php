



<?php
session_start();

include '../../header.php';

?>
<style>
li{
  float: right;
}
  </style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
  </head>
  <body>


    <!-- Container -->
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="row" style="flex-wrap: nowrap;">
          <div class="col-md-2" style="margin-left:-30px;">
            <!--  Side nav bar php -->
            <?php
include 'side-nav.php';
?>
          </div>



          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">
<!-- php code -->
<?php

include '../../login/config.php';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "doct");
$sql = "SELECT * FROM feedback";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>";
        echo "<th>id</th>";
        echo "<th>firstname</th>";
        echo "<th>lastname</th>";
        echo "<th>email</th>";
        echo "<th>feedback</th>";

        echo "</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['lastname'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['feedback'] . "</td>";

            echo "</tr>";
        }
        echo "</table>";

        // Free result set
        $result->free();
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>


<style>
   li{
  float: right;
}
table{
    position: relative;
    top: 150px;
    border:1px solid white;
    position:relative;
    border-collapse: collapse;
    background-color:#47474842;
    width:85%;
    left: -345px;
}

#myInput {
        background-image: url(/css/searchicon.png);
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 54%;
    font-size: 16px;
    height: 41px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
    position: relative;
    top: 24px;
    right: -86px; /* Add some space below the input */
}
th{
  background-color: #17a2b8;
}

th, td {
  text-align: CENTER;
  padding: 0.3rem;

}
td{
    border:1px solid white;
}
    </style>

</body>
</html>
