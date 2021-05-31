<?php
session_start();

include '../../header.php';
include '../../login/config.php';

?>
<style>
  li {
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
</head>

<body>


  <!-- Container -->
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2" style="margin-left:-30px;">
          <!--  Side nav bar php -->
          <?php
include 'side-nav.php';
?>
        </div>
        <div class="col-md-20" style="position: relative; top: 100px;">
          <h4 class="my-2">Admin Dashboard</h4>
          <div class="col-md-12 my-1">
            <div class="row">


              <div class="col-md-3 bg-success mx-2" style="height:130px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="my-2 text-white" style="font-size:30px;"> 1 </h5>
                      <h5 class="my-2 text-white ">Total</h5>
                      <h5 class="my-2 text-white ">Admin</h5>
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>


              <div class="col-md-3 bg-info mx-2" style="height:130px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                      <h5 class="my-2 text-white ">Total</h5>
                      <h5 class="my-2 text-white ">Doctors</h5>
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>


              <div class="col-md-3 bg-warning mx-2" style="height:130px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                      <h5 class="my-2 text-white ">Total</h5>
                      <h5 class="my-2 text-white ">patients</h5>
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 bg-danger mx-2 my-2" style="height:130px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                      <h5 class="my-2 text-white ">Total</h5>
                      <h5 class="my-2 text-white ">report</h5>
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 bg-warning mx-2 my-2" style="height:130px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                      <h5 class="my-2 text-white ">Total</h5>
                      <h5 class="my-2 text-white ">request</h5>
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 bg-success mx-2 my-2" style="height:130px;">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                      <h5 class="my-2 text-white" style="font-size:30px;">0</h5>
                      <h5 class="my-2 text-white ">Total</h5>
                      <h5 class="my-2 text-white ">Approve</h5>
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>