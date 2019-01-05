<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body class="customer-background">
<?php
require_once("../logallow.php");
require_once("../layout/EmployeeLayout.php");
require_once("../../controller/AppointmentController.php");
?>
<div class="container-fluid">
    <h3 align="center">My Appointments</h3>
    <div class="row mt-5">




    </div>
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div style="overflow-y: auto;height:300px">
                <table class="table table-hover mt-5">
                    <thead class="thead-dark bg-primary">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Beautician</th>
                        <th scope="col">Service</th>
                        <th scope="col">Price</th>
                        <th scope="col">State</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="AppointmentTable">
                    <?php
                    //appointment.appointmentid,appointment.date,appointment.time,appointment.state,appointment.price,services.name,employee.name
                    if($result=getBeauticianAppointments($_SESSION["id"]))
                    {
                        $result->bind_result($appointmentid,$date,$time,$state,$price,$service,$employee);
                        $color="";
                        $statement = "";
                        if($state==0)
                        {
                            $color = '#7FFFD4';
                            $statement = "N/C";
                        }
                        else
                        {
                            $color = 'Silver';
                            $statement = "Completed";
                        }
                        while($result->fetch())
                        {
                            echo "<tr style='background-color: $color'><td>".$appointmentid."</td><td>".$date."</td><td>".$time."</td><td>".$employee."</td><td>".$service."</td><td>".
                                $price."</td><td>".$statement."</td><td></td></tr>";
                        }
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</div>

<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Customer.js"></script>

</body>
</html>
