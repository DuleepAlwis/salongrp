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
require_once("../layout/CustomerLayout.php");
require_once("../../controller/CustomerController.php");
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
                            <div class="container">
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header" style="background-color: #dee2e6;">
                                                <h4>Profile Info</h4>
                                            </div>
                                            <div class="card-body" style="background-color: #f8f9fa;" >
                                            
                                                <div class="col-md-12">
                                                <?php 
                                        echo "Name: " . str_repeat("&nbsp;", 25) . "<b>" . $_SESSION['name'] . "</b>" . "<br><br>"; 
                                        echo "Address: " . str_repeat("&nbsp;", 22) . "<b>" . $_SESSION['address'] . "</b>" . "<br><br>";
                                        echo "Email: " . str_repeat("&nbsp;", 26.5) . "<b>" . $_SESSION['email'] . "</b>" . "<br><br>";
                                        echo "Mobile No: " . str_repeat("&nbsp;", 17.5) . "<b>" . $_SESSION['tpno'] . "</b>" . "<br><br>";
                                        echo "City: " . str_repeat("&nbsp;", 28) . "<b>" . $_SESSION['city'] . "</b>" . "<br><br>";
                                        echo "District: " . str_repeat("&nbsp;", 23) . "<b>" . $_SESSION['district'] . "</b>" . "<br><br>";
                                        echo "Gender: " . str_repeat("&nbsp;", 22.5) . "<b>" . $_SESSION['gender'] . "</b>" . "<br><br>";
                                    ?>
            
                                                <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="updateCustomer()">Update Profile Data</button>
                                                <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter1">Change Password</button>

        <!-- Profile data update -->
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
                            <h5 id="editId"><?php echo "ID:&nbsp;" . $_SESSION['id']; ?></h5>
                            <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                                
                                Name:
                                <input type="text" name="Name" id="editName" class="form-control" value="<?php echo $_SESSION['name']?>" maxlength="101" required><br>                   

                                Address:
                                <input type="text" name="Address" id="editAddress" class="form-control" value="<?php echo $_SESSION['address']?>" maxlength="101" required><br>
                            
                                Email:
                                <input type="email" name="Email" id="editEmail" class="form-control" value="<?php echo $_SESSION['email']?>" maxlength="101" required><br>

                                Mobile:
                                <input type="text" name="Mobile" id="editMobile" class="form-control" value="<?php echo $_SESSION['tpno']?>" required pattern="[0-9]{10}" size="13" title="Enter in the given format"><br>

                                City:
                                <input type="text" name="City" id="editCity" class="form-control" value="<?php echo $_SESSION['city']?>" maxlength="101" required><br>
                                
                                Gender:
                                <input type="text" name="Gender" id="editGender" class="form-control" value="<?php echo $_SESSION['gender']?>" maxlength="101" required><br>
                                
                                District:
                                <select name="District" id="editDistrict" class="form-control" style="width:50%" required>
                                            <option>Ampara</option><option>Anuradhapura</option><option>Badulla</option><option>Batticaloa</option><option>Colombo</option><option>Galle</option><option>Gampaha</option><option>Hambantota</option>
                                            <option>Jaffna</option><option>Kalutara</option><option>Kandy</option><option>Kegalle</option><option>Kilinochchi</option><option>Kurunegala</option><option>Moneragala</option><option>Mannar</option>
                                            <option>Matara</option><option>Mullaitivu</option><option>Nuwara Eliya</option><option>Polonnaruwa</option><option>Puttalam</option><option>Ratnapura</option><option>Matale</option><option>Vavuniya</option>
                                        </select><br>
                                    
                                <div class="row">
                                    <div class="col-md-10">
                                        <br><input type="submit" name="updateProfile" class="btn btn-primary" value="Save">
                                        <input type="reset" class="btn btn-secondary" value="Reset">
                                    </div>
                                </div>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        

        <!--Password Update -->
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
                        
                            <h5 id="editId"><?php echo "ID: &nbsp;" . $_SESSION['id']; ?></h5><br>

                            <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">

                                <input class="form-control" name="cpassword" type="password" minlength="7" placeholder="Enter Current Password" required><br>

                                <input class="form-control" name="password" type="password" minlength="7" placeholder="Enter New Password" required><br>

                                <input class="form-control" name="rpassword" type="password" minlength="7" placeholder="Re-Enter New Password" required><br>

                                <div class="row">
                                    <div class="col-md-10"> 
                                        <input type="submit" name="updatePassword" class="btn btn-primary" value="Save Changes">

                                        <input type="reset" class="btn btn-secondary" value="Cancel">
                                    </div>
                                </div>
                            </form>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="col-md-2"> -->
            <!-- Button trigger modal -->

            <!-- </div> -->
        <!-- </div> -->
        <!-- <div class="col-md-1">
        </div> -->
        <div class="msgBtn">
            <button type="button" class="btn fa fa-comment-o" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #20c997;border-radius: 15px;border-color: black;" onclick="getCustomerMessages('<?php echo $_SESSION['id']; ?>','<?php echo $_SESSION['name']; ?>')"> <b>&nbsp;Chat</b></button>
        </div>
        <div id="messageArea">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Support</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div style="background-color: #6ea1cc;z-index: 99">

                                <ul id="msgBox" style="list-style: none;overflow-y:auto">

                                </ul>

                            </div>

                        </div>

                        <div class="modal-footer">
                            <div>
                                <textarea id="msgArea" style="background-color: #e9ecef;width: 300px;height:100px;z-index: 999"></textarea><br>
                                <button type="button" class="btn btn-info btn-outline-primary" onclick="clearMessages()" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-info btn-outline-primary" onclick="customerMessage('<?php echo $_SESSION['id']; ?>')">Send message</button>
                            </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
</div>


    
    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/Customer.js"></script>
<script src="../../js/CustomerHelp.js"></script>

</html>
<?php
if(isset($_POST["updateProfile"]))
{
    $result = UpdateCustomer($_SESSION["id"]);

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
        echo $result." "."123";
        echo "<script type='text/javascript'>
                //alert($result)
                swal({
                    title:'Something Wrong',
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
                    title:"."$result".",
                    icon:'error',
                    });
                </script>";
    }
}
?>