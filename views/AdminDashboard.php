<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">

</head>
<body class="bg-light">
<?php include "layout/AdminLayout.php"; ?>

        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="card bg-success menuCard" style="width: 50%;">
                        <img class="card-img-top" src="../img/icons/employee.png" style="width: 50%" alt="Card image cap">
                        <div class="card-body bg-warning">
                            <a href="AdminEmployee.php" class="btn btn-primary">Employee</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success menuCard" style="width: 50%;">
                        <img class="card-img-top" src="../img/icons/salesman.png" style="width: 50%" alt="Card image cap">
                        <div class="card-body bg-warning">
                            <a href="AdminCustomer.php" class="btn btn-primary">Customer</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success menuCard" style="width: 50%;">
                        <img class="card-img-top" src="../img/icons/warehouse.png" style="width: 55%" alt="Card image cap">
                        <div class="card-body bg-warning">
                            <a href="AdminStock.php" class="btn btn-primary">Stock</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="card bg-success menuCard" style="width: 50%;">
                        <img class="card-img-top" src="../img/icons/makeup.png" style="width: 55%" alt="Card image cap">
                        <div class="card-body bg-warning">
                            <a href="#" class="btn btn-primary">Service</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success menuCard" style="width: 50%;">
                        <img class="card-img-top" src="../img/icons/payment.png" style="width: 55%" alt="Card image cap">
                        <div class="card-body bg-warning">
                            <a href="AdminRevenue.php" class="btn btn-primary">Revenue</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-success menuCard" style="width: 50%;">
                        <img class="card-img-top" src="../img/icons/report1.png" style="width: 55%" alt="Card image cap">
                        <div class="card-body bg-warning">
                            <a href="AdminReport.php" class="btn btn-primary">S & R Reports</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        <script src="../js/vendor/jquery-3.2.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>
</body>
</html>
