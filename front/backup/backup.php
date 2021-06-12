<?php
// Initialize the session

include_once "login/config.php";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $doctors = $_POST['doctors'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // if (!empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($gender) || !empty($phoneCode) || !empty($phone)) {
    $insertquery = "INSERT INTO appointment( firstname, middlename, lastname, gender, dob, age, blood, address, city, phone, department, doctors,date, time,  email, reason)
VALUES( '$firstname', '$middlename', '$lastname', '$gender', '$dob', '$age', '$blood', '$address', '$city', '$phone', '$department', '$doctors', '$date','$time','$email', '$reason')";

    $run = mysqli_query($connect, $insertquery);

    if ($run) {
        echo "successfully connectd";
    } else {
        // echo "unable to insert";
    }

}
?>


  <!-- Connect to submit buttom -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment system</title>

          <!-- Links for external -->
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="../public/style.css"> -->

</head>
<body>


<!-- header -->
  </head>
  <body>
    <!-- ################# Header Starts Here#######################--->
             <a href="front/index.php" class="btn  btn-danger" style="width: 73px; margin-top:25px;
               height: 36px;
    margin-left:3px;float: right;">Log Out</a>

            </div>
          </div>
        </div>
      </div>
    </header>

<!-- **************************************Back Buttom********************************* -->
<div>
<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
 <div>
<!-- **************************************End back Buttom******************************** -->

<div class="header">
  <h1 style="font-family: cursive;
    color: black;
    "> Please Submit Form To Appoint with your respective Doctors and wait for admin to approve and
get message or phone number </h1>
</div>



<!-- ***************************************Register-Forms************************************ -->

<div class="main">
    <div class="container">
        <form class="register" action="appointment.php" method="POST">
            <p class="reg" style="font-size:30px">  <strong> Registration For Patients </strong> </p>

            <!-- First-Name for appoinment -->
              <label for="firstname"> <b>  First Name: </b> <lable>
                    <input type="text" placeholder="Enter Your firstname" name="firstname"> <br> <br>

               <!-- Middle-Name for appoinment -->
               <label for="firstname"> <b>  Middle Name </b> <lable>
                    <input type="text" placeholder="Enter Your Middle name" name="middlename"><br> <br>

              <!-- last-Name for appoinment -->
               <label for="firstname">  <b>  last Name  <b><lable>
                    <input type="text" placeholder="Enter Your last name" name="lastname"><br> <br>

               <!--Gender for appoinment -->
               <div class="">
                         <label>  Select Gender</label>
                           <select name="gender" id="" class="form-control" style="width:150px;">
                               <option value="Select Gender" class="value"> Select Gender</option>
                               <option value="male" class="male"> Male</option>
                               <option value="female" class="female">Female</option>
                               <option value="others" class="Others">Others</option>
                           </select> </br> <br>
                          </div>


              <!-- Date of birth for appoinment -->
              <label><b>Date of Birth:</b></label><br>
                     <input type="date" name="dob"><br><br>

               <!-- Age for appoinment -->
               <label for="Age"> Age: <lable>
                    <input type="number" placeholder="Age" name="age"> <br> <br>

                <!--Blood Group for appoinment -->
                <div class="second">
                Blood Group:<input type="text" name="blood" placeholder="blood"><br> <br>
                  </div>


                <!-- Address  for appoinment -->
                <label for="Location">   Address Detail: <lable>
                     <input type="address" name="address"> <br> <br>

               <!--   City Of Appoinment   -->
                <label for="City">   City<lable>
                     <input type="city" name="city"> <br> <br>

                  <!-- Phone-No for appoinment -->
               <label for="phone">phone number:</label>
                     <input type="tel" id="phone" name="phone" placeholder="984-45-668"
                      required><br><br>
    </div>


      <div class="app">
                        <b> Appoinment Details</b> <br>  <br>
                       <lable> Departments </lable>
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                       <select id="type" name="department">
    <option value="item0">--Select an Item--</option>
    <option  value="Orthopedic">Orthopedic </option>
    <option value="Gynecologists">Gynecologists</option>
    <option value="OPD">OPD</option>
    <option value="Dermatologists">Dermatologists</option>
    <option value="Dental">Dental</option>
</select> <br> <br>



               <lable> Doctors </lable> <br>
               <select id="size" name="doctors">
    <option value=""> -- select one --  </option>
</select> <br> <br>



