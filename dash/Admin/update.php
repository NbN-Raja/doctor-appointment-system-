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
          <?php

// include '../login/config.php';

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "doct");

// Check connection
if ($mysqli === false) {
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $fetch_sql = "SELECT * FROM `appointment` WHERE id = '$id'";
    $res = mysqli_query($mysqli, $fetch_sql);

    $row = mysqli_fetch_assoc($res);

    echo '<html lang="en">
    <head>

    </head>
    <body>

    <div class="form" style="display:flex;">
    <div class="main">
        <form action="update.inc.php" method="POST" style="position: absolute;top: 119px; left: 300px; display:inline;">
        <form action="update.inc.php" method="POST">
        <h1> Update Patient Here</h1>
        <input type="hidden" name="id" value="' . $row['id'] . '"> <br> <br>
        <label>  First Name </label>
        <input type="text" name="firstname" value="' . $row['firstname'] . '">  <br> <br>
        <label> Gender </label>
        <input type="text" name="gender" value="' . $row['gender'] . '"><br> <br>
        <label> Age </label>
        <input type="text" name="age" value="' . $row['age'] . '"><br> <br>
        <label> Blood </label>
        <input type="text" name="blood" value="' . $row['blood'] . '"><br> <br>
        <label> Address</label>
        <input type="text" name="address" value="' . $row['address'] . '"><br> <br>
        <label> Phone </label>
        <input type="text" name="phone" value="' . $row['phone'] . '"><br> <br>
        </div>
        <div class="sub" style="position: absolute;
        top: 130px;
        left: 800px;
        display: inline;">
        <label> Hospital Department</label>
        <input type="text" name="department	" value="' . $row['department'] . '"><br> <br>
        <label> Doctors </label>
        <input type="text" name="doctors" value="' . $row['doctors'] . '"><br> <br>
        <label> Date </label>
        <input type="text" name="date" value="' . $row['date'] . '"><br> <br>
        <label> Email</label>
        <input type="text" name="email" value="' . $row['email'] . '"><br> <br>
        <label> Reason For Treatment </label>
        <input type="text" name="reason" value="' . $row['reason'] . '"><br> <br>

            <button type="submit" name="up">UPDATE </button>
        </form>
</div>
    </body>
    </html>';

} else {
    echo "<a href='appointments.php'> </a>";
}

?>


<style>
li{
  float: right;
}
label{
    display: inline-block;
    margin-bottom: 0.5rem;
    font-size: larger;
    font-weight: 700;
}

  </style>
  </body>
</html>









