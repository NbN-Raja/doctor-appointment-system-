<?php

include '../../login/config.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $insert = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";

    $run = mysqli_query($connect, $insert);
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
            $id = $row['ID'];
            $username = $row['username'];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
        }
        header("Location:dash.php");
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Login</title>
	<link rel="stylesheet" href="admin-login.css">
	</body>
<div class="loginbox">
	<form class="form"  method="POST" action="admin-login.php">

          <img src="img/avatar.png" class="avatar">
        <h1> Admin Login </h1>
		<p> Username: </p>
		<input type="text" size=25 name="username"><br>
		<p>Password:</p>
		<input type="Password" size=25 name="password"> <br>

		<input type="submit" name="submit" value="Login">

	</form>



<button onclick="goBack()">Go Back</button>

<script>
function goBack() {
  window.history.back();
}
</script>


<!-- CSS  -->
<STYLE>
*{
    margin: 0px;
    padding: 0px;
}

/* .form{
    border: 1px solid;
    width: auto;
    width: 20%;
    padding: 23px;
    margin: 79px 494px;
}

p{
    font-size: large;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}

button{
   margin-left: 350px;

} */



body{
    margin: 0;
    padding: 0;
    background: url('img/b.jpg');
    background-size: cover;
    background-position: center;
    font-family: sans-serif;
    background-repeat: round;
}

.loginbox{
    width: 320px;
    height: 420px;
    background: #000;
    color: #fff;
    top: 50%;
    left: 30%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
    float: right;
}

.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
}

.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
.loginbox input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #fb2525;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
.loginbox input[type="submit"]:hover
{
    cursor: pointer;
    background: #0614d6;
    color: #000;
}
.loginbox a{
    text-decoration: none;
    font-size: 12px;
    line-height: 20px;
    color: darkgrey;
}

.loginbox a:hover
{
    color: #ffc107;
}


button{
    border: none;
    outline: none;
    height: 40px;
    background: #1a03ec;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    width: 262px;
}
button:hover
{
    cursor: pointer;
    background: #f01b0c;
    color: #000;
}

</STYLE>
</div>
</head>
<body>
