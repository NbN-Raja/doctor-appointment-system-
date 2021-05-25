<?php
// Initialize the session

include "config.php";

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
    $email = $_POST['email'];
    $reason = $_POST['reason'];

    // if (!empty($firstname) || !empty($middlename) || !empty($lastname) || !empty($gender) || !empty($phoneCode) || !empty($phone)) {
    $insertquery = "INSERT INTO `appointment`( `firstname`, `middlename`, `lastname`, `gender`, `dob`, `age`, `blood`, `address`, `city`, `phone`, `department`, `doctors`, `email`, `reason`)
VALUES( `$firstname`, `$middlename`, `$lastname`, `$gender`, `$dob`, `$age`, `$blood`, `$address`, `$city`, `$phone`, `$department`, `$doctors`, `$email`, `$reason`)";

    $run = mysqli_query($mysqli, $insertquery);

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
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
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

<!-- ***************************************Register-Forms************************************ -->
    <div class="container"
        style=" border: 2px solid rgb(230, 227, 227); border-radius: 10px; width: 30%; padding: 3%; margin-left: 32%;   box-shadow: 10px 10px 5px #e6e2e2;;">
        <form class="register" action="appointment.php" method="POST">
            <p class="" style="font-size: 40px; font-weight:bold;"> Registration For Patients </p>

            <!-- First-Name for appoinment -->
              <label for="firstname"> <b>  First Name: </b> <lable>
                    <input type="text" placeholder="Enter Your firstname" name="firstname" required > <br> <br>

               <!-- Middle-Name for appoinment -->
               <label for="firstname"> <b>  Middle Name </b> <lable>
                    <input type="text" placeholder="Enter Your Middle name" name="middlename" required><br> <br>

              <!-- last-Name for appoinment -->
               <label for="firstname">  <b>  last Name  <b><lable>
                    <input type="text" placeholder="Enter Your last name" name="lastname" required><br> <br>

               <!--Gender for appoinment -->
               <label><b>Gender </b></label><br>
                    <input type="radio" name="gender"  vlaue="f" placeholder="female">Female
                    <input type="radio" name="gender"  value="m" placeholder="male">Male
                    <input type="radio" name="gender"  value="o" placeholder="other">Other<br><br>


              <!-- Date of birth for appoinment -->
              <label><b>Date of Birth:</b></label><br>
                     <input type="date" name="dob" required><br><br>

               <!-- Age for appoinment -->
               <label for="Age"> Age: <lable>
                    <input type="number" placeholder="Age" name="age"> <br> <br>

                <!--Blood Group for appoinment -->
               <label for="Bood Group"> Blood Group <label>
               <input type="text" name="blood" placeholder="blood">


                <!-- Address  for appoinment -->
                <label for="Location">  <b> Address Detail <b><lable>
                     <input type="address" name="address"> <br> <br>

               <!--   City Of Appoinment   -->
                <label for="City">  <b> City<b><lable>
                     <input type="city" name="city"> <br> <br>

                  <!-- Phone-No for appoinment -->
               <label for="phone">phone number:</label>
                     <input type="tel" id="phone" name="phone" placeholder="984-45-668"
                      required><br><br></div>

                         <div class="app"  style=" border: 2px solid rgb(230, 227, 227); border-radius: 10px; width: 30%;
                          padding: 3%; margin-left: 32%;   box-shadow: 10px 10px 5px #e6e2e2;"> <br>
                        <b  style="font-size: 40px; font-weight:bold;"> Appoinment Details</b> <br>  <br>

                        <!-- Department for appoinment -->
               <label for="Department"> Department: <lable>
                     <input type="appointment"class="department"
                       name="department">


                          <!-- doctors for appoinment -->
               <label for="doctors"> Doctors<label>
               <input type="text" name="doctors" placeholder="doctors">


                             <!-- APPOINMENT date for appoinment -->
              <lable for="date"> Appoinment Date </label>
                     <input type="date" name="date"> <br> <br>

                      <!-- Email for appoinment -->
              <lable for="Mail"> Enter email</label>
                     <input type="text" name="email"> <br> <br>

                       <!-- Reason  for appoinment -->
              <lable for="reason"> Reason For Treatment <lable> <br>
                     <textarea rows="4" cols="50" name="reason"></textarea> <br>

                        <!--  Drag And Drop -->




                       <!--  Make Appoinment -->

              <div class="" style="margin-top: 10%;">
              <input type="submit"  name="submit" >
     </div>
    </div>

<!-- *********************************************End Of Register Form******************************* -->



</body>

</html>
