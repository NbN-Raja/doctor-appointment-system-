<?php

include '../login/config.php';

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];

    $insertquery = "INSERT INTO feedback(firstname,lastname,email,feedback) VALUES('$firstname','$lastname','$email',
    '$feedback')";
    $run = mysqli_query($connect, $insertquery);

}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../feedback/feed.css">

</head>

<?php

include 'navbar.php';
?>

<body style="background-image:url('../feedback/f.jpg');">





<div class="container" style="    display: flex;
    /* margin-left: 669px; */
    margin: 118px 685px;
    width: 50%;">
  <form action="feedback.php" method="POST">
    <h1> Patients FeedBack</h1>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="email">Email</label>
    <input type="text"  name="email" placeholder="Email..">


    <label for="subject">Feedback</label>
    <textarea id="subject" name="feedback" placeholder="Give Your Honest Feedback plz..." style="height:200px"></textarea>

    <input type="submit" name="submit">
  </form>
</div>

</body>
</html>
