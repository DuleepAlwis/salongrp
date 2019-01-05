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
require_once("../../controller/AppointmentController.php");
/*include '../../model/Connection.php';

$sql = "SELECT * FROM appointment INNER JOIN employee ON  appointment.beauticianid=employee.id WHERE employee.email='".$_SESSION['email'] ."' AND appointment.date < CURDATE()";
   
  $query = mysqli_query($conn, $sql);


if (!$query) {
  die ('SQL Error: ' . mysqli_error($conn));
}*/

?>

<div id="content-wrapper">
<div class="container-fluid">
    <div class="col-md-12" style="z-index: -1;">
    <br><ol class="breadcrumb" style="background-color: #dee2e6;">
        <li class="breadcrumb-item">
            <h2><i class='fas fa-fw fa-chart-area'></i> My Previous Appointments</h2>
        </li>
    </ol>
    </div>

    <section id="posts"><br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body" style="background-color: #f8f9fa";>
              <table class="table table-striped table-bordered">
                  <thead class="thead-dark bg-primary" >
                  <tr>
                      <th scope="col">No</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Service</th>
                      <th scope="col">Price</th>
                      <th scope="col">State</th>
                      <!-- <th scope="col"></th> -->
                  </tr>
                  </thead>
                  <tbody id="AppointmentTable">
                  <?php
                  //appointment.appointmentid,appointment.date,appointment.time,appointment.state,appointment.price,services.name,employee.name
                  if($result=getBeauticianPreAppointments($_SESSION["id"]))
                  {
                      $result->bind_result($appointmentid,$date,$time,$name,$state,$price,$service);
                      $color="";
                      $statement = "";
                      if($state==0)
                      {
                          $color = '#9eacd6b0';
                          $statement = "N/C";
                      }
                      else
                      {
                          $color = 'Silver';
                          $statement = "Completed";
                      }
                      while($result->fetch())
                      {
                          echo "<tr style='background-color: $color'><td>".$appointmentid."</td><td>".$date."</td><td>".$time."</td><td>".$name."</td><td>".$service."</td><td>".
                              $price."</td><td>".$statement."</td></tr>";
                      }
                  }
                  ?>
                  </tbody>
              </table></div>
          </div>
        </div>

      </div>
    </div>

  </section>
</div>
</div>

<br><br>  
    <footer class="sticky-footer"><br><br><br>
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
            </div>
        </div>
    </footer>


</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>

</html>