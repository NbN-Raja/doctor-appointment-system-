

<?php
session_start();

include '../../header.php';

?>



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

      <div class="col-md-12">
        <div class="row">
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
      <h1 style="margin-top:14px; margin-left:20px; font-size: 40px; font-family:system-ui"> <b> <i class="fa fa-user" aria-hidden="true"> Doctors Dashboard </i> </b></h1>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 500%;text-align: right;width: 79px;margin-top:31px;  background-color:red;"> <a href="../admin/admin-dash.php" style="color:white;"> Admin </a></button>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 544%;text-align: right;width: 79px;margin-top:31px;  background-color:blue;"> <a href="../patient/patient-dash.php" style="color:white;"> Patients </a></button>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 584%;text-align: right;width: 79px;margin-top:31px;  background-color:green;"> <a href="doctors.php" style="color:white;"> Doctors </a></button>


    </ul>

<!-- End Of nav var -->



                <div class="list-group bg-info" style="height:90vh;">
                 <a href="doctor-dash.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Dashboard</a>
                 <a href="doctors.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Doctors </a>
                 <a href="add-doct.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Add Doctors </a>

                </div>
                <!-- ends -->
          </div>




          <!-- php code -->
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ID.." title="Type in a name">
          <?php

include '../../login/config.php';
$mysqli = new mysqli("localhost", "root", "", "doct");
$query = "SELECT * FROM doctor ";

if ($result = $mysqli->query($query)) {
    if ($result->num_rows > 0) {
        echo "<table id='myTable' class='table-sm table-striped' >";
        echo "<tr class='header'>";
        echo "<th>id</th>";
        echo "<th>name</th>";
        echo "<th>department</th>";
        echo "<th>gender</th>";
        echo "<th>phone</th>";
        echo "<th> Day </th>";
        echo "<th> Time </th>";
        echo "<th> Room </th>";

        echo "</tr>";
        while ($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['day'] . "</td>";
            echo "<td>" . $row['time'] . "</td>";
            echo "<td>" . $row['room'] . "</td>";

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
$mysqli->close();

?>

<style>
    table{
    position: relative;
    left: 242px;
    bottom: 634px;
    position: relative;
    top: -600px;
    border:1px solid white;
    position:relative;
    width:70%;
    }


    #myInput {
        background-image: url(/css/searchicon.png);
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 35%;
    font-size: 16px;
    height: 41px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
    position: relative;
    top: 24px;
    right: -158px;
    border-radius: 10px
}


</style>



<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
    </div>
  </body>
</html>