<script>
	$(document).ready(function () {
  $("#type").change(function () {
     switch($(this).val()) {
        case 'Orthopedic':
            $("#size").html("<option value='Dr. Santosh Kumar Bashyal '>Dr. Santosh Kumar Bashyal</option><option value='Dr. Santosh Kumar Bashyal'>Dr. Santosh Kumar Bashyal</option>");
            break;
        case 'Gynecologists':
            $("#size").html("<option value='Dr. Mala Shrestha'>Dr. Mala Shrestha</option><option value='Dr. Mala Shrestha'>Dr. Mala Shrestha</option>");
            break;
        case 'OPD':
            $("#size").html("<option value='Dr. Sudip Shrestha'>Dr. Sudip Shrestha</option><option value='Dr. Sudip Shrestha'>Dr. Sudip Shrestha</option>");
            break;
        case 'Dermatologists':
            $("#size").html("<option value='Dr. Sanju Babu Shresth'>Dr. Sanju Babu Shresth </option><option value='Dr. Sanju Babu Shresth'>Dr. Sanju Babu Shresth</option>");
            break;
        case 'Dental':
            $("#size").html("<option value='Dr. Khushi Dulal'>Dr. Khushi Dulal </option><option value='Dr. Khushi Dulal'>Dr. Khushi Dulal</option>");
            break;
        default:
            $("#size").html("<option value=''>--select one--</option>");
     }
  });
});
</script>


                             <!-- APPOINMENT date for appoinment -->
              <lable for="date"> Appoinment Date </label>
                     <input type="date" name="date"> <br> <br>

                              <!--  appointment time -->
                         <label for="appt"> Time :</label>
                      <input type="time" id="appt" name="time"
                          min="09:00" max="18:00" required>

                      <small>Office hours are 9am to 6pm</small> <br> <br>

                      <!-- Email for appoinment -->
              <lable for="Mail"> Enter email</label>
                     <input type="text" name="email"> <br> <br>

                       <!-- Reason  for appoinment -->
              <lable for="reason"> Reason For Treatment <lable> <br>
                     <textarea rows="4" cols="50" name="reason"></textarea> <br>






                       <!--  Make Appoinment -->

              <div class="" style="margin-top: 10%;">
              <input type="submit"  name="submit" >
     </div>

    </div>
    </div>
    <!-- </div> -->

<!-- *********************************************End Of Register Form******************************* -->











<script>
        jQuery(document).ready(function($){
             $("#random").click(function(){
             var number = 1 + Math.floor(Math.random() *98501);
                 $("#number").text(number);

        });

        });


</script>

 <button class="button" type="button" name="buttonpassvalue" id="random" >Generate pass code</button>
        <div id="number"></div>




</body>

</html>





















<!-- new -->


<?php
// Initialize the session

include_once "login/config.php";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $doctors = $_POST['doctors'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // if (!empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($gender) || !empty($phoneCode) || !empty($phone)) {
    $insertquery = "INSERT INTO appointment( firstname, middlename, lastname, gender, dob, age, blood, address, city, phone, department, doctors,date, time,  email, reason)
VALUES( '$firstname', '$middlename', '$lastname', '$gender', '$dob', '$age', '$blood', '$address', '$city', '$phone', '$department', '$doctors', '$date','$time','$email', '$reason')";

    $run = mysqli_query($connect, $insertquery);

    if ($run) {
        echo "successfully connectd";
    } else {
        echo "unable to insert";
    }

}
?>


  <!-- Connect to submit buttom -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment system</title>

          <!-- Links for external -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="front/assets/images/fav.jpg" />
    <link rel="stylesheet" href="front/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" href="front/assets/css/animate.css" />
     <link rel="stylesheet" type="text/css" href="front/assets/css/style.css" />
    <!-- <link rel="stylesheet" href="../public/style.css"> -->

</head>
<body>


<!-- header -->
  </head>
  <body>
    <!-- ################# Header Starts Here#######################--->



<!-- **************************************Back Buttom********************************* -->
<div>
<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
 <div>
<!-- **************************************End back Buttom******************************** -->



<!-- <div class="header">
  <h1 style="font-family: cursive;
    color: black;
    "> Please Submit Form To Appoint with your respective Doctors and wait for admin to approve and
get message or phone number </h1>
</div> -->



