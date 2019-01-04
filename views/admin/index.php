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
require_once("../layout/AdminLayout.php");
require_once("../../controller/AppointmentController.php");

?>



<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <h3 class="text-dark" align="center">Appointment</h3>
            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>

        <!-- Page Content -->
        <div class="row bg-light">

        </div>
        <div class="row mt-3">
            <div class="col-md-5 ml-3 mt-1 border-success" style="border-style: outset;background-color: #99979c">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <div class="form-row text-dark">
                        <div class="form-group col-md-6">
                            <label for="inputDate"><b>Date</b></label>
                            <input type="date" class="form-control mt-1" id="inputDate" name="date">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="employee"><b>Employee</b></label><br>
                            <select id="beautician" name="beautician" class="form-control mt-1"></select>
                        </div>
                        <div class="form-group col-md-2 mt-3">

                            <input type="submit" class="btn btn-primary mt-3" name="View" value="View">
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <div class="row mt-3">
    <div class="col-md-2"></div>
            <div class="col-md-9 ml-3 text-dark">
                <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                    <table class="table table-bordered" style="height:150px;border-style: inset">

                        <caption>List of Appointments</caption>
                        <thead>
                        <tr style="position:sticky;background-color:#00aa88">

                            <th scope="col">No</th>
                            <th scope="col">Customer</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Service</th>
                            <th scope="col">Beautician</th>
                            <th scope="col">Price</th>

                        </tr>
                        </thead>
                        <tbody class="text-primary">
                        <?php
                        if(!empty($_POST["date"]) && isset($_POST["beautician"]))
                        {
                            //echo $_POST["date"]." ".$_POST["employee"];
                            if(($result=getAppointmentEmployee($_POST["date"],$_POST["beautician"]))!=null)
                            {
                                $result->bind_result($id,$name,$date,$time,$service,$beautician,$price);
                                while($result->fetch())
                                {
                                    echo "<tr><th scope='row'>".$id."</th><td>".$name."</td><td>".$date."</td><td>".
                                        $time."</td><td>".$service."</td><td>".$beautician."</td><td>".$price."</td></tr>";
                                }
                            }
                        }


                        ?>

                        </tbody>

                    </table>
                </div>
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
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="../../vendor/jquery/jquery.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="../../js/sb-admin.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Admin.js"></script>


</body>

</html>
