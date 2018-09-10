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
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="bg-info text-white">
<div class="container-fluid">
    <div class="row heading">
        <div class="col-3"></div>
        <div class="col-5 h1">Salon Sanrooka</div>
    </div>
    <div class="row mt-3">
        <div class="col-4">
            <a href="ReceptionistHome.php"><span class="homeBtn"></span></a><span style="width:100px;display:inline-block"></span><a href="../index.php"><span class="logoutBtn"></span></a>
            <h1>Appointments</h1>
            <div class="box1 mb-5" style="background-color: transparent;border-style: groove">
                <ul id="queue"></ul>
            </div>
            <div class="box1"></div>
        </div>
        <div class="col-4">
            <h1 class="mb-5" align="center">Payment processing</h1>
            <form>
                <div class="form-group">
                    Service payment
                    <input type="checkbox" class="mr-3" id="servicepayment">
                    Product payment
                    <input type="checkbox" class="ml-3" id="productpayment">
                </div>
                <div class="form-group">
                    <label for="service" class="mr-3">Service</label>
                    <select>
                        <option>a</option><option>b</option><option>c</option>
                    </select>
                    <button class="btn-green ml-5">Add</button>
                </div>
                <div class="form-group mr-3">
                    <label for="products">Products</label>
                    <select>
                        <option>a</option><option>b</option><option>c</option>
                    </select>
                    <button class="btn-green ml-5">Add</button>
                </div>
                <div class="form-group mr-3">
                    <label for="txtTotal">Total Amount</label>
                    <input type="text" class="ml-3" id="txtTotal" value="0"><br><br>
                    <label for="txtPaid">Paid Amount</label>
                    <input type="text" class="ml-4" id="txtPaid" value="0"><br><br>
                    <button class="btn-secondary" id="btnBalance">Balance</button>
                    <input type="text" class="ml-5" id="txtBalance" value="0"><br><br>
                    <button class="btn-green ml-5 mr-5">Add</button><button class="btn-green ml-5 mr-5">Cancel</button>
                </div>
            </form>
        </div>
        <div class="col-1"></div>
        <div class="col-3 mt-5">

            <div style="border-style: outset;width:350px;height:150px">
                <h1 align="center">Invoice</h1>
                <ul id="items"></ul>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        aaaaaaaaaaa
    </div>

</body>
</html>