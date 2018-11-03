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
<body class="receptionist-background" onload="loadBeautician()">
<?php
include "../layout/ReceptionistLayout.php";
include "../../controller/PaymentController.php";
?>
<div class="container-fluid text-dark">
    <h1 class="text-dark" align="center">Payment</h1>

    <div class="row">
        <div class="col-md-3 mt-3 border border-light" style="height: 50%;overflow-y: auto">
            <h3 class="font-weight-light" style="border-radius: 7px; border-style: wave">Appointments</h3>
            <div class="payment-list">
            <ul id="appointments">

                <?php
                    $_POST["date"] = date("y/m/d");

                if(isset($_POST["date"]))
                {
                    if(($result=getAppointments($_POST["date"])))
                    {
                        $result->bind_result($id,$cusName,$price,$service);
                        while($result->fetch())
                        {
                            echo "<li><div class='alert alert-primary border  border-info'>"."Appointment :".$id." Customer : ".$cusName." Price : ".$price."<button class='btn btn-info' onclick='AppointmentInvoice($id,$service,$price)'>Add</button></div>";
                        }
                    }
                }


                ?>
            </ul>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">

                <div class="payment-list">
                <table class="table table-bordered table-hover" style="height:150px;overflow-y: auto">

                    <h3>Services</h3>
                    <thead>
                    <tr>


                        <th scope="col">Name</th>
                        <th scope="col">Price(Rs.)</th>
                        <th scope="col"></th>

                    </tr>
                    </thead>
                    <tbody class="text-dark">
                    <?php
                    if(($result=getServices())!=null)
                    {


                        $result->bind_result($id,$serviceName,$price,$duration);
                        while($result->fetch())
                        {
                            echo "<tr><th scope='row' id='Service$id'>".$serviceName."</th><td>".$price."</td><td>".
                                "<input type='button' class='bg-transparent' onClick='ServiceInvoice($id,$serviceName,$price)' value='Add' style='width:67px;border-radius: 3px'></td></tr>";
                        }
                    }


                    ?>

                    </tbody>

                </table>
                </div>

        </div>
        <div class="col-md-4">
            <h3>Products</h3>
            <div class="payment-list">


                <table class="table table-bordered table-hover">

                <thead class="sticky-top">
                <tr>


                    <th scope="col">Name</th>
                    <th scope="col">Price(Rs.)</th>
                    <th scope="col"></th>

                </tr>
                </thead class="sticky-top">
                <tbody class="text-dark">
                <?php
                if(($result=getStock())!=null)
                {
                    $result->bind_result($id,$productName,$quantity,$brand,$price,$preOrderl);
                    while($result->fetch())
                    {
                        echo "<tr style='background-color:#b3b3b3'><th scope='row' id='Product$id'>".$productName."</th><td>".$price."</td><td>".
                            "<input type='button' class='bg-faded border-secondary' style='border-radius: 7px'  onClick='ProductInvoice($id,$price)' value='Add' style='width:67px;border-radius: 3px'></td></tr>";
                    }
                }


                ?>

                </tbody>

            </table>
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-7">
    <div class="table-responisve-md bg-inherit text-black" style="height:500px;overflow-y:auto">
        <form name="invoice" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <table class="table" style="height:150px">

            <h3>Invoice</h3>
            <thead>
            <tr style="position:sticky">

                <th scope="col">Appointment number</th>
                <th scope="col">Service name</th>
                <th scope="col">Contributed beautician</th>
                <th scope="col">Product name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody id="invoiceItems" class="text-primary">

            </tbody>

        </table>
        </form>
    </div>
        </div>

        <div class="col-md-3 mt-5">
            <table>
                <tr>
                    <td><button class="btn btn-info" onclick="calculateTotal()">Total(Rs.)</button></td><td><input type="text" id="total"></td>
                </tr>
                <tr>
                    <td>Discount in precentage</td><td><input type="text" id="discount"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-info" onclick="netValue()">Net Value(Rs.)</button></td><td><input type="text" id="netValue"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-info" onclick="SavePayment()">Save payment details</button></td><td><button class="btn btn-info ml-3" onclick="clearAll()">Clear All</button></td>
                </tr>
            </table>



        </div>
        <div class="col-md-1"></div>
    </div>
</div>

<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>
</body>
</html>