<!-- ***************************************Register-Forms************************************ -->
<p>  <strong> Registration For Patients </strong> </p>
<div class="main">

    <div class="container" style="
    margin-left: 74px;>
        <form class="register" action="appointment.php" method="POST">


            <!-- First-Name for appoinment -->
            <h1> Patient Details </h1>
              <label for="firstname"> <b>  First Name: </b> <lable><br>
                    <input type="text" placeholder="Enter Your firstname" name="firstname"> <br> <br>

               <!-- Middle-Name for appoinment -->
               <label for="firstname"> <b>  Middle Name </b> <lable><br>
                    <input type="text" placeholder="Enter Your Middle name" name="middlename"><br> <br>

              <!-- last-Name for appoinment -->
               <label for="firstname">  <b>  last Name  <b><lable><br>
                    <input type="text" placeholder="Enter Your last name" name="lastname"><br> <br>

               <!--Gender for appoinment -->
               <div class="">
                         <label>  Select Gender</label><br>
                           <select name="gender" id="" class="form-control" style="width:150px;">
                               <option value="Select Gender" class="value"> Select Gender</option>
                               <option value="male" class="male"> Male</option>
                               <option value="female" class="female">Female</option>
                               <option value="others" class="Others">Others</option>
                           </select>
                          </div>


              <!-- Date of birth for appoinment -->
              <label><b>Date of Birth:</b></label><br>
                     <input type="date" name="dob"><br><br>

               <!-- Age for appoinment -->
               <label for="Age"> Age: <lable><br>
                    <input type="number" placeholder="Age" name="age"> <br> <br>

                <!--Blood Group for appoinment -->
                <div class="second">
                <label> Blood Group: </label><br>
                <input type="text" name="blood" placeholder="blood"><br> <br>
                  </div>


                <!-- Address  for appoinment -->
                <label for="Location">   Address Detail: <lable><br>
                     <input type="address" name="address"> <br> <br>

               <!--   City Of Appoinment   -->
                <label for="City">   City<lable><br>
                     <input type="city" name="city"> <br> <br>

                  <!-- Phone-No for appoinment -->
               <label for="phone">phone number:</label><br>
                     <input type="tel" id="phone" name="phone" placeholder="984-45-668"
                      required><br><br>
    </div>


      <div class="appn">
      <h1> Appointment Details </h1>
                       <lable> Departments </lable><br>
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                       <select id="type" name="department"><br>
    <option value="item0">--Select an Item--</option>
    <option  value="Orthopedic">Orthopedic </option>
    <option value="Gynecologists">Gynecologists</option>
    <option value="OPD">OPD</option>
    <option value="Dermatologists">Dermatologists</option>
    <option value="Dental">Dental</option>
</select> <br> <br>



               <lable> Doctors </lable> <br>
               <select id="size" name="doctors">
    <option value=""> -- select one --  </option><br>
</select> <br> <br>



<script>
	$(document).ready(function () {
  $("#type").change(function () {
     switch($(this).val()) {
        case 'Orthopedic':
            $("#size").html("<option value='Dr. Santosh Kumar Bashyal '>Dr. Santosh Kumar Bashyal</option><option value='Dr. Santosh Kumar Bashyal'>Dr. Santosh Kumar Bashyal</option>");
            break;
        case 'Gynecologists':
            $("#size").html("<option value='Dr. Mala Shrestha'>Dr. Mala Shrestha</option><option value='Dr. Mala Shrestha'>Dr. Mala Shrestha</option>");
            break;
        case 'OPD':
            $("#size").html("<option value='Dr. Sudip Shrestha'>Dr. Sudip Shrestha</option><option value='Dr. Sudip Shrestha'>Dr. Sudip Shrestha</option>");
            break;
        case 'Dermatologists':
            $("#size").html("<option value='Dr. Sanju Babu Shresth'>Dr. Sanju Babu Shresth </option><option value='Dr. Sanju Babu Shresth'>Dr. Sanju Babu Shresth</option>");
            break;
        case 'Dental':
            $("#size").html("<option value='Dr. Khushi Dulal'>Dr. Khushi Dulal </option><option value='Dr. Khushi Dulal'>Dr. Khushi Dulal</option>");
            break;
        default:
            $("#size").html("<option value=''>--select one--</option>");
     }
  });
});
</script>


                             <!-- APPOINMENT date for appoinment -->
                       <lable for="date"> Appoinment Date </label><br>
                     <input type="date" name="date"> <br> <br>

                              <!--  appointment time -->
                         <label for="appt"> Time :</label><br>
                      <input type="time" id="appt" name="time"
                          min="09:00" max="18:00" required><br>

                      <!-- Email for appoinment -->
                      <lable> Enter email</label><br>
                     <input type="text" name="email"> <br> <br>

                       <!-- Reason  for appoinment -->
                       <lable> Reason For Treatment <lable> <br>
                     <textarea rows="3" cols="30" name="reason"></textarea> <br>

                       <!--  Make Appoinment -->
                       <lable> Reason For Treatment <lable> <br>
              <input type="submit"  name="submit" >

     </div>

    </div>
    </div>
    <!-- </div> -->

