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
</head>
<body class="customer-background" onload="CallMethods()">
<?php
include "../logallow.php";
require_once("../layout/CustomerLayout.php");
?>
<div class="container-fluid">
    <div class="row mt-5">
    <div class="col-md-4">

        <div class="uploadPhoto">
            <div class="avatar"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
                <input type="hidden" name="File_size" value="300000000">
                <input type="file" name="upload" value="">
                <input type="submit" name="submitPhoto" value="Upload">
            </form>

        </div>
    </div>
    <div class="col-md-6">
        <h3 style="font-style: italic;font-style: oblique;margin-top: 17px">Profile</h3>
        <table class="profileData">
            <tr><td>Name</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['name']; ?></b></td></tr>
            <tr><td>Email</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['email']; ?></b></td></tr>
            <tr><td>Mobile No</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['tpno']; ?></b></td></tr>
            <tr><td>City</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['city']; ?></b></td></tr>
            <tr><td>District</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['district']; ?></b></td></tr>
            <tr><td>Gender</td><td style="display: block;width:65px"></td><td><b><?php echo $_SESSION['gender']; ?></b></td></tr>
        </table>
        <button type="button" class="mt-5 btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Update Profile Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <form class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Change profile information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table>
                            <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <tr><td><label for="inputName">Name</label></td><td><input type="text" name="Name" id="inputName" class="ml-3" value="" placeholder="" maxlength="101"></td></tr>
                                <tr><td><label for="inputEmail">Email</label></td><td><input type="email" name="Email" id="inputEmail" class="ml-3" value="" placeholder="" maxlength="101"></td></tr>
                                <tr><td><label for="inputAddress">Address</label></td><td><input type="text" name="Address" id="inputAddress" class="ml-3" value="" placeholder="" maxlength="101"></td></tr>
                                <tr><td><label for="inputCity">City</label></td><td><input type="text" name="City" id="inputCity" class="ml-3" value="" placeholder="" maxlength="101"></td></tr>
                                <tr><td><label for="inputGender">Gender</label></td><td><select id="inputGender" name="gender" class="ml-3"><option value="M">Male</option><option value="F">Female</option></select></td></tr>
                                <tr><td><label for="inputDistrict">District</label></td>
                                    <td><select name="District" id="inputDistrict" class="ml-3" style="width:50%">
                                            <option>Ampara</option><option>Anuradhapura</option><option>Badulla</option><option>Batticaloa</option><option>Colombo</option><option>Galle</option><option>Gampaha</option><option>Hambantota</option>
                                            <option>Jaffna</option><option>Kalutara</option><option>Kandy</option><option>Kegalle</option><option>Kilinochchi</option><option>Kurunegala</option><option>Moneragala</option><option>Mannar</option>
                                            <option>Matara</option><option>Mullaitivu</option><option>Nuwara Eliya</option><option>Polonnaruwa</option><option>Puttalam</option><option>Ratnapura</option><option>Matale</option><option>Vavuniya</option>
                                        </select>
                                    </td></tr>
                            </form>
                        </table>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
        <div class="col-md-2">
            <!-- Button trigger modal -->

            </div>
        </div>
    <div class="msgBtn">
        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" style="background-color: #20c997;border-radius: 17px;border-style: ridge" onclick="getCustomerMessages('<?php echo $_SESSION['id']; ?>','<?php echo $_SESSION['name']; ?>')"><img src="../../img/icons/messageicon1.png"> <b>Messages</b></button>
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
                        <div style="background-color: #6ea1cc;overflow-y: auto">
                            <ul id="msgBox" style="list-style: none">

                            </ul>
                        </div>

                        <textarea id="msgArea" style="background-color: #e9ecef;width: 300px;height:100px"></textarea>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-info btn-outline-primary" onclick="clearMessages()" data-dismiss="modal">Close</button>
                        <button type="button" class="ml-3 btn btn-info btn-outline-primary" onclick="customerMessage('<?php echo $_SESSION['id']; ?>')">Send message</button>
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
