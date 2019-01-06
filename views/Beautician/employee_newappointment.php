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
<<<<<<< HEAD
include '../../model/Connection.php';

$sql = "SELECT * FROM appointment INNER JOIN employee ON  appointment.beauticianid=employee.id WHERE employee.email='".$_SESSION['email'] ."' AND appointment.date >= CURDATE()";
   
$query = mysqli_query($conn, $sql);

if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}
=======
require_once("../../controller/AppointmentController.php");
// include '../../model/Connection.php';

// $sql = "SELECT * FROM appointment INNER JOIN employee ON  appointment.beauticianid=employee.id WHERE employee.email='".$_SESSION['email'] ."' AND appointment.date >= CURDATE()";
   
// $query = mysqli_query($conn, $sql);

// if (!$query) {
//   die ('SQL Error: ' . mysqli_error($conn));
// }
>>>>>>> 52faddc8f3fb8f58c0155ec13f39cc39cd54de48

?>

<div id="content-wrapper">

    <div class="container-fluid">
        <div class="col-md-12" style="z-index: -1;">
        <!-- Breadcrumbs-->
        <br><ol class="breadcrumb" style="background-color: #dee2e6;">
            <li class="breadcrumb-item">
                <!-- <h3 class="text-dark" align="center">My Profile</h3> -->

<<<<<<< HEAD
                <h1><i class='fas fa-fw fa-chart-area'></i> New Appointments</h1>
=======
                <h2><i class='fas fa-fw fa-chart-area'></i> My New Appointments</h2>
>>>>>>> 52faddc8f3fb8f58c0155ec13f39cc39cd54de48
            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>
    </div>
    

<section id="posts"><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
<<<<<<< HEAD
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
=======
            <div class="card-body" style="background-color: #f8f9fa;">
            <table class="table table-striped table-bordered">
              <thead class="thead-dark bg-primary">
                <tr>
                  <th scope="col">No</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Service</th>
                      <th scope="col">Price</th>
                      <th scope="col">State</th>
                </tr>
              </thead>

              <tbody id="AppointmentTable">
              <?php

                if($result=getBeauticianNewAppointments($_SESSION["id"]))
                  {
                      $result->bind_result($appointmentid,$date,$time,$name,$state,$price,$service);
                      // $result->bind_result($appointmentid,$date,$time,$state,$price,$service,$employee);
                      $color="";
                      $statement = "";
                      if($state==0)
                      {
                          $color = '#ccccff';
                          $statement = "N/C";
                      }
                      else
                      {
                          $color = 'Silver';
                          $statement = "Completed";
                      }
                      while($result->fetch())
                      {
                          // echo "<tr style='background-color: $color'><td>".$appointmentid."</td><td>".$date."</td><td>".$time."</td><td>".$employee."</td><td>".$service."</td><td>".
                          //     $price."</td><td>".$statement."</td></tr>";
                            echo "<tr style='background-color: $color'><td>".$appointmentid."</td><td>".$date."</td><td>".$time."</td><td>".$name."</td><td>".$service."</td><td>".
                              $price."</td><td>".$statement."</td></tr>";
                      }
                  }
                  ?>
                
              </tbody>
              
            </table></div>
>>>>>>> 52faddc8f3fb8f58c0155ec13f39cc39cd54de48
          </div>
        </div>

      </div>
    </div>
  </section>
<<<<<<< HEAD
</div></div>


=======
</div>
</div>

<br><br>  
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <br><span>Copyright © Your Website 2018</span><br><br>
            </div>
        </div>
    </footer>
>>>>>>> 52faddc8f3fb8f58c0155ec13f39cc39cd54de48





</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>

</html>