<!-- *********************************************End Of Register Form******************************* -->











<script>
        jQuery(document).ready(function($){
             $("#random").click(function(){
             var number = 1 + Math.floor(Math.random() *98501);
                 $("#number").text(number);

        });

        });


</script>

 <button class="button" type="button" name="buttonpassvalue" id="random" >Generate pass code</button>
        <div id="number"></div>




</body>

</html>













<?php
// Initialize the session

include_once "login/config.php";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $doctors = $_POST['doctors'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // if (!empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($gender) || !empty($phoneCode) || !empty($phone)) {
    $insertquery = "INSERT INTO appointment( firstname, middlename, lastname, gender, dob, age, blood, address, city, phone, department, doctors,date, time,  email, reason)
VALUES( '$firstname', '$middlename', '$lastname', '$gender', '$dob', '$age', '$blood', '$address', '$city', '$phone', '$department', '$doctors', '$date','$time','$email', '$reason')";

    $run = mysqli_query($connect, $insertquery);

    if ($run) {
        echo "successfully connectd";
    } else {
        // echo "unable to insert";
    }

}
?>


  <!-- Connect to submit buttom -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appoinment system</title>

          <!-- Links for external -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="front/assets/images/fav.jpg" />
    <link rel="stylesheet" href="front/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" href="front/assets/css/animate.css" />
     <link rel="stylesheet" type="text/css" href="front/assets/css/style.css" />
    <!-- <link rel="stylesheet" href="../public/style.css"> -->

</head>
<body>


<!-- header -->
  </head>
  <body>
    <!-- ################# Header Starts Here#######################--->
             <a href="front/index.php" class="btn  btn-danger" style="width: 73px; margin-top:25px;
               height: 36px;
    margin-left:3px;float: right;">Log Out</a>

            </div>
          </div>
        </div>
      </div>
    </header>

<!-- **************************************Back Buttom********************************* -->
<div>
<button onclick="goBack()">Go Back</button>
<script>
function goBack() {
  window.history.back();
}
</script>
 <div>
<!-- **************************************End back Buttom******************************** -->

<div class="header">
  <h1 style="font-family: cursive;
    color: black;
    "> Please Submit Form To Appoint with your respective Doctors and wait for admin to approve and
get message or phone number </h1>
</div>



<!-- ***************************************Register-Forms************************************ -->

