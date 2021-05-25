<?php

include_once "../../login/config.php";

if (isset($_POST['up'])) {
    $idd = $_POST['id'];
    $first = $_POST['firstname'];
    $middle = $_POST['middlename'];
    $last = $_POST['lastname'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $doctors = $_POST['doctors'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    $up = "UPDATE `appointment` SET `firstname` = '$first', `middlename` = '$middle', `lastname` = '$last',
     `gender` = '$gender',`age` = '$age',`blood` = '$blood',
     `address` = '$address',`city` = '$city',`phone` = '$phone',
     `department` = '$department',`doctors` = '$doctors',`date` = '$date',
     `email` = '$email',`reason` = '$reason' WHERE `appointment`.`id` = '$idd'";

    $q = mysqli_query($connect, $up);

}?>
 <script>
    alert('Upadated Successfully');
window.location.replace("appointments.php");
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> Updated Successfully </p>
<a href="appointments.php"> d</a>
</body>
</html>
