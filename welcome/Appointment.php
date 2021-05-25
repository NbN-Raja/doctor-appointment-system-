<?php
// Initialize the session

include_once "../login/config.php";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $blood = $_POST['blood'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $doctors = $_POST['doctors'];
    $date = $_POST['date'];
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // if (!empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($gender) || !empty($phoneCode) || !empty($phone)) {
    $insertquery = "INSERT INTO appointment( firstname, gender, dob, age, blood, address,  phone, department, doctors,date,  email, reason)
VALUES( '$firstname', '$gender', '$dob', '$age', '$blood', '$address', '$phone', '$department', '$doctors', '$date','$email', '$reason')";

    $run = mysqli_query($connect, $insertquery);

    if ($run) {
        // echo "";
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
    <!-- <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="front/assets/images/fav.jpg" />
    <link rel="stylesheet" href="front/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" href="front/assets/css/animate.css" />
     <link rel="stylesheet" type="text/css" href="front/assets/css/style.css" /> -->
    <!-- <link rel="stylesheet" href="../public/style.css"> -->
  <!--
    nav bar
   -->

<?php

?>
    <link rel="shortcut icon" href="front/assets/images/fav.jpg" />
    <link rel="stylesheet" href="front/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="front/assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" href="front/assets/css/animate.css" />
    <link rel="stylesheet" type="front/text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="front/index.css">


</head>
<body>

<?php

include 'navbar.php';
?>


<div id="nav-head" class="header-nav" style="
   margin-left: 0px;
    box-shadow: 1px 2px 15px;
">
        <div class="container">
          <div class="row">
          <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
              <img src="welcome/assets/images/logo.png" alt="" style="margin-left: -157px;height: 47px;width: 291px;margin-top: 14px; " />
              <a data-toggle="collapse" data-target="#menu" href="#menu"
                ><i class="fas d-block d-md-none small-menu fa-bars"></i
              ></a>
            </div>
            <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
              <ul style="display:flex;">
                <li><a href="welcome/index.php">Home</a></li>
                <li><a href="welcomr/about_us.php">About Us</a></li>
                <li><a href="welcome/services.php">Services</a></li>
                <li><a href="appointment.php">Appointment</a></li>
                <li><a href="welcome/contact_us.php">Contact Us</a></li>
                <li><a href="welcome/feedback.php">Feedback</a></li>
              </ul>
            </div>
            <div class="col-sm-2 d-none d-lg-block appoint">
              <label for="buttom">
                <a href="../login/login.php"> </a>
                </label>
                <style>
                    li{
                      padding:20px;
                      color: #444;
                      font-weight: bold;
                      line-height: 1.5;
                      top: -21px;
                      font-family: "mouse-500", Arial, Helvetica, sans-serif;
    font-size: 16px; list-style-type:none;
                    }

                </style>
              <!-- <button class="btn btn-info">Login/Signup</button> -->
              <a href="../patient/profile.php" class="btn btn-info" style="margin-top: 15px;">Profile </a>
              <a href="../front/index.php" class="btn btn-danger" style="    margin-left: 82px;
    margin: -2px;    margin-top: 15px;">Log Out </a>

            </div>
          </div>
        </div>
      </div>
<!-- header -->
  </head>
  <body>







<!-- **************************************End back Buttom******************************** -->





<!-- ***************************************Register-Forms************************************ -->

<div class="main" style="display: flex;">
    <div class="container" style="width: 35%;
    margin: 23px;">
        <form class="register" action="Appointment.php" method="POST">


            <!-- First-Name for appoinment -->
            <h1> Patients Details </h1>
              <label for="firstname"> <b>  FULL Name: </b> <lable>
                    <input type="text" placeholder="Enter Your firstname" name="firstname"> <br> <br>


               <!--Gender for appoinment -->
               <div class="">
                         <label>  Select Gender</label>
                           <select name="gender" id="" class="form-control" style="width:150px;">
                               <option value="Select Gender" class="value"> Select Gender</option>
                               <option value="male" class="male"> Male</option>
                               <option value="female" class="female">Female</option>
                               <option value="others" class="Others">Others</option>
                           </select> </br>
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



                  <!-- Phone-No for appoinment -->
               <label for="phone">phone number:</label>
                     <input type="tel" id="phone" name="phone" placeholder="984-45-668"
                      required><br><br>
    </div>


      <div class="app" >
                        <h1> Appoinment Details</h1>
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
               <select id="size" name="doctors"  onchange="showCustomer(this.value)">
    <option value=""> -- select one --  </option>
</select> <br> <br>


<div id="txtHint">Customer info will be listed here...</div>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>



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



//  Ajax Info

function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getdoctor.php?q="+str, true);
  xhttp.send();
}

</script>


                             <!-- APPOINMENT date for appoinment -->
              <lable for="date"> Appoinment Date </label>
                     <input type="date" name="date"> <br> <br>



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
<!-- Billing Address -->


<div class="billing" style="    position: relative;right: -70px;">

<h1> Billing Address </h1>

<p> Registration Charge</p>
<input type="text" value="Rs.20" readonly>
<hr>

<p> Service Charge</p>
<input type="text" value="Rs.5" readonly>
<hr>

<p> Sub Total</p>
<input type="text" value="Rs.25" readonly>
<hr>

<div class="payment">
  <p> Pay with </p> <br>
  <button> <a href="#"> Esewa</a> </button> <br>

  <button> <a href="#"> Pay At Hospital</a> </button>


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
