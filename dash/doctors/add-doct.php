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
            background-color: #47c128;
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

          a {
            color: white;
          }

          li a:hover {
            background-color: #111;
          }
        </style>


        <ul>
          <h1 style="margin-top:14px; margin-left:20px; font-size: 40px; font-family:system-ui"> <b> <i
                class="fa fa-user" aria-hidden="true"> Patients Dashboard </i> </b></h1>
          <button class="btn btn-info"
            style="position: absolute;top: -10px;left: 500%;text-align: right;width: 79px;margin-top:31px;  background-color:red;">
            <a href="../admin/admin-dash.php" style="color:white;"> Admin </a></button>
          <button class="btn btn-info"
            style="position: absolute;top: -10px;left: 544%;text-align: right;width: 79px;margin-top:31px;  background-color:blue;">
            <a href="../patient/patient-dash.php" style="color:white;"> Patients </a></button>
          <button class="btn btn-info"
            style="position: absolute;top: -10px;left: 584%;text-align: right;width: 79px;margin-top:31px;  background-color:green;">
            <a href="add-doct.php" style="color:white;"> Doctors </a></button>


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


      <!-- PHP CODE -->
      <?php

session_start();

if (isset($_POST['apply'])) {

    $name = $_POST['name'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $day = $_POST['day'];
    $time = $_POST['time'];
    $room = $_POST['room'];

    $query = "INSERT INTO doctor(name,department,gender,phone,day,time,room)
        VALUES ('$name','$department','$gender','$phone','$day','$time','$room' )";

    $result = mysqli_query($connect, $query);
    if ($result) {

        echo " <script>  alert('login success') </script>";
        header("location:viewapp.php");

    } else {
        echo " <script>  alert('failed')</script>";

    }

}

if (isset($error['apply'])) {
    $s = $error['apply'];
    $show = "<h5 class='tesxt-center alert alert-danger'> $s </h5>";

} else {
    $show = "";

}
?>


      <!DOCTYPE html>
      <html lang="en">

      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
      </head>

      <body>

        <?php
include_once '../../header.php';
?>

        <div class="container">
          <div class="col-md-12" style="POSITION: ABSOLUTE;
    top: 130px;right:60px; width:80%;">
            <div class="row">

              <div class="col-sm-6 my-3 ">
                <h5 class="text-center">ADD DOCTORS </h5>
                <div>
                  <?php
echo $show;
?>
                </div>
                <form method="post" action="add-doct.php">
                  <div class="display" style="display:flex;">
                    <div class="form-group">
                      <label>Doctors Name </label>
                      <input type="text" name="name" class="form-control" auto-complete="off"
                        placeholder="Enter Doctors Name">
                    </div>

                    <div class="form-group">
                      <label> department </label>
                      <input type="text" name="department" class="form-control" auto-complete="off"
                        placeholder="Enter Department">
                    </div>
                    <div class="form-group">
                      <label> Select Gender</label>
                      <select name="gender" id="" class="form-control">
                        <option value="" class="value"> Select Gender</option>
                        <option value="male" class="male"> Male</option>
                        <option value="female" class="female">Female</option>
                        <option value="others" class="Others">Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label> Phone Number
                      <input type="phone" name="phone" class="form-control" auto-complete="off"
                        placeholder="enter Your Phone  number">
                    </label>
                  </div>

                  <div class="form-group">
                    <label> Weekly day
                      <input type="text" name="day" class="form-control" auto-complete="off" placeholder="Day">
                    </label>
                  </div>
                  <div class="form-group">
                    <label> Doctor Timing</label>
                    <input type="password" name="time" class="form-control" auto-complete="off" placeholder="">
                  </div>




                  <div class="form-group">
                    <label> Doctors Room </label>
                    <input type="password" name="room" class="form-control" auto-complete="off"
                      placeholder="Doctors Room">
                  </div>



                  <a href="viewapp.php">
                    <input type="submit" name="apply" value="Add" class="btn  btn-primary">
                  </a>


              </div>

              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
    </div>












</body>

</html>





<!-- $error = array();

if (empty($firstname)) {

    $error['apply'] = "Enter your firstname";
} else if (empty($username)) {
    $error['apply'] = "enter your username";
} else if (empty($email)) {
    $error['apply'] = "Enter your email";
} else if ($gender == "") {
    $error['apply'] = "Enter your gender";
} else if (empty($phone)) {
    $error['apply'] = "enter your phone";
} else if ($country == "") {
    $error['apply'] = "Enter your country";
} else if (empty($password)) {
    $error['apply'] = "Enter password";
} else if ($conform_password != $password) {
    $error['apply'] = "Both password does not matched";
}

if (count($error) == 0) {
} -->



</div>
</div>
</body>

</html>