<?php
include '../login/config.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = "INSERT INTO emergency (name,phone,address)
      VALUES('$name','$phone','$address')";

    $run = mysqli_query($connect, $query);
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>doctor appointment system</title>
        <link rel="shortcut icon" href="assets/images/fav.jpg" />
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/fontawsom-all.min.css" />
        <link rel="stylesheet" href="assets/css/animate.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <link rel="stylesheet" href="index.css">
        <script src="index.js"></script>
    </head>
    <body>
        <p style="padding:10px"> Bakulahar Chowk</p>
        <!-- ################# Header Starts Here#######################--->
        <?php
include 'navbar.php';
?>
        <!-- ################# Image#######################--->
        <div class="hello" style="display:flex">
            <div class="img">
                <img style="padding-top: 84px;width: 100%;margin-left: 1px;" src="assets/images/slider/corona.png">
            </div>
            <div class="form" style="position: absolute;right: 10px;top: 160px;box-shadow: 1px 8px 10px 12px #c8a6e8;padding: 26px;">
                <h3> Emergency Patients </h3>
                <form action="index.php" method="post">
                    <label> Name </label>
                    <input type="text" name="name" placeholder="pateint name"> <br>
                    <label> Phone </label>
                    <input type="phone" name="phone"><br>
                    <label> Address </label>
                    <input type="text" name="address"><br>
                    <input type="submit" name="submit" value="Submit" id="submit">
                    <p> Full Time Doctors | 24X7 Emergency Services </p>
                    <br>
                    <p> +977-981-0136491 |  +977-1-4217766</p>
                </form>
            </div>
        </div>
        <!-- Corona Virus Form  -->
        <!----------------------------------------------- Chat Box-------------------------------------------------  -->
        <button class="open-button" onclick="openForm()" style="color:blue"> <b> message </b></button>
        <div class="chat-popup" id="myForm">
            <form action="/action_page.php" class="form-container">
                <h4 style="border:1px solid black; background-color:lightgrey;">Message Us</h4>
                <label for="msg"><i> Get instant Reply </i></label>
                <textarea  name="msg" required>
       Hello! How Can We Help You?
    </textarea>
                <input type="text" placeholder="Enter Your Message..." name="message">
                <button type="submit" class="btn">Send</button>
                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        <!----------------------------------------------  End Of ChAT----------------------- -->
        <hr>
        <!-- --------------------------------------Corona Virus----------------------------------- -->
        <h1 style="text-align:center; color:red"> Corona Virus<img src="assets/images/cor.png" style="width:60px; height:70px"> </h1>
        <div class="container" style="display:flex;flex-wrap: nowrap; justify-content: space-between;">
            <div class="symptions">
                <h1> common symptoms: </h1>
                <p> Symptoms:</p>
                <br>
                </p>
                <p>
                <ol>
                    <li>1.Fever or chills </li>
                    <li>2.Cough or Nausea </li>
                    <li>3.Shortness of breath or difficulty breathing</li>
                    <li>4.Fatigue or Diarrhea  </li>
                    <li>5.Muscle or body aches </li>
                    <li>6.Headache  or vomiting</li>
                    <li>7.New loss of taste or smell </li>
                    <li>8. Sore throat</li>
                    <li>9.Congestion or runny nose </li>
                </ol>
            </div>
            <div class="prevention">
                <h1>  common prevention: <img src="assets/images/corona.png" style="width:140px; height:70px"> </h1>
                <p> Preventions </p>
                <br>
                <ol>
                    <li>1. Clean your hands often. </li>
                    <li>2. Use soap and water, or an alcohol-based hand rub.</li>
                    <li>3. Maintain a safe distance from anyone who is coughing or sneezing.</li>
                    <li>4. Wear a mask when physical distancing is not possible.</li>
                    <li>5. Don’t touch your eyes, nose or mouth.</li>
                    <li>6. Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
                    <li>7.  Stay home if you feel unwell.</li>
                    <li>8. If you have a fever, cough and difficulty breathing, seek medical attention.</li>
                </ol>
            </div>
        </div>
        <!-- End Of Corona Virus  -->
        <hr>
        <div class="our" style="text-align:center; margin-bottom:50px">
            <h1>Our Key Feature </h1>
        </div>
        <div class="flex" style="display: flex;display: flex;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: space-around;
            position: relative;
            left: -227px;">
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="assets/images/appointment.jpg"style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Book An Appointment</h1>
                        <button> Appoint <button>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="assets/images/OQ6UTW0.jpg"style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Doctor Gallery </h1>
                        <button> Appoint <button>
                    </div>
                </div>
            </div>
            <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <img src="assets/images/16994.jpg"style="width:300px;height:300px;">
                    </div>
                    <div class="flip-card-back">
                        <h1>Department</h1>
                        <button> Appoint <button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer start here  -->
        <footer class="footer">
            <div class="container" style="background-color: black;">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <h2>About Us</h2>
                        <p>
                            We are  offering online doctor Appointment  services in Nepal through different
                            media channels.
                            We have been receiving many requests for online doctor appointment from patients all around Nepal and
                            abroad in the past few months.
                        <p>
                            We know our regular patients have also been facing difficulties to connect
                            with us due to the COVID – 19 pandemic.
                        </p>
                        </p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <h2>Useful Links</h2>
                        <ul class="list-unstyled link-list">
                            <li>
                                <a ui-sref="about" href="about.php">About us</a
                                    ><i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="portfolio" href="protofile.php">Portfolio</a
                                    ><i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="products" href="#/products">Doctors</a
                                    ><i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="gallery" href="#/gallery">Gallery</a
                                    ><i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <a ui-sref="contact" href="#/contact">Contact us</a
                                    ><i class="fa fa-angle-right"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 col-sm-12 map-img">
                        <h2>Contact Us</h2>
                        <address class="md-margin-bottom-40">
                            NRC(Nepal) <br />
                            Narayanghad (cHITWAN District) <br />
                            Bakulahar Hospital (Ra.Na.Pa Tandi) <br />
                            Phone: 986502145 <br />
                            Email:
                            <a href="mailto:info@anybiz.com" class="">Nrc23@gmail.com</a
                                ><br />
                            Web: <a href="smart-eye.html" class="">www.nepal online doctor.com.np</a>
                        </address>
                    </div>
                </div>
            </div>
        </footer>
        <div class="copy">
            <div class="container" style="background-color: black;">
                <a href=""
                    >2021 &copy; All Rights Reserved | Designed and Developed by
                Mr.Nabin Raj Chhetri & Mr.Swagat Paudel</a
                    >
                <span>
                    <p> Social Links  </p>
                    <a><i class="fab fa-github"></i></a>
                    <a><i class="fab fa-google-plus-g"></i></a>
                    <a><i class="fab fa-twitter"></i></a>
                    <a><i class="fab fa-facebook-f"></i></a>
                    <a href="../dash/admin/dash.php"> <i class="fa fa-user" aria-hidden="true"></i> </a>
                </span>
            </div>
        </div>
    </body>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
    <script src="assets/js/script.js"></script>
</html>