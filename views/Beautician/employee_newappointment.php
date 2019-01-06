<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="customer-background" onload="CallMethods()">
<?php
include "../logallow.php";
require_once("../layout/EmployeeLayout.php");
require_once("../../controller/RatingsFeedbackController.php");
require_once("../../controller/EmployeeController.php");
include '../../model/Connection.php';

$sql = "SELECT * FROM appointment INNER JOIN employee ON  appointment.beauticianid=employee.id WHERE employee.email='".$_SESSION['email'] ."' AND appointment.date >= CURDATE()";
   
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}

?>

<div id="content-wrapper">

    <div class="container-fluid">
        <div class="col-md-12" style="z-index: -1;">
        <!-- Breadcrumbs-->
        <br><ol class="breadcrumb" style="background-color: #dee2e6;">
            <li class="breadcrumb-item">
                <!-- <h3 class="text-dark" align="center">My Profile</h3> -->

                <h1><i class='fas fa-fw fa-chart-area'></i> New Appointments</h1>
            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>
    </div>
    

<section id="posts"><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>My Appointments</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>Appointment ID</th>
                  <th>Customer ID</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>State</th>
                  <th>Price</th>
                  <th>Service ID</th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php

                while ($row = mysqli_fetch_array($query)){
                echo '<tr> 
                  <td>'.$row['appointmentid'].'</td>
                  <td>'.$row['customerid'].'</td>
                  <td>'. date('F d, Y', strtotime($row['date'])) . '</td>
                  <td>'.$row['time'].'</td>
                  <td>'.$row['state'].'</td>
                  <td>'.$row['price'].'</td>
                  <td>'.$row['serviceid'].'</td>
                </tr>';
              }
              ?>
                
              </tbody>
              
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>
</div></div>







</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>

</html>