<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

  <?php
include '../../header.php'?>

  <!-- sidenav -->
  <!DOCTYPE html>
  <html>

  <head>
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
        padding: 20px 16px;
        text-decoration: none;
      }

      li a:hover {
        background-color: #111;
      }
    </style>
  </head>

  <body>


    <ul>
      <h1 style="margin-top:14px; margin-left:20px; font-size: 40px; font-family:system-ui"> <b> <i class="fa fa-user" aria-hidden="true"> Admin Dashboard </i> </b></h1>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 500%;text-align: right;width: 79px;margin-top:31px;  background-color:red;"> <a href="admin-dash.php" style="color:white;"> Admin </a></button>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 544%;text-align: right;width: 79px;margin-top:31px;  background-color:blue;"> <a href="../patient/patient-dash.php" style="color:white;"> Patients </a></button>
      <button class="btn btn-info" style="position: absolute;top: -10px;left: 584%;text-align: right;width: 79px;margin-top:31px;  background-color:green;"> <a href="../doctors/doctors.php" style="color:white;"> Doctors </a></button>


    </ul>






    <div class="list-group bg-info" style="height:100vh;">

<div style="height:70px">
      <a href="admin-dash.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Administrators</a>
    </div>
    <div style="height:70px">
      <a href="appointments.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Appointment</a>
    </div>
    <div style="height:70px">
      <a href="emergency.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Emergency</a>
    </div>
    <div style="height:70px">
      <a href="contact.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Contact </a>

    </div>
    <div style="height:70px">
      <a href="feedback.php" class="list-group-item list-group-item-action
                 bg-info text-center text-white"> Feedback</a>
    </div>
    </div>
    <!-- ends -->


  </body>

  </html>
