<?php
session_start();

include '../../header.php';
include '../../login/config.php';

?>
<style>
  li {
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
      <div class="row">
        <div class="col-md-2" style="margin-left:-30px;">
          <!--  Side nav bar php -->
          <?php
include 'side-nav.php';
?>
        </div>
        <!-- php code -->

        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">


        <?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "doct");
$sql = "SELECT * FROM appointment";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<table class='table-sm table-striped' >";
        echo "<tr class='tab'>";
        echo "<th>ID</th>";
        echo "<th>FIRSTNAME</th>";
        echo "<th>GENDER</th>";
        echo "<th>DOB</th>";
        echo "<th>AGE</th>";
        echo "<th>BLOOD</th>";
        echo "<th>ADDRESS</th>";
        echo "<th>PHONE</th>";
        echo "<th>DEPARTMENT</th>";
        echo "<th>DOCTORS</th>";
        echo "<th>DATE</th>";
        echo "<th>EMAIL</th>";
        echo "<th>REASON</th>";

        echo "<th colspan='3'>ACTION</th>";
        echo "</tr>";

        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['firstname'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['dob'] . "</td>";
            echo "<td>" . $row['age'] . "</td>";
            echo "<td>" . $row['blood'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['doctors'] . "</td>";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['reason'] . "</td>";

            echo '<td>  <a href="view.php?id=' . $row['id'] . '"> view </a> </td>';
            echo '<td> <a href="update.php?id=' . $row['id'] . '"> UPDATE </a>';
            echo '<td> <a href="delete.php?id=' . $row['id'] . '"> Delete </a>   </td>';
            echo '<td>   </td>';

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
          li {
            float: right;
          }

          #myInput {
            background-image: url(img/search.png);
            background-position: 10px 12px;
            background-repeat: no-repeat;
            width: 41%;
            font-size: 16px;
            height: 41px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
            position: relative;
            top: 19px;
            right: -151px;
            border-radius: 12px;
          }

          table {
            position: relative;
            top: -700px;
            border: 1px solid white;
            position: relative;
            border-collapse: collapse;
            text-align: center;
            width: 85%;
            left: 230px;

          }
        </style>

      </div>
    </div>

</body>

</html>