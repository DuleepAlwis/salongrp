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

<body id="page-top" onload="loadBeautician()">
<?php
require_once("../logallow.php");
require_once("../layout/AdminLayout.php");
require_once ("../../controller/AdminController.php");
?>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <h1 align="center">Beauticians and Services</h1>
            <form name="empservice" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                <label for="employee">Beautician</label><select id="beautician" name="employee"></select>
                <label for="service">Service</label><select id="service" name="service"></select>
                <input type="submit" name="submit" value="Save">
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-7">
            <div class="col-md-11 mt-3 ml-3 text-dark">
                <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                    <table class="table table-bordered" style="height:150px;border-style: inset">

                        <caption>List of Appointments</caption>
                        <thead>
                        <tr style="position:sticky;background-color:#00aa88">

                            <th scope="col">#</th>
                            <th scope="col">Service</th>
                            <th scope="col">Beautician</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">
                        <?php

                        //echo $_POST["date"]." ".$_POST["employee"];
                        if(($result=getServiceEmployee())!=null)
                        {
                            //id,NIC,name,tpno,email,address,joindate,gender,userLevel,description
                            $result->bind_result($service,$beautician);
                            $id = 0;
                            while($result->fetch())
                            {
                                $id = $id+1;
                                echo "<tr id='$id'><th scope='row'>".$id."</th><td>".$service."</td><td>".$beautician."</td><td><button class='btn btn-danger' onclick="."removeEmployeeService('$id')".">"."Remove"."</button></td></tr>";
                            }

                        }




                        ?>

                        </tbody>

                    </table>
                </div>
        </div>
    </div>
</div>
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright © Your Website 2018</span>
            </div>
        </div>
    </footer>

</div>

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
<script src="../../js/admin.js"></script>


</body>

</html>


<?php
if(isset($_POST["submit"]))
{
    //if(!empty($_POST["beautician"]) && !empty($_POST["service"]))

        $result = insertServiceEmployee();
        if ($result) {
            echo "<script type='text/javascript'>
//alert('Record entered successfully');
                    swal({
                    title:'Record entered Successfully',
                    icon:'Success',
                    });
                    //window.location = window.location.href;
                    setTimeout(function(){
                    window.location.href = window.location.href;
                    },1500)
                    </script>";
        } else {
            echo "<script type='text/javascript'>
                //alert($result)
                                swal({
                title:'Something wrong',
                text:'Error',
                icon:'error',
                });
                </script>";
        }

    /*else
    {
        echo "AAAAAAA";
    }*/

}