<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Salon Sanrooka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="icontop.jpg">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>


<body id="page-top">

<div class="container">
    <div class="row ">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 align="center">Salon Sanrooka</h1>
            <strong>Looking for the best domestic helpers</strong>
            <div class="register-box">

                    <form name="register" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <h3>Register</h3>
                        <div class="form-row">
                            Name:
                            <input type="text" class="form-control" name="Name" placeholder="Name" required size="100">
                            <div class="form-group col-md-11">
                                <label for="inputMobile">Mobile number:</label>
                                <input type="text" class="form-control" name="Mobile" placeholder="0715659741" required pattern="[0-9]{10}" size="13" style="width: 50%" title="Enter in the given format">
                            </div>
                            <div class="mt-3 form-group col-md-3">
                                Gender :
                                <br>
                                <select name="Gender" class="form-control"><option value="M">Male</option><option value="F">Female</option></select>
                            </div>
                            <div class="col-md-7"></div>
                            <div class="form-group col-md-11">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="Email" placeholder="mymail@email.com" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,3}$">
                            </div>
                            <div class="form-group col-md-11">
                                <label for="inputPassword">Password</label>
                                <input type="password" class="form-control" name="Password" placeholder="Password" required pattern=".{7,}" title="7 or more characters">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="Address" placeholder="" required maxlength="100">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputDistrict">City</label>
                                <input type="text" class="form-control" name="City" placeholder="" required maxlength="20">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputDistrict">District</label>
                                <select name="District" id="district" class="form-control" style="width:50%">
                                    <option>Ampara</option><option>Anuradhapura</option><option>Badulla</option><option>Batticaloa</option><option>Colombo</option><option>Galle</option><option>Gampaha</option><option>Hambantota</option>
                                    <option>Jaffna</option><option>Kalutara</option><option>Kandy</option><option>Kegalle</option><option>Kilinochchi</option><option>Kurunegala</option><option>Moneragala</option><option>Mannar</option>
                                    <option>Matara</option><option>Mullaitivu</option><option>Nuwara Eliya</option><option>Polonnaruwa</option><option>Puttalam</option><option>Ratnapura</option><option>Matale</option><option>Vavuniya</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Sign in"> <input type="reset" class="btn btn-primary" name="Cancel" value="Cancel">
                    </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="js/vendor/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>

</html>
<?php

if(isset($_POST['submit']))
{
    if(strlen(trim($_POST["Password"]))<7)
    {
        "<script type='text/javascript'>alert('Password field must be 7 characters or more')</script>";
    }
    else
    {
        include "controller/CustomerController.php";

        if(Addcustomer())
        {
            echo "<script type='text/javascript'>alert('Successfully registered')</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid details')</script>";
        }
    }

}




?>