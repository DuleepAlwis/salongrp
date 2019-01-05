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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="customer-background" onload="loadServices()">
<?php
require_once("../logallow.php");
require_once("../layout/CustomerLayout.php");
require_once("../../controller/AppointmentController.php");
?>
<div class="container-fluid">
    <h3 align="center">My Appointments</h3>
    <div class="row mt-5">




    </div>
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div style="height:300px">
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
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="AppointmentTable" style="overflow-y: auto">
                    <?php
                    //mail("duleepalwis@gmail.com","Success","Great Messages");

                    if($result=getCustomerAppointments($_SESSION["id"]))
                        {
                            $result->bind_result($appointmentid,$date,$time,$state,$price,$service,$employee);
                            $color="";
                            $statement = "";
                            if($state==0)
                            {
                                $color = 'Lime';
                                $statement = "N/C";
                            }
                            else
                            {
                                $color = 'Silver';
                                $statement = "Completed";
                            }
                            while($result->fetch())
                            {
                                echo "<tr id='$appointmentid' style='background-color: $color'><td>".$appointmentid."</td><td>".$date."</td><td>".$time."</td><td>".$employee."</td><td>".$service."</td><td>".
                                    $price."</td><td>".$statement."</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#changeAppointmentdata' onclick="."updateAppointment($appointmentid)".">Change</button></td><td></td></tr>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="changeAppointmentdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Appointment details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <br>
                    <div class="row">
                        <button class="btn btn-outline-primary" onclick="availableTimeSlots()">Available time slots :</button>

                        <select class="form-control col-3 mt-1" name="timeslots" id="timeslots"></select>
                    <button class="btn btn-outline-primary" onclick="addTime()">Add</button>
                    </div>
                    <form name="appointment" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <table class="" style="border-style: outset">
                            <tr>
                                <td>
                                    Appointment number:
                                    <input type="number" name="appointmentId" id="appointmentId" value="" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Date :<b id="warning" class="text-danger"></b>
                                    <input name="date" id="date" type="date" class="form-control" width="17px" required>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Service :<br>
                                    <input type="text" class="form-control" name="service" id="service" required>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    Beautician :<br>
                                    <select class="form-control" name="beautician" id="beautician" required>
                                        <option value="Any">Any</option>
                                    </select>
                                    <b id="alertMsg"></b>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Number of particiapants :<br>
                                    <input class="form-control" name="participants" id="participants" type="number" min="1" max="13" width="17px" value="1" style="width:50%" required>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Time :
                                    <input class="form-control" type="text" name="time" id="time" value="" required></td>


                            </tr>

                            <tr><td><input class="btn btn-primary mt-3" type="submit" name="updateAppointment" value="Save"></td><td><input type="reset" class="btn btn-primary mt-3" value="Cancel"></td></tr>
                        </table>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="msgBtn">
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #20c997;border-radius: 17px;border-style: ridge" onclick="getCustomerMessages('<?php echo $_SESSION['id']; ?>','<?php echo $_SESSION['name']; ?>')"><img src="../../img/icons/messageicon1.png"> <b>Messages</b></button>
    </div>
    <div id="messageArea">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<?php
if(isset($_POST["updateAppointment"]))
{
    $result = updateAppointment($_POST["appointmentId"]);

//echo $result;
    if($result)
    {
        /*echo $_POST["service"];
        var_dump($_POST["service"][0]);*/
        echo "<script type='text/javascript'>
                //alert('Record updated successfully');
                swal({
                    title:'Appointment saved Successfully',
                    icon:'success',
                    });
                setTimeout(function(){
                    window.location.href = window.location.href;
                    },1500)
                    </script>";
    }
    else
    {
        //echo $result." "."123";
        echo "<script type='text/javascript'>
                //alert($result)
                swal({
                    title:'Something Wrong',
                    icon:'error',
                    });
                </script>";
    }
}
?>