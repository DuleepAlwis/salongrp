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
<body class="customer-background">
<?php
include "../layout/CustomerLayout.php";
?>
<div class="container-fluid">
    <h3 align="center">Make a new appointment</h3>
    <div class="row mt-5">



        <div class="col-md-2 ml-3">
            Date :<b id="warning" class="text-danger"></b>
            <input id="date" type="date" class="form-control" width="17px">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
            Beautician :<br>
            <select name="beautician" id="beautician"></select>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-1">
            Service :<br>
            <select name="service" id="service"></select>
        </div>
        <div class="col-md-1"></div>
        <div class="col--md-1 ml-3">
            Number of particiapants :<br>
            <input id="participants" type="number" min="1" max="13" width="17px">
        </div>

        <div class="col-md-1"></div>
        <div class="col--md-1 mr-3">
            Available time slots :<br>
            <select name="timeslots" id="timeslots"></select>
        </div>
        <div class="col-md-1 ml-3 mt-4">
            <button class="btn btn-info" onclick="addToAppointments()">Add</button>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-1"></div>
        <div class="col-md-10">
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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
            <table>
                <tr>Total : <input class="ml-3" type="text" id="totalprice"></tr>
                <tr>Advance payment : <input type="text" id="advancep"></tr>
                <tr><button class="btn btn-outline-primary">Make payment</button></tr>
            </table>
    </div>
        <div class="col-md-1">

        </div>
    </div>
</div>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Customer.js"></script>
</body>
</html>
