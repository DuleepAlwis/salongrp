<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Salon Sanrooka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body class="receptionist-background">
<?php
include "../layout/ReceptionistLayout.php";
include "../../controller/AppointmentController.php";

?>
<div class="container-fluid text-dark">
    <div class="row">
        <div class="col-md-3 mt-3 border border-light" style="height: 50%;overflow-y: auto">
            <h3>Appointments</h3>
            <ul id="appointments">

            </ul>
        </div>
        <div class="col-md-5">
            <h1 align="center">Payment</h1>
        </div>
    </div>
</div>

</body>
</html>