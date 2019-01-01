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
require_once("../layout/ReceptionistLayout.php");
require_once("../../controller/StockController.php");
require_once("../../controller/CustomerHelpController.php");

?>



<div id="content-wrapper">

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <h3 class="text-dark" align="center">Reports</h3>

            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>

        <!-- Page Content -->
        <div class="row bg-light">

        </div>
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
<script src="../../js/Receptionist.js"></script>
<script src="../../js/CustomerHelp.js"></script>


</body>

</html>