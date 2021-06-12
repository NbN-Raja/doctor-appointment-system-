
<?php

include 'config.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

    $run = mysqli_query($connect, $query);
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_assoc($run)) {
            $id = $row['Id'];
            $username = $row['username'];
            session_start();
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
        }
        header("Location:../welcome/index.php");

    } else {
        // echo "Not connected!";
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">


<!--  Links  -->

<link rel="shortcut icon" href="../front/assets/images/fav.jpg" />
    <link rel="stylesheet" href="../front/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../front/assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" href="../front/assets/css/animate.css" />
     <link rel="stylesheet" type="text/css" href="../front/assets/css/style.css" />

     <!-- <link rel="stylesheet" href="login.css">
     <link rel="stylesheet" href="style.css"> -->

</head>
<body>







<!DOCTYPE html>
<html lang="en">

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">




		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

<?php include 'nav-bar.php'?>


	<body class="account-page">
		<!-- Main Wrapper -->
		<div class="main-wrapper">
			<!-- Header -->
			<header class="header">
			</header>
			<!-- /Header -->
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="login-banner.png" class="img-fluid" alt="Doccure Login" style="    position: relative; top: 82px;">
									</div>
									<div class="col-md-12 col-lg-6 login-right" style="top:100px">
										<div class="login-header">
											<h3>Login <span>Patients</span></h3>
										</div>
										<form action="login.php" method="POST">
											<div class="form-group form-focus">
												<input type="text"  name="username" class="form-control floating" placeholder="Enter Username">
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating" placeholder=" Enter password">

											</div>
											<div class="text-right">
												<a class="forgot-link" href="forgot-password.html">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit">Login</button>
											<div class="login-or">
												<span class="or-line"></span>
												<span class="span-or">or</span>
											</div>
											<div class="text-center dont-have">Don’t have an account? <a href="register.php">Register</a></div>
										</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->

						</div>
					</div>
				</div>
			</div>
			<!-- /Page Content -->



		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>

		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>

	</body>

<!-- doccure/login.html  30 Nov 2019 04:12:20 GMT -->
</html>

<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900');

.account-page {
	background-color: #fff;
}
.account-page .content {
    padding: 50px 0;
}
.login-right {
	background-color: #fff;
	border: 1px solid #f0f0f0;
	border-radius: 4px;
	padding: 25px;
}
.login-header {
	margin-bottom: 20px;
}
.login-header p {
	margin-bottom: 0;
}
.login-header h3 {
    font-size: 18px;
    margin-bottom: 3px;
}
.login-header h3 a {
    color: #0de0fe;
    float: right;
    font-size: 15px;
    margin-top: 2px;
}
.login-right .dont-have {
    color: #3d3d3d;
    margin-top: 20px;
    font-size: 13px;
}
.login-right .dont-have a {
	color: #09dca4;
}
.login-btn {
    font-size: 18px;
    font-weight: 500;
}
.login-or {
	color: #d4d4d4;
	margin-bottom: 20px;
	margin-top: 20px;
	padding-bottom: 10px;
	padding-top: 10px;
	position: relative;
}
.or-line {
	background-color: #e5e5e5;
	height: 1px;
	margin-bottom: 0;
	margin-top: 0;
	display: block;
}
.span-or {
	background-color: #fff;
	display: block;
	left: 50%;
	margin-left: -20px;
	position: absolute;
	text-align: center;
	top: -3px;
	width: 42px;
}
.forgot-link {
    color: #3d3d3d;
    display: inline-block;
    font-size: 13px;
    margin-bottom: 10px;
	font-weight:400;
}
.btn-facebook {
    background-color: #3a559f;
    color: #fff;
    font-size: 13px;
    padding: 8px 12px;
}
.btn-google {
    background-color: #dd4b39;
    color: #fff;
    font-size: 13px;
    padding: 8px 12px;
}
.social-login .btn:hover, .social-login .btn:focus {
	color: #fff;
}

.btn-primary{
  background-color: #09e5ab;
    border: 1px solid #09e5ab;
}
</style>



