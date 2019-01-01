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
</head>
<body class="customer-background" onload="loadServices()">
<?php
require_once("../logallow.php");
 require_once("../layout/CustomerLayout.php");
?>
<div class="container-fluid">
    <h3 align="center">Make a new appointment</h3>
    <div class="row mt-5">



        <div class="col-md-2 ml-1">
            Date :<b id="warning" class="text-danger"></b>
            <input id="date" type="date" class="form-control" width="17px">
        </div>
        <div class="col-md-1">
            Service :<br>
            <select class="form-control" name="service" id="service" onChange="loadBeautician()"></select>
        </div>

        <div class="col-md-1"></div>
        <div class="col-md-1">
            Beautician :<br>
            <select class="form-control" name="beautician" id="beautician">
                    <option value="Any">Any</option>
                </select>
            <b id="alertMsg"></b>
        </div>
        <div class="col-md-1"></div>
        <div class="col--md-1 ml-2">
            Number of particiapants :<br>
            <input class="form-control" id="participants" type="number" min="1" max="13" width="17px" value="1">
        </div>

        <div class="col-md-1"></div>
        <div class="col--md-1 mr-3">
            <button class="btn btn-outline-primary" onclick="availableTimeSlots()">Available time slots :</button><br>
            <select class="form-control" name="timeslots" id="timeslots"></select>
        </div>
        <div class="col-md-1 ml-3 mt-4">
            <button class="btn btn-info" onclick="addToAppointments()">Add</button>
        </div>
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
                    </td>
                </tr>
            </table>
    </div>
        <div class="col-md-1">

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
