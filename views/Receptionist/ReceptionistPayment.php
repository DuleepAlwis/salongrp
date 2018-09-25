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
include "../../controller/PaymentController.php";
?>
<div class="container-fluid text-dark">
    <h1 class="text-dark" align="center">Payment</h1>

    <div class="row">
        <div class="col-md-3 mt-3 border border-light" style="height: 50%;overflow-y: auto">
            <h3 class="font-weight-light">Appointments</h3>
            <ul id="appointments">

                <?php
                    $_POST["date"] = date("d/m/y");

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
        <div class="col-md-1"></div>
        <div class="col-md-4">


                <table class="table table-bordered table-hover" style="height:150px;overflow-y: auto">

                    <h3>Services</h3>
                    <thead>
                    <tr style="position:sticky;background-color: #01549b">


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
                            echo "<tr><th scope='row'>".$serviceName."</th><td>".$price."</td><td>".
                                "<input type='button' class='bg-transparent' onclick='ServiceInvoice($id,$serviceName,$price)' value='Add' style='width:67px;border-radius: 3px'></td></tr>";
                        }
                    }


                    ?>

                    </tbody>

                </table>

        </div>
        <div class="col-md-4">
            <table class="table table-bordered table-hover" style="height:150px;overflow-y: auto">

                <h3>Products</h3>
                <thead>
                <tr style="position:sticky;background-color: #01549b">


                    <th scope="col">Name</th>
                    <th scope="col">Price(Rs.)</th>
                    <th scope="col"></th>

                </tr>
                </thead>
                <tbody class="text-dark">
                <?php
                if(($result=getStock())!=null)
                {



                    $result->bind_result($id,$productName,$quantity,$brand,$price,$preOrderl);
                    while($result->fetch())
                    {
                        echo "<tr><th scope='row'>".$productName."</th><td>".$price."</td><td>".
                            "<input type='button' class='bg-transparent' onclick='ProductInvoice($id,$productName,$price)' value='Add' style='width:67px;border-radius: 3px'></td></tr>";
                    }
                }


                ?>

                </tbody>

            </table>
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
    </div>
        </div>
    </div>
</div>

<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>
</body>
</html>
