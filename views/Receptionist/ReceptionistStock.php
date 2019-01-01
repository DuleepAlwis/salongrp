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
require_once("../../controller/StockController.php");
require_once("../../controller/CustomerHelpController.php");

?>



<div id="content-wrapper">

<div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <h3 class="text-dark" align="center">Stock</h3>

            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>

        <!-- Page Content -->
        <div class="row bg-light">

        </div>
        <div class="row mt-3">

            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="table-responisve-md text-black" style="height:500px;overflow-y:auto">
                    <table id="stock-details" class="table table-bordered table-hover table-dark" style="height:150px">

                        <caption>List of Items in the stock</caption>
                        <thead>
                        <tr style="position:sticky;background-color: #00aa88">


                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Current Quantity</th>
                            <th scope="col">Price(1 unit)Rs.</th>
                            <th scope="col">PreOrderLevel</th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">
                        <?php
                        if(($result=getProducts())!=null)
                        {


                            $result->bind_result($id,$name,$quantity,$brand,$price,$preOrderl);
                            while($result->fetch())
                            {
                                echo "<tr class='text-white'><th scope='row'>".$name."</th><td>".$brand."</td><td>".
                                    "<input type='number' id='$id' class='bg-transparent text-white' value='$quantity' style='width:67px'><input type='button' class='bg-transparent text-white' onclick='updateItem($id)' value='Update' style='width:67px;border-radius: 3px'></td><td>".$price."</td><td>".$preOrderl."</td></tr>";
                            }
                        }


                        ?>

                        </tbody>

                    </table>
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
