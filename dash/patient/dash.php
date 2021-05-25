<?php
session_start();

include '../../header.php';
include '../../login/config.php';
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
  background-color: #17a2b8;
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
<h1 style="margin-top:30px; font-size: 35px;"> <b>  Admin Dashboard  </b></h1>
<p style="position: absolute;top: 13px;left: 500%;text-align: right;width: 79px;margin-top:31px"> <b>  <a href="../admin/admin-dash.php"> Admin </a></b>  </p>
<p style="position: absolute;top: 13px;left: 540%;text-align: right;width: 79px;margin-top:31px"> <b> <a href="patient/patient-dash.php">  Patients  </a>  </b>  </p>
<p style="position: absolute;top: 13px;left: 580%;text-align: right;width: 79px;margin-top:31px"> <b> <a href="../doctors/doctor-dash.php">  Doctors  </a></b>  </p>
</ul>


<!-- End Of nav var -->



                <div class="list-group bg-info" style="height:90vh;">
                 <a href="admin-dash.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Dashboard</a>
                 <a href="patient.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Patient</a>
                 <a href="profile.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Patient profile</a>
                 <a href="app-info.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> view appointment </a>
                 <a href="" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Add  appointment </a>
                </div>
                <!-- ends -->
          </div>
          <div class="col-md-10" style="    position: relative;top: 100px;">

    </div>
  </body>
</html>
