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
                <h3 class="text-dark" align="center">Employee Details</h3>
            </li>
            <!--<li class="breadcrumb-item active">Blank Page</li>-->
        </ol>

        <!-- Page Content -->

        <div class="row mt-3">
            <div class="col-md-12 mt-3">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary border" data-toggle="modal" data-target="#exampleModal">
                    Add new
                </button>
                <!-- Button trigger modal -->
                

                <!-- Modal -->

            </div>

    <!-- Modal -->
            <!-- View Receptionist -->
            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Receptionists</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">





                        </div>
                        <div class="modal-footer">

                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Appoint receptionist-->
            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Appoint receptionist</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                                <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mobile</label>
                                        <input type="text" name="mobile" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter mobile number" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" max="7" required>
                                    </div>



                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" name="AddReceptionist" value="Save"> <input type="reset" class="btn btn-secondary" data-dismiss="modal" value="Cancel">

                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Add new Employee -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">New Employee details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form name="registeremp" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">

                                    <div class="form-row">
                                        NIC:
                                        <input type="text" class="form-control" id="inputnic" name="NIC" placeholder="nic" required pattern="[0-9]{9}[Vv||xX]">

                                        Name:
                                        <input type="text" class="form-control" id="inputName" name="Name" placeholder="Name" required>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="abc@gmail.com" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" name="Password" placeholder="Password" minlength="7" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="inputAddress" name="Address" placeholder="1234 Main St" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMobile">Mobile No</label>
                                        <input type="text" class="form-control" id="inputMobile" name="Contact" placeholder="01123456789" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputJdate">Joined date</label>
                                            <input type="date" class="form-control" name="jdate" id="inputJdate">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Gender</label>
                                            <select id="inputGender" name="gender" class="form-control">
                                                <option selected value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputState">User level</label>
                                            <select id="inputGender" name="ulevel" class="form-control">
                                                <option selected value="A">Admin</option>
                                                <option value="R">Receptionist</option>
                                                <option value="B">Beautician</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            Description:
                                            <textarea name="description"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="submit"  class="btn btn-primary" value="Save">

                                        <input type="reset" name="reset" class="btn btn-secondary" data-dismiss="modal">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-md-0"></div>

            <div class="col-md-12 mt-3 ml-1 text-dark">
                <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                    <table class="table table-bordered" style="height:150px;border-style: inset">

                        <caption>List of Appointments</caption>
                        <thead>
                        <tr style="position:sticky;background-color:#00aa88">

                            <th scope="col">#</th>
                            <th scope="col">NIC</th>
                            <th scope="col">Name</th>
                            <th scope="col">Mobile number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Address</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Joined date</th>
                            <th scope="col">Description</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">
                        <?php

                            //echo $_POST["date"]." ".$_POST["employee"];
                            if(($result=getEmployees("B"))!=null)
                            {
                                //id,NIC,name,tpno,email,address,joindate,gender,userLevel,description
                                $result->bind_result($id,$NIC,$name,$tpno,$email,$address,$gender,$joindate,$description,$userLevel);
                                while($result->fetch())
                                {
                                    echo "<tr id='$id'><th scope='row'>".$id."</th><td>".$NIC."</td><td>".$name."</td><td>".$tpno."</td><td>".
                                        $email."</td><td>".$address."</td><td>".$gender."</td><td>".$joindate."</td><td>".$description."</td><td><button class='btn btn-info' data-toggle='modal' data-target='#changeEmployeedata' onclick="."updateEmployee('$id')>".'Update'."</button></td><td><button class='btn btn-danger' onclick="."removeEmployee('$id')".">"."Remove"."</button></td></tr>";
                                }

                            }




                        ?>

                        </tbody>

                    </table>
                </div>
                <div class="modal fade" id="changeEmployeedata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Update Employee details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form name="registeremp" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">

                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="editId">Employee Code:</label>
                                            <input type="number" class="form-control" id="editId" name="editId" required>
                                        </div>
                                        <div class="col-md-9"></div>
                                        NIC:
                                        <input type="text" class="form-control" id="editNIC" name="editNIC" required pattern="[0-9]{9}[Vv||xX]">

                                        Name:
                                        <input type="text" class="form-control" id="editName" name="editName" required>
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Email</label>
                                            <input type="email" class="form-control" id="editEmail" name="editEmail" required pattern="[a-zA-Z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                        </div>
                                        <!--<div class="form-group col-md-6">
                                            <label for="inputPassword4">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4" name="editPassword" placeholder="Password" minlength="7" required>
                                        </div>-->
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="editAddress" name="editAddress" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMobile">Mobile No</label>
                                        <input type="text" class="form-control" id="editMobile" name="editContact" pattern="[0-9]{10}" required>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputJdate">Joined date</label>
                                            <input type="date" class="form-control" name="editJdate" id="editJdate">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="editGender">Gender</label>
                                            <select id="editGender" name="editGender" class="form-control">
                                                <option selected>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="editUlevel">User level</label>
                                            <select id="editUlevel" name="editUlevel" class="form-control">
                                                <option selected>Admin</option>
                                                <option>Receptionist</option>
                                                <option>Beautician</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            Description:
                                            <textarea id="editDescription" name="editDescription"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="submit" name="update"  class="btn btn-primary" value="Save">

                                        <input type="reset" name="reset" class="btn btn-secondary" data-dismiss="modal">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-0"></div>
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
<?php
if(isset($_POST["submit"]))
{
    $result = AddEmployee();
    echo $result;
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
    $result = UpdateEmployee($_POST["editId"]);
    echo $result;
    if($result)
    {
        echo "<script type='text/javascript'>
                //alert('Record updated successfully');
                swal({
                    title:'Record Updated Successfully',
                    icon:'success',
                    });
                setTimeout(function(){
                    window.location.href = window.location.href;
                    },1500)
                    </script>";
    }
    else
    {
        echo "<script type='text/javascript'>
                //alert($result)
                swal({
                    title:'Something wrong',
                    icon:'error',
                    });
                </script>";
    }
}
?>