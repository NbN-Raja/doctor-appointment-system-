<?php
session_start();

include '../../header.php';
include '../../login/config.php';

?>
<style>
li{
  float: right;
}
  </style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">

  </head>
  <body>


<!-- Side Navigation -->
    <div class="container-fluid">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-2" style="margin-left:-30px;">
            <!--  Side nav bar php -->
<style>
 ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color:#47c128;
        width: 699%;
        height: 80px;
      }

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>



<ul>
<div class="nav" style="display:flex; justify-content:space-between; align-item:center;">
<h1 style="margin-top:14px; margin-left:40%; font-size: 40px; font-family:system-ui"> <b> <i class="fa fa-user" aria-hidden="true">  Dashboard </i> </b></h1>

<div class="logout" >
  <button class="btn btn-red"><i class="fas fa-sign-out-alt" style="position: relative;top: 31px;left: -22px;"> log Out</i> <button>
</div>
</div>


</ul>


 </body>
 </html>

          </div>



<!-- Tail Blocks Code Login Buttoms  -->

<!-- Links  -->
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


<section class="text-gray-600 body-font" style="width:100%">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ADMIN</h2>
          <!-- <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1> -->
          <p class="leading-relaxed mb-3">ADMIN LOGIN</p>
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
              <a href="admin-dash.php"> ADMIN </a></button>
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ADMIN</h2>
          <!-- <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1> -->
          <p class="leading-relaxed mb-3">PATIENT LOGIN</p>
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
          <a href="../patient/patient-dash.php"> PATIENT </a></button>
        </div>
      </div>
      <div class="p-4 lg:w-1/3">
        <div class="h-full bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">ADMIN</h2>
          <!-- <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">Raclette Blueberry Nextious Level</h1> -->
          <p class="leading-relaxed mb-3">DOCTORS LOGIN</p>
          <button class="flex mx-auto mt-16 text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">
          <a href="../doctors/doctor-dash.php"> DOCTOR </a></button>
        </div>
      </div>


    </div>
  </div>
</section>
  </body>
</html>
