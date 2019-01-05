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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<body id="page-top" style="background-color: whitesmoke">

<div class="container">
    <div class="row ">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1 align="center">Salon Sanrooka</h1>
            <div class="register-box" style="background-color: cornsilk">

                <form name="register" class="border-primary" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h3>Password Forgot</h3>
                    <div class="form-row">
                        Email:
                        <input type="email" class="form-control" name="email" placeholder="aba@gmail.com" required size="100">

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

        include "controller/LoginController.php";

        if(forgotPassword($_POST["email"]))
        {
            echo "<script type='text/javascript'>
                //alert('Record updated successfully');
                swal({
                    title:'New password sent to your email',
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
                    title:'Email address is invalid',
                    icon:'error',
                    });
                </script>";
        }


}

?>