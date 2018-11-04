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
require_once("../layout/CustomerLayout.php");
require_once("../../controller/AppointmentController.php");
?>
<div class="container-fluid">
    <h3 align="center">Previous Appointments</h3>
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
                        <th scope="col">Beautician</th>
                        <th scope="col">Service</th>
                        <th scope="col">Time</th>
                        <th scope="col">Price</th>
                        <th scope="col">State</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="AppointmentTable">
                    <?php
                        if($result=getCustomerAppointments(1))
                        {
                            $result->bind_result($appointmentid,$date,$time,$state,$price,$service,$employee);
                            $color="";
                            $statement = "";
                            if($state==0)
                            {
                                $color = 'Lime';
                                $statement = "Not completed";
                            }
                            else
                            {
                                $color = 'Silver';
                                $statement = "Completed";
                            }
                            while($result->fetch())
                            {
                                echo "<tr style='background-color: $color'><td>".$appointmentid."</td><td>".$date."<td/><td>".$employee."</td><td>".$service."<td/><td>".$time."</td><td>".
                                    $price."</td><td>".$statement."</td></tr>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <div class="msgBtn">
            <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #20c997;border-radius: 17px;border-style: ridge" onclick="getCustomerMessages('<?php echo $_SESSION['id']; ?>','<?php echo $_SESSION['name']; ?>')"><img src="../../img/icons/messageicon1.png"> <b>Messages</b></button>
        </div>
    <div id="messageArea">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="left:50%;top:50%">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div style="background-color: #6ea1cc;overflow-y: auto">
                                <ul id="msgBox" style="list-style: none">

                                </ul>
                            </div>

                            <textarea id="msgArea" style="background-color: #e9ecef;width: 300px;height:100px"></textarea>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-info btn-outline-primary" onclick="clearMessages()" data-dismiss="modal">Close</button>
                            <button type="button" class="ml-3 btn btn-info btn-outline-primary" onclick="customerMessage('<?php echo $_SESSION['id']; ?>')">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</div>

                <script src="../../js/vendor/jquery-3.2.1.min.js"></script>
                <script src="../../js/popper.min.js"></script>
                <script src="../../js/bootstrap.min.js"></script>
                <script src="../../js/Customer.js"></script>
<script src="../../js/CustomerHelp.js"></script>

</body>
</html>
