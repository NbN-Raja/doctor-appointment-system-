<?php

include '../login/config.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $insertquery = "INSERT INTO contact (name,email,mobile,message) VALUES('$name','$email','$mobile','$message')";
    $run = mysqli_query($connect, $insertquery);

    if ($run) {
        echo "successfully connectd";
    } else {
        // echo "unable to insert";
    }

}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Free Medical Hospital Website Template | Smarteyeapps.com</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <?php

include 'navbar.php';
?>


         <!--  ************************* Page Title Starts Here ************************** -->
               <div class="page-nav no-margin row">
                   <div class="container">
                       <div class="row">
                           <h2>Our Gallery</h2>
                           <ul>
                               <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                               <li><i class="fas fa-angle-double-right"></i> Our Gallery</li>
                           </ul>
                       </div>
                   </div>
               </div>

         <!-- ######## Page  Title End ####### -->


    <!-- ################# Our Blog Starts Here#######################--->



    <form action="contact_us.php" method="POST">
      <div class="row contact-rooo no-margin">
        <div class="container">
           <div class="row">


            <div style="padding:20px" class="col-sm-6">
            <h2 style="font-size:18px">Contact Form</h2>
                <div class="row">

                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter Name :</label></div>
                    <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="name" class="form-control input-sm"  ></div>
                </div>
                <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Email Address :</label></div>
                    <div class="col-sm-8"><input type="text" name="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Mobile Number:</label></div>
                    <div class="col-sm-8"><input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label>Enter  Message:</label></div>
                    <div class="col-sm-8">
                      <textarea rows="5" placeholder="Enter Your Message" name="message" class="form-control input-sm"></textarea>
                    </div>
                </div>
                 <div style="margin-top:10px;" class="row">
                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                    <div class="col-sm-8">
                     <button class="btn btn-danger btn-sm" name="submit">Send Message</button>
                    </div>
                </div>
            </div>
            </form>
             <div class="col-sm-6">

                  <div style="margin:50px" class="serv">





          <h2 style="margin-top:10px;">Address</h2>

    Bakulahar Hospital <br>
    Tandi <br>
    Chitwan District<br>
    Phone:+977 9159669599<br>
    Email:bahospital@gmail.com<br>
    Website:www.appoint.bhospital.com<br>







           </div>


         </div>

            </div>
        </div>

      </div>



    <!-- ################# Footer Starts Here#######################--->
<?php

include 'footer.php';

?>


</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/js/script.js"></script>


</html>
