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
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div class="container-fluid">
    <div class="row heading">
        <div class="col-3"></div>
        <div class="col-5 h1">Salon Sanrooka</div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
        <a href="ReceptionistHome.php"><span class="homeBtn"></span></a><span style="width:100px;display:inline-block"></span><a href="../index.php"><span class="logoutBtn"></span></a>

            <table class="table table-bordered">
                <thead class="thead-dark">
                

                <tr><td></td></tr>
                    <tr><td><a href="ReceptionistStock.php">Stock details</a></td></tr>
                    <tr><td><a href="ReceptionistCustomer.php">View Customers</a></td></tr>
                    <tr><td><a href="ReceptionistReport.php">Generate reports</a></td></tr>
                    <tr><td><a href="ReceptionistChat.php">Chat</a></td></tr>
                    <tr><td><a href="ReceptionistPayment.php">Payment</a></td></tr>
                <tr></tr>
                </thead>
            </table>
        </div>
        <div class="col-8">
            <h1 style="display:inline-block" align="center">View Appointments</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
        <form name="appointment" method="get" action=""></form>
                <div style="font-size: 17px">Select the date <input type="date"> <button class="btn-primary">Check</button></div>
        </form>
        </div>
        <div class="col-4">
            <div class="newsForm">
                <ul id="news">
                    <li>aaaaaaaaaaabbccccc</li>
                </ul>
            </div>
        </div>
    </div>
</div>

</body>
</html>
