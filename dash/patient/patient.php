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
    <title>Patient Dashboard</title>
  </head>
  <body>


    <!-- Side nav  -->



          <div class="col-md-2" style="margin-left:-30px;">
            <!--  Side nav bar php -->
<style>
ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color:#47c128;
        width: 699%;
        height: 80px;
      }
li {

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
a{
  color:white;
}
li a:hover {
  background-color: #111;
}
</style>



<ul>
      <h1 style="margin-top:14px; margin-left:20px; font-size: 40px; font-family:system-ui"> <b> <i class="fa fa-user" aria-hidden="true"> Patients Dashboard </i> </b></h1>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 500%;text-align: right;width: 79px;margin-top:31px;  background-color:red;"> <a href="../admin/admin-dash.php" style="color:white;"> Admin </a></button>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 544%;text-align: right;width: 79px;margin-top:31px;  background-color:blue;"> <a href="patient-dash.php" style="color:white;"> Patients </a></button>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 584%;text-align: right;width: 79px;margin-top:31px;  background-color:green;"> <a href="../doctors/doctors.php" style="color:white;"> Doctors </a></button>


    </ul>

<!-- End Of nav var -->
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">


                <div class="list-group bg-info" style="height:90vh; position: relative;
    top: -53px;
}">
                 <a href="patient-dash.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Dashboard</a>
                 <a href="patient.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Patient</a>

                </div>
                <!-- ends -->
          </div>


          </div>


          <?php

include '../../login/config.php';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "doct");
$sql = "SELECT * FROM users";
if ($result = $mysqli->query($sql)) {
    if ($result->num_rows > 0) {
        echo "<table class='table-sm table-striped'>";
        echo "<tr class='dark'>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>username</th>";
        echo "<th>email</th>";
        echo "<th>password</th>";

        echo "</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";

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

#myInput {
  background-image: url(/css/searchicon.png);
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 220%;
    font-size: 16px;
    height: 41px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
    position: relative;
    top: -60px;
    right: -419px;
    border-radius: 11px;
}

table{
    border:1px solid white;
    position:relative;
    border-collapse: collapse;
    width:60%;
    position:relative;
    bottom:650px;
    left:300px;
}




  </style>


</div>
  </body>
</html>
