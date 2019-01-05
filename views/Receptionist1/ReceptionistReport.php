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
include "../layout/ReceptionistLayout1.php";
//include "../../controller/ReportController.php";
?>
<div class="container-fluid text-dark">
    <div class="row mt-5 mb-3">
    <div class="col-md-3"></div>
        <div class="col-md-7">
            <div style="border: #2c4762">
                <h1>Daily Stock & Revenue</h1>

                Select the Date: <input type="date" id="daily" name="date">

                <button class="btn btn-primary" onclick="getDailyReport()">View</button>

            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
        <div class="row mt-5 mb-3">
            <div class="col-md-3"></div>
            <div class="col-md-7">
                <div style="border: #2b2b2b">
                    <h1>Monthly report for Stock & Revenue</h1>
                    Select the time Period:<br>
                    From <input type="date" name="date" id="timeStart"> To <input type="date" name="date" id="timeEnd">
                    <button class="btn btn-primary ml-3" onclick="getMonthlyReport()">View</button>

            </div>
        </div>
        </div>
    </div>

</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>
</html>
