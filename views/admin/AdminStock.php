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


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
?>



<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <h3 class="text-dark" align="center">Product details</h3>
            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>

        <!-- Page Content -->

        <div class="row mt-3">
            <div class="col-md-3 ml-3 mt-1 mb-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary border" data-toggle="modal" data-target="#exampleModal">
                    Add new Product
                </button>

            </div>
            <div class="col-md-3 ml-3 mt-1 mb-3">
                <button class="ml-3 btn btn-primary" onclick="stockReport()">Generate Report</button>

            </div>
        </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New Product details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form name="registerprtoduct" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                                    <div class="form-row">
                                        Name:
                                        <input type="text" class="form-control" id="inputName" name="Name" placeholder="Name" required>
                                        <div class="form-group col-md-6">
                                            <label for="inputQuantity">Quantity</label>
                                            <input type="text" class="form-control" id="inputQuantity" name="Quantity" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputpre">PreOrder Level</label>
                                            <input type="text" class="form-control" id="inputpre" name="preOrderl" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputbrand">Brand</label>
                                            <input type="text" class="form-control" id="inputbrand" name="brand" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputprice">Price</label>
                                            <input type="text" class="form-control" id="inputprice" name="price" placeholder="" required>
                                        </div>

                                    </div>




                                    <div class="modal-footer">
                                        <input type="reset" name="reset" class="btn btn-secondary" data-dismiss="modal" value="Cancel">
                                        <input type="submit" name="submit"  class="btn btn-primary" value="Save">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            <div class="row">

            <div class="col-md-2"></div>
            <div class="col-md-9 ml-1 text-dark">
                <div class="table-responisve-md" style="height:450px;overflow-y:auto">
                    <table id="stock-details" class="table table-bordered" style="height:130px;border-style: inset">

                        <caption>List of Stock items</caption>
                        <thead>
                        <tr style="position:sticky;background-color:#00aa88">

                            <th>Name</th>

                            <th>Quantity</th>

                            <th>Brand</th>
                            <th>Price(in Rs. per unit)</th>
                            <th>PreOrder Level</th>

                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">
                        <?php

                        //echo $_POST["date"]." ".$_POST["employee"];


                            if(($result=getProducts())!=null)
                            {
                                $result->bind_result($id,$name,$quantity,$brand,$price,$preOrderl);
                                while($result->fetch())
                                {
                                    echo "<tr id='$id'><td scope='row'>".$name."</td><td>".$quantity."</td><td>".$brand."</td><td>".$price."</td><td>".
                                        $preOrderl."</td><td><button class='btn btn-info' data-toggle='modal' data-target='#changeProductdata' onclick="."updateStock('$id')".">".'Update'."</button></td><td><button class='btn btn-danger' onclick="."removeProduct('$id')".">".'Remove'."</button></td></tr>";
                                }

                            }
                        ?>




                        </tbody>

                    </table>
                </div>
                <div class="modal fade" id="changeProductdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Product details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form name="registerprtoduct" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="editId">Product Code:</label>
                                            <input type="number" class="form-control" id="editId" name="editId" required>
                                        </div>
                                        <div class="col-md-9"></div>
                                        Name:
                                        <input type="text" class="form-control" id="editName" name="editName" required>
                                        <div class="form-group col-md-6">
                                            <label for="inputQuantity">Quantity</label>
                                            <input type="text" class="form-control" id="editQuantity" name="editQuantity" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputpre">PreOrder Level</label>
                                            <input type="text" class="form-control" id="editPre" name="editPreOrderl" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputbrand">Brand</label>
                                            <input type="text" class="form-control" id="editBrand" name="editBrand" placeholder="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputprice">Price</label>
                                            <input type="text" class="form-control" id="editPrice" name="editPrice" placeholder="" required>
                                        </div>

                                    </div>




                                    <div class="modal-footer">
                                        <input type="reset" name="reset" class="btn btn-secondary" data-dismiss="modal">
                                        <button type="submit" name="update"  class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-1">
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
    $result = AddItem();
    if($result)
    {
        echo $result;
        echo "<script type='text/javascript'>
//alert('Record entered successfully');
                    swal({
                    title:'Record entered Successfully',
                    icon:'success',
                    });
                    //window.location = window.location.href;
                    setTimeout(function(){
                    window.location.href = window.location.href;
                    },1500)
                    </script>";
    }
    else
    {
        echo $result;
        echo "<script type='text/javascript'>
                //alert($result)
                                swal({
                title:'Something wrong',
                text:$result,
                icon:'error',
                });
                </script>";
    }
}

if(isset($_POST["update"]))
{
    $result = UpdateItemAll();
    echo $result;
    if($result)
    {
        echo $result;
        echo "<script type='text/javascript'>
//alert('Record entered successfully');
                    swal({
                    title:'Record Updated Successfully',
                    icon:'success',
                    });
                    //window.location = window.location.href;
                    setTimeout(function(){
                    window.location.href = window.location.href;
                    },1500)
                    </script>";
    }
    else
    {
        echo $result;
        echo "<script type='text/javascript'>
                //alert($result)
                                swal({
                title:'Something wrong',
                text:$result,
                icon:'error',
                });
                </script>";
    }
}