<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body class="customer-background" onload="CallMethods()">
<?php
include "../logallow.php";
require_once("../layout/EmployeeLayout.php");
require_once("../../controller/RatingsFeedbackController.php");
require_once("../../controller/EmployeeController.php");
?>

<div id="content-wrapper">
<div class="container-fluid">
    <div class="col-md-12" style="z-index: -1;">

    <br><ol class="breadcrumb" style="background-color: #dee2e6;" >
        <li class="breadcrumb-item">
            <h2><i class="fa fa-user"></i> My Profile</h2>
        </li>
    </ol>
    </div>

    <section id="profile">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body" style="background-color: #f8f9fa;">
                            <div class="container-fluid">
                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <!-- ******** -->

                                        <!-- ************ -->
                                        <div class="card">
                                            <div class="card-header" style="background-color: #dee2e6;">
                                                <h4><?php echo $_SESSION['name'] ?></h4>
                                            </div>
                                            <div class="card-body" style="background-color: #f8f9fa;" >
                                        <div class="uploadPhoto">
                                            <div class="avatar">
                                                <?php
                                                    $location = "../../".$_SESSION["propic"];
                                                    if(file_exists($location))
                                                    {
                                                        echo "<img src='$location' width='100%' height='100%'>";

                                                    }
                                                    else
                                                    {
                                                        echo "?";
                                                    }
                                                ?>
                                            </div>

                                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data">
                                                <input type="hidden" name="File_size" value="300000000">
                                                <br><input type="file" name="upload" value=""><br>
                                                <br><input class="btn btn-primary" type="submit" name="submitPhoto" value="Upload Image">
                                            </form>

                                        </div>
                                    </div>
                                </div></div>

        
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header" style="background-color: #dee2e6;">
                                                <h4> Profile Info</h4>
                                            </div>
                                            <div class="card-body" style="background-color: #f8f9fa;">
                                        <!-- <u><h3>Profile</h3></u><br> -->
                                        <?php 
                                        echo "Name: " . str_repeat("&nbsp;", 18) . "<b>" . $_SESSION['name'] . "</b>" . "<br><br>"; 
                                        echo "Address: " . str_repeat("&nbsp;", 14) . "<b>" . $_SESSION['address'] . "</b>" . "<br><br>";
                                        echo "NIC: " . str_repeat("&nbsp;", 21) . "<b>" . $_SESSION['nic'] . "</b>" . "<br><br>";
                                        echo "Email: " . str_repeat("&nbsp;", 19) . "<b>" . $_SESSION['email'] . "</b>" . "<br><br>";
                                        echo "Mobile No: " . str_repeat("&nbsp;", 10) . "<b>" . $_SESSION['tpno'] . "</b>" . "<br><br>";
                                        echo "Gender: " . str_repeat("&nbsp;", 15) . "<b>" . $_SESSION['gender'] . "</b>" . "<br><br>";
                                    ?><br><br><br><br><br>
                                    

                                        <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="updateEmployee()">
                                            Update Profile Data
                                        </button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
                                            Change Password
                                        </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Change Profile Information</h5>
                                                    
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <table>
                                                        <h5 id="editId"><?php echo "ID:" . $_SESSION['id']; ?></h5><br>
                                                        
                                                        <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                                                            <b>Name:
                                                            <input type="text" name="editName" id="editName" class="form-control" value="<?php echo $_SESSION['name'] ?>" maxlength="101" required><br>

                                                            Address:
                                                            <input type="text" name="editAddress" id="editAddress" class="form-control" value="<?php echo $_SESSION['address']?>" maxlength="101" required><br>

                                                            NIC:
                                                            <input type="text" name="editNIC" id="editNIC" class="form-control" value="<?php echo $_SESSION['nic'] ?>" maxlength="101" required><br>
                                                            
                                                            Email:
                                                            <input type="email" name="editEmail" id="editEmail" class="form-control" value="<?php echo $_SESSION['email'] ?>" maxlength="101" required><br>
                                                            
                                                            Mobile No:
                                                            <input type="text" class="form-control" name="editContact" id="editMobile" value="<?php echo $_SESSION['tpno'] ?>" required pattern="[0-9]{10}" size="13" title="Enter in the given format"><br>

                                                            Gender:</b>
                                                            <input type="text" name="editGender" id="inputGender" class="form-control" value="<?php echo $_SESSION['gender'] ?>" maxlength="101" required><br>
                                                            
                                                            <div class="row">
                                                                <div class="col-md-10">
                                                                    <input type="submit" name="updateProfile" class="btn btn-primary" value="Save Changes">
                                                                    <input type="reset" class="btn btn-secondary" value="Reset">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Change Password</h5>
                                                    
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <table>
                                                        <h5 id="editId"><?php echo "ID:" . $_SESSION['id']; ?></h5><br>

                                                        <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                                                            <input class="form-control" name="cpassword" type="password" minlength="7" placeholder="Enter Current Password" required><br>

                                                            <input class="form-control" name="password" type="password" minlength="7" placeholder="Enter New Password" required><br>

                                                            <input class="form-control" name="rpassword" type="password" minlength="7" placeholder="Re-Enter New Password" required><br>

                                                            <div class="row">
                                                                <div class="col-md-10"> 
                                                                    <input type="submit" name="updatePassword" class="btn btn-primary" value="Save Changes">

                                                                    <input type="reset" class="btn btn-secondary" value="Reset">
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header" style="background-color: #dee2e6;">
                                            <h5>Ratings & Feedbacks from Customers</h5></div>
                                        <div class="card-body" style="background-color: #f8f9fa;">
                                    <!-- Button trigger modal -->
                                    <div height="700px">
                                        <!-- <center><h5>Ratings & Feedbacks from Customers</h5></center> -->
                                        <?php
                                        $result = getComment($_SESSION["id"]);
                                        $total = 0;
                                        if($result)
                                            {
                                                $result->bind_result($id,$name,$rate,$feedback);
                                                while($result->fetch())
                                                {
                                                    $total = $total + $rate;
                                                    $rate = $rate."%";
                                                    echo "<div style='border-radius: 7px;border-style: inset'>
                                                        <div class='mt-3 progress'><div class='progress-bar bg-danger' role='progressbar' aria-valuenow='$rate' aria-valuemin='0' aria-valuemax='100' "."style="."width:$rate".">$rate</div></div>
                                                            <p>&nbsp;<b>$feedback</b></p></div>";
                                                }
                                                if($total>100)
                                                {
                                                    $total = ($total/100)."%";
                                                }
                                                else
                                                {
                                                    $total = ($total)."%";

                                                }

                                                echo "<br><div><b>Overall Rate: $total</b></div>";
                                            }
                                            ?>
                                    </div>
                                </div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br>  
    <footer class="sticky-footer">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <br><span>Copyright © Your Website 2018</span><br><br>
            </div>
        </div>
    </footer>

</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Receptionist.js"></script>

</html>
<?php
if(isset($_POST["updateProfile"]))
{
    $result = updateEmployee($_SESSION["id"]);

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

if(isset($_POST["updatePassword"]))
{
    $result = ChangePassword($_SESSION["id"]);

    if($result)
    {
        echo "<script type='text/javascript'>
                //alert('Record updated successfully');
                swal({
                    title:'Password Updated Successfully',
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

if(isset($_POST["submitPhoto"]))
{
    $result = uploadPhoto($_SESSION["id"]);

    if($result)
    {
        echo "<script type='text/javascript'>
                //alert('Record updated successfully');
                swal({
                    title:'Photo Uploaded Successfully',
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
                    title:$result,
                    icon:'error',
                    });
                </script>";
    }

}
?>