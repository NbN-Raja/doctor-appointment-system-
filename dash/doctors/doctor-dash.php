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
<p style="position: absolute;top: 13px;left: 540%;text-align: right;width: 79px;margin-top:31px"> <b> <a href="../patient/patient-dash.php">  Patients  </a>  </b>  </p>
<p style="position: absolute;top: 13px;left: 580%;text-align: right;width: 79px;margin-top:31px; background-color:red"> <b> <a href="../doctors/doctor-dash.php">  Doctors  </a></b>  </p>
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
          <div class="col-md-10" style="    position: relative;top: 100px;">
      <h4 class="my-2">Patient  Dashboard</h4>
      <div class="col-md-12 my-1">
        <div class="row" style="margin-right: 200px;">
          <div class="col-md-3 bg-success mx-2" style="height:130px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">

                  <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                  <h5 class="my-2 text-white ">Total</h5>
                  <h5 class="my-2 text-white ">patient</h5>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 bg-info mx-2" style="height:130px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                  <h5 class="my-2 text-white ">Total</h5>
                  <h5 class="my-2 text-white ">Doctors</h5>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 bg-warning mx-2" style="height:130px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                  <h5 class="my-2 text-white ">patient </h5>
                  <h5 class="my-2 text-white ">profile</h5>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 bg-danger mx-2 my-2" style="height:130px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                  <h5 class="my-2 text-white ">Total</h5>
                  <h5 class="my-2 text-white ">report</h5>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 bg-warning mx-2 my-2" style="height:130px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                  <h5 class="my-2 text-white ">Total</h5>
                  <h5 class="my-2 text-white ">request</h5>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
          </div>
          <div class="col-md-3 bg-success mx-2 my-2" style="height:130px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-9">
                  <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                  <h5 class="my-2 text-white ">Total</h5>
                  <h5 class="my-2 text-white ">Approve</h5>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
