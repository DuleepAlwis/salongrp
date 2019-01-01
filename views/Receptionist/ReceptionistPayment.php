<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <title>Salon Sanrooka</title>
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Bootstrap core CSS-->
    <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">

</head>

<body id="page-top" onload="loadBeautician()">
<?php
require_once("../logallow.php");
require_once("../layout/ReceptionistLayout.php");
require_once("../../controller/PaymentController.php");

?>



<div id="content-wrapper">

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
            <div class="col-md-0"></div>
            <div class="col-md-5">
                <h3>Services</h3>

                <div class="payment-list">
                    <table class="table table-bordered table-hover">

                        <thead class="sticky-top">
                        <tr>


                            <th scope="col">Name</th>
                            <th scope="col">Price(Rs.)</th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                        </thead>
                        <tbody id="service-list" class="text-dark">
                        <?php
                        if(($result=getServices())!=null)
                        {
                            $result->bind_result($id,$serviceName,$price,$duration);
                            $i=0;
                            while($result->fetch())
                            {

                                $i = 1;
                                echo "<tr><th scope='row' id='Service$id'>".$serviceName."</th><td>".$price."</td><td>"."<select id='employee$id' class='form-control'"."></select>"."</td><td>".
                                    "<input type='button' class='bg-faded border-secondary' onClick="."ServiceInvoice('$id','$price')"." value='Add' style='width:67px;border-radius: 7px'></td></tr>";

                                //echo "<script type='text/javascript'>serviceBeautician()</script>";
                            }
                            if($i==0)
                            {
                                echo "<tr class='breadcrumb'>
                                    
                                    <td><h3 class='text-dark' align='center'></h3></td>
                                    </tr>";
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
                            $i = 0;
                            $result->bind_result($id,$productName,$quantity,$brand,$price,$preOrderl);
                            while($result->fetch())
                            {
                                $i = 1;
                                echo "<tr><th scope='row' id='Product$id'>".$productName."</th><td>".$price."</td><td>".
                                    "<input type='button' class='bg-faded border-secondary' style='border-radius: 7px' onClick='ProductInvoice($id,$price)' value='Add'></td></tr>";
                            }
                            if($i==0)
                            {
                                echo " <tr class='breadcrumb'>
                                    
                                    <td><h3 class='text-dark' align='center'></h3></td>
                                    </tr>";
                            }
                        }



                        ?>

                        </tbody>

                    </table>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="table-responisve-md bg-inherit text-black" style="height:500px;overflow-y:auto">
                    <form name="invoice" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                        <table id="invoice" class="table" style="height:150px">

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

        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright © Your Website 2018</span>
                </div>
            </div>
        </footer>

    </div>
</div>
<!-- /.content-wrapper -->

<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>



<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../jsPDF-1.3.2/dist/jspdf.min.js"></script>
<script src="../../jsPDF-1.3.2/dist/jspdf.plugin.autotable.min.js"></script>
<script src="../../js/Receptionist.js"></script>
<script src="../../js/CustomerHelp.js"></script>

<!-->



</body>

</html>