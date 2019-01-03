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
<div class="container-fluid">
    <div class="row mt-5">
        <div class="col-md-4">

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

                        //echo $_SESSION["propic"];
                    ?>
                </div>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" enctype="multipart/form-data">
                    <input type="hidden" name="File_size" value="300000000">
                    <input type="file" name="upload" value="">
                    <input class="btn btn-primary" type="submit" name="submitPhoto" value="Upload">
                </form>

            </div>
        </div>
        <div class="col-md-5">
            <h3 style="margin-top: 17px">Profile</h3>
            <table class="profileData">
                <tbody id="profileData">
                <tr><td>NIC</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['nic']; ?></b></td></tr>
                <tr><td>Name</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['name']; ?></b></td></tr>
                <tr><td>Email</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['email']; ?></b></td></tr>
                <tr><td>Mobile No</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['tpno']; ?></b></td></tr>
                <tr><td>Address</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['address']; ?></b></td></tr>
                <tr><td>Gender</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['gender']; ?></b></td></tr>
                </tbody>
            </table>
            <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="updateEmployee()">
                Update Profile Data
            </button>
            <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">
                Change Password
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Change profile information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table>
                                <h5 id="editId"><?php echo $_SESSION['id']; ?></h5>
                                <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                    <tr><td><label for="inputName">NIC</label></td><td><input type="text" name="editNIC" id="editNIC" class="ml-3" placeholder="" maxlength="101" required></td></tr>
                                    <tr><td><label for="inputName">Name</label></td><td><input type="text" name="editName" id="editName" class="ml-3" placeholder="" maxlength="101" required></td></tr>
                                    <tr><td><label for="inputEmail">Email</label></td><td><input type="email" name="editEmail" id="editEmail" class="ml-3" placeholder="" maxlength="101" required></td></tr>
                                    <tr><td><label for="inputAddress">Address</label></td><td><input type="text" name="editAddress" id="editAddress" class="ml-3" placeholder="" maxlength="101" required></td></tr>
                                    <tr><td><label for="inputMobile">Mobile</label></td><td><input type="text" class="form-control" name="editContact" id="editMobile" placeholder="0715659741" required pattern="[0-9]{10}" size="13" style="width: 50%" title="Enter in the given format"></td></tr>
                                    <tr><td><label for="inputGender">Gender</label></td><td><select id="inputGender" name="editGender" class="ml-3"><option value="Male" required>Male</option><option value="Female">Female</option></select></td></tr>
                                    <tr><td><input type="submit" name="updateProfile" class="form-control" value="Save"></td><td><input type="reset" class="form-control" value="Reset"></td></tr>
                                </form>
                            </table>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>-->

                        </div>


                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Change password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table>
                                <h5 id="editId"><?php echo $_SESSION['id']; ?></h5>
                                <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                    <tr><td><input name="password" type="password" minlength="7" required></td><td>Current Password: <?php echo $_SESSION["passw"];?></td></tr>
                                    <tr><td><input type="submit" name="updatePassword" class="form-control" value="Save"></td><td><input type="reset" class="form-control" value="Reset"></td></tr>
                                </form>
                            </table>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>-->

                        </div>


                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-3">
            <!-- Button trigger modal -->
            <div height="700px">
                <h5>Ratings & Feedbacks from Customers</h5>
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
<div class='mt-3 progress'><div class='progress-bar' role='progressbar' aria-valuenow='$rate' aria-valuemin='0' aria-valuemax='100' "."style="."width:$rate"."></div></div>
                        <p><b>$feedback</b></p>
</div>";
                        }
                        if($total>100)
                        {
                            $total = ($total/100)."%";
                        }
                        else
                        {
                            $total = ($total)."%";

                        }

                        echo "<div><b>$total</b></div>";
                    }
                    ?>
            </div>

        </div>

    </div>

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