<div class="main">
    <div class="container" style="width: 45%;
    margin: 23px;">
        <form class="register" action="aps.php" method="POST">
            <!-- <p class="reg" style="font-size:30px">  <strong> Registration For Patients </strong> </p> -->

            <!-- First-Name for appoinment -->
              <label for="firstname"> <b>  First Name: </b> <lable>
                    <input type="text" placeholder="Enter Your firstname" name="firstname"> <br> <br>

               <!-- Middle-Name for appoinment -->
               <label for="firstname"> <b>  Middle Name </b> <lable>
                    <input type="text" placeholder="Enter Your Middle name" name="middlename"><br> <br>

              <!-- last-Name for appoinment -->
               <label for="firstname">  <b>  last Name  <b><lable>
                    <input type="text" placeholder="Enter Your last name" name="lastname"><br> <br>

               <!--Gender for appoinment -->
               <div class="">
                         <label>  Select Gender</label>
                           <select name="gender" id="" class="form-control" style="width:150px;">
                               <option value="Select Gender" class="value"> Select Gender</option>
                               <option value="male" class="male"> Male</option>
                               <option value="female" class="female">Female</option>
                               <option value="others" class="Others">Others</option>
                           </select> </br> <br>
                          </div>


              <!-- Date of birth for appoinment -->
              <label><b>Date of Birth:</b></label><br>
                     <input type="date" name="dob"><br><br>

               <!-- Age for appoinment -->
               <label for="Age"> Age: <lable>
                    <input type="number" placeholder="Age" name="age"> <br> <br>

                <!--Blood Group for appoinment -->
                <div class="second">
                Blood Group:<input type="text" name="blood" placeholder="blood"><br> <br>
                  </div>


                <!-- Address  for appoinment -->
                <label for="Location">   Address Detail: <lable>
                     <input type="address" name="address"> <br> <br>

               <!--   City Of Appoinment   -->
                <label for="City">   City<lable>
                     <input type="city" name="city"> <br> <br>

                  <!-- Phone-No for appoinment -->
               <label for="phone">phone number:</label>
                     <input type="tel" id="phone" name="phone" placeholder="984-45-668"
                      required><br><br>
    </div>


      <div class="app" style="border: 1px solid black;
    box-shadow: 10px 10px 10px;
    margin: 26px;
    font-size: 22px;
    height: 74%;
    padding: 19px;">
                        <b> Appoinment Details</b> <br>  <br>
                       <lable> Departments </lable>
                       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                       <select id="type" name="department">
    <option value="item0">--Select an Item--</option>
    <option  value="Orthopedic">Orthopedic </option>
    <option value="Gynecologists">Gynecologists</option>
    <option value="OPD">OPD</option>
    <option value="Dermatologists">Dermatologists</option>
    <option value="Dental">Dental</option>
</select> <br> <br>



               <lable> Doctors </lable> <br>
               <select id="size" name="doctors">
    <option value=""> -- select one --  </option>
</select> <br> <br>



<script>
	$(document).ready(function () {
  $("#type").change(function () {
     switch($(this).val()) {
        case 'Orthopedic':
            $("#size").html("<option value='Dr. Santosh Kumar Bashyal '>Dr. Santosh Kumar Bashyal</option><option value='Dr. Santosh Kumar Bashyal'>Dr. Santosh Kumar Bashyal</option>");
            break;
        case 'Gynecologists':
            $("#size").html("<option value='Dr. Mala Shrestha'>Dr. Mala Shrestha</option><option value='Dr. Mala Shrestha'>Dr. Mala Shrestha</option>");
            break;
        case 'OPD':
            $("#size").html("<option value='Dr. Sudip Shrestha'>Dr. Sudip Shrestha</option><option value='Dr. Sudip Shrestha'>Dr. Sudip Shrestha</option>");
            break;
        case 'Dermatologists':
            $("#size").html("<option value='Dr. Sanju Babu Shresth'>Dr. Sanju Babu Shresth </option><option value='Dr. Sanju Babu Shresth'>Dr. Sanju Babu Shresth</option>");
            break;
        case 'Dental':
            $("#size").html("<option value='Dr. Khushi Dulal'>Dr. Khushi Dulal </option><option value='Dr. Khushi Dulal'>Dr. Khushi Dulal</option>");
            break;
        default:
            $("#size").html("<option value=''>--select one--</option>");
     }
  });
});
</script>


                             <!-- APPOINMENT date for appoinment -->
              <lable for="date"> Appoinment Date </label>
                     <input type="date" name="date"> <br> <br>

                              <!--  appointment time -->
                         <label for="appt"> Time :</label>
                      <input type="time" id="appt" name="time"
                          min="09:00" max="18:00" required>

                      <small>Office hours are 9am to 6pm</small> <br> <br>

                      <!-- Email for appoinment -->
              <lable for="Mail"> Enter email</label>
                     <input type="text" name="email"> <br> <br>

                       <!-- Reason  for appoinment -->
              <lable for="reason"> Reason For Treatment <lable> <br>
                     <textarea rows="4" cols="50" name="reason"></textarea> <br>






                       <!--  Make Appoinment -->

              <div class="" style="margin-top: 10%;">
              <input type="submit"  name="submit" >
     </div>

    </div>
    </div>
    <!-- </div> -->

<!-- *********************************************End Of Register Form******************************* -->











<script>
        jQuery(document).ready(function($){
             $("#random").click(function(){
             var number = 1 + Math.floor(Math.random() *98501);
                 $("#number").text(number);

        });

        });


</script>

 <button class="button" type="button" name="buttonpassvalue" id="random" >Generate pass code</button>
        <div id="number"></div>




</body>

</html>
