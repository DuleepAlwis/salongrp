
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">SALOON SANROOKA</a>
        </div>

        <div class="header-right">

            <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
            <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
            <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


        </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li>
                    <div class="user-img-div">
                        <img src="assets/img/user.png" class="img-thumbnail" />

                        <div class="inner-text">
                            Admin
                            <br />
                            <small>Last Login : 2 Weeks Ago </small>
                        </div>
                    </div>

                </li>


                <li>
                    <a href="index.html"><i class="fa fa-dashboard "></i>Dashboard</a>
                </li>
                <li>
                    <a href="#" class="active-menu-top" ><i class="fa fa-desktop "></i>Employee<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse in">

                        <li>
                            <a href="registration.php"><i class="fa fa-toggle-on"></i>Registration</a>
                        </li>
                        <li>
                            <a class="active-menu" href="view employees.html"><i class="fa fa-bell "></i>view employee</a>
                        </li>
                        <li>
                            <a href="progress.html"><i class="fa fa-circle-o "></i>Progressbars</a>
                        </li>
                        <li>
                            <a href="buttons.html"><i class="fa fa-code "></i>Buttons</a>
                        </li>
                        <li>
                            <a href="icons.html"><i class="fa fa-bug "></i>Icons</a>
                        </li>
                        <li>
                            <a href="wizard.html"><i class="fa fa-bug "></i>Wizard</a>
                        </li>
                        <li>
                            <a href="typography.html"><i class="fa fa-edit "></i>Typography</a>
                        </li>
                        <li>
                            <a href="grid.html"><i class="fa fa-eyedropper "></i>Grid</a>
                        </li>


                    </ul>
                </li>
                <li>
                    <a href="#" ><i class="fa fa-yelp "></i>stock <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="invoice.html"><i class="fa fa-coffee"></i>Invoice</a>
                        </li>
                        <li>
                            <a href="pricing.html"><i class="fa fa-flash "></i>Pricing</a>
                        </li>
                        <li>
                            <a href="component.html"><i class="fa fa-key "></i>Components</a>
                        </li>
                        <li>
                            <a  href="stock.html"><i class="fa fa-send "></i>View stock</a>
                        </li>

                        <li>
                            <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                        </li>


                    </ul>
                </li>

                <li>
                    <a href="#" ><i class="fa fa-bicycle "></i>Customer <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level ">

                        <li>
                            <a href="view customer.html"><i class="fa fa-desktop "></i>View customer </a>
                        </li>
                        <li>
                            <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                        </li>


                    </ul>
                </li>



            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">


                </div>
            </div>
            <!-- /. ROW  -->
            <?php include "employeeViewTableCon.php" ?>





            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
