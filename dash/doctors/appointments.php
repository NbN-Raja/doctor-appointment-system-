
<?php

session_start();

include '../login/config.php';

if (isset($_POST['apply'])) {

    $firstname = $_POST['fname'];
    $surname = $_POST['sname'];
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $password = $_POST['pass'];
    $conform_password = $_POST['con_pass'];

    $error = array();

    if (empty($firstname)) {

        $error['apply'] = "Enter your firstname";
    } else if (empty($surname)) {
        $error['apply'] = "enter surname";
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

        $query = "INSERT INTO doctor(firstname,surname,username,email,gender,phone,country,
        password)
        VALUES ('$firstname','$surname','$username','$email','$gender','$phone','$country','$password' )";

        $result = mysqli_query($connect, $query);
        if ($result) {

            echo " <script>  alert('login success') </script>";
            header("location:viewapp.php");

        } else {
            echo " <script>  alert('failed') </script>";

        }

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
include_once '../header.php';
?>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 my-3 jumbotron">
                <h5 class="text-center">Apply now </h5>
                <div>
                     <?php
echo $show;
?>
                 </div>
                 <form method="post" action="appointments.php">
                     <div class="form-group">
                         <label> Firstname </label>
                           <input type="text"  name="fname" class="form-control"
                           auto-complete="off" placeholder="enter first name">

                     </div>
                     <div class="form-group">
                         <label> Surname </label>
                           <input type="text"  name="sname" class="form-control"
                           auto-complete="off" placeholder="enter last name">

                     </div>
                     <div class="form-group">
                         <label> username </label>
                           <input type="text"  name="uname" class="form-control"
                           auto-complete="off" placeholder="enter User name">

                     </div>
                     <div class="form-group">
                         <label> Email
                           <input type="text"  name="email" class="form-control"
                           auto-complete="off" placeholder="enter email">
                         </label>
                     </div>
                     <div class="form-group">
                         <label>  Select Gender</label>
                           <select name="gender" id="" class="form-control">
                               <option value="" class="value"> Select Gender</option>
                               <option value="male" class="male"> Male</option>
                               <option value="female" class="female">Female</option>
                               <option value="others" class="Others">Others</option>
                           </select>
                     </div>
                     <div class="form-group">
                         <label> Phone Number
                           <input type="phone"  name="phone" class="form-control"
                           auto-complete="off" placeholder="enter Your Phone  number">
                         </label>
                     </div>
                     <div class="form-group">
                         <label>  Select Country</label>
                           <select name="country" id="" class="form-control">
                               <option value="" class="value"> Select City</option>
                               <option value="chitwan" class="chitwan"> Chiwan</option>
                               <option value="kathmandu" class="chitwan">kathmandu</option>
                               <option value="pokhara" class="pokhara">pokhara</option>
                           </select>
                     </div>

                     <div class="form-group">
                         <label> Password </label>
                         <input type="password" name="pass" class="form-control"
                         auto-complete="off" placeholder="enter password">
                     </div>

                     <div class="form-group">
                         <label> conform_Password </label>
                         <input type="password" name="con_pass" class="form-control"
                         auto-complete="off" placeholder="conform password">
                     </div>
                      <a href="viewapp.php">
                     <input type="submit" name="apply" value="apply now" class="btn  btn-primary">
                     </a>
                     <p> already have account <a href=".php"> click here </a> <p>


                 </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>










</body>
</html>
