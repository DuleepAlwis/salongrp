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
<body class="bg-info text-white">
<div class="container-fluid">
    <div class="row heading">
        <div class="col-3"></div>
        <div class="col-5 h1">Salon Sanrooka</div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <a href="ReceptionistHome.php"><span class="homeBtn"></span></a><span style="width:100px;display:inline-block"></span><a href="../../index.php"><span class="logoutBtn"></span></a>
            <div class="table-responsive-md panel">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr><td><a href="ReceptionistAppointment.php">View Appointments</a></td></tr>
                    <tr><td><a href="ReceptionistStock.php">Stock details</a></td></tr>
                    <tr><td><a href="ReceptionistCustomer.php">View Customers</a></td></tr>
                    <tr><td><a href="ReceptionistReport.php">Generate reports</a></td></tr>
                    <tr><td><a href="ReceptionistChat.php">Chat</a></td></tr>
                    <tr><td><a href="ReceptionistPayment.php">Payment</a></td></tr>

                    <tr></tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="col-8">
            <h1 align="center">View Customers</h1>
            <form>
                <div class="row">
                    <div class="col">
                        <label for="fromTxt">From</label>
                        <input type="date" id="fromTxt" class="form-control">
                    </div>
                    <div class="col">
                        <label for="toTxt">To</label>
                        <input type="date" id="toTxt" class="form-control">
                    </div>
                </div>

                <div class="row mt-5">
                    <label for="nAppointment">Number of appointments</label>
                    <input type="number" min="0">
                </div>
                <div class="row mt-5">
                    <div class="col-4"></div>
                    <div class="col-4">
                    <input type="submit" class="mr-5" name="view" value="View"><input type="reset" class="ml-5" name="reset" value="Cancel">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <h3>Type the offer to send</h3>
            <div class="msgSend mb-5">
                <textarea class="msgSend"></textarea>
            </div>
            <button class="btn btn-info mr-5">Send</button><button class="btn btn-info ml-5">Cancel</button>
        </div>
        <div id="display">
            <ul id="wlist"></ul>
        </div>
    </div>
</div>
</body>
</html>