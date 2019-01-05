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

<body id="page-top">
<?php
require_once("../logallow.php");
require_once("../layout/AdminLayout.php");
require_once ("../../controller/AdminController.php");
require_once("../../controller/ReportController.php");
?>



<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <h3 class="text-dark" align="center">Revenue Details</h3>
            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>

        <!-- Page Content -->

        <div class="row mt-3">
            <div class="col-md-6 mt-1 mb-3">
                <!-- Button trigger modal -->
                <form name="revenue" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputFrom">From</label>
                            <input type="date" class="form-control" id="inputFrom" name="dateStart" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputTo">To</label>
                            <input type="date" class="form-control" id="inputTo" name="dateEnd" required>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputButton"></label>
                            <input type="submit" class="mt-2 form-control btn btn-primary" id="inputButton" name="submit1" onclick="get()" required value="View">
                        </div>
                        <script type="text/javascript">
                            function get()
                            {
                                var from = document.getElementById("inputFrom").value;
                                var to = document.getElementById("inputTo").value;
                                console.log(from+" "+to);
                            }
                        </script>
                    </div>
                </form>
            </div>

            <div class="col-md-6 mt-1 mb-3">
                <!-- Button trigger modal -->
                <form name="revenue" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                    <div class="form-row ml-3">
                        <div class="form-group col-md-3">
                            <label for="inputDate">Select the date</label>
                            <input type="date" class="form-control" id="inputDate" name="date" required>
                        </div>

                        <div class="form-group col-md-2">
                            <label for="inputButton"></label>

                            <input type="submit" class="mt-2 form-control btn btn-primary" name="submit2" id="inputButton" required value="View">
                        </div>
                    </div>
                </form>
            </div>

                <!-- Modal -->

            </div>
        </div>

        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-8 text-dark">
                <div class="table-responisve-md" style="height:450px;overflow-y:auto">
                    <?php
                    $priceA = 0;
                    $priceP = 0;
                    $priceS = 0;
                    if(isset($_POST["submit1"]))
                        {
                            if(isset($_POST["dateStart"]) && isset($_POST["dateEnd"]))
                                {
                                    $sdate = $_POST["dateStart"];
                                    $edate = $_POST["dateEnd"];
                                    $resultPurchase = getPurchaseRevenue($sdate,$edate);
                                    $resultAppointment = getAppointmentRevenue($sdate,$edate);
                                    $resultService = getServiceRevenue($sdate,$edate);

                                    $a1 = 0;
                                    if($resultPurchase!=null)
                                    {
                                        echo "<button class='mb-3 btn btn-primary' onclick='RevenueReport()'>Generate Report</button>";
                                        $resultPurchase->bind_result($id, $name, $date, $time, $quantity, $price);
                                        echo "
                                                <table id='product-revenue' class='table table-bordered' style='height:11px;border-style: inset'>

                                                    <caption>Revenue from stock</caption>
                                                    <thead>
                                                    <tr style='position:sticky'>
                            
                                                        <th>#</th>
                            
                                                        <th>Name</th>
                            
                                                        <th>Date</th>
                            
                                                        <th>Time</th>
                                                        <th>Quantity</th>
                                                                                    <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id='serviceList' class='text-primary'>";
                                        while ($resultPurchase->fetch())
                                        {
                                            $a1 = 1;
                                            echo "<tr><td>$id</td><td>$name</td><td>$date</td><td>$time</td><td>$quantity</td><td>$price</td></tr>";
                                            $priceP = $priceP + $price;
                                        }
                                        if ($a1 == 0) {
                                            echo "---";
                                        }


                                        echo "</tbody>
                            
                                                </table>
                                                                        ";
                                    }
                                    if($resultService!=null)
                                    {
                                        $resultService->bind_result($id,$service,$employee,$price,$date,$time);
                                        echo "
                                                <table id='service-revenue' class='table table-bordered' style='height:11px;border-style: inset'>

                                                    <caption>Revenue from Service</caption>
                                                    <thead>
                                                    <tr style='position:sticky'>
                            
                                                        <th>#</th>
                            
                                                        <th>Service</th>
                            
                                                        <th>Employee</th>
                            
                                                        <th>Date</th>
                                                        <th>Time</th>
                                                                                    <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id='serviceList' class='text-primary'>";
                                        while($resultService->fetch())
                                        {
                                            $a1 = 1;
                                            echo "<tr><td>$id</td><td>$service</td><td>$employee</td></td><td>$date</td><td>$time</td><td>$price</td></tr>";
                                            $priceS = $priceS+$price;
                                        }
                                        if($a1==0)
                                        {
                                            echo "---";
                                        }

                                       // echo "<script type='text/javascript'>calculateTotalRevenue('S',$priceS)</script>";


                                        echo"</tbody>
                            
                                                </table>
                                                                        ";
                                    }
                                    if($resultAppointment!=null)
                                    {
                                        $resultAppointment->bind_result($id,$name,$date,$time,$quantity,$price);
                                        echo "
                                                <table id='appointment-revenue' class='table table-bordered' style='height:11px;border-style: inset'>

                                                    <caption>Revenue from Appointments</caption>
                                                    <thead>
                                                    <tr style='position:sticky'>
                            
                                                        <th>#</th>
                            
                                                        <th>Name</th>
                            
                                                        <th>Date</th>
                            
                                                        <th>Time</th>
                                                        <th>Quantity</th>
                                                                                    <th>Price</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id='serviceList' class='text-primary'>";
                                        while($resultAppointment->fetch())
                                        {
                                            $a1 = 1;
                                            echo "<tr><td>$id</td><td>$name</td><td>$date</td><td>$time</td><td>$quantity</td><td>$price</td></tr>";
                                        }
                                        if($a1==0)
                                        {
                                            echo "---";
                                        }




                                        echo"</tbody>
                            
                                                </table>
                                                                        ";
                                    }

                                                            }
                                                    }
                        ?>


                    
                </div>

            </div>

            <div class="col-md-2">
                <dl id="totalRevenue">
                    <dt>Revenue from Stock</dt>
                    <dd id="stockRevenue"><?php echo "Rs.".$priceP; ?></dd>
                    <dt>Revenue from Service</dt>
                    <dd id="serviceRevenue"><?php echo "Rs.".$priceS; ?></dd>
                    <dt>Revenue from Appointments</dt>
                    <dd id="appointmentRevenue"><?php echo "Rs.".$priceA; ?></dd>
                </dl>
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
<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->


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
<script src="../../js/ReportGenerate.js"></script>
<script src="../../js/Admin.js"></script>



</body>

</html>
<?php
if(isset($_POST["submit"]))
{
    $result = AddService();
    if($result)
    {
        echo "<script type='text/javascript'>alert('Record entered successfully');window.location = window.location.href;</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert($result)</script>";
    }
}

if(isset($_POST["update"]))
{
    $result = UpdateService($_POST["editId"]);
    echo $result;
    if($result)
    {
        echo "<script type='text/javascript'>alert('Record updated successfully');window.location.href = window.location.href;</script>";

    }
    else
    {
        echo "<script type='text/javascript'>alert($result)</script>";
    }
}

?>