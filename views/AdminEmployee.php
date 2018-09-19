<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="">

<?php
include "layout/AdminLayout.php";
include "../controller/EmployeeController.php";
if(isset($_POST["submit"]))
{

    if(AddEmployee())
    {
        echo "<script type='text/javascript'>alert('Added successfully')</script>";
    }
    else
    {
        echo "<script type='text/javascript'>alert('Something wrong')</script>";

    }
}
?>
<header id="main-header" class="py-2 bg-warning text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Employee</h1>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2"><a href="AdminDashboard.php"><img src="../img/icons/house.png" style="width:50px"></img></a></div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add new</button></div>
            <div class="col-md-6 ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
              <button class="btn btn-warning">Search</button>
            </span>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-primary" id="exampleModalLabel">Add Employee</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-primary">
                <form name="registeremp" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>>

                    <div class="form-row">
                        NIC:
                        <input type="text" class="form-control" id="inputnic" name="NIC" placeholder="nic" required>

                        Name:
                        <input type="text" class="form-control" id="inputName" name="Name" placeholder="Name" required>
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="abc@gmail.com" required>
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
                                <option selected>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">User level</label>
                            <select id="inputGender" name="ulevel" class="form-control">
                                <option selected>Admin</option>
                                <option>Receptionist</option>
                                <option>Beautician</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="reset" name="reset" class="btn btn-secondary" data-dismiss="modal"></input>
                        <button type="submit" name="submit"  class="btn btn-primary">Save</button>
                    </div>
                </form>.
            </div>

        </div>
    </div>
</div>
<!-- USERS -->

<div class="container">

    <div class="row mt-3">


        <div class="col-md-12">
            <h1 align="center">Employees</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                    <caption>Employee List</caption>
                    <thead>
                    <tr style="position:sticky;background-color: #01549b">
                        <th>NIC</th>
                        <th>Name</th>
                        <th>TPNO</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Join-Date</th>
                        <th>Gender</th>
                        <th>User Level</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="text-primary">

                        <?php

                        if(($result=getAll())!=null)
                        {

                            $result->bind_result($id,$NIC,$name,$tpno,$email,$address,$joindate,$gender,$ulevel);
                            while($result->fetch())
                            {
                                echo "<tr><td scope='row'>".$NIC."</td><td>".$name."</td><td>".$tpno."</td><td>".$email."</td><td>".
                                $address."</td><td>".$joindate."</td><td>".$gender."</td><td>".$ulevel."</td><td><button class='btn btn-info'>".'View'."</button></td><td><button class='btn btn-danger'>".'Remove'."</button></td></tr>";
                            }

                        }
                        ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>



<script src="../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>