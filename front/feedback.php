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
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
</head>

<body>
  <?php

include 'navbar.php';

?>


  <div class="main" style="display:flex">

    <div class="image">
      <img src="assets/images/feedback.jpg">
    </div>
    <div class="">
      <form action="feedback.php" method="POST">

        <h1> Patients FeedBack</h1>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="email">Email</label>
        <input type="text" name="email" placeholder="Email..">


        <label for="subject">Feedback</label>
        <textarea id="subject" name="feedback" placeholder="Give Your Honest Feedback plz..."
          style="height:100px"></textarea>

        <input type="submit" name="submit" value="Feed">
      </form>

    </div>
  </div>
  <style>
    input[type=text],
    select,
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #24b7e4;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    form {
      margin-top: 141px;
    }
  </style>



  <?php

include 'footer.php';

?>

</body>

</html>