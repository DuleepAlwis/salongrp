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
<body class="customer-background" onload="loadServices()">
<?php
require_once("../logallow.php");
require_once("../layout/CustomerLayout.php");
require_once("../../controller/AppointmentController.php");
?>

<div id="content-wrapper">
<div class="container-fluid">
    <div class="col-md-12" style="z-index: -1;">

    <br><ol class="breadcrumb" style="background-color: #dee2e6;" >
        <li class="breadcrumb-item">
            <h2><i class="fa fa-pencil"></i> Make a New Appointment</h2>
        </li>
    </ol>
    </div>

<div class="container-fluid">
    <div class="row mt-5">

        <div class="col-md-5"></div>
        <div class="col-md-5">
            >
            <form name="appointment" method="post" action="./index.php">
                <table class="" style="border-style: outset">
                    <tr>
                        <td>
                            Date :<b id="warning" class="text-danger"></b>
                            <input name="date" id="date" type="date" class="form-control"  width="17px">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Service :<br>
                            <select class="form-control" name="service" id="service" onChange="loadBeautician()"></select>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            Beautician :<br>
                            <select class="form-control" name="beautician" id="beautician">
                                <option value="Any">Any</option>
                            </select>
                            <b id="alertMsg"></b>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Number of particiapants :<br>
                            <input class="form-control" name="participants" id="participants" type="number" min="1" max="13" width="17px" value="1" style="width:50%">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Time :
                            <input class="form-control" type="text" name="time" id="time" value=""></td>


                    </tr>
                    <tr>
                        <td>Total : <input class="form-control" type="text" name="totalprice" id="totalprice" value="0"></td>
                    </tr>
                    <tr>
                        <td>Advance payment : <input class="form-control" type="text" id="advancep" value="" name="ap"></td>
                        <!--<td><button class="mt-3 btn btn-outline-primary">Make payment</button></td>-->
                    </tr>
                    <tr><td><input class="btn btn-primary mt-3" type="hidden" id="clickMe" name="submitAppointment" value="Save"></td><td><input type="reset" class="btn btn-primary mt-3" value="Cancel"></td></tr>
                </table>
            </form>
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top" >
                            <input type="hidden" name="cmd" value="_xclick">
                            <input type="hidden" name="business" value="sanrookasalon@gmail.com">
                            <input type="hidden" name="lc" value="US">
                            <input type="hidden" name="item_name" value="paypalPlugin">
                            <input type="hidden" name="item_number" value="paypalPlugin">
                            <input type="hidden" name="amount" id="paypalval" value="">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="button_subtype" value="services">
                            <input type="hidden" name="no_note" value="0">
                            <input type="hidden" name="cn" value="Add special instructions to the seller:">
                            <input type="hidden" name="no_shipping" value="1">
                            <input type="hidden" name="rm" value="1">
                            <input type="hidden" name="return" value="http://localhost/salongrp/views/Customer/">
                            <input type="hidden" name="cancel_return" value="http://localhost/salongrp/views/Customer/">
                            <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
                            <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" onclick="saveAppoinment()" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">

                        </form>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-primary" onclick="availableTimeSlots()">Available time slots :</button>
            <select class="form-control mt-1" name="timeslots" id="timeslots"></select>
            <button class="btn btn-outline-primary" onclick="addTime()">Add</button>

        </div>

                    <!--<tr class="col-md-1 ml-3 mt-4">
                        <td><button class="btn btn-info" onclick="addToAppointments()">Add</button>
                    </tr>
                </div>
                <div class="row mt-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div style="overflow-y: auto;height:350px">
                    <table class="table table-hover mt-5">
                        <thead class="thead-dark bg-primary">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Date</th>
                            <th scope="col">Beautician</th>
                            <th scope="col">Service</th>
                            <th scope="col">Number of participants</th>
                            <th scope="col">Time</th>
                            <th scope="col">Price</th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody id="AppointmentTable">

                        </tbody>
                    </table>
                        </div>

                        <table class="mt-1">
                        <table class="mt-5">
                            <tr>
                                <td>Total : <input class="ml-3" type="text" id="totalprice" value="0"></td>
                                <td>Advance payment : <input type="text" id="advancep" value="0"></td>
                                <td><button class="mt-3 btn btn-outline-primary">Make payment</button></td>
                                <td><span style="display: inline-block;width: 700px"></span></td>
                                <td>




                                    <!--<div id="msgArea">
                                        <div id="customerMsgbox" class="jumbotron">
                                            <ul id="msgList">
                                                <li>111</li>
                                            </ul>
                                        </div>
                                    <div id="customerMsgflip" class="alert alert-success border-info" style="width: 150px"><i class="fa-amazon"></i>Message

                                    </div>
                                    </div>-->
                    <!-- </td>
                 </tr>
             </table>-->
        </div>
        <div class="col-md-1">

        </div>
    </div>

    <div class="msgBtn">
        <button type="button" class="btn fa fa-comment-o" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #20c997;border-radius: 15px;border-color: black;" onclick="getCustomerMessages('<?php echo $_SESSION['id']; ?>','<?php echo $_SESSION['name']; ?>')"><b>&nbsp;&nbsp;Chat</b></button>
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

                    </div>

                    <div class="modal-footer">
                        <div>
                        <textarea id="msgArea" style="background-color: #e9ecef;width: 300px;height:100px"></textarea>

                        <button type="button" class="btn btn-info btn-outline-primary" onclick="clearMessages()" data-dismiss="modal">Close</button>
                        <button type="button" class="ml-3 btn btn-info btn-outline-primary" onclick="customerMessage('<?php echo $_SESSION['id']; ?>')">Send message</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Customer.js"></script>
<script src="../../js/CustomerHelp.js"></script>
</body>
</html>

<?php
if(isset($_POST["submitAppointment"]))
{
    $result = addAppointment($_SESSION["id"]);


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
        echo $result." "."123";
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