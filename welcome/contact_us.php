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
    <title> Contact Us</title>

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
            <div class="row" style="display:flex; flex-wrap: nowrap;">
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

            <div class="location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.0550459221713!2d84.51694569743985!3d27.62255292168897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994ef5390fcd03b%3A0x6268f8a93a24a9b2!2sBakulahar%20Ratnanagar%20Hospital!5e0!3m2!1sen!2snp!4v1621359962398!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </div>
            </form>
<!--

             <div class="col-sm-6">
                  <div style="margin:50px" class="serv">
          <h2 style="margin-top:10px;">Address</h2>
    Smart Hospital <br>
    Daman Street<br>
    K.K District<br>
    Phone:+91 9159669599<br>
    Email:info@smart-eye.in<br>
    Website:www.smart-eye.com<br>

           </div>

         </div> -->





